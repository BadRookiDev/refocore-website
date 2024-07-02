---
extends: _layouts.main
title: "Refocore ✝ 404"
description: "Whatever you searched, it does not exist."
section: body
permalink: 404.html
---

@section('body')
    <div class="relative">
        <img src="/assets/images/geese_404.webp" alt="raving geese 404" class="absolute w-full h-full object-cover">
        <div class="absolute w-full h-full left-0 top-0 z-10 bg-slate-400 opacity-45 dark:bg-slate-800 dark:opacity-65"></div>

        <div class="py-32 container mx-auto px-16 relative">
            <div class="flex relative z-20 w-full justify-center mt-16">
                <div>
                    <h1 class="font-black refo-font text-xl text-white text-center">You searched for something that doesn't exist bruhh</h1>

                    <p class="mt-8 text-center font-semibold text-white" id="pay-respect">
                        Press <kbd class="kbd kbd-sm text-black dark:text-white">F</kbd> to pay respects (and to go home).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sleep = (milliseconds) => {
            return new Promise(resolve => setTimeout(resolve, milliseconds))
        }

        document.addEventListener("keydown", async function(e) {
            if(e.key.toString().toLowerCase() !== 'f'){
                return;
            }

            const parent = document.getElementsByTagName('body')[0];
            const kbd = document.getElementById('pay-respect');
            kbd.parentNode.removeChild(kbd);

            for(let i = 0; i<100; i++){
                await sleep(20);

                let p = document.createElement('p');
                p.classList.add('text-red-500', 'font-black', 'text-xl', 'refo-font', 'absolute', 'z-20');
                p.style.top = (Math.floor(Math.random() * 100) + 1)+"%";
                p.style.left = (Math.floor(Math.random() * 100) + 1)+"%";
                p.innerText = "Thanks!"
                parent.appendChild(p);
            }

            await sleep(500);

            window.location.href = "/";
        });
    </script>
@endsection
