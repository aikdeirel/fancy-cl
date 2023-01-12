<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('cv.title') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-300">
    <div class="container p-3 print:mt-3">
        @include('header')
        <div class="flex flex-col md:flex-row mb-3">
            <div class="w-full mb-5 bg-white p-6">
                <div class="flex">
                    @if (false)
                        <div class="w-1/2">
                            @foreach ($recipients as $recipient)
                                <section class="text-justify mb-3">
                                    
                                </section>
                            @endforeach
                        </div>
                        <div class="w-1/2 text-right self-end">
                            <span class="italic">{{ __('cl.dateEnd', ['date' => date('d.m.Y')]) }}</span>
                        </div>
                    @endif
                </div>
                @foreach ($applicantLetters as $letter)
                    <section class="text-justify mb-5">
                        {!! $letter->letter_text !!}
                    </section>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
