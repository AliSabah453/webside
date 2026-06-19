<form class="flex flex-col gap-8" wire:submit.prevent="check_pin({{ $rememberMe->user_name }})" autocomplete="off">

    {{-- ================= Profile ================= --}}
    <div class="flex justify-center">

        <div class="relative">

            <div class="rounded-full border border-soft p-1 shadow-soft">



                @if ($rememberMe->avatar)
                    <img src="{{ $rememberMe->avatar ? asset('storage/' . $rememberMe->avatar) : '' }}"
                        class="h-32 w-32 rounded-full bg-box" />
                @else
                    <img src="https://api.dicebear.com/9.x/fun-emoji/svg?seed=alex"
                        class="h-32 w-32 rounded-full bg-box" />
                @endif

            </div>

        </div>

    </div>

    {{-- ================= Welcome ================= --}}
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="space-y-2 text-center">

        <h2 class="text-2xl text-primary font-bold">

            مرحباً, {{ $rememberMe->name }}

        </h2>

        <p class="text-sm leading-6 text-secondary">

            مساحة العمل الآمنة الخاصة بك جاهزة، أدخل رمز PIN للمتابعة.

        </p>

    </div>

    {{-- ================= Info Card ================= --}}
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
        class="flex items-start gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

        <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">

            <span class="h-2 w-2 rounded-full bg-orange-400"></span>

        </span>

        <div class="flex-1 leading-6">

            <span class="text-sm text-secondary">

                جلسة العمل الخاصة بك محمية باستخدام تقنية مصادقة متعددة الطبقات وتشفير آمن.
            </span>



        </div>

    </div>

    {{-- ================= PIN ================= --}}
    <div class="flex flex-col gap-4">

        <label class="text-sm text-secondary px-2">

            أدخل رمز PIN للمتابعة

        </label>

        <div class="flex overflow-hidden border  border-soft rounded-xl bg-box">

            <div class="flex h-14 items-center border border-soft w-full bg-box rounded-xl">

                <i class="bi bi-person-lock text-xl px-4"></i>

                <input maxlength="4" type="password" placeholder="{{ __('company/auth/rememberMe.pin_placeholder') }}"
                    class="w-full bg-transparent h-14 text-sm text-center tracking-[0.4em] outline-none"
                    wire:model="pin" />

            </div>

            <div class="h-14 px-4 flex items-center justify-center">

                <button type="submit" wire:loading.remove wire:target="check_pin_rememberMe" class="text-orange-400">

                    <i class="bi bi-arrow-right-short text-2xl"></i>

                </button>

                <span wire:loading wire:target="check_pin_rememberMe">

                    <div class="loader_21 h-6 w-6 border-2 border-indigo-700 rounded-full animate-spin"></div>

                </span>

            </div>

        </div>

    </div>

    {{-- ================= Errors ================= --}}
    @if (session('checkPin'))
        <div class="rounded-xl text-center text-sm text-red-400">

            {{ __('company/auth/rememberMe.invalid_info') }}

        </div>
    @endif

    {{-- ================= Divider ================= --}}
    <div class="px-8">
        <div class="h-[0.5] w-full border-t border border-soft"></div>
    </div>

    {{-- ================= Footer ================= --}}
    <div class="text-center">

        <span class="inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs text-secondary sm:text-sm">

            <i class="bi bi-shield-check text-orange-400"></i>

            نحن نحافظ على خصوصية بياناتك

        </span>

    </div>

</form>
