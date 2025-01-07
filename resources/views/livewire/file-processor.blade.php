<div class="dark">
    @if ($result)
    <div wire:key="result">
        <div class="prose prose-invert max-w-none" x-init="window.copyToClipboard($el.textContent)"><pre class="w-full cursor-pointer" x-on:click="window.copyToClipboard($el.textContent)">{{ $result }}</pre></div>
        <x-filament::button type="button" color="primary" class="mt-4 w-full" wire:click="resetForm">
            Convert another file
        </x-filament::button>
    </div>
    @else
    <form wire:submit="processFile">
        {{ $this->form }}
        @if ($errorMessage)
        <div class="text-red-700 p-4 rounded-md bg-red-100 text-center font-medium text-sm">
            {{ $errorMessage }}
        </div>
        @endif
        <x-filament::button type="submit" color="primary" class="mt-4 w-full">
            Convert
        </x-filament::button>
    </form>
    @endif

</div>
