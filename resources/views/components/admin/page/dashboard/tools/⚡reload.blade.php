<?php

use Livewire\Component;

new class extends Component {
    public function reload()
    {
        return $this->redirect(request()->header('Referer') ?? '/', navigate: true);
    }
};

?>

<div>
    <i wire:click = "reload" class="bi cursor-pointer bi-arrow-clockwise"></i>
</div>
