<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        $template = app('info')->template_type;
        return $this->view()->layout("components.customer.website.$template.dashboard.layout.app");
    }
};
?>

<div>
    {{-- Smile, breathe, and go slowly. - Thich Nhat Hanh --}}
</div>
