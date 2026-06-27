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

<div class="bg-white dark:bg-slate-950">
 
 




    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/30 via-slate-950 to-cyan-500/20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="max-w-3xl">
                <div class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm text-slate-200 mb-6"
                     data-en="About Our Company" data-ar="من ?نحن">
                    About Our Company
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight"
                    data-en="We build digital experiences that help businesses grow."
                    data-ar="نبني تجارب رقمية تساعد الأعمال على النمو.">
                    We build digital experiences that help businesses grow.
                </h1>

                <p class="mt-6 text-lg text-slate-300 leading-8"
                   data-en="This page is designed as a flexible company profile section where every customer can present their story, mission, values and achievements."
                   data-ar="هذه الصفحة مصممة كملف تعريفي مرن للشركة، يستطيع كل زبون من خلالها عرض قصته ورسالته وقيمه وإنجازاته.">
                    This page is designed as a flexible company profile section where every customer can present their story, mission, values and achievements.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400"
                       data-en="Our Story" data-ar="قصتنا">
                        Our Story
                    </p>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 dark:text-white"
                        data-en="A modern template made for real businesses."
                        data-ar="قالب حديث مصمم للشركات الحقيقية.">
                        A modern template made for real businesses.
                    </h2>

                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-8"
                       data-en="Use this section to describe how the company started, what it offers, and why customers trust it. Later, this content can be controlled from the dashboard without changing the design."
                       data-ar="استخدم هذا القسم لشرح بداية الشركة، وما تقدمه، ولماذا يثق بها العملاء. لاحقاً يمكن التحكم بهذا المحتوى من لوحة التحكم بدون تعديل التصميم.">
                        Use this section to describe how the company started, what it offers, and why customers trust it. Later, this content can be controlled from the dashboard without changing the design.
                    </p>
                </div>

                <div class="rounded-[2rem] bg-slate-100 dark:bg-white/5 border border-slate-200 dark:border-white/10 p-8">
                    <div class="grid grid-cols-2 gap-5">
                        <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 shadow-sm">
                            <div class="text-3xl font-black text-indigo-600">500+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-2" data-en="Projects" data-ar="مشروع">Projects</div>
                        </div>
                        <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 shadow-sm">
                            <div class="text-3xl font-black text-indigo-600">120+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-2" data-en="Clients" data-ar="عميل">Clients</div>
                        </div>
                        <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 shadow-sm">
                            <div class="text-3xl font-black text-indigo-600">15+</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-2" data-en="Years" data-ar="سنة">Years</div>
                        </div>
                        <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 shadow-sm">
                            <div class="text-3xl font-black text-indigo-600">99%</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400 mt-2" data-en="Satisfaction" data-ar="رضا العملاء">Satisfaction</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50 dark:bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white"
                    data-en="Mission, Vision & Values"
                    data-ar="الرسالة والرؤية والقيم">
                    Mission, Vision & Values
                </h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300"
                   data-en="Clear sections ready to be customized for any customer business."
                   data-ar="أقسام واضحة وجاهزة للتخصيص لأي نشاط تجاري.">
                    Clear sections ready to be customized for any customer business.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-white/10 p-8 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-black mb-6">01</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Mission" data-ar="الرسالة">Mission</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300 leading-7"
                       data-en="Deliver reliable solutions that help customers present their business professionally."
                       data-ar="تقديم حلول موثوقة تساعد العملاء على عرض أعمالهم بصورة احترافية.">
                        Deliver reliable solutions that help customers present their business professionally.
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-white/10 p-8 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center font-black mb-6">02</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Vision" data-ar="الرؤية">Vision</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300 leading-7"
                       data-en="Become a trusted digital identity for companies that need a strong online presence."
                       data-ar="أن نكون الهوية الرقمية الموثوقة للشركات التي تحتاج إلى حضور إلكتروني قوي.">
                        Become a trusted digital identity for companies that need a strong online presence.
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-slate-950 border border-slate-200 dark:border-white/10 p-8 shadow-sm">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-black mb-6">03</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Values" data-ar="القيم">Values</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300 leading-7"
                       data-en="Quality, trust, innovation and customer focus are the foundation of this template."
                       data-ar="الجودة والثقة والابتكار والتركيز على العميل هي أساس هذا القالب.">
                        Quality, trust, innovation and customer focus are the foundation of this template.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white"
                    data-en="Our Core Values"
                    data-ar="قيمنا الأساسية">
                    Our Core Values
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-6 text-center">
                    <div class="text-3xl mb-4">🚀</div>
                    <div class="font-black text-slate-900 dark:text-white" data-en="Innovation" data-ar="الابتكار">Innovation</div>
                </div>
                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-6 text-center">
                    <div class="text-3xl mb-4">⭐</div>
                    <div class="font-black text-slate-900 dark:text-white" data-en="Quality" data-ar="الجودة">Quality</div>
                </div>
                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-6 text-center">
                    <div class="text-3xl mb-4">🤝</div>
                    <div class="font-black text-slate-900 dark:text-white" data-en="Trust" data-ar="الثقة">Trust</div>
                </div>
                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-6 text-center">
                    <div class="text-3xl mb-4">💡</div>
                    <div class="font-black text-slate-900 dark:text-white" data-en="Customer Focus" data-ar="التركيز على العميل">Customer Focus</div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-indigo-600">
        <div class="max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-black text-white"
                data-en="Ready to build a professional company profile?"
                data-ar="جاهز لبناء ملف شركة احترافي؟">
                Ready to build a professional company profile?
            </h2>
            <p class="mt-4 text-indigo-100"
               data-en="This template is ready to become a fully customizable business website."
               data-ar="هذا القالب جاهز ليصبح موقع أعمال قابل للتخصيص بالكامل.">
                This template is ready to become a fully customizable business website.
            </p>
            <div class="mt-8">
                <a href="/contact" class="inline-flex rounded-full bg-white px-8 py-3 text-sm font-black text-indigo-700 hover:bg-indigo-50 transition"
                   data-en="Contact Us" data-ar="تواصل معنا">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

</div>