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
                    DOWNLOAD
                </span>
                <span class="text-secondary">
                    MY
                </span>
                <span class="text-accent">
                    TRACKS
                </span>
            </h1>
        </div>

        <div class="z-0">
            <img class="absolute top-0 left-0 z-0 w-screen dark:opacity-60 h-full object-cover"
                 src="/assets/images/djtable.jpg" id="geese-village-img" alt="geese in a christian farmer village">
            <div class="absolute w-full h-full left-0 top-0 z-0 bg-sky-200 opacity-30 dark:opacity-10"></div>
        </div>
    </div>

    <section class="bg-base-100 z-10 relative">
        <div class="relative bg-base-200/20 dark:bg-base-200">
            <div class="py-32 container mx-auto px-16 relative">
                <div class="-mt-32">
                    @include('_layouts.components.track-download', ['hexColor' => 'e4f03e', 'trackId' => '1976147643', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Ditzkickz - Warrior (Refocore Edit).wav', 'isFree' => true, 'id' => 'warrior-edit'])

                    @include('_layouts.components.track-download', ['hexColor' => '3ef0ea', 'trackId' => '1952789399', 'downloadBuyUrl' => 'https://hardstyle.com/en/tracks/774e4657-dd54-4a89-92ca-6bda825daeca/jackhammer', 'isFree' => false, 'id' => 'jackhammer'])

                    @include('_layouts.components.track-download', ['hexColor' => '788eff', 'trackId' => '1703137761', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Flo Rida - Right Round (Refocore Remix).mp3', 'isFree' => true, 'id' => 'right-round-remix'])
                </div>
            </div>
        </div>
    </section>

    <script>
        function downloadFile(fileUrl, id) {
            const dlmsg = document.getElementById(id + "-dl-msg");
            dlmsg.classList.remove('hidden');

            fetch(fileUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob();
                })
                .then(blob => {
                    // Create a link element
                    const a = document.createElement("a");
                    a.href = URL.createObjectURL(blob);
                    a.download = fileUrl.split('/').pop();
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);

                    dlmsg.classList.add('hidden');
                })
                .catch(error => {
                    dlmsg.classList.add('hidden');
                    alert("An error occurred while downloading the file. Please try again later.");
                    console.error(error);
                });
        }
    </script>
@endsection

