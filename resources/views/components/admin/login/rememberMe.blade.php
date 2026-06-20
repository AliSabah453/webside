<form class="flex flex-col gap-8" wire:submit.prevent="check_pin('{{ $rememberMe->user_name }}')" autocomplete="off">

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

        <h2 class="text-2xl font-bold text-primary">

            مرحباً، {{ $rememberMe->name }}

        </h2>

        <p class="text-sm leading-6 text-secondary">

            تم تجهيز جلسة العمل الخاصة بك، أدخل رمز PIN للمتابعة.

        </p>

    </div>

    {{-- ================= Info Card ================= --}}
    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
        class="flex items-center gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

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

    {{-- ================= PIN ================= --}}
    <div class="flex flex-col gap-4">


        <div class="flex overflow-hidden rounded-xl border border-soft bg-box">

            <div class="flex h-14 w-full items-center">

                <i class="bi bi-person-lock px-4 text-xl"></i>

                <input maxlength="4" type="password" placeholder= "  PIN أدخل رمز  "
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

    {{-- ================= Errors ================= --}}
    @if (session('status'))
        <div class="rounded-xl text-center text-sm text-red-400">
            اسم المستخدم أو رمز الدخول غير صحيحة

        </div>
    @endif



</form>
