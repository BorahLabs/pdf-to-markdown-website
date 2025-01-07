<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="PDF to Markdown Converter">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Securely convert PDF to Markdown to use in LLMs | PDF to Markdown Converter for LLMs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite(['resources/css/app.css'])

    @production
    <script src="https://cdn.usefathom.com/script.js" data-site="ESFBDIZT" defer></script>
    @endproduction
</head>
<body class="font-sans antialiased">
    <div class="bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1 justify-center">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                        <span class="text-2xl font-bold text-white">PDF to Markdown Converter</span>
                    </a>
                </div>
            </nav>
        </header>

        <div class="relative isolate pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="py-24 sm:py-32 lg:pb-40">
                <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto w-full max-w-3xl text-center">
                        <h1 class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-7xl">Convert any PDF to Markdown for LLMs</h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Convert any PDF file to LLM-compatible Markdown format with our free online tool.</p>
                        <p class="mt-2 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">
                            <x-heroicon-o-lock-closed class="w-6 h-6 flex-shrink-0 inline-block mr-2" />
                            We do not store or share your files. They are automatically deleted after processing.
                        </p>
                    </div>
                    <div class="mt-16 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 p-4 sm:mt-24">
                        <livewire:file-processor />
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
    </div>

    <div class="bg-white px-6 py-32 lg:px-8">
        <div class="mx-auto max-w-3xl text-base/7 text-gray-700">
            <h2 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">How do you convert PDF to LLM-compatible Markdown?</h2>
            <p class="mt-6 text-xl/8">
                Right now, we are using a [simple PDF to Markdown converter](https://github.com/microsoft/markitdown). Soon, we will add the ability to use custom formatters we are developing that will transform the resulting Markdown content into a better format, properly using headings, lists, and other formatting options.
            </p>
            <div class="prose mt-8 max-w-none">
                <p>When we think about PDFs, we should understand them as containers of information that were primarily designed for human consumption and precise visual presentation. They excel at maintaining consistent formatting across different devices and platforms, but this very strength becomes a limitation when we want to work with AI systems.</p>
                <p>LLM-formatted markdown, on the other hand, represents a paradigm shift in how we structure information. The conversion from PDF to markdown isn't just a format change - it's a transformation that makes content more accessible and processable for large language models. This transformation matters for several key reasons.</p>
                <p>First, consider the structural clarity that markdown provides. While PDFs often contain complex formatting that can obscure the hierarchical relationship between different pieces of information, markdown uses simple, semantic markers like hashtags for headers and indentation for nested content. This clarity helps LLMs better understand the relationship between different parts of the text, leading to more accurate information extraction and analysis.</p>
                <p>The significance becomes even clearer when we examine how LLMs process text. These models work best with clean, well-structured text that follows consistent patterns. Traditional PDFs often include elements like headers, footers, page numbers, and complex layouts that can confuse LLMs and lead to poor comprehension. When converted to markdown, these elements are either stripped away or transformed into meaningful structural elements that LLMs can interpret more effectively.</p>
                <p>Consider a technical manual in PDF format. It might use various fonts, colors, and spatial arrangements to convey information hierarchy. When converted to markdown, these visual cues are transformed into explicit structural markers: level-one headers become '#', level-two headers become '##', and so forth. This explicit structure makes it much easier for LLMs to understand and work with the content's organization.</p>
                <p>The benefits extend beyond just improved AI processing. Markdown's plain text nature makes it highly portable and easy to version control. Teams can track changes, collaborate on content, and maintain different versions of documents much more effectively than with PDFs. This becomes particularly valuable in environments where documentation needs to be both human-readable and machine-processable.</p>
                <p>Furthermore, the conversion process often serves as a valuable opportunity to clean and normalize content. During conversion, inconsistencies in formatting can be identified and standardized, making the resulting content more uniform and reliable for both human readers and AI systems. This standardization is particularly valuable when dealing with large document collections that need to be processed consistently.</p>
                <p>The importance of this conversion becomes even more apparent when we consider the growing role of LLMs in knowledge work. As these models become more integrated into our workflows - from document summarization to question answering to content generation - having our content in a format that these systems can process effectively becomes increasingly crucial. A well-converted markdown document can be more easily searched, analyzed, and integrated into various AI-powered tools and workflows.</p>
                <p>Looking toward the future, as organizations increasingly rely on AI systems to process and analyze their documentation, the ability to convert PDFs to LLM-friendly markdown efficiently and accurately will become a critical capability. This conversion process serves as a bridge between the traditional document formats we've relied on for decades and the AI-powered future of information processing.</p>
                <p>The process requires careful attention to maintain the semantic meaning of the original document while transforming it into a format that machines can process more effectively. This balance between preserving human readability and enabling machine processing represents one of the key challenges and opportunities in modern document management.</p>
                <p>In essence, converting PDFs to LLM-formatted markdown isn't just about changing file formats - it's about making our information more accessible, processable, and valuable in an AI-driven world. As we continue to develop more sophisticated AI systems, the importance of having our content in formats that these systems can effectively process will only grow.</p>
            </div>
        </div>
    </div>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-center lg:px-8">
            <p class="mt-8 text-center text-sm/6 text-gray-600 md:order-1 md:mt-0">&copy; {{ date('Y') }} <a href="https://borah.digital" class="hover:text-gray-800">Borah Digital Labs</a>. All rights reserved.</p>
        </div>
    </footer>


    @livewire('notifications')

    @filamentScripts
    @vite(['resources/js/app.js'])
</body>
</html>
