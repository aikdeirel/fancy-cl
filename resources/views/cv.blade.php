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
            <div class="w-full md:w-2/3 md:mr-3 mb-3 md:mb-0">
                <section class="bg-white p-6 mb-3">
                    <h2 class="text-xl mb-2">{{ __('cv.headingExperience') }}</h2>
                    <ul>
                        @foreach ($applicantExperiences as $applicantExperience)
                            <li class="mb-3">
                                <div>
                                    <div class="flex place-content-between">
                                        <h3>
                                            <strong>{{ $applicantExperience->experience_company }}</strong>
                                        </h3>
                                        <span class="text-slate-600">
                                            {{ $applicantExperience->experience_from->format('Y.m') }} -
                                            {{ $applicantExperience->experience_to->format('Y.m') }}
                                        </span>
                                    </div>
                                    <div class="italic mb-1">
                                        {{ $applicantExperience->experience_title }}
                                    </div>
                                    <div class="text-justify">
                                        {{ $applicantExperience->experience_description }}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </section>

                <section class="bg-white p-6 mb-3">
                    <h2 class="text-xl mb-3">{{ __('cv.headingEducation') }}</h2>
                    <ul>
                        @foreach ($applicantEducations as $applicantEducation)
                            <li class="mb-3">
                                <div class="flex place-content-between">
                                    <h3>
                                        <strong>{{ $applicantEducation->education_title }}</strong>
                                    </h3>
                                    <span class="text-slate-600">
                                        {{ $applicantEducation->education_from->format('Y.m') }} -
                                        {{ $applicantEducation->education_to->format('Y.m') }}
                                    </span>
                                </div>
                                <div class="italic ">
                                    {{ $applicantEducation->education_graduation }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </section>
                <section class="bg-white p-6 my-3">
                    <h2 class="text-xl mb-3">{{ __('cv.headingPersonalInterests') }}</h2>
                    {{ implode(', ', $applicantPersonalInterests->pluck('interest_caption')->toArray()) }}
                </section>
                <section class="bg-white p-6">
                    <h2 class="text-xl mb-3">{{ date('d.m.Y') }}</h2>
                    <div class="mt-10">{{ env('APPLICANT_NAME') }}</div>
                </section>
            </div>
            <div class="w-full md:w-1/3">
                <section class="p-6">
                    <h2 class="text-xl mb-2">{{ __('cv.contactHeading') }}</h2>
                    <ul class="mb-5">
                        <li class="mb-1"><strong>{{ __('cv.contactMail') }}</strong></li>
                        <li class="mb-1">
                            {{ env('APPLICANT_CONTACT_MAIL') }}
                        </li>
                        <li class="mb-1"><strong>{{ __('cv.contactPhone') }}</strong></li>
                        <li class="mb-1">
                            {{ env('APPLICANT_CONTACT_PHONE') }}
                        </li>
                    </ul>
                </section>
                <section class="px-6">
                    <h2 class="text-xl mb-2">{{ __('cv.skillsHeading') }}</h2>
                    <div class="mb-5">
                        <strong class="mb-1 flex">{{ __('cv.skillsBackend') }}</strong>
                        <div class="flex flex-wrap">
                            @foreach ($applicantSkillsBackend as $skillBackend)
                                <span class="pr-2 py-1">
                                    {{ $skillBackend->skill_name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <strong class="mb-1 flex">{{ __('cv.skillsDatabase') }}</strong>
                        <div class="flex flex-wrap">
                            @foreach ($applicantSkillsDatabase as $skillDatabase)
                                <span class="pr-2 py-1">
                                    {{ $skillDatabase->skill_name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <strong class="mb-1 flex">{{ __('cv.skillsFrontend') }}</strong>
                        <div class="flex flex-wrap">
                            @foreach ($applicantSkillsFrontend as $skillFrontend)
                                <span class="pr-2 py-1">
                                    {{ $skillFrontend->skill_name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <strong class="mb-1 flex">{{ __('cv.skillsBasic') }}</strong>
                        <div class="flex flex-wrap">
                            @foreach ($applicantSkillsBasic as $skillBasic)
                                <span class="pr-2 py-1">
                                    {{ $skillBasic->skill_name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <strong class="mb-1 flex">{{ __('cv.skillsMisc') }}</strong>
                        <div class="flex flex-wrap">
                            @foreach ($applicantSkillsMisc as $skillMisc)
                                <span class="pr-2 py-1">
                                    {{ $skillMisc->skill_name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
