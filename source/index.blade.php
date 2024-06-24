@extends('_layouts.main')

@section('body')
    <section class="bg-base-100 relative z-10">
        <div class="h-screen relative bg-base-200/20 dark:bg-base-200 flex items-center">
            <div class="w-3/5 h-screen absolute right-0 top-0 mr-4 bg-accent refo-dia-cut refo-wave-left" style="animation-delay: 3s"></div>
            <div class="w-3/5 h-screen absolute right-0 top-0 mr-4 bg-secondary refo-dia-cut refo-wave-left" style="animation-delay: 1.5s"></div>
            <div class="w-3/5 h-screen absolute right-0 top-0 mr-4 bg-primary refo-dia-cut refo-wave-left"></div>

            <div class="w-3/5 h-screen absolute right-0 top-0 bg-sky-200 refo-dia-cut"></div>
            <img class="w-3/5 h-screen absolute right-0 top-0 object-cover object-left z-0 refo-dia-cut opacity-70"
                 src="/assets/images/geese.webp" alt="image of geese with saws">

            <div class="container mx-auto px-16 relative">
                <div class="w-1/2 pr-24">
                    <h1 class="text-3xl md:text-5xl lg:text-7xl font-black refo-font">
                        I AM <span class="text-outline-primary text-black/75">✟</span> <br>
                        <span class="text-outline-secondary text-black/75">REFO</span><span class="text-outline-accent text-black/75">CORE</span>
                    </h1>

                    <p class="mt-8 font-semibold italic">
                        "I make <span>noise</span>, lots of it, very fast and VERY VERY LOUD."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-base-100 z-10 relative">
        <div class="relative bg-base-200/20 dark:bg-base-200">
            <script>
                function setAudioHandler(elementsIdPrefix){
                    let audioTime = document.getElementById(elementsIdPrefix+"-time");
                    let audioElement = document.getElementById(elementsIdPrefix+"-audio");
                    let ctrl = document.getElementById(elementsIdPrefix+"-button");
                    let audioPause = true;
                    let intervalId;

                    function audioSwitch() {
                        audioPause = !audioPause;
                        ctrl.innerHTML = audioPause ?
                            '<svg viewBox="0 0 24 24" class="w-7 sm:w-10 md:w-5 lg:w-8 xl:w-6" xmlns="http://www.w3.org/2000/svg"> <path class="fill-accent" fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 10.9648 22.4695 9.92953 21.4086 9.35258L8.59661 2.38548C6.53435 1.26402 4 2.72368 4 5.0329L4 12H23Z"></path> <path class="fill-secondary" d="M8.59662 21.6145L21.4086 14.6474C22.4695 14.0705 23 13.0352 23 12H4L4 18.9671C4 21.2763 6.53435 22.736 8.59662 21.6145Z"></path> </svg>' :
                            '<svg viewBox="0 0 24 24" class="w-7 sm:w-10 md:w-5 lg:w-8 xl:w-6" xmlns="http://www.w3.org/2000/svg"> <path class="fill-accent" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"></path> <path class="fill-secondary" d="M8.07612 8.61732C8 8.80109 8 9.03406 8 9.5V14.5C8 14.9659 8 15.1989 8.07612 15.3827C8.17761 15.6277 8.37229 15.8224 8.61732 15.9239C8.80109 16 9.03406 16 9.5 16C9.96594 16 10.1989 16 10.3827 15.9239C10.6277 15.8224 10.8224 15.6277 10.9239 15.3827C11 15.1989 11 14.9659 11 14.5V9.5C11 9.03406 11 8.80109 10.9239 8.61732C10.8224 8.37229 10.6277 8.17761 10.3827 8.07612C10.1989 8 9.96594 8 9.5 8C9.03406 8 8.80109 8 8.61732 8.07612C8.37229 8.17761 8.17761 8.37229 8.07612 8.61732Z"></path> <path class="fill-secondary" d="M13.0761 8.61732C13 8.80109 13 9.03406 13 9.5V14.5C13 14.9659 13 15.1989 13.0761 15.3827C13.1776 15.6277 13.3723 15.8224 13.6173 15.9239C13.8011 16 14.0341 16 14.5 16C14.9659 16 15.1989 16 15.3827 15.9239C15.6277 15.8224 15.8224 15.6277 15.9239 15.3827C16 15.1989 16 14.9659 16 14.5V9.5C16 9.03406 16 8.80109 15.9239 8.61732C15.8224 8.37229 15.6277 8.17761 15.3827 8.07612C15.1989 8 14.9659 8 14.5 8C14.0341 8 13.8011 8 13.6173 8.07612C13.3723 8.17761 13.1776 8.37229 13.0761 8.61732Z"></path> </svg>';
                        let method = audioPause ? 'pause' : 'play';

                        if (audioPause) {
                            clearInterval(intervalId);
                        } else {
                            intervalId = setInterval(() => {
                                audioTime.innerText = Math.ceil(audioElement.currentTime)+"s";
                            }, 1000);
                        }

                        audioElement[method]();

                        return false;
                    }

                    ctrl.onclick = audioSwitch;
                    audioElement.addEventListener('ended', function (){
                        clearInterval(intervalId);
                        audioTime.innerText = "0s";
                        audioSwitch();
                    });
                }
            </script>

            <div class="py-32 container mx-auto px-16 relative">
                <h2 class="text-2xl font-bold text-center refo-font">Did you know that i occasionally post <span class="bg-primary text-black px-2 pb-0.5">kick</span> <span class="bg-secondary text-black px-2 pb-0.5">samples</span> & <span class="bg-accent text-black px-2 pb-0.5">packs</span> on
                    <a class="link" href="https://bangerly.com/communitycontent/artists/refocore" target="_blank" rel="noopener">Bangerly</a>?</h2>

                <div class="grid grid-cols-6 md:grid-cols-9 lg:grid-cols-8 xl:grid-cols-6 gap-16 mt-16">

                    <div class="drop-shadow-xl block col-span-6 md:col-span-5 lg:col-span-4 xl:col-span-2">
                        @include('_layouts.components.sample',
                                ["sampleTitle" => "Bouncy Uptempo Kick 2",
                                "sampleImgUrl" => "https://cdn.bangerly.com/usersamplepics/98.jpeg",
                                "samplePreviewMp3Url" => "https://cdn.bangerly.com/samplesLQ/117.mp3",
                                "samplePageUrl" => "https://bangerly.com/communitycontent/samples/118-wavy_chords_dry",
                                "audioDuration" => 1
                                ])
                    </div>

                    <div class="drop-shadow-xl block col-span-6 md:col-span-5 lg:col-span-4 xl:col-span-2 md:col-start-3">
                        @include('_layouts.components.sample',
                                ["sampleTitle" => "Bouncy Uptempo Kick 3",
                                "sampleImgUrl" => "https://cdn.bangerly.com/usersamplepics/103.jpeg",
                                "samplePreviewMp3Url" => "https://cdn.bangerly.com/samplesLQ/116.mp3",
                                "samplePageUrl" => "https://bangerly.com/communitycontent/samples/118-wavy_chords_dry",
                                "audioDuration" => 1
                                ])
                    </div>

                    <div class="drop-shadow-xl block rounded-none col-span-6 md:col-span-5 lg:col-span-4 xl:col-span-2 md:col-start-5 lg:col-start-3">
                        @include('_layouts.components.sample',
                                ["sampleTitle" => "Bouncy Uptempo Kick 4",
                                "sampleImgUrl" => "https://cdn.bangerly.com/usersamplepics/98.jpeg",
                                "samplePreviewMp3Url" => "https://cdn.bangerly.com/samplesLQ/115.mp3",
                                "samplePageUrl" => "https://bangerly.com/communitycontent/samples/118-wavy_chords_dry",
                                "audioDuration" => 5
                                ])
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="flex z-10 relative">
        <div class="h-2 bg-primary w-1/3 refo-skew-negative"></div>
        <div class="h-2 bg-secondary w-1/3 refo-skew-negative"></div>
        <div class="h-2 bg-accent w-1/3 refo-skew-negative"></div>
    </div>

    <section id="track-section" class="bg-slate-600 relative overflow-hidden" style="z-index: 1">
        <img id="geese-rave-img" class="w-full h-full absolute right-0 top-0 object-cover object-bottom opacity-50"
             src="/assets/images/geese_rave.webp" alt="image of raving geese" style="z-index: 0">

        <div class="py-32 container mx-auto px-16 relative text-white">
            <p class="text-5xl font-black text-center refo-font">PREPARE FOR <span class="text-black text-outline-primary">THE</span> <span class="text-black text-outline-secondary">ZAAG</span> <span class="text-black text-outline-accent">APOCALYPSE</span>!</p>
            <h2 class="text-base font-semibold text-center mt-1">Listen to my latest tracks! Follow me on soundcloud, spotify, youtube, whatever.</h2>

            <div class="grid grid-cols-1 xl:grid-cols-2 mt-16 gap-16">
                <div>
                    @include('_layouts.components.soundcloud', [
                        'hexColor' => 'e4f03e',
                        'trackId' => '1796105572',
                        'trackUrl' => 'https://soundcloud.com/refocore/el-sonidito-refocore-uptempo-remix',
                        'trackTitle' => 'Hechizeros Band - El Sonidito (Refocore Remix)'
                    ])
                </div>

                <div>
                    @include('_layouts.components.soundcloud', [
                        'hexColor' => '3ef0ea',
                        'trackId' => '1834758972',
                        'trackUrl' => 'https://soundcloud.com/refocore/pointer-sisters-im-so-excited',
                        'trackTitle' => "Pointer Sisters - I'm So Excited (Refocore Remix)"
                    ])
                </div>

                <div class="xl:col-span-2">
                    @include('_layouts.components.soundcloud', [
                        'hexColor' => '788eff',
                        'trackId' => '1703137761',
                        'trackUrl' => 'https://soundcloud.com/refocore/flo-rida-right-round-refocore-remix',
                        'trackTitle' => 'Flo Rida - Right Round (Refocore Remix)'
                    ])
                </div>
            </div>
        </div>

        @include('_layouts.components.wave')
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new window.SimpleParallax(document.getElementById('geese-rave-img'), {
                delay: 0.5,
                scale: 1.2,
                direction: 'up',
                customContainer: document.getElementById('track-section').nodeValue
            });
        });
    </script>
@endsection
