<form class="flex flex-col gap-6" autocomplete="off" wire:submit.prevent="login">

    {{-- ================= Info Cards ================= --}}
    <div class="flex flex-col gap-4 text-sm">

        {{-- Card 1 --}}
        <div x-on:click="toggle()" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-center gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-sky-400"></span>
            </span>
            <div class="h-4 border-r border-soft w-px"></div>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-primary sm:text-sm">
                    تأكد من إدخال بيانا تأكد من إدخال بياناتك بشتك بشكل صحيح لتسجيل الدخول
                </p>

            </div>

        </div>

        {{-- Card 2 --}}
        <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
            class="flex items-center gap-3 rounded-xl border-2 border-dashed border-soft bg-box p-4 transition hover-background">

            <span class="flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                <span class="h-2 w-2 rounded-full bg-sky-400"></span>
            </span>
            <div class="h-4 border-r border-soft w-px"></div>

            <div class="min-w-0 flex-1 leading-6">

                <p class="text-xs font-medium leading-6 text-primary sm:text-sm">
                    بياناتك محمية ولا يتم مشاركتها مع أي جهة خارجية
                </p>



            </div>

        </div>

    </div>

    {{-- ================= Username ================= --}}
    <div class="flex flex-col gap-4">

        <div
            class="flex    overflow-hidden rounded-xl border border-soft   bg-box 
              
            focus-within:ring-2
           focus-within:ring-sky-400/30">

            {{-- Input Area --}}
            <div class="flex h-14 w-full items-center">

                <i class="bi bi-person px-4 text-lg text-primary"></i>

                <input type="text" placeholder="Username" class="h-14 w-full  text-secondary text-sm outline-none"
                    wire:model="username" />

            </div>

            {{-- Action Button --}}
            <div class="flex h-14 items-center justify-center px-4">

                <button wire:loading.remove wire:target="login" type="submit" class="cursor-pointer pt-1 text-sky-400">
                    <i class="bi bi-arrow-right-short text-2xl"></i>
                </button>

                <div class=" flex items-center pt-2" wire:loading wire:target="login">
                    <div class="loader_21 h-6 w-6 animate-spin rounded-full  border-2 border-sky-700"></div>
                </div>

            </div>

        </div>

    </div>

    {{-- ================= Error ================= --}}
    @if (session('status'))
        <div class="alert text-center text-red-400">
            اسم المستخدم أو كلمة المرور غير صحيحة
        </div>
    @endif

    {{-- ================= Loader Style ================= --}}



</form>
