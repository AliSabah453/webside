<?php

use Livewire\Component;
use App\Models\admin\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

new class extends Component {
    public function render()
    {
        return $this->view()->layout('components.admin.layout.auth');
    }

    public $rememberMe;
    public $exists;
    public function mount()
    {
        $cookie = Cookie::get('remember_me');

        if ($cookie) {
            $this->rememberMe = User::where('remember_token', $cookie)->first();
        }
    }

    public $username;
    public function login()
    {
        $this->exists = User::where('user_name', $this->username)->first();
        if ($this->exists) {
        } else {
            session()->flash('status', 'Post successfully updated.');
        }
    }

    public $pin;
    public function check_pin($user_name = '')
    {
        $user = User::where('user_name', $this->exists->user_name ?? $user_name)
            ->where('pin', $this->pin)
            ->first();

        if ($user) {
            $token = Str::random(60);

            $user->setRememberToken($token);
            $user->save();

            Cookie::queue('remember_me', $token, 525600);

            Auth::login($user);
            return $this->redirect('/dashboard', navigate: true);
        } else {
            session()->flash('status', 'Post successfully updated.');
        }
    }

    public function clearRememberSession()
    {
        Cookie::queue(Cookie::forget('remember_me'));

        return $this->redirect(request()->header('Referer') ?? '/', navigate: true);
    }
};
?>

<div x-data = "{menu:false}">

    @include('components.auth.login.tools.menu')


    <div class=" w-full flex justify-between p-4 sticky z-10 top-0">
        <div></div>
        <div> <i x-on:click = "menu = ! menu"
                class="bi  hover:text-sky-400 text-xl text-secondary transition-all  bi-gear cursor-pointer"></i></div>
    </div>

    <div
        class="flex   transition-opacity   duration-750 opacity-100 starting:opacity-0 w-full h-screen items-center justify-center px-4  text-primary">
        <div class="w-full  rounded-xl   max-w-105">
            @if ($rememberMe)
                @include('components.auth.login.rememberMe')
            @else
                @if ($exists)
                    <div class=" transition-opacity duration-750 opacity-100 starting:opacity-0">
                        @include('components.auth.login.pin')

                    </div>
                @else
                    @include('components.auth.login.login')
                @endif
            @endif
            <br>
            <br>
            {{-- ================= Divider ================= --}}
            <div class="px-10">
                <div class="w-full border-t border border-soft"></div>
            </div>
            <br>
            {{-- ================= Footer ================= --}}
            <div class="text-center">

                <span class="inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs text-secondary sm:text-sm">

                    <i class="bi bi-shield-check text-sky-400"></i>

                    جميع بينات مؤومنة

                </span>

            </div>
        </div>

    </div>




    <style>
        .loader_21 {
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
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


</div>
