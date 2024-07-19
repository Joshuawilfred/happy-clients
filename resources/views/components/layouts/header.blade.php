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
        <div class="space-x-6 font-bold">
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
                    </menu>
                </div>
            </div>
        </label>
    </div>
</nav>
