<nav class="flex justify-between items-center py-4 border-b border-border">
    <div>
        <x-logo />
    </div>
    <div class="hidden md:block">
        <div class="space-x-6 font-bold">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/clients" :active="request()->is('clients', 'clients/*')">Clients</x-nav-link>
            <x-nav-link href="/holidays" :active="request()->is('holidays', 'holidays/*')">Holidays</x-nav-link>
        </div>
    </div>

    <div class="hidden md:block">
        <div class="space-x-4 font-bold flex justify-between items-center">
            <a href="https://github.com/Joshuawilfred/happy-clients"
                class="w-8 rounded-md bg-accent dark:bg-primary-foreground p-1 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    class="dark:fill-white">
                    <path
                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
            </a>
            <x-theme-toggle />
        </div>
    </div>

    <div class="flex md:hidden">
        <label class="relative z-40 cursor-pointer px-3 py-6 rounded-md bg-accent dark:bg-primary-foreground"
            for="mobile-menu">
            <input class="peer hidden" type="checkbox" id="mobile-menu" />
            <div
                class="relative z-50 block h-[1px] w-7 dark:bg-white bg-black bg-transparent content-[''] before:absolute before:top-[-0.35rem] before:z-50 before:block before:h-full before:w-full dark:before:bg-white before:bg-black before:transition-all before:duration-200 before:ease-out before:content-[''] after:absolute after:right-0 after:bottom-[-0.35rem] after:block after:h-full after:w-full dark:after:bg-white after:bg-black after:transition-all after:duration-200 after:ease-out after:content-[''] peer-checked:bg-transparent before:peer-checked:top-0 before:peer-checked:w-full before:peer-checked:rotate-45 before:peer-checked:transform after:peer-checked:bottom-0 after:peer-checked:w-full after:peer-checked:-rotate-45 after:peer-checked:transform">
            </div>
            <div
                class="fixed inset-0 z-40 hidden h-full w-full dark:bg-white/50 bg-black/50 backdrop-blur-sm peer-checked:block">
                &nbsp;
            </div>
            <div
                class="fixed top-0 right-0 z-40 h-full w-full translate-x-full overflow-y-auto overscroll-y-none transition duration-500 peer-checked:translate-x-0">
                <div class="float-right min-h-full w-[65%] bg-primary-foreground px-6 pt-12 shadow-2xl">
                    <menu class="grid grid-flow-row gap-4 mt-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/clients" :active="request()->is('clients')">Clients</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        <br><br>
                        <div class="rounded-md px-3 py-2 text-base font-medium bg-accent text-secondary-foreground">
                            <a href="https://github.com/Joshuawilfred/happy-clients" class="flex w-full items-center justify-between">
                                <span>View on Github</span>
                                <div class="rounded-md bg-accent dark:bg-primary-foreground p-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="dark:fill-white">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="rounded-md px-3 py-2 text-base font-medium bg-accent text-secondary-foreground flex w-full items-center justify-between">
                            <span>Change Theme</span>
                            <x-theme-toggle />
                        </div>
                    </menu>
                </div>
            </div>
        </label>
    </div>
</nav>
