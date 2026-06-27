<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        $template = app('info')->template_type;

        return $this->view()->layout("components.customer.website.$template.layout.app");
    }
};
?>

<div>
    {{-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi --}}
</div>
