---
extends: _layouts.main
title: "Refocore ✝ My Style"
description: "Get to know the style of music I make: Uplifting melodies, Heavy Zaagkicks."
---

@section('body')
    <div class="py-32 overflow-hidden relative dark:bg-base-200" id="my-style-section">
        <div class="z-10 relative">
            <h1 class="text-7xl font-black refo-font text-center mt-16 z-10">
                <span class="text-primary">
                    MY
                </span>
                <span class="text-secondary">
                    MUSIC
                </span>
                <span class="text-accent">
                    STYLE
                </span>
            </h1>
        </div>

        <div class="z-0">
            <img class="absolute top-0 left-0 z-0 w-screen dark:opacity-60 h-full object-cover"
                 src="/assets/images/chainsaw.jpg" id="geese-village-img" alt="chainsaw on a tree log">
            <div class="absolute w-full h-full left-0 top-0 z-0 bg-blue-800 dark:bg-blue-400 opacity-10"></div>
        </div>
    </div>

    <section class="bg-base-100 border-t-4 border-base-200 dark:border-base-300">
        <div class="bg-base-200/20 dark:bg-base-200">
            <div class="py-32 container mx-auto px-16 relative space-y-8">
                <p>
                    I started making hardcore in 2018, and uptempo in 2019. Over the years a part of the uptempo scene has evolved in to the 'zaag' style.
                    At first, I didn't like it at all, but somehow I got hooked on the zaag addiction because of Invaderz. I have a best friend who absolutely hates zaag.
                    One day, just to mess with him, I messed around in my DAW with the goal of creating the most ridiculously heavy zaag track ever just to annoy him.
                    Enter the 'Jackhammer' track. What was supposed to be a joke turned out to be a serious contender in the zaag scene.
                    And thus, after producing multiple genres for about 9 years, I finally found MY STYLE!
                </p>
                <p>
                    So how do I best describe my style? Ridiculously hard & insanely wide reverse zaagkicks with abhorrent stretched heavy mid-bass kloenks that sound like someone being hit.... in the face... with an anvil...<br>
                    Basically, I'd like to pull out the entire set of sounds fresh out of the factory or the construction site to fill the drop.
                    As hard as I want the drop to be, I really like making the intro's and build-ups full of catchy original uplifting melodies.
                </p>
                <p>
                    Beside that all, I definitely like to variate and experiment with different rhythms, tempo's and keys.
                    I want my tracks to sound refreshingly new & original, but also familiar at the same time, as paradoxical as it is.
                </p>
                <p>
                    Are you a producer as well, just reading this? Wait... nobody reads this anyway. But f*ck it, just in case i ever blow up and you read this: I'm open to ideas, collab, perform, whatever.
                </p>
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
                <h3 class="text-3xl font-black text-center refo-font">DO YOU <span class="text-black text-outline-primary">WANT</span> <span class="text-black text-outline-secondary">TO</span> <span class="text-black text-outline-accent">COLLAB</span>?</h3>


                    <div role="alert" class="alert shadow-lg mt-12 bg-base-100 rounded-none">
                        <img src="/assets/images/acid.webp" width="75" height="75" alt="acid pro 11">

                        <div>
                            <h3 class="font-bold">I use Acid Pro 11, you probably don't. But still, let's collab?</h3>
                            <div class="text-xs">Most people use FL studio. Ableton and Logic come second? Well I still use this revamped old hag.
                                So we just can't exchange FLP files. STEM sharing it is? Anyway, check my contact information!</div>
                        </div>
                    </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new window.SimpleParallax(document.getElementById('geese-village-img'), {
                delay: 0.5,
                scale: 1.25,
                orientation: 'down',
                customContainer: document.getElementById('my-style-section').nodeValue
            });
        });
    </script>
@endsection
