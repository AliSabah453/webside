<div x-cloak x-show = 'menu' class="flex fixed  z-10  w-full ">

    {{-- Sidebar / Main Area --}}
    <div x-on:click = "menu = ! menu" class="flex-1  backdrop-blur-sm h-screen">
    </div>

    {{-- Right Menu (Drawer) --}}
    <div x-show = 'menu' x-transition
        class="fixed overflow-auto right-0 top-0 h-screen w-96 border-l border-soft bg-box p-5  ">
        <br>
        @if ($rememberMe)
            {{-- ================= Profile ================= --}}
            <div class="flex justify-center">
                <div class="relative">

                    <div class="rounded-full border border-soft bg-secondary p-1 shadow-soft">


                        @if ($rememberMe->avatar)
                            <img src="{{ $rememberMe->avatar ? asset('storage/' . $rememberMe->avatar) : '' }}"
                                alt="User Avatar" class="h-20 w-20 rounded-full bg-box" />
                        @else
                            <img src="https://api.dicebear.com/9.x/fun-emoji/svg?seed=alex" alt="User Avatar"
                                class="h-20 w-20 rounded-full bg-box" />
                        @endif
                    </div>


                </div>
            </div>
            <br>
            {{-- ================= Welcome ================= --}}
            <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="space-y-2 text-center">

                <h2 class="text-2xl font-bold tracking-tight text-primary">
                    مرحباً، {{ $rememberMe->name }}
                </h2>

            </div>

            {{-- ================= Security Card ================= --}}
            <br>
            <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                class="flex items-center gap-3 rounded-2xl border border-soft bg-box p-4 transition hover-background">

                <span class="  flex h-5 w-5 items-center justify-center rounded-full border border-soft">
                    <span class="h-2 w-2 rounded-full bg-sky-400"></span>
                </span>
                <div class="h-4 border-r border-soft w-px"></div>


                <div class="flex-1 leading-6">

                    <span class="text-sm text-secondary">

                        يتم تأمين الجلسة باستخدام طبقات حماية وتشفير لضمان أمان بياناتك.

                    </span>

                </div>

            </div>
        @else
            <br>
            {{-- ================= Guest Info ================= --}}
            <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                class="flex items-start gap-3 rounded-2xl border border-soft bg-box p-4 transition hover-background">

                <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                    <span class="h-2 w-2 rounded-full bg-orange-400"></span>
                </span>

                <div class="min-w-0 flex-1 leading-6">

                    <p class="text-xs font-medium leading-6 text-secondary sm:text-sm">
                        {{ __('company/auth/menu.guest_desc') }}
                    </p>



                </div>

            </div>
        @endif


        <br>
        {{-- Theme --}}
        <label for="switchlad"
            class="flex cursor-pointer items-center justify-between rounded-2xl border border-soft bg-box p-4 transition-all duration-200 hover-background">

            <div class="flex items-center gap-3">

                <div class="flex w-7 items-center justify-center text-primary">
                    <i class="bi bi-moon-stars"></i>
                </div>

                <div class="h-4 border-r border-soft w-px"></div>

                <div>
                    <p class="text-sm font-medium text-primary" x-text="moon ? 'الوضع الداكن' : 'الوضع الفاتح'">
                    </p>

                    <p class="mt-1 text-xs text-secondary">
                        تخصيص واجهة الاستخدام
                    </p>
                </div>
            </div>

            {{-- Toggle --}}
            <span class="relative inline-block h-5 w-10">

                <input id="switchlad" type="checkbox" class="peer sr-only" x-bind:checked="moon"
                    @change="toggle()" />

                <span
                    class="absolute inset-0 rounded-full border border-soft bg-red-500/60 transition peer-checked:bg-orange-400/60"></span>

                <span
                    class="absolute left-0.5 top-1/2 h-4 w-4 -translate-y-1/2 rounded-full bg-white transition peer-checked:translate-x-5"></span>

            </span>

        </label>

        <br>

        @if ($rememberMe)
            {{-- Clear Session --}}
            <button wire:click="clearRememberSession"
                class="flex items-center  absolute bottom-4 right-4 left-4 justify-between cursor-pointer rounded-2xl border-2   border-dashed border-red-500/20 bg-red-500/5 px-4 py-4 transition-all duration-200 hover:bg-red-500/10">

                <div class="flex items-center gap-3">

                    <div class="flex w-7 items-center justify-center text-primary">
                        <i class="bi bi-trash3"></i>
                    </div>

                    <div class="h-4 border-r border-soft w-px"></div>

                    <div class="text-start">

                        <p class="text-sm font-medium text-red-400">
                            حذف الجلسة الحالية
                        </p>
                        <p class="mt-1 text-xs text-secondary">
                            إزالة الحساب المحفوظ وتسجيل الدخول مرة أخرى
                        </p>

                    </div>

                </div>


            </button>
        @endif
    </div>



</div>
