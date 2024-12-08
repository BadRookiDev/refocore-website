<header class="fixed w-screen top-0 left-0 z-50">
    <div class="container mx-auto px-[76px] mt-8">
        <nav class="flex bg-base-100 refo-skew-negative shadow-md p-0">

            <div class="refo-skew w-full flex responsive-navbar">

                <div class="flex-1 flex" id="nav-links">
                    <a href="/downloads" class="flex hover:bg-primary h-16 w-fit px-4 refo-skew-negative items-center
                    transition-colors duration-200 cursor-pointer tooltip tooltip-bottom tooltip-primary
                    lg:before:!hidden lg:after:!hidden before:text-black/50 z-50 relative" data-tip="Downloads"
                       aria-label="DOWNLOADS">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="lg:hidden">⬇️</span><span class="hidden lg:inline refo-font">DOWNLOADS</span>
                        </span>
                    </a>

                    <a href="/about-me/" class="flex hover:bg-secondary h-16 w-fit px-4 refo-skew-negative items-center
                    transition-colors duration-200 cursor-pointer tooltip tooltip-bottom tooltip-secondary
                    lg:before:!hidden lg:after:!hidden before:text-black/50 z-50 relative" data-tip="About Me" aria-label="ABOUT ME">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="lg:hidden">🙋🏻‍♂️</span><span class="hidden lg:inline refo-font">ABOUT ME</span>
                        </span>
                    </a>

                    <a href="/my-style/" class="flex hover:bg-accent h-16 w-fit px-4 refo-skew-negative items-center
                    transition-colors duration-200 cursor-pointer tooltip tooltip-bottom tooltip-accent
                    lg:before:!hidden lg:after:!hidden before:text-black/50 z-50 relative" data-tip="MUSIC STYLE"
                       aria-label="MUSIC STYLE">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="lg:hidden">🪚</span><span class="hidden lg:inline refo-font">MUSIC STYLE</span>
                        </span>
                    </a>
                </div>

                <div class="flex-none flex items-center px-2 gap-x-8" id="nav-controls">
                    <a class="block" href="/" aria-label="Home">
                        <svg class="fill-black dark:fill-white w-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 18.039L16 9.501 5 18.039V14.56l11-8.54 11 8.538v3.481zm-2.75-.31v8.251h-5.5v-5.5h-5.5v5.5h-5.5v-8.25L16 11.543l8.25 6.186z"></path>
                        </svg>
                    </a>

                    <label class="swap swap-rotate sm:hidden" aria-label="light/dark switch">
                        <input type="checkbox" class="theme-controller" onchange="changeTheme(this.checked)"/>

                        <svg class="swap-off h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24">
                            <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/>
                        </svg>

                        <svg
                                class="swap-on h-5 w-5 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                            <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/>
                        </svg>
                    </label>

                    <label class="hidden md:flex cursor-pointer gap-2" aria-label="light/dark switch">
                        <span class="label-text font-bold refo-font text-black dark:text-white mt-0.5">
                            Light
                        </span>
                        <input onchange="changeTheme(this.checked)" type="checkbox"
                               class="toggle theme-controller !bg-gradient-to-r !from-primary !via-secondary !to-accent border-black dark:border-white"/>
                        <span class="label-text font-bold refo-font text-black dark:text-white mt-0.5">
                            Dark
                        </span>
                    </label>

                    <label class="hidden sm:grid md:hidden cursor-pointer place-items-center"
                           aria-label="light/dark switch">
                        <input onchange="changeTheme(this.checked)" type="checkbox"
                               class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1"/>
                        <svg
                                class="stroke-base-100 fill-base-100 col-start-1 row-start-1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"/>
                            <path
                                    d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/>
                        </svg>
                        <svg
                                class="stroke-base-100 fill-base-100 col-start-2 row-start-1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </label>

                    <button class="btn btn-outline btn-outline-neon refo-skew-negative hover:bg-transparent hover:text-black dark:hover:!text-white"
                            onclick="document.getElementById('contactModal').showModal();" aria-label="contact dialog">
                        <svg viewBox="0 0 512 512" class="w-10 h-10 fill-neutral inline sm:hidden" xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M304.7,325.9H105.6c-4.7,0-8.6-3.8-8.6-8.6V155c0-4.7,3.8-8.6,8.6-8.6H356c4.7,0,8.6,3.8,8.6,8.6v103.8 c0,4.7-3.8,8.6-8.6,8.6s-8.6-3.8-8.6-8.6v-95.3H114.2v145.2h190.5c4.7,0,8.6,3.8,8.6,8.6C313.2,322.1,309.4,325.9,304.7,325.9z"></path>
                            <path d="M105.6,325.9c-2.2,0-4.5-0.9-6.1-2.6c-3.3-3.4-3.2-8.8,0.2-12.1l77.2-75l-77.2-75c-3.4-3.3-3.5-8.7-0.2-12.1 c3.3-3.4,8.7-3.5,12.1-0.2l83.5,81.2c1.7,1.6,2.6,3.8,2.6,6.1c0,2.3-0.9,4.5-2.6,6.1l-83.5,81.2 C109.9,325.1,107.7,325.9,105.6,325.9z"></path>
                            <path d="M313.2,284.3c-2.2,0-4.3-0.8-6-2.4l-40.6-39.5c-1.7-1.6-2.6-3.8-2.6-6.1c0-2.3,0.9-4.5,2.6-6.1l83.5-81.2 c3.4-3.3,8.8-3.2,12.1,0.2s3.2,8.8-0.2,12.1l-77.2,75l34.3,33.4c3.4,3.3,3.5,8.7,0.2,12.1C317.6,283.4,315.4,284.3,313.2,284.3z"></path>
                            <path d="M230.8,279.3c-1.9,0-3.9-0.7-5.5-2l-41.7-34.5c-3.6-3-4.2-8.4-1.1-12.1c3-3.6,8.4-4.2,12.1-1.1l36.3,30l36.3-30 c3.6-3,9-2.5,12.1,1.1c3,3.6,2.5,9-1.1,12.1l-41.7,34.5C234.7,278.6,232.7,279.3,230.8,279.3z"></path>
                            <path d="M387,260.4c8.8,4.6,15.7,11,20.6,19c4.9,8,7.4,17,7.4,26.9c0,7.3-1.2,13.6-3.5,18.8c-2.3,5.2-5.5,9.2-9.5,11.9 c-4,2.7-8.6,4.1-13.8,4.1c-4.3,0-8-0.9-11.1-2.7c-2.2-1.3-4.1-3.1-5.4-5.3c-0.7-1.1-2.2-1.2-3-0.2c-4.1,5.4-10.1,8.1-18.1,8.1 c-4.8,0-9.3-1.3-13.4-3.8c-4.1-2.6-7.5-6.2-9.9-10.8c-2.5-4.6-3.7-9.9-3.7-16c0-6,1.2-11.3,3.7-16c2.4-4.6,5.7-8.2,9.9-10.7 c4.1-2.5,8.7-3.8,13.5-3.8c5.6,0,10.3,1.4,14,4.3c1.2,0.9,2.9,0,2.9-1.5l0,0c0-1,0.8-1.8,1.8-1.8h16.2c1,0,1.8,0.8,1.8,1.8v35.3 c0,2.6,0.5,4.5,1.5,5.6c1,1.1,2.3,1.7,3.9,1.7c5.1,0,7.7-6.3,7.7-18.9c0-7.7-1.8-14.6-5.4-20.6c-3.6-6-8.7-10.7-15.3-14.1 c-6.6-3.4-14.2-5.1-22.8-5.1c-8.5,0-16.1,1.8-22.7,5.5c-6.6,3.7-11.8,8.7-15.4,15.2c-3.7,6.5-5.5,13.7-5.5,21.7 c0,8.2,1.8,15.6,5.4,22.1c3.6,6.5,8.6,11.6,15.2,15.2c6.5,3.6,14.1,5.4,22.6,5.4c8,0,15.5-1.5,22.5-4.5c1-0.4,2.1,0.1,2.4,1.1 l3.3,9.6c0.3,0.9-0.1,1.9-1,2.3c-3.3,1.5-7.2,2.6-11.7,3.6c-5.2,1.1-10.3,1.6-15.5,1.6c-11.8,0-22.2-2.4-31.1-7.3 c-9-4.9-15.9-11.6-20.8-20.1c-4.9-8.5-7.4-18.1-7.4-28.8c0-10.6,2.5-20.1,7.4-28.6c5-8.5,12-15.2,21-20 c9.1-4.9,19.5-7.3,31.4-7.3C368.1,253.5,378.2,255.8,387,260.4z M364.5,321c2.2-2.4,3.4-5.9,3.4-10.4c0-4.4-1.1-7.8-3.4-10.2 c-2.2-2.4-5.1-3.7-8.7-3.7c-3.6,0-6.5,1.2-8.7,3.7c-2.2,2.4-3.3,5.8-3.3,10.2c0,4.4,1.1,7.8,3.3,10.3c2.2,2.5,5.1,3.7,8.7,3.7 C359.3,324.6,362.2,323.4,364.5,321z"></path>
                        </svg>
                        <span class="hidden sm:inline font-bold">CONTACT</span>
                    </button>
                </div>

            </div>

        </nav>
    </div>
</header>

<dialog id="contactModal" class="modal rounded-none">
    <div class="modal-box rounded-none relative overflow-hidden refo-corner-cut">
        <div class="px-4">
            <div class="flex items-center justify-between">
                <p class="font-bold text-lg">Contact Information</p>
                <form method="dialog">
                    <button class="text-black dark:text-white" aria-label="close contact dialog">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </form>
            </div>

            <ul class="menu w-full !p-0 mt-4">
                @include("_layouts.components.contact-menu-content")
            </ul>
        </div>
    </div>
</dialog>

<script>
    document.querySelectorAll('.theme-controller').forEach(el => {
        el.checked = preferredThemeOnInit === 'refodark';
    });

    function changeTheme(isChecked) {
        const newTheme = isChecked ? 'refodark' : 'refotheme';
        localStorage.setItem("refoTheme", newTheme);
        document.documentElement.setAttribute('data-theme', newTheme);
        document.documentElement.classList.toggle('dark');
        console.log("CHANGE DETECTED");
        document.querySelectorAll('.theme-controller').forEach(el => {
            el.checked = isChecked;
        });
    }
</script>
