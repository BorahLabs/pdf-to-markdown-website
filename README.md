# PDF To Markdown

This repository contains a Laravel-based website that runs [Markitdown](https://github.com/microsoft/markitdown) to convert PDF files to Markdown format.

## Requirements
- [Markitdown](https://github.com/microsoft/markitdown)
- PHP8.2+ (if you're not using [Laravel Herd](https://herd.laravel.com/), you're missing out!)
- Composer

## Installation
First, follow the installation process of Markitdown. This repository works both with the binary format and with Docker. Your choice!

Install the project dependencies:

```
composer install
npm install
npm run build
```

Copy the contents of `.env.example` into `.env`:

```
cp .env.example .env
```

And generate an app key:

```
php artisan key:generate
```

Finally, run the migrations:

```
php artisan migrate
```

Now, you should be able to see the app in your browser. Run `php artisan serve` and check it out at http://localhost:8000

## Connecting Markitdown

To connect Markitdown, you should set one of the following variables in your `.env` file:

```
MARKITDOWN_BINARY_PATH=
MARKITDOWN_DOCKER_BINARY_PATH=
```

The `MARKITDOWN_BINARY_PATH` should be set to the output you receive from `which markitdown`.

On the other hand, if you are using Docker, you should set `MARKITDOWN_DOCKER_BINARY_PATH` to the output you receive from `which docker`.

If `MARKITDOWN_DOCKER_BINARY_PATH` is set, it will use Docker. If not, it will try to use the binary.

## Borah Digital Labs
[Borah Digital Labs](https://borah.digital/) crafts web applications, open-source packages, and offers a team of full-stack solvers ready to tackle your next project. We have built a series of projects:

- [CodeDocumentation](https://codedocumentation.app/): Automatic code documentation platform
- [AutomaticDocs](https://automaticdocs.app/): One-time documentation for your projects
- [Talkzy](https://talkzy.app/): A tool to summarize meetings
- Compass: An agent-driven tool to help manage companies more efficiently
- [Prompt Token Counter](https://prompttokencounter.com/): Simple tool to count tokens in prompts
- [Sabor en la Oficina](https://saborenlaoficina.es/): Website + catering management platform
- [Prompt Token Counter](https://www.prompttokencounter.com/): Simple free tool to count tokens in prompts
- [PDF to Markdown](https://pdftomarkdown.app/): Simple free tool to convert PDF files into Markdown format

We like to use Laravel for most of our projects and we love to tackle big, complicated problems. Feel free to reach out and we can have a virtual coffee!
