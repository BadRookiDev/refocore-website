<div class="card card-side bg-base-100 rounded-none refo-corner-cut w-full relative">
    <div class="refo-corner-cut relative">
        <div class="absolute top-0 left-0 z-50">
            <div class="block relative text-neutral sm:text-white font-bold" style="padding-top: 2px; padding-left: 8px">
                <small id="{{ str_replace(" ", "-", $sampleTitle)."-time" }}">0s</small>/<small>{{ $audioDuration }}s</small>
            </div>

            <audio id="{{ str_replace(" ", "-", $sampleTitle)."-audio" }}" preload='none'>
                <source src="{{ $samplePreviewMp3Url }}" type="audio/mp3" />
            </audio>
        </div>

        <img class="hidden sm:block sm:w-36 md:w-52" src="{{ $sampleImgUrl }}" alt="{{ $sampleTitle }} waveform"/>
    </div>

    <div class="card-body flex justify-between flex-col sm:flex-col-reverse z-20">
        <div class="flex gap-x-4">
            <img class="w-16 block sm:hidden" src="{{ $sampleImgUrl }}" alt="{{ $sampleTitle }} waveform"/>

            <div class="flex gap-x-4 items-center">
                <button id="{{ str_replace(" ", "-", $sampleTitle)."-button" }}">
                    <svg viewBox="0 0 24 24" class="w-5 sm:w-7 md:w-5 lg:w-8 xl:w-6" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-accent" fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 10.9648 22.4695 9.92953 21.4086 9.35258L8.59661 2.38548C6.53435 1.26402 4 2.72368 4 5.0329L4 12H23Z"></path>
                        <path class="fill-secondary" d="M8.59662 21.6145L21.4086 14.6474C22.4695 14.0705 23 13.0352 23 12H4L4 18.9671C4 21.2763 6.53435 22.736 8.59662 21.6145Z"></path>
                    </svg>
                </button>

                <a href="{{ $samplePageUrl }}">
                    <svg viewBox="0 0 24 24" class="w-5 sm:w-7 md:w-5 lg:w-8 xl:w-6" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-primary" d="M2 12C2 13.6394 2.42496 14.1915 3.27489 15.2957C4.97196 17.5004 7.81811 20 12 20C16.1819 20 19.028 17.5004 20.7251 15.2957C21.575 14.1915 22 13.6394 22 12C22 10.3606 21.575 9.80853 20.7251 8.70433C19.028 6.49956 16.1819 4 12 4C7.81811 4 4.97196 6.49956 3.27489 8.70433C2.42496 9.80853 2 10.3606 2 12Z"></path>
                        <path class="fill-black" opacity="0.33" fill-rule="evenodd" clip-rule="evenodd" d="M8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <h6 class="font-semibold text-xs sm:text-base md:text-xs lg:text-sm xl:!text-xs">{{ $sampleTitle }} test test</h6>
    </div>
</div>

<script>
    setAudioHandler("{{ str_replace(" ", "-", $sampleTitle) }}");
</script>
