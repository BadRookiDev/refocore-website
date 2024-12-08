---
extends: _layouts.main-without-footer
title: "Refocore ✝ My Socials"
description: "Find out where to connect with me."
---

@section('body')
    <section class="relative flex min-h-screen items-center">
        <img src="/assets/images/defqon1_stage.jpg" alt="defqon 1 background"
             class="w-full h-full object-cover z-0 absolute top-0 start-0 opacity-90 dark:opacity-60">

        <div class="w-full pb-32 pt-48 xl:pt-32 z-20">
            <div class="container mx-auto px-16 relative space-y-8">

                <img width="100" class="mx-auto" src="/assets/images/signature_transparent.webp" alt="refocore logo">

                <div class="bg-base-100 dark:bg-base-200 px-12 py-8 max-w-xl mx-auto refo-corner-cut">
                    <a class="flex items-center gap-x-4" href="https://soundcloud.com/refocore">
                        <div style="width: 3rem;" class="flex-shrink-0">
                            @include('_layouts.social-icons.soundcloud')
                        </div>

                        <p class="font-semibold">Listen to my zaags on soundcloud</p>
                    </a>

                    <a class="flex items-center gap-x-4 mt-8" href="https://open.spotify.com/artist/0bXQrjnqNy5m6o2g1iGWlj">
                        <div style="width: 3rem;" class="flex-shrink-0">
                            @include('_layouts.social-icons.spotify')
                        </div>

                        <p class="font-semibold">Zaag with me on spotify</p>
                    </a>

                    <a class="flex items-center gap-x-4 mt-8" href="https://www.instagram.com/refo.core">
                        <div style="width: 3rem;" class="flex-shrink-0">
                            @include('_layouts.social-icons.instagram')
                        </div>

                        <p class="font-semibold">See what i have on the gram</p>
                    </a>

                    <a class="flex items-center gap-x-4 mt-8" href="https://www.tiktok.com/@refocore">
                        <div style="width: 3rem;" class="flex-shrink-0">
                            @include('_layouts.social-icons.tiktok')
                        </div>

                        <p class="font-semibold">Watch my tiktoks</p>
                    </a>

                    <a class="flex items-center gap-x-4 mt-8" href="https://www.youtube.com/@refocore">
                        <div style="width: 3rem;" class="flex-shrink-0">
                            @include('_layouts.social-icons.youtube')
                        </div>

                        <p class="font-semibold">Subscribe to my youtube</p>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
