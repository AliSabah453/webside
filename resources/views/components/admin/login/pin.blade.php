<form class="flex flex-col gap-6" autocomplete="off" wire:submit.prevent="check_pin">

    {{-- ================= Header ================= --}}
    <div class="flex flex-col gap-5 text-sm">

        {{-- Shield --}}
        <div class="space-y-4 text-center">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl">
                <i class="bi bi-shield-lock-fill text-5xl text-sky-400"></i>
            </div>

            <div class="space-y-2">

                <h3 class="text-2xl font-bold tracking-tight text-primary">
                    تسجيل الدخول الآمن
                </h3>

                <p class="text-sm leading-6 text-secondary">
                    أدخل رمز التحقق للوصول إلى حسابك
                </p>

            </div>

        </div>
        <br>

        {{-- Info Box --}}
        <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-center gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-sky-400"></span>
            </span>
            <div class="h-4 border-r border-soft w-px"></div>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-secondary sm:text-sm">
                    يتم استخدام رمز PIN للتحقق من هوية المستخدم وحماية الحساب
                </p>

            </div>

        </div>

    </div>

    {{-- ================= PIN Input ================= --}}
    <div class="flex flex-col gap-4">

        <div class="flex flex-col gap-4">


            <div class="relative flex overflow-hidden rounded-xl border border-soft bg-box">

                <div class="flex h-14 w-full items-center">

                    <i class="bi bi-person-lock px-4 text-xl"></i>

                    <input maxlength="4" type="password" placeholder=  "  PIN أدخل رمز  "
                        class="h-14 w-full bg-transparent text-center text-sm tracking-[0.4em] outline-none"
                        wire:model="pin" />

                </div>

                <div class="flex h-14 items-center justify-center px-4">

                    <button wire:loading.remove wire:target="check_pin" type="submit"
                        class="cursor-pointer pt-1 text-sky-400">
                        <i class="bi bi-arrow-right-short text-2xl"></i>
                    </button>

                    <div class=" flex items-center pt-2" wire:loading wire:target="check_pin">
                        <div class="loader_21 h-6 w-6 animate-spin rounded-full  border-2 border-sky-700"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    @if (session('status'))
        <div class="rounded-xl text-center text-sm text-red-400">
            اسم المستخدم أو رمز الدخول غير صحيحة

        </div>
    @endif



</form>
