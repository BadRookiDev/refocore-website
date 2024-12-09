<div class="pt-32 -mt-16" id="{{ $id }}">
    <div class="flex w-full gap-8 flex-wrap sm:flex-nowrap">
        <div class="w-full sm:w-1/2 md:w-2/3 lg:w-3/4 flex-shrink-0">
            @include('_layouts.components.soundcloud', ['hexColor' => $hexColor, 'trackId' => $trackId])

            <p id="{{ $id."-dl-msg" }}" class="hidden mt-2 font-semibold mb-0" style="color: {{ '#'.$hexColor }}">
                Your download has started, please wait and have patience!
            </p>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <div class="w-full h-full rounded-sm px-4 bg-base-100 flex items-center drop-shadow-md"
                 style="transition: height 300ms ease-in-out">
                <div class="w-full flex items-center justify-center sm:block">
                    <p class="text-center font-black text-lg sm:w-full flex-shrink me-4 sm:me-0">
                        @if($isFree)
                            Free Download
                        @else
                            Buy Here
                        @endif
                    </p>

                    <hr class="hidden sm:block my-4 border-t-2 border-t-base-300">

                    <div class="inline-block sm:w-full">
                        <button class="sm:w-full p-2 rounded-full sm:mt-2" onclick="downloadFile('{{ $downloadBuyUrl }}', '{{ $id }}')"
                                style="background: {{ '#'.$hexColor }}">
                            @if($isFree)
                                <svg viewBox="0 0 24 24" class="w-6 fill-black opacity-70 mx-auto"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.163 2.819C9 3.139 9 3.559 9 4.4V11H7.803c-.883 0-1.325 0-1.534.176a.75.75 0 0 0-.266.62c.017.274.322.593.931 1.232l4.198 4.401c.302.318.453.476.63.535a.749.749 0 0 0 .476 0c.177-.059.328-.217.63-.535l4.198-4.4c.61-.64.914-.96.93-1.233a.75.75 0 0 0-.265-.62C17.522 11 17.081 11 16.197 11H15V4.4c0-.84 0-1.26-.164-1.581a1.5 1.5 0 0 0-.655-.656C13.861 2 13.441 2 12.6 2h-1.2c-.84 0-1.26 0-1.581.163a1.5 1.5 0 0 0-.656.656zM5 21a1 1 0 0 0 1 1h12a1 1 0 1 0 0-2H6a1 1 0 0 0-1 1z"></path>
                                </svg>
                            @else
                                <svg class="w-6 fill-black opacity-70 mx-auto" viewBox="0 -32 576 576"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM403.029 192H360v-60c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v60h-43.029c-10.691 0-16.045 12.926-8.485 20.485l67.029 67.029c4.686 4.686 12.284 4.686 16.971 0l67.029-67.029c7.559-7.559 2.205-20.485-8.486-20.485z"></path>
                                </svg>
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>