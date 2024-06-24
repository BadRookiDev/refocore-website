<header class="fixed w-screen top-0 left-0 z-50">
    <div class="container mx-auto px-[76px] mt-8">
        <nav class="flex bg-base-100 refo-skew-negative shadow-md p-0">

            <div class="refo-skew w-full flex">

                <div class="flex-1 flex" id="nav-links">
                    <a href="/" class="flex hover:bg-primary h-16 w-fit px-4 refo-skew-negative items-center transition-colors duration-200 cursor-pointer">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="md:hidden">🏠</span><span class="hidden md:inline refo-font">REFOCORE</span>
                        </span>
                    </a>

                    <a href="/about-me/" class="flex hover:bg-secondary h-16 w-fit px-4 refo-skew-negative items-center transition-colors duration-200 cursor-pointer">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="md:hidden">🙋🏻‍♂️</span><span class="hidden md:inline refo-font">ABOUT ME</span>
                        </span>
                    </a>

                    <a href="/my-style/" class="flex hover:bg-accent h-16 w-fit px-4 refo-skew-negative items-center transition-colors duration-200 cursor-pointer">
                        <span class="refo-skew font-black inline-block link underline-offset-4 cursor-pointer">
                            <span class="md:hidden">🪚</span><span class="hidden md:inline refo-font">MY STYLE</span>
                        </span>
                    </a>
                </div>

                <div class="flex-none flex items-center px-2 gap-x-8">
                    <label class="hidden md:flex cursor-pointer gap-2">
                        <span class="label-text font-bold refo-font text-black dark:text-white">
                            Light
                        </span>
                        <input onchange="changeTheme(this.checked)" type="checkbox"
                               class="toggle theme-controller !bg-gradient-to-r !from-primary !via-secondary !to-accent border-black dark:border-white" />
                        <span class="label-text font-bold refo-font text-black dark:text-white">
                            Dark
                        </span>
                    </label>

                    <label class="grid md:hidden cursor-pointer place-items-center">
                        <input onchange="changeTheme(this.checked)" type="checkbox"
                                class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1" />
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
                            <circle cx="12" cy="12" r="5" />
                            <path
                                    d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
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

                    <button class="btn btn-outline btn-outline-neon refo-skew-negative hover:bg-transparent hover:!text-black"
                    onclick="document.getElementById('contactModal').showModal();">
                        <span>CONTACT</span>
                    </button>
                </div>

            </div>

        </nav>
    </div>
</header>

<dialog id="contactModal" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Hello!</h3>
        <p class="py-4">Press ESC key or click outside to close</p>
    </div>
</dialog>

<script>
    document.querySelectorAll('.theme-controller').forEach(el => {
        el.checked = preferredThemeOnInit === 'refodark';
    });

    function changeTheme(isChecked){
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
