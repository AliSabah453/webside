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
         Active Sessions
     </h2>

     <p class="mt-1 text-sm text-secondary">
         Update your account information.
     </p>

     <main class="min-w-0 space-y-5">




         <div class="px-4">
             <div class="h-px border-t border-dashed border-neutral"></div>
         </div>

         <div class="flex flex-col gap-2">

             <!-- Session 1 -->
             <div
                 class="flex items-center overflow-auto justify-between rounded-xl border border-dashed border-neutral p-4 transition hover-background">

                 <div class="flex items-center">

                     <div class="flex items-center justify-center rounded-2xl px-2 text-emerald-400">
                         <i class="bi bi-windows text-lg"></i>
                     </div>

                     <div class="mx-4 h-4 w-px border-r border-neutral"></div>

                     <div class="min-w-0">

                         <div class="flex items-center gap-2">

                             <h4 class="text-sm font-bold text-primary">
                                 Windows Desktop
                             </h4>

                         </div>

                         <div class="mt-1 flex flex-wrap items-center gap-2 text-[11px] text-secondary">

                             <span>Desktop</span>

                             <span class="text-secondary/40">•</span>

                             <span>Active now</span>

                             <span class="text-secondary/40">•</span>

                             <span>Chrome 138.0</span>

                         </div>

                     </div>

                 </div>

                 <div class="text-right">

                     <span class="text-xs font-bold text-green-500">
                         نشطة الآن
                     </span>

                 </div>

             </div>

             <!-- Session 2 -->
             <div
                 class="flex items-center overflow-auto justify-between rounded-xl border-2 border-dashed border-neutral p-4 transition hover-background">

                 <div class="flex items-center">

                     <div class="flex items-center justify-center rounded-2xl px-2 text-sky-400">
                         <i class="bi bi-phone text-lg"></i>
                     </div>

                     <div class="mx-4 h-4 w-px border-r border-neutral"></div>

                     <div class="min-w-0">

                         <h4 class="text-sm font-bold text-primary">
                             Android Device
                         </h4>

                         <div class="mt-1 flex flex-wrap items-center gap-2 text-[11px] text-secondary">

                             <span>Mobile</span>

                             <span class="text-secondary/40">•</span>

                             <span>5 minutes ago</span>

                             <span class="text-secondary/40">•</span>

                             <span>Chrome Mobile</span>

                         </div>

                     </div>

                 </div>

                 <div class="text-right">

                     <button type="button"
                         class="inline-flex items-center gap-2 rounded-xl border border-transparent px-3.5 py-3 text-xs font-bold text-red-500 transition hover:border-red-500/10 hover:bg-red-500/[0.04] sm:text-sm">

                         <span>إنهاء الجلسة</span>
                         <i class="bi bi-box-arrow-right text-xs"></i>

                     </button>

                 </div>

             </div>

             <!-- Session 3 -->
             <div
                 class="flex items-center overflow-auto justify-between rounded-xl border-2 border-dashed border-neutral p-4 transition hover-background">

                 <div class="flex items-center">

                     <div class="flex items-center justify-center rounded-2xl px-2 text-orange-400">
                         <i class="bi bi-tablet text-lg"></i>
                     </div>

                     <div class="mx-4 h-4 w-px border-r border-neutral"></div>

                     <div class="min-w-0">

                         <h4 class="text-sm font-bold text-primary">
                             iPad Tablet
                         </h4>

                         <div class="mt-1 flex flex-wrap items-center gap-2 text-[11px] text-secondary">

                             <span>Tablet</span>

                             <span class="text-secondary/40">•</span>

                             <span>2 hours ago</span>

                             <span class="text-secondary/40">•</span>

                             <span>Safari</span>

                         </div>

                     </div>

                 </div>

                 <div class="text-right">

                     <button type="button"
                         class="inline-flex items-center gap-2 rounded-xl border border-transparent px-3.5 py-3 text-xs font-bold text-red-500 transition hover:border-red-500/10 hover:bg-red-500/[0.04] sm:text-sm">

                         <span>إنهاء الجلسة</span>
                         <i class="bi bi-box-arrow-right text-xs"></i>

                     </button>

                 </div>

             </div>

         </div>


     </main>

     @livewire('tools.session.startSession')

 </div>
