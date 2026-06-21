<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? config('app.name') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body x-data = "mood()">



    <div x-data="{ menu: window.innerWidth > 1500 }" x-init="window.addEventListener('resize', () => menu = window.innerWidth > 1500)" class="flex">
        @persist('menu')
            <div x-show="menu" class="w-72 border-r border-soft h-screen flex flex-col">

                <!-- Top / Logo -->
                <div class="px-5 h-15 flex items-center justify-center border-b border-soft">
                    <img src="https://developers.hostinger.com/assets/images/hostinger-black.svg" class="h-6" />
                </div>

                <!-- Sidebar Content -->
                <aside class="flex-1 overflow-y-auto p-2 space-y-6">

                    <!-- Search -->
                    <div>
                        <input type="text" placeholder="Search"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-1 focus:ring-gray-300">
                    </div>

                    <!-- Helper style for links -->
                    <!-- Overview -->
                    <div x-data = "{menu:false}">
                        <div class="mb-2 text-gray-400 text-xs uppercase px-3">Overview</div>

                        <nav class="space-y-1">

                            <a href="/dashboard" wire:navigate
                                class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Authentication
                            </a>
                            <div @click="menu = !menu"
                                class="flex flex-col gap-2 px-3 py-2 rounded-lg hover:bg-gray-100 transition cursor-pointer">

                                <!-- Header -->
                                <div class="flex items-center justify-between">

                                    <div class="flex items-center gap-3">
                                        <i class="bi bi-gear text-sm"></i>

                                        <div class="h-4 border-r border-soft"></div>

                                        <span class="font-medium text-sm">
                                            Parameters
                                        </span>
                                    </div>

                                    <i class="bi bi-chevron-down text-xs transition duration-300"
                                        :class="menu ? 'rotate-180' : ''">
                                    </i>

                                </div>

                                <!-- Sub Menu -->
                                <div x-show="menu" x-collapse @click.stop class="ml-5 border-l border-neutral pl-3">

                                    <a
                                        class="flex items-center gap-2 px-3 py-2 rounded-md text-sm hover:bg-gray-100 transition">
                                        Parameters
                                    </a>

                                    <a
                                        class="flex items-center gap-2 px-3 py-2 rounded-md text-sm hover:bg-gray-100 transition">
                                        Parameters
                                    </a>

                                    <a
                                        class="flex items-center gap-2 px-3 py-2 rounded-md text-sm hover:bg-gray-100 transition">
                                        Parameters
                                    </a>

                                </div>

                            </div>


                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Parameters
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Pagination
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Errors
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                SDKs & Tools
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Change log
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Support
                            </a>

                        </nav>
                    </div>

                    <div class="border-t border-soft"></div>

                    <!-- Billing -->
                    <div>
                        <div class="mb-2 text-gray-400 text-xs uppercase px-3">Billing</div>

                        <nav class="space-y-1">
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Catalog</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Payment methods</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Subscriptions</a>
                        </nav>
                    </div>

                    <div class="border-t border-soft"></div>

                    <!-- Domains -->
                    <div>
                        <div class="mb-2 text-gray-400 text-xs uppercase px-3">Domains</div>

                        <nav class="space-y-1">
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Availability</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Forwarding</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">Portfolio</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">WHOIS</a>
                            <a class="block px-3 py-2 rounded-md hover:bg-gray-100">DNS</a>
                        </nav>
                    </div>

                    <div class="border-t border-soft"></div>

                    <!-- Advanced -->
                    <div>
                        <nav class="space-y-1">

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Snapshot
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Zone
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Domain Access Verifier
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Verifications
                            </a>

                            <a class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">
                                Hosting
                            </a>

                        </nav>
                    </div>


                </aside>
            </div>
        @endpersist


        <div class=" flex-1">
            <div class=" w-full  flex items-center justify-between h-15 px-5  border-b      border-soft">
                <div class="flex  text-secondary text-lg items-center gap-3">
                    <i x-on:click = "menu =  ! menu" class="bi bi-window-stack"></i>
                    <i class="bi bi-arrow-clockwise"></i>
                </div>
                <div class=" flex items-center gap-4">
                    <div class="text-lg text-secondary  flex items-center">
                        <i x-on:click = "toggle()" x-show = "!moon" class="bi cursor-pointer bi-moon-stars"></i>
                        <i x-on:click = "toggle()" x-show = "moon" class="bi cursor-pointer bi-brightness-high"></i>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                        <div class="h-4 border-r border-soft w-px"></div>

                        <div class="font-medium text-heading">
                            <div class="text-primary">Jese Leos</div>
                            <div class="text-sm  text-secondary font-normal text-body">Joined in August 2014</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="p-5  transition-opacity   duration-750 opacity-100 starting:opacity-0">

                {{-- ================= HEADER ================= --}}
                <div class="  mx-auto w-full max-w-400">

                    <h1 class="text-2xl font-bold text-primary">
                        {{ $title ?? config('app.name') }}
                    </h1>

                    <div class="mt-2 flex flex-wrap items-center gap-2 text-sm text-secondary">

                        <span>
                            تحكم بجميع أقسام النظام، راقب الإحصائيات، وأدر المستخدمين والإعدادات من مكان واحد.
                        </span>

                        <span class="text-secondary/40">•</span>

                        <span class="inline-flex items-center gap-1 font-bold text-indigo-500">

                            <a wire:navigate href="/dashboard">
                                Dashboard
                            </a>


                        </span>

                    </div>
                </div>
                <br>
                <div class="mx-auto w-full max-w-400">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>







    @livewireScripts
</body>
<script>
    function mood() {

        return {
            moon: localStorage.getItem('theme') === 'dark',
            init() {
                document.documentElement.classList.toggle('dark', this.moon);
            },
            toggle() {
                this.moon = !this.moon;
                localStorage.setItem('theme', this.moon ? 'dark' : 'light');
                document.documentElement.classList.toggle('dark', this.moon);
            }
        }
    }
</script>

</html>
