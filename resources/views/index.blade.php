<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('index.title') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-300">
    <div class="container p-3 print:mt-3">
        @include('header')
        <div class="flex flex-col md:flex-row mb-3">
            <a href="/cv" class="w-full md:w-1/2 md:mr-3 hover:text-white hover:bg-cyan-900 transition duration-300 bg-white mb-3">
                <div class="p-6">
                    <h2 class="text-xl text-center">
                        <strong>{{ __('index.cv') }}</strong>
                    </h2>
                </div>
            </a>
            <a href="/cl" class="w-full md:w-1/2 hover:text-white hover:bg-cyan-900 transition duration-300 bg-white mb-3">
                <div class="p-6">
                    <h2 class="text-xl text-center">
                        <strong>{{ __('index.cl') }}</strong>
                    </h2>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
