<header class="flex flex-col md:flex-row bg-gradient-to-r from-cyan-900 to-blue-900 p-6 text-white mb-3">
    <div class="flex self-center">
        <div style="background-image: url({{ env('APPLICANT_PHOTO') }})"
            class="h-32 w-32 rounded-full saturate-50 bg-cover bg-center mb-6 md:mb-0 md:mr-6"></div>
    </div>
    <div class="flex flex-col w-full md:w-10/12">
        <div class="flex w-full">
            <div>
                <h1 class="text-3xl">{{ env('APPLICANT_NAME')  }}</h1>
                <h2 class="text-xl">{{ env('APPLICANT_TITLE')  }}</h2>
            </div>
        </div>
        <div class="flex justify-between flex-col md:flex-row">
            <div class="flex flex-col text-sm w-full md:w-5/12">
                <ul class="flex flex-col justify-between mt-3 h-full">
                    @foreach ($applicantDetails as $applicantDetail)
                        <li class="flex">
                            {{ $applicantDetail->detail_caption }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col text-sm w-full md:w-7/12">
                @foreach ($applicantSocials as $applicantSocial)
                    <div class="flex mt-3">
                        <div style="background-image: url({{ $applicantSocial->social_icon }})"
                            class="h-8 w-8 mr-3 bg-contain self-center bg-no-repeat"></div>
                        <div class="flex flex-col">
                            <div>{{ $applicantSocial->social_name }}</div>
                            <div>{{ $applicantSocial->social_link }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
