<?php

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Events\TestMessageEvent;

new class extends Component {
    public $idSession;
    public function startSession()
    {
        $this->validate([
            'idSession' => 'required|string|min:6',
        ]);
        $data = [
            'session' => $this->idSession,
            'id' => Auth::user()->id,
            'domain' => Request::getHost(),
        ];

        event(new TestMessageEvent($data));
    }
};
?>

<div>
    <div x-show="startSession" x-transition class="  inset-0 z-50 flex items-center justify-center  ">

        <form wire:submit.prevent="startSession" autocomplete="off"
            class="w-full max-w-md mx-4 rounded-2xl border border-soft bg-box p-6  ">

            {{-- Header --}}
            <div class="mb-6 text-center">
                <div
                    class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-sky-400/10 text-sky-400">
                    <i class="bi bi-door-open text-2xl"></i>
                </div>

                <h2 class="text-xl font-semibold text-primary">
                    بدء جلسة جديدة
                </h2>

                <p class="mt-2 text-sm text-secondary">
                    أدخل رقم الجلسة المرسل إليك للمتابعة وتسجيل الدخول
                </p>
            </div>

            {{-- Information --}}
            <div class="mb-6 flex flex-col gap-3 text-sm">

                <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                    class="flex items-start gap-3 rounded-xl border border-soft bg-background p-4">

                    <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                        <span class="h-2 w-2 rounded-full bg-sky-400"></span>
                    </span>

                    <div class="h-4 border-r border-soft w-px"></div>

                    <p class="leading-6 text-secondary">
                        تأكد من إدخال رقم الجلسة بشكل صحيح للانضمام إلى الجلسة.
                    </p>
                </div>

                <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                    class="flex items-start gap-3 rounded-xl border border-soft bg-background p-4">

                    <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full border border-soft">
                        <span class="h-2 w-2 rounded-full bg-sky-400"></span>
                    </span>

                    <div class="h-4 border-r border-soft w-px"></div>

                    <p class="leading-6 text-secondary">
                        جميع بيانات الجلسة محمية ويتم استخدامها لأغراض تسجيل الدخول فقط.
                    </p>
                </div>

            </div>

            {{-- Session Input --}}
            <div class="mb-4">



                <div
                    class="flex overflow-hidden rounded-xl border border-soft bg-background focus-within:ring-2 focus-within:ring-sky-400/30">

                    <div class="flex h-14 w-full items-center">
                        <i class="bi bi-hash px-4 text-lg text-primary"></i>

                        <input type="text" wire:model.live="idSession" placeholder="أدخل رقم الجلسة"
                            class="h-14 w-full bg-transparent text-sm text-secondary outline-none">
                    </div>

                </div>

                @error('idSession')
                    <p class="mt-2 text-xs text-red-400">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            {{-- Error Message --}}
            @if (session('status'))
                <div
                    class="mb-4 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-center text-sm text-red-400">
                    رقم الجلسة غير صحيح أو غير موجود
                </div>
            @endif

            {{-- Submit --}}
            <button type="submit" wire:loading.remove wire:target="startSession"
                class="flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-sky-500 text-sm font-medium text-white transition hover:bg-sky-600">

                <i class="bi bi-box-arrow-in-right"></i>
                <span>الدخول إلى الجلسة</span>
            </button>

            {{-- Loader --}}
            <div wire:loading wire:target="startSession"
                class="flex h-12 items-center justify-center rounded-xl border border-soft">

                <div class="loader_21 h-6 w-6 animate-spin rounded-full border-2 border-sky-500"></div>

            </div>

        </form>

    </div>
</div>
