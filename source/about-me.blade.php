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
            <img class="w-screen absolute top-0 left-0 z-0"
                 src="/assets/images/geese_village.webp" id="geese-village-img">
            <div class="absolute w-full h-full left-0 top-0 z-0 bg-sky-200 dark:bg-base-200 opacity-30 dark:opacity-75"></div>
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

                <div class="mt-16">
                    <ul class="timeline w-fit mx-auto -mt-4">
                        <li>
                            <div class="timeline-start">1984</div>
                            <div class="timeline-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">First Macintosh computer</div>
                            <hr/>
                        </li>
                        <li>
                            <hr/>
                            <div class="timeline-start">1998</div>
                            <div class="timeline-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">iMac</div>
                            <hr/>
                        </li>
                        <li>
                            <hr/>
                            <div class="timeline-start">2001</div>
                            <div class="timeline-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">iPod</div>
                            <hr/>
                        </li>
                        <li>
                            <hr/>
                            <div class="timeline-start">2007</div>
                            <div class="timeline-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">iPhone</div>
                            <hr/>
                        </li>
                        <li>
                            <hr/>
                            <div class="timeline-start">2015</div>
                            <div class="timeline-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">Apple Watch</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new window.SimpleParallax(document.getElementById('geese-village-img'), {
                delay: 0.5,
                scale: 1.25,
                orientation: 'down'
            });
        });
    </script>
@endsection