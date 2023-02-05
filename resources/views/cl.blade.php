<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('cl.title') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-300">
    <div class="container p-3 print:mt-4 mx-auto">
        @include('header')
        <div class="flex flex-col md:flex-row mb-3">
            <div class="w-full mb-5 bg-white p-6">
                <div class="flex place-content-between mb-5">
                    <div class="w-1/2 leading-tight">
                        <section class="text-justify">
                            {{ $recipient->recipient_company ?? '' }}
                        </section>
                        <section class="text-justify">
                            {{ $recipient->recipient_name ?? '' }}
                        </section>
                        <section class="text-justify">
                            {{ $recipient->recipient_street ?? '' }}
                        </section>
                        <section class="text-justify mb-3">
                            {{ $recipient->recipient_city ?? '' }}
                        </section>
                    </div>
                    <div class="w-1/2 text-right">
                        <span class="italic text-slate-600">{{ __('cl.dateEnd', ['date' => date('d.m.Y')]) }}</span>
                    </div>
                </div>
                <section class="text-justify mb-5 leading-tight">
                    {{ $recipient->recipient_salutation ?? '' }}
                </section>
                @foreach ($applicantLetters as $letter)
                    <section class="text-justify mb-5 leading-tight">
                        {!! $letter->letter_text !!}
                    </section>
                @endforeach
                <section class="text-justify mb-5 mt-16 leading-tight">
                    {{ __('cl.closing') }}
                </section>
                <section class="text-justify leading-tight">
                    <div style="background-image: url({{ env('APPLICANT_SIGNATURE') }})"
                        class="h-16 bg-left bg-no-repeat bg-contain"></div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
