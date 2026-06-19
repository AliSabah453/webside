<form class="flex flex-col gap-6" autocomplete="off" wire:submit.prevent="login">

    {{-- ================= Info Cards ================= --}}
    <div class="flex flex-col gap-4 text-sm">

        {{-- Card 1 --}}
        <div x-on:click="toggle()" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-start gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-orange-400"></span>
            </span>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-primary sm:text-sm">
                    dwadadwadwadawdawdawdawd
                </p>



            </div>

        </div>

        {{-- Card 2 --}}
        <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-start gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-orange-400"></span>
            </span>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-primary sm:text-sm">
                    dwadwadwadwadwawada
                </p>



            </div>

        </div>

    </div>

    {{-- ================= Username ================= --}}
    <div class="flex flex-col gap-4">

        <label class="text-sm text-secondary px-2">
            dwadwadwad
        </label>

        <div class="relative overflow-hidden border  border-soft rounded-xl bg-box flex">

            <div class="flex h-14 items-center border rounded-xl border-soft w-full bg-box">

                <i class="bi bi-person text-lg text-primary px-4"></i>

                <input type="text" placeholder="Username" class="w-full bg-transparent h-14 text-sm outline-none"
                    wire:model="username" />

            </div>

            <div class="h-14 px-4 flex items-center justify-center">

                <button wire:loading.remove wire:target="login" type="submit" class="text-orange-400 cursor-pointer">

                    <i class="bi bi-arrow-right-short text-2xl"></i>

                </button>

                <span wire:loading wire:target="login" class="z-20 mt-1">

                    <div class="loader_21 h-6 w-6 border-2 border-indigo-700 rounded-full animate-spin"></div>

                </span>

            </div>

        </div>

    </div>

    {{-- ================= Error ================= --}}
    @if (session('status'))
        <div class="alert alert-success text-red-400 text-center">

            {{ __('company/auth/login.invalid_info') }}

        </div>
    @endif

    {{-- ================= Loader Style ================= --}}


    {{-- ================= Divider ================= --}}
    <div class="px-10">
        <div class="h-[0.5] w-full border-t border border-soft"></div>
    </div>

    {{-- ================= Footer ================= --}}
    <div class="text-center">

        <span class="inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs text-secondary sm:text-sm">

            <i class="bi bi-shield-check text-orange-400"></i>

            dawwadwad

        </span>

    </div>

</form>
