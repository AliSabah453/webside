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
            <div class="flex flex-col items-center text-center space-y-5">

                {{-- Avatar --}}
                <div class="relative">
                    <div class="rounded-full border border-soft bg-secondary p-1 shadow-soft">

                        @if ($rememberMe && $rememberMe->avatar)
                            <img src="{{ asset('storage/' . $rememberMe->avatar) }}" alt="User Avatar"
                                class="h-20 w-20 rounded-full bg-box" />
                        @else
                            <img src="https://api.dicebear.com/9.x/fun-emoji/svg?seed=alex" alt="User Avatar"
                                class="h-20 w-20 rounded-full bg-box" />
                        @endif

                    </div>
                </div>

                {{-- Name + Role --}}
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-primary">

                        مرحباً، {{ $rememberMe->name }}

                    </h2>

                    <p class="text-sm leading-6 text-secondary">

                        تم تجهيز جلسة العمل الخاصة بك، أدخل رمز PIN للمتابعة.

                    </p>

                </div>

                {{-- Security Card --}}
                <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                    class="w-full flex items-center gap-3 rounded-2xl border border-soft bg-box p-4 transition hover-background">

                    {{-- Status indicator --}}
                    <span class="flex h-5 w-5 items-center justify-center rounded-full border border-soft">
                        <span class="h-2 w-2 rounded-full bg-sky-400"></span>
                    </span>

                    <div class="h-4 border-r border-soft w-px"></div>

                    {{-- Text --}}
                    <div class="flex-1 leading-6 text-start">
                        <p class="text-sm text-secondary">
                            الجلسة محمية بطبقات تشفير وصلاحيات وصول خاصة بلوحة الإدارة.
                        </p>
                    </div>

                </div>

            </div>
        @else
            <div class="flex flex-col items-center text-center space-y-5">

                {{-- Icon --}}
                <div class="flex justify-center w-full">
                    <div class="rounded-full border border-soft bg-secondary p-6 shadow-sm">
                        <i class="bi bi-person-lock text-sky-400 text-6xl"></i>
                    </div>
                </div>

                {{-- Title --}}
                <div>
                    <h2 class="text-lg font-bold text-primary">
                        غير مسجل حالياً
                    </h2>
                    <p class="text-xs text-secondary mt-1 leading-5">
                        يمكنك تصفح المحتوى، لكن بعض الميزات ستكون محدودة
                    </p>
                </div>
            </div>
            <br>
            <div class="px-10">
                <hr class=" border-t border border-soft">
            </div>
            <br>

            <div class="max-w-md mx-auto   border border-soft bg-box  rounded-xl  p-6">

                {{-- Title --}}
                {{-- Title --}}
                <p class="text-sm text-secondary mb-4">
                    رمز تسجيل الدخول
                </p>

                {{-- Code --}}
                <div class="text-3xl tracking-[0.3em] font-semibold text-primary mb-4">
                    {{ app('channel_id') }}
                </div>

                {{-- Info --}}
                <p class="text-xs leading-6 text-secondary mb-2">
                    أدخل هذا الرمز في الجهاز الآخر لتسجيل الدخول إلى حسابك مباشرةً دون الحاجة إلى كلمة المرور.
                </p>

                <p class="text-xs leading-6 text-secondary">
                    الرمز صالح لمدة <span class="font-semibold">15 دقيقة</span> ويُستخدم لمرة واحدة فقط.
                </p>

            </div>
        @endif





        <div class="absolute flex flex-col gap-3 bottom-4 right-4 left-4">
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
                        class="absolute inset-0 rounded-full border border-soft bg-red-500/60 transition peer-checked:bg-sky-400/60"></span>

                    <span
                        class="absolute left-0.5 top-1/2 h-4 w-4 -translate-y-1/2 rounded-full bg-white transition peer-checked:translate-x-5"></span>

                </span>

            </label>
            @if ($rememberMe)
                {{-- Clear Session --}}
                <button wire:click="clearRememberSession"
                    class="flex items-center   w-full  justify-between cursor-pointer rounded-2xl border-2   border-dashed border-red-500/20 bg-red-500/5 px-4 py-4 transition-all duration-200 hover:bg-red-500/10">

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



</div>
