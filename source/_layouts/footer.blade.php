<div class="bg-base-100 relative z-10 py-32 container mx-auto px-16">
    <footer class="footer relative z-10 grid-cols-1 md:grid-cols-3" style="grid-auto-flow: unset !important;">
        <aside class="w-full col-span-1 md:flex md:flex-row justify-center md:justify-start">
            <img width="66" height="66" loading="lazy" src="/assets/images/signature_transparent.webp"
                 class="invert dark:invert-0 justify-self-center md:justify-self-start" alt="refocore logo">

            <p class="dark:font-semibold text-center md:text-left">
                <span class="mb-2 block"><span class="font-black refo-font text-neutral opacity-100">REFOCORE</span> © <span id="current-year">YYYY</span></span>

                Made by me cuz' actually, <br>
                I'm a genius programmer.
            </p>
        </aside>

        <nav class="w-full col-span-1 justify-center lg:justify-start">
            <div>
                <h6 class="footer-title refo-font text-neutral opacity-100 text-center md:text-left">Contact</h6>

                <ul class="menu w-full !p-0 bg-base-200/30 dark:bg-base-200">
                    @include("_layouts.components.contact-menu-content")
                </ul>
            </div>
        </nav>

        <nav class="w-full col-span-1">
            <h6 class="hidden md:block footer-title refo-font text-neutral opacity-100">Social</h6>

            <div class="flex justify-between flex-1 w-full">
                @include('_layouts.components.social-links')
            </div>
        </nav>
    </footer>

</div>

<script>
    document.getElementById('current-year').innerText = new Date().getFullYear().toString();
</script>