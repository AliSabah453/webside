 <?php
 
 use Livewire\Component;
 
 new class extends Component {
     public function render()
     {
         return $this->view()->layout('components.admin.layout.app')->title('Dashboard');
     }
 };
 ?>

 <div class="rounded-xl bg-box p-6">

     <h2 class="text-xl font-semibold text-primary">
         Personal Information 3
     </h2>

     <p class="mt-1 text-sm text-secondary">
         Update your account information.
     </p>

     <div class="grid grid-cols-2 gap-4 mt-6">

         <div>
             <label class="flex justify-between mb-2 px-1 text-sm text-secondary">
                 <span> First Name</span>
                 <i class="bi text-lg bi-person"></i>
             </label>

             <input type="text"
                 class="w-full focus-within:ring-2 focus-within:ring-sky-400/30 outline-none rounded-lg border border-soft bg-main px-4 py-3">
         </div>

         <div>
             <label class="flex justify-between mb-2 px-1 text-sm text-secondary">
                 <span> First Name</span>
                 <i class="bi text-lg bi-person"></i>
             </label>

             <input type="text"
                 class="w-full  focus-within:ring-2 focus-within:ring-sky-400/30 outline-none rounded-lg border border-soft bg-main px-4 py-3">
         </div>

     </div>

 </div>
