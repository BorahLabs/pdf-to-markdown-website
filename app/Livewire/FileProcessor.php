<?php

namespace App\Livewire;

use App\Models\Submission;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FileProcessor extends Component implements HasForms
{
    use InteractsWithForms;

    public $result = null;
    public $errorMessage = null;

    public array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->helperText('Max. size: 50MB. Accepted file types: PDF. Result will be copied to clipboard automatically.'),
            ])
            ->statePath('data');
    }

    public function render()
    {
        return view('livewire.file-processor');
    }

    public function processFile()
    {
        $data = $this->form->getState();
        $submission = new Submission([
            'file_hash' => hash_file('sha256', Storage::path($data['file'])),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
        try {
            if (config('services.markitdown.docker_binary_path')) {
                $process = Process::env([
                    'PATH' => dirname(config('services.markitdown.docker_binary_path')),
                ])->run(config('services.markitdown.docker_binary_path') . ' run --rm -i markitdown:latest < ' . escapeshellarg(Storage::path($data['file'])));
            } else {
                $process = Process::env([
                    'PATH' => dirname(config('services.markitdown.binary_path')),
                ])->run(config('services.markitdown.binary_path') . ' ' . Storage::path($data['file']));
            }
            if (! empty($process->errorOutput())) {
                $this->errorMessage = 'Error processing file. Please, try again later or with another file.';
                $this->result = null;
                $submission->status = 'failed';
                $submission->save();
                logger()->error($process->errorOutput());
                return;
            }

            $this->result = $process->output();
            $this->errorMessage = null;
            $submission->status = 'completed';
            $submission->save();
        } finally {
            if (Storage::exists($data['file'])) {
                Storage::delete($data['file']);
            }
        }
    }

    public function resetForm()
    {
        $this->result = null;
        $this->errorMessage = null;
        $this->form->fill();
    }
}
