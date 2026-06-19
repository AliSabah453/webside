<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        $template = app('info')->template_type;

        return $this->view()->layout("components.customer.website.$template.page.layout.app");
    }
};
?>

<div>
    11111
</div>
