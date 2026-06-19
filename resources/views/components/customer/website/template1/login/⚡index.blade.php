<?php

use Livewire\Component;
use App\Models\customer\User;
new class extends Component {
    public function render()
    {
        return $this->view()->layout('components.admin.layout.app');
    }

    public $pin;
    public $name;
    public $username;

    public function login()
    {
        $user = User::where('user_name', $this->username)->where('pin', $this->pin)->first();

        if (!$user) {
            dd('Invalid credentials');
        }

        Auth::login($user);

        dd('Logged in');
    }

    public function new_user()
    {
        User::create([
            'name' => $this->name,
            'user_name' => $this->username,
            'pin' => $this->pin,
        ]);

        dd('created');
    }
};
?>

<div>
    <div>
        <br>
        <form class=" flex flex-col gap-2 p-10" wire:submit.prevent = "login">
            <input class="border" wire:model = "username" placeholder="username" type="text">
            <input class="border" wire:model = "pin" placeholder="pin" type="password">
            <button type="submit">login</button>
        </form>
    </div>
    <br>
    <div>
        <br>
        <form class=" flex flex-col gap-2 p-10" wire:submit.prevent = "new_user">
            <input class="border" wire:model = "name" placeholder="name" type="text">
            <input class="border" wire:model = "username" placeholder="username" type="text">
            <input class="border" wire:model = "pin" placeholder="pin" type="text">

            <button type="submit">login</button>
        </form>
    </div>
</div>
