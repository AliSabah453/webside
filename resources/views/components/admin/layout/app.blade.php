<!DOCTYPE html>
<html    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? config('app.name') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body x-data = "..mood()">
    <div x-data="{ startSession: true, menu: window.innerWidth > 1400, mobile: window.innerWidth <= 1400 }" x-init="window.addEventListener('resize', () => {
        menu = window.innerWidth > 1400;
        mobile = window.innerWidth <= 1400;
    })" class="flex">
        <div :class="mobile ? 'absolute z-50 w-full' : 'relative'" x-show="menu" class="w-72  overflow-auto   bg-box  border-x border-soft h-screen flex flex-col">
            <!-- Top / Logo -->
            <div class="px-5 h-15 flex items-center justify-between   border-b border-soft">
                <img src="https://developers.hostinger.com/assets/images/hostinger-black.svg" class="h-6" />
                <i x-show="mobile" x-on:click = "menu =  ! menu" class="bi cursor-pointer bi-window-stack"></i>
            </div>

            @persist('menu')
                <!-- Sidebar Content -->
                <aside class="flex-1 space-y-2">


                    <a href="#" class="flex hover-background bg-soft items-center gap-2 px-4 py-3 text-sm">
                        <i class="bi text-sky-400 bi-house"></i>
                        <div class="h-2 border-r border-soft w-px"></div>
                        <span class="font-medium text-primary text-sm">
                            Domains
                        </span>
                    </a>

                    <!-- Billing -->
                    <div>
                        <div class="text-secondary text-xs uppercase px-3 pb-2">Billing</div>
                        <div x-data = "{menu:false}" class=" border-soft overflow-hidden">
                            <!-- Parent -->
                            <button @click="menu = !menu" :class="menu ? 'bg-soft ,  border-soft  ' : ''"
                                class="w-full flex items-center  text-primary  hover-background   border-b border-transparent    justify-between px-4 py-2    ">

                                <div class="flex items-center gap-3">
                                    <i class="bi  bi-shuffle text-sm"></i>
                                    <div class="h-2 border-r border-soft w-px"></div>
                                    <span class="font-medium text-sm">
                                        Domains
                                    </span>
                                </div>

                                <i class="bi bi-chevron-down text-xs transition duration-300"
                                    :class="menu ? 'rotate-180 text-sky-400' : ''">
                                </i>
                            </button>

                            <!-- Children -->
                            <div x-cloak x-show="menu" x-collapse>
                                <div class="py-2 pl-10.5  ">

                                    <div class="border-l text-secondary border-soft  space-y-1">

                                        <a href="#"
                                            class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition ">

                                            General Parameters
                                        </a>

                                        <a href="#"
                                            class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition">
                                            Security Parameters
                                        </a>

                                        <a href="#"
                                            class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition">
                                            Advanced Parameters
                                        </a>

                                    </div>

                                </div>

                            </div>




                            <div x-data = "{menu:false}" class=" border-soft overflow-hidden">
                                <!-- Parent -->
                                <button @click="menu = !menu" :class="menu ? 'bg-soft , border-b  ' : ''"
                                    class="w-full flex items-center  text-primary  hover-background   border-soft  justify-between px-4 py-2    ">

                                    <div class="flex items-center gap-3">
                                        <i class="bi  bi-shuffle text-sm"></i>
                                        <div class="h-2 border-r border-soft w-px"></div>
                                        <span class="font-medium text-sm">
                                            Domains
                                        </span>
                                    </div>

                                    <i class="bi bi-chevron-down text-xs transition duration-300"
                                        :class="menu ? 'rotate-180 text-sky-400' : ''">
                                    </i>
                                </button>

                                <!-- Children -->
                                <div x-cloak x-show="menu" x-collapse>
                                    <div class="py-2 pl-10.5">

                                        <div class="border-l text-secondary border-soft  space-y-1">

                                            <a href="#"
                                                class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition ">

                                                General Parameters
                                            </a>

                                            <a href="#"
                                                class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition">
                                                Security Parameters
                                            </a>

                                            <a href="#"
                                                class="flex hover-background items-center gap-2 px-3 py-2 rounded-r text-sm  transition">
                                                Advanced Parameters
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>






                            <div class="border-t border-soft"></div>
                            <div class="mt-4">
                                <div class="  text-secondary text-xs uppercase px-3 pb-2">Billing</div>
                                <button
                                    class="w-full flex text-primary items-center hover-background border-soft  justify-between px-4 py-2   transition">

                                    <div class="flex items-center gap-3">

                                        <i class="bi bi-shuffle text-sm"></i>
                                        <div class="h-2 border-r border-soft w-px"></div>

                                        <span class="font-medium text-sm">
                                            Domains
                                        </span>

                                    </div>

                                </button>

                                <button
                                    class="w-full flex items-center text-secondary  hover-background   border-soft  justify-between px-4 py-2   transition">

                                    <div class="flex items-center gap-3">

                                        <i class="bi bi-shuffle text-sm"></i>
                                        <div class="h-2 border-r border-soft w-px"></div>

                                        <span class="font-medium text-sm">
                                            Domains
                                        </span>

                                    </div>

                                </button>

                                <button
                                    class="w-full flex items-center text-primary  hover-background   border-soft  justify-between px-4 py-2   transition">

                                    <div class="flex items-center gap-3">

                                        <i class="bi bi-shuffle text-sm"></i>
                                        <div class="h-2 border-r border-soft w-px"></div>

                                        <span class="font-medium text-sm">
                                            Domains
                                        </span>

                                    </div>

                                </button>

                            </div>

                        </div>
                    </div>
                    <div x-data  = "{menu:false}" class=" absolute bottom-0  right-0 left-0">
                        <button x-on:click = 'menu = !menu' :class="menu ? 'bg-soft' : ''"
                            class="w-full cursor-pointer flex items-center border-t border-soft  justify-between px-4 py-3 hover-background transition">
                            <div class="flex w-full items-center gap-3">

                                <!-- Logo -->
                                <img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Company Logo"
                                    class="w-10 h-10 rounded-lg object-cover border border-soft">
                                <div class="h-4 border-r border-soft w-px"></div>

                                <div class=" text-left w-full">
                                    <h3 class="font-semibold  flex justify-between items-center text-sm leading-none">
                                        <span class="text-primary"> Iraq Al-Badr Company</span>
                                        <i class="bi bi-chevron-down text-xs transition duration-300"
                                            :class="menu ? 'rotate-180 text-sky-400' : ''">
                                        </i>
                                    </h3>

                                    <p class="text-xs text-secondary mt-1">
                                        Managing Director : <strong>Hassan Abbas Qasim</strong>
                                    </p>
                                </div>

                            </div>


                        </button>
                        <div x-cloak x-show="menu" x-collapse>
                            <div class="py-2 pl-9  ">

                                <div class="border-l text-secondary border-soft  space-y-1">

                                    <button
                                        class="w-full flex items-center   hover-background   border-soft  justify-between px-4 py-2   transition">

                                        <div class="flex items-center gap-3">

                                            <i class="bi bi-gear text-sm"></i>
                                            <div class="h-2 border-r border-soft w-px"></div>

                                            <span class="font-medium text-sm">
                                                Setting Profile
                                            </span>

                                        </div>

                                    </button>

                                    <button
                                        class="w-full flex items-center   hover-background   border-soft  justify-between px-4 py-2   transition">

                                        <div class="flex items-center gap-3">

                                            <i class="bi bi-qr-code-scan text-sm"></i>
                                            <div class="h-2 border-r border-soft w-px"></div>

                                            <span class="font-medium text-sm">
                                                Device session
                                            </span>

                                        </div>

                                    </button>

                                    <button
                                        class="w-full flex items-center   hover-background   border-soft  justify-between px-4 py-2   transition">

                                        <div class="flex items-center gap-3">

                                            <i class="bi bi-headset text-sm"></i>
                                            <div class="h-2 border-r border-soft w-px"></div>

                                            <span class="font-medium text-sm">
                                                Contact support
                                            </span>

                                        </div>

                                    </button>

                                </div>

                            </div>

                        </div>
                    </div>
                </aside>
            @endpersist

        </div>


        <div class=" flex-1">
            <div class=" w-full  flex items-center justify-between h-15 px-5  border-b      border-soft">
                <div class="flex  text-secondary text-lg items-center gap-3">
                    <i x-on:click = "menu =  ! menu" class="bi bi-window-stack"></i>
                    @livewire('admin.page.dashboard.tools.reload')
                </div>
                <div class=" flex items-center gap-4">
                    <div class="text-lg text-secondary  gap-3 flex items-center">
                        <i class="bi bi-app-indicator"></i>
                        <i x-on:click = "toggle()" x-show = "!moon" class="bi  cursor-pointer bi-moon-stars"></i>
                        <i x-on:click = "toggle()" x-show = "moon" class="bi cursor-pointer bi-brightness-high"></i>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <img class="w-9 h-9 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                        <div class="h-4 border-r border-soft w-px"></div>

                        <div class="font-medium flex gap-3 items-center  justify-center">
                            <div class="text-primary">Jese Leos</div>
                            <i class="bi bi-chevron-down text-xs transition duration-300 mt-2"></i>
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
        {{-- @livewire('tools.session.startSession')
        @livewire('tools.session.startSession') --}}
        @include('components.profile.page.index')


    </div>

    @livewireScripts

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

</body>


</html>
