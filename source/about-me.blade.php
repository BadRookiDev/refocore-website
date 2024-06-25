@extends('_layouts.main')

@section('body')

    <div class="py-32 overflow-hidden relative dark:bg-base-200" id="about-me-section">
        <div class="z-10 relative">
            <h1 class="text-7xl text-black font-black refo-font text-center mt-16 z-10">
                <span class="text-outline-primary text-black/75">ABOUT</span><br>
                <span class="text-outline-secondary text-black/75">✟</span>
                <span class="text-outline-accent text-black/75">ME</span>
            </h1>
        </div>

        <div class="z-0">
            <img class="absolute top-0 left-0 z-0 w-screen dark:opacity-60 h-full object-cover"
                 src="/assets/images/church_geese.webp" id="geese-village-img" alt="geese in a christian farmer village">
            <div class="absolute w-full h-full left-0 top-0 z-0 bg-sky-200 opacity-30 dark:opacity-10"></div>
        </div>
    </div>

    <section class="bg-base-100 border-t-4 border-base-200 dark:border-base-300">
        <div class="bg-base-200/20 dark:bg-base-200">
            <div class="py-32 container mx-auto px-16 relative">
                <p>
                    Etiam nisi purus, blandit fringilla scelerisque in, efficitur ut neque. Maecenas non fringilla dui. Donec sit amet orci ut nulla dictum interdum. Suspendisse et diam ac magna elementum ornare. Suspendisse potenti. Donec sodales dui tortor, eu pretium dui venenatis at. Sed a diam nec nunc maximus sagittis. Cras at justo eget sem porta mattis. Aliquam erat volutpat. Mauris semper nibh arcu, sit amet commodo odio gravida id. Aenean at iaculis ante. Aliquam volutpat sagittis dui, quis interdum eros volutpat ut. Donec id ornare nunc.
                </p>

                <section class="mt-16">
                    <div class="divider divider-start divider-primary">
                        <h2 class="text-3xl refo-font font-bold"> Music Hobby & Early Life </h2>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa magna, maximus ac porttitor et, egestas ac enim. Phasellus vehicula neque id mattis gravida. Pellentesque ut nisl quis lorem fermentum euismod. Suspendisse potenti. Curabitur nec eros non lorem varius porttitor ac sollicitudin sapien. Vivamus consequat massa nec ante posuere viverra. Praesent fringilla cursus sagittis. Curabitur at ex arcu. Phasellus pulvinar ac nulla sed facilisis. Praesent vestibulum non lacus ac aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In metus nisi, malesuada vitae urna at, suscipit elementum ex. Aliquam maximus tempor sem, ut imperdiet elit. Vivamus tortor orci, sollicitudin vehicula lorem at, vulputate malesuada metus.
                    </p>
                </section>

                <section class="mt-16">
                    <div class="divider divider-start divider-secondary">
                        <h2 class="text-3xl refo-font font-bold"> REFOCORE, does that mean anything? </h2>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa magna, maximus ac porttitor et, egestas ac enim. Phasellus vehicula neque id mattis gravida. Pellentesque ut nisl quis lorem fermentum euismod. Suspendisse potenti. Curabitur nec eros non lorem varius porttitor ac sollicitudin sapien. Vivamus consequat massa nec ante posuere viverra. Praesent fringilla cursus sagittis. Curabitur at ex arcu. Phasellus pulvinar ac nulla sed facilisis. Praesent vestibulum non lacus ac aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In metus nisi, malesuada vitae urna at, suscipit elementum ex. Aliquam maximus tempor sem, ut imperdiet elit. Vivamus tortor orci, sollicitudin vehicula lorem at, vulputate malesuada metus.
                    </p>
                </section>

                <section class="mt-16">
                    <div class="divider divider-start divider-accent">
                        <h2 class="text-3xl refo-font font-bold"> Whats up with all the geese? </h2>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa magna, maximus ac porttitor et, egestas ac enim. Phasellus vehicula neque id mattis gravida. Pellentesque ut nisl quis lorem fermentum euismod. Suspendisse potenti. Curabitur nec eros non lorem varius porttitor ac sollicitudin sapien. Vivamus consequat massa nec ante posuere viverra. Praesent fringilla cursus sagittis. Curabitur at ex arcu. Phasellus pulvinar ac nulla sed facilisis. Praesent vestibulum non lacus ac aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In metus nisi, malesuada vitae urna at, suscipit elementum ex. Aliquam maximus tempor sem, ut imperdiet elit. Vivamus tortor orci, sollicitudin vehicula lorem at, vulputate malesuada metus.
                    </p>
                </section>

            </div>
        </div>
    </section>

    <div class="flex z-10 relative">
        <div class="h-2 bg-primary w-1/3 refo-skew-negative"></div>
        <div class="h-2 bg-secondary w-1/3 refo-skew-negative"></div>
        <div class="h-2 bg-accent w-1/3 refo-skew-negative"></div>
    </div>

    <section class="border-b-4 border-base-200 dark:border-base-300">
        <div class="bg-base-100 overflow-hidden relative">
            <div class="h-[300vh] w-[300vw] absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 opacity-10 dark:opacity-25 bg-repeat z-0 rotate-[30deg]"
                 style="background-image: url('/assets/images/refocore_text.webp'); background-size: auto 10%;"></div>

            <div class="py-32 container mx-auto px-16 relative">
                <h3 class="text-3xl font-black text-center refo-font">HERE'S A <span class="text-black text-outline-primary">BRIEF</span> <span class="text-black text-outline-secondary">TIME</span><span class="text-black text-outline-accent">LINE</span>!</h3>

                <ul class="timeline w-fit mt-12 mx-auto overflow-hidden timeline-vertical lg:timeline-horizontal">
                    @include('_layouts.components.time-li', ['year' => '1999', 'event' => 'I was born.', 'above' => false, 'fillClass' => 'fill-primary'])
                    @include('_layouts.components.time-li', ['year' => '2014', 'event' => 'Started making house in Acid Pro 7.', 'above' => true, 'fillClass' => 'fill-primary'])
                    @include('_layouts.components.time-li', ['year' => '2016', 'event' => 'Harambe was shot <span class="font-bold refo-font">#RIP</span>.', 'above' => false, 'fillClass' => 'fill-secondary'])
                    @include('_layouts.components.time-li', ['year' => '2018', 'event' => 'Started making hardcore.', 'above' => true, 'fillClass' => 'fill-secondary'])
                    @include('_layouts.components.time-li', ['year' => '2022', 'event' => '<span class="font-bold refo-font">REFOCORE</span> was born.', 'above' => false, 'fillClass' => 'fill-accent'])
                    @include('_layouts.components.time-li', ['year' => '2024', 'event' => '<span class="font-bold refo-font">REFOCORE</span> started making zaag.', 'above' => true, 'fillClass' => 'fill-accent'])
                </ul>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new window.SimpleParallax(document.getElementById('geese-village-img'), {
                delay: 0.5,
                scale: 1.25,
                orientation: 'down',
                customContainer: document.getElementById('about-me-section').nodeValue
            });
        });
    </script>
@endsection