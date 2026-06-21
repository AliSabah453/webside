<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()->layout('components.admin.layout.app')->title('Dashboard');
    }
};
?>

<div>
    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 md:gap-4">

        <div class="flex min-h-[96px] items-center gap-4 rounded-2xl border border-neutral bg-box p-5 hover-background">
            <span class="h-14 w-1 rounded-full bg-orange-500"></span>

            <div class="flex flex-1 items-center justify-between">
                <div>
                    <span class="text-sm text-secondary">
                        dwdwd
                    </span>

                    <h3 class="text-xl font-bold text-primary">
                        {{ number_format(111111) }} د.ع
                    </h3>
                </div>

                <i class="bi bi-people-fill text-2xl text-orange-500"></i>
            </div>
        </div>

        <div class="flex min-h-[96px] items-center gap-4 rounded-2xl border border-neutral bg-box p-5 hover-background">
            <span class="h-14 w-1 rounded-full bg-green-500"></span>

            <div class="flex flex-1 items-center justify-between">
                <div>
                    <span class="text-sm text-secondary">
                        dwdwd
                    </span>

                    <h3 class="text-xl font-bold text-primary">
                        {{ number_format(111111) }} د.ع
                    </h3>
                </div>

                <i class="bi bi-check2-circle text-2xl text-green-500"></i>
            </div>
        </div>

        <div class="flex min-h-[96px] items-center gap-4 rounded-2xl border border-neutral bg-box p-5 hover-background">
            <span class="h-14 w-1 rounded-full bg-purple-500"></span>

            <div class="flex flex-1 items-center justify-between">
                <div>
                    <span class="text-sm text-secondary">
                        dwdwd
                    </span>

                    <h3 class="text-xl font-bold text-primary">
                        {{ number_format(111111) }} د.ع

                    </h3>
                </div>

                <i class="bi bi-slash-circle text-2xl text-purple-500"></i>
            </div>
        </div>

        <div class="flex min-h-[96px] items-center gap-4 rounded-2xl border border-neutral bg-box p-5 hover-background">
            <span class="h-14 w-1 rounded-full bg-blue-500"></span>

            <div class="flex flex-1 items-center justify-between">
                <div>
                    <span class="text-sm text-secondary">
                        dwdwd
                    </span>

                    <h3 class="text-xl font-bold text-primary">
                        {{ number_format(111111) }} د.ع
                    </h3>
                </div>

                <i class="bi bi-cash-stack text-2xl text-blue-500"></i>
            </div>
        </div>

    </div>
    <br>
    <div class="grid grid-cols-3 xl:grid-cols-3 gap-4  ">
        <div class="w-full h-24 border border-neutral rounded-xl"></div>
        <div class="w-full h-24 border border-neutral rounded-xl col-span-2"></div>
        <div class="w-full h-24 border border-neutral rounded-xl col-span-2"></div>
        <div class="w-full h-24 border border-neutral rounded-xl"></div>
        <div class="w-full h-24 border border-neutral rounded-xl"></div>
        <div class="w-full h-24 border border-neutral rounded-xl col-span-2"></div>
    </div>
    <!---->
</div>
