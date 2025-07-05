---
extends: _layouts.main
title: "Refocore ✝ Downloads"
description: "Download and/or Buy my tracks here!"
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
                    @include('_layouts.components.track-download', ['colorClass' => 'primary', 'trackId' => '2124824931', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/DJ Fresh ft Rita Ora - Hot Right Now (Refocore Remix) [extended version].mp3', 'isFree' => true, 'id' => 'hot-right-now'])

                    @include('_layouts.components.track-download', ['colorClass' => 'secondary', 'trackId' => '2104280895', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Maroon 5 ft. Christina Aguilera - Moves like jagger (Refocore Remix).mp3', 'isFree' => true, 'id' => 'moves-like-jagger'])

                    @include('_layouts.components.track-download', ['colorClass' => 'accent', 'trackId' => '2044242380', 'downloadBuyUrl' => 'https://hardstyle.com/en/tracks/90eda8b2-110b-4469-96e2-be7cab319c9f/anvil', 'isFree' => false, 'id' => 'anvil'])

                    @include('_layouts.components.track-download', ['colorClass' => 'primary', 'trackId' => '2035885916', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Martin Garrix - Animals (Refocore Remix).wav', 'isFree' => true, 'id' => 'animals-remix'])

                    @include('_layouts.components.track-download', ['colorClass' => 'secondary', 'trackId' => '2024928676', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Refocore - Loodsrave 4 Anthem (ft. MatDc) (extended version).wav', 'isFree' => true, 'id' => 'loodsrave-4'])

                    @include('_layouts.components.track-download', ['colorClass' => 'accent', 'trackId' => '1973112579', 'downloadBuyUrl' => 'https://hardstyle.com/en/tracks/24a4945e-18ef-4bfd-b12c-a5c8787ed480/dump-truck', 'isFree' => false, 'id' => 'dump-truck'])

                    @include('_layouts.components.track-download', ['colorClass' => 'primary', 'trackId' => '1976147643', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Ditzkickz - Warrior (Refocore Edit).wav', 'isFree' => true, 'id' => 'warrior-edit'])

                    @include('_layouts.components.track-download', ['colorClass' => 'secondary', 'trackId' => '1952789399', 'downloadBuyUrl' => 'https://hardstyle.com/en/tracks/774e4657-dd54-4a89-92ca-6bda825daeca/jackhammer', 'isFree' => false, 'id' => 'jackhammer'])

                    @include('_layouts.components.track-download', ['colorClass' => 'accent', 'trackId' => '1703137761', 'downloadBuyUrl' => 'https://s3.eu-central-2.wasabisys.com/cdn.refocore.top/Flo Rida - Right Round (Refocore Remix).mp3', 'isFree' => true, 'id' => 'right-round-remix'])
                </div>
            </div>
        </div>
    </section>

    <script>
        function downloadFile(fileUrl, btn) {
            const btnInner = btn.innerHTML;
            const targetsParent = btn.parentNode.parentNode;

            openDownload(targetsParent, btn);

            fetch(fileUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const contentLength = response.headers.get('Content-Length');
                    if (!contentLength) {
                        throw new Error('Content-Length header is not available');
                    }

                    const totalBytes = parseInt(contentLength, 10);
                    let loadedBytes = 0;

                    const reader = response.body.getReader();
                    const stream = new ReadableStream({
                        start(controller) {
                            function pump() {
                                reader.read().then(({ done, value }) => {
                                    if (done) {
                                        controller.close();
                                        return;
                                    }

                                    loadedBytes += value.byteLength;
                                    const percent = ((loadedBytes / totalBytes) * 100).toFixed(0);

                                    // Update progress in the UI
                                    console.log(`Download progress: ${percent}%`);
                                    controller.enqueue(value);

                                    progressDownload(targetsParent, btn, percent);
                                    pump();
                                }).catch(error => {
                                    console.error('Error reading data stream:', error);
                                    controller.error(error);
                                });
                            }
                            pump();
                        }
                    });

                    return new Response(stream).blob();
                })
                .then(blob => {
                    const fileName = fileUrl.split('/').pop();

                    // Create a link element
                    const a = document.createElement("a");
                    a.href = URL.createObjectURL(blob);
                    a.download = fileName;
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);

                    closeDownload(targetsParent, btn, btnInner);
                })
                .catch(error => {
                    closeDownload(targetsParent, btn, btnInner);

                    alert("An error occurred while downloading the file. Please try again later.");
                    console.error(error);
                });
        }

        function progressDownload(parent, btn, percent){
            parent.children[2].value = ""+percent;
            btn.innerHTML = percent + "%";
        }

        function openDownload(parent, btn){
            parent.children[1].classList.remove("sm:block");
            parent.children[2].classList.remove("hidden");
            btn.disabled = true;
            btn.innerHTML = "0%";
        }

        function closeDownload(parent, btn, btnInner){
            parent.children[1].classList.add("sm:block");
            parent.children[2].classList.add("hidden");
            parent.children[2].value = "0";
            btn.disabled = false;
            btn.innerHTML = btnInner;
        }
    </script>
@endsection

