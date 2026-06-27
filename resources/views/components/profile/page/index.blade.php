<div x-data="{ page: 'd_4' }" class="fixed inset-0 flex items-center justify-center p-10">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 w-full max-w-300 h-screen max-h-200 bg-main mx-auto rounded-xl overflow-hidden">

        <div class="flex h-full">

            <!-- Sidebar -->
            <div class="w-72 h-full overflow-auto bg-box border-x border-soft flex flex-col">

                <!-- User -->
                <div class="p-4 flex items-center border-b h-15 border-soft">

                    <div class="flex items-center gap-3">

                        <img class="w-10 h-10 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">

                        <div class="h-4 border-r border-soft w-px"></div>

                        <div>
                            <div class="font-medium text-primary">
                                Jese Leos
                            </div>

                            <div class="text-xs text-secondary">
                                Joined in August 2014
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Menu -->
                <aside class="flex-1 py-2">

                    <!-- Account -->
                    <div class="mt-4">

                        <div class="px-4 pb-2 text-xs uppercase text-secondary">
                            Account
                        </div>

                        <button @click="page = 'd_1'" :class="page == 'd_1' ? 'bg-soft text-primary' : 'text-primary'"
                            class="w-full flex items-center gap-3 px-4 py-3 hover-background transition">

                            <i class="bi bi-person-badge"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Personal Information
                            </span>

                        </button>

                    </div>

                    <!-- Security -->
                    <div class="mt-4">

                        <div class="px-4 pb-2 text-xs uppercase text-secondary">
                            Security
                        </div>

                        <button @click="page = 'd_2'" :class="page == 'd_2' ? 'bg-soft text-primary' : 'text-primary'"
                            class="w-full flex items-center gap-3 px-4 py-3 hover-background transition">

                            <i class="bi bi-key"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Password
                            </span>

                        </button>

                        <button @click="page = 'd_3'" :class="page == 'd_3' ? 'bg-soft text-primary' : 'text-primary'"
                            class="w-full flex items-center gap-3 px-4 py-3 hover-background transition">

                            <i class="bi bi-shield-lock"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Two-Factor Authentication
                            </span>

                        </button>

                        <button @click="page = 'd_4'" :class="page == 'd_4' ? 'bg-soft text-primary' : 'text-primary'"
                            class="w-full flex items-center gap-3 px-4 py-3 hover-background transition">

                            <i class="bi bi-laptop"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Active Sessions
                            </span>

                        </button>

                    </div>

                    <!-- Preferences -->
                    <div class="mt-4">

                        <div class="px-4 pb-2 text-xs uppercase text-secondary">
                            Preferences
                        </div>

                        <button class="w-full flex items-center gap-3 px-4 py-3 hover-background text-primary">

                            <i class="bi bi-bell"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Notifications
                            </span>

                        </button>

                        <button class="w-full flex items-center gap-3 px-4 py-3 hover-background text-primary">

                            <i class="bi bi-palette"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Appearance
                            </span>

                        </button>

                        <button class="w-full flex items-center gap-3 px-4 py-3 hover-background text-primary">

                            <i class="bi bi-translate"></i>

                            <div class="w-px h-2 border-r border-soft"></div>

                            <span class="text-sm">
                                Language
                            </span>

                        </button>

                    </div>

                </aside>

            </div>

            <!-- Content -->
            <div class="flex-1 overflow-auto">

                <div class="w-full flex items-center px-4 justify-between h-15 border-b border-soft">

                    <div class="text-primary font-medium">
                        Profile Settings
                    </div>

                    <button>
                        <i class="bi bi-x-lg"></i>
                    </button>

                </div>

                <div x-collapse x-show="page == 'd_1'" x-cloak>
                    @livewire('profile.page.d_1')
                </div>

                <div x-collapse x-show="page == 'd_2'" x-cloak>
                    @livewire('profile.page.d_2')
                </div>

                <div x-collapse x-show="page == 'd_3'" x-cloak>
                    @livewire('profile.page.d_3')
                </div>

                <div x-collapse x-show="page == 'd_4'" x-cloak>
                    @livewire('profile.page.d_4')
                </div>

            </div>

        </div>

    </div>

</div>
