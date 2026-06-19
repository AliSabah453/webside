<form class="flex flex-col gap-6" autocomplete="off" wire:submit.prevent="check_pin">

    {{-- ================= Header ================= --}}
    <div class="flex flex-col gap-5 text-sm">

        {{-- Shield --}}
        <div class="space-y-4 text-center">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl">
                <i class="bi bi-shield-lock-fill text-4xl text-orange-400"></i>
            </div>

            <div class="space-y-2">

                <h3 class="text-2xl font-bold tracking-tight text-primary">
                    {{ __('company/auth/pin.secure_access') }}
                </h3>

                <p class="text-sm leading-6 text-secondary">
                    {{ __('company/auth/pin.secure_description') }}
                </p>

            </div>

        </div>

        {{-- Info Box --}}
        <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-start gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-orange-400"></span>
            </span>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-secondary sm:text-sm">
                    {{ __('company/auth/pin.system_description') }}
                </p>


            </div>

        </div>

    </div>

    {{-- ================= PIN Input ================= --}}
    <div class="flex flex-col gap-4">

        <div class="flex flex-col gap-4">

            <label class="text-sm text-secondary px-2">
                {{ __('company/auth/pin.pin_label') }}
            </label>

            <div class="relative overflow-hidden border  border-soft rounded-xl bg-box flex">

                <div class="flex h-14 items-center border border-soft w-full bg-box rounded-xl">

                    <i class="bi bi-person-lock text-xl px-4"></i>

                    <input maxlength="4" type="password" placeholder="{{ __('company/auth/pin.pin_placeholder') }}"
                        class="w-full bg-transparent h-14 text-sm text-center tracking-[0.4em] outline-none"
                        wire:model="pin" />

                </div>

                <div class="h-14 px-4 flex items-center justify-center">

                    <button wire:loading.remove wire:target="check_pin" type="submit"
                        class="text-orange-400 cursor-pointer">

                        <i class="bi bi-arrow-right-short text-2xl"></i>

                    </button>

                    <span wire:loading wire:target="check_pin" class="z-20 mt-1">

                        <div class="loader_21 h-6 w-6 border-2 border-indigo-700 rounded-full animate-spin"></div>

                    </span>

                </div>

            </div>

        </div>

    </div>

    {{-- ================= Divider ================= --}}
    <div class="px-8">
        <div class="h-px w-full border-t border-soft"></div>
    </div>

    {{-- ================= Footer ================= --}}
    <div class="text-center">

        <span class="inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-bold text-secondary sm:text-sm">

            <i class="bi bi-shield-check text-orange-400"></i>

            {{ __('company/auth/pin.privacy') }}

        </span>

    </div>

</form>

<style>
    .loader_21 {
        border-bottom-color: transparent;
        border-radius: 9999px;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 0.8s linear infinite;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
