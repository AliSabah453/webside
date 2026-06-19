<?php

use Livewire\Component;
use App\Models\admin\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

new class extends Component {
    public function render()
    {
        return $this->view()->layout('components.admin.layout.app');
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
};
?>

<div>























    <div class="flex w-full h-full items-center justify-center px-4  text-primary">
        <div class="w-full max-w-105">
            @if ($rememberMe)
                @include('components.admin.login.rememberMe')
            @else
                @if ($exists)
                    <div class=" transition-opacity duration-750 opacity-100 starting:opacity-0">
                        @include('components.admin.login.pin')

                    </div>
                @else
                    @include('components.admin.login.login')
                @endif
            @endif
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
