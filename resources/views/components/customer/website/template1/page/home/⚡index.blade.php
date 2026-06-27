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

<div class="bg-white dark:bg-slate-950 transition-colors duration-300">

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/35 via-slate-950 to-cyan-500/20"></div>
        <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-indigo-500/30 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-cyan-500/20 blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <div>
                    <div class="inline-flex items-center rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm text-slate-200 mb-6"
                        data-en="Modern Digital Business Platform" data-ar="منصة أعمال رقمية حديثة">
                        Modern Digital Business Platform
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight"
                        data-en="Build your business presence with a professional website."
                        data-ar="ابنِ حضور شركتك الرقمي بموقع احترافي.">
                        Build your business presence with a professional website.
                    </h1>

                    <p class="mt-6 text-lg text-slate-300 leading-8 max-w-xl"
                        data-en="A clean, responsive and modern website template designed to present your services, products and company identity in a premium way."
                        data-ar="قالب موقع حديث ومتجاوب مصمم لعرض خدماتك ومنتجاتك وهوية شركتك بطريقة راقية واحترافية.">
                        A clean, responsive and modern website template designed to present your services, products and
                        company identity in a premium way.
                    </p>

                    <div class="mt-9 flex flex-col sm:flex-row gap-4">
                        <a href="/products"
                            class="inline-flex justify-center rounded-full bg-white px-7 py-3 text-sm font-bold text-slate-950 hover:bg-slate-100 transition"
                            data-en="Explore Products" data-ar="استعرض المنتجات">
                            Explore Products
                        </a>
                        <a href="/contact"
                            class="inline-flex justify-center rounded-full border border-white/20 px-7 py-3 text-sm font-bold text-white hover:bg-white/10 transition"
                            data-en="Contact Us" data-ar="تواصل معنا">
                            Contact Us
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-[2rem] bg-white/10 border border-white/15 p-5 shadow-2xl backdrop-blur">
                        <div class="rounded-[1.5rem] bg-white text-slate-900 p-6 dark:bg-slate-900 dark:text-white">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400" data-en="Business Growth"
                                        data-ar="نمو الأعمال">Business Growth</div>
                                    <div class="text-3xl font-black">+84%</div>
                                </div>
                                <div class="rounded-full bg-indigo-100 px-4 py-2 text-sm font-bold text-indigo-700 dark:bg-indigo-500/20 dark:text-indigo-300"
                                    data-en="Live" data-ar="مباشر">
                                    Live
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="h-4 rounded-full bg-slate-100 overflow-hidden dark:bg-slate-800">
                                    <div class="h-full w-10/12 bg-indigo-600 rounded-full"></div>
                                </div>
                                <div class="h-4 rounded-full bg-slate-100 overflow-hidden dark:bg-slate-800">
                                    <div class="h-full w-8/12 bg-cyan-500 rounded-full"></div>
                                </div>
                                <div class="h-4 rounded-full bg-slate-100 overflow-hidden dark:bg-slate-800">
                                    <div class="h-full w-11/12 bg-emerald-500 rounded-full"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 mt-8">
                                <div class="rounded-2xl bg-slate-50 p-4 text-center dark:bg-slate-800">
                                    <div class="text-xl font-bold">120+</div>
                                    <div class="text-xs text-slate-500 dark:text-slate-400" data-en="Products"
                                        data-ar="منتج">Products</div>
                                </div>
                                <div class="rounded-2xl bg-slate-50 p-4 text-center dark:bg-slate-800">
                                    <div class="text-xl font-bold">35K</div>
                                    <div class="text-xs text-slate-500 dark:text-slate-400" data-en="Visitors"
                                        data-ar="زائر">Visitors</div>
                                </div>
                                <div class="rounded-2xl bg-slate-50 p-4 text-center dark:bg-slate-800">
                                    <div class="text-xl font-bold">98%</div>
                                    <div class="text-xs text-slate-500 dark:text-slate-400" data-en="Quality"
                                        data-ar="جودة">Quality</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14">
                <p class="text-indigo-600 font-bold uppercase tracking-wide text-sm dark:text-indigo-400"
                    data-en="Why Choose Us" data-ar="لماذا تختارنا">
                    Why Choose Us
                </p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white"
                    data-en="A better way to present your business online"
                    data-ar="طريقة أفضل لعرض أعمالك على الإنترنت">
                    A better way to present your business online
                </h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300"
                    data-en="Everything is designed to give customers a fast, clear and trusted experience."
                    data-ar="كل شيء مصمم ليمنح العملاء تجربة سريعة وواضحة وموثوقة.">
                    Everything is designed to give customers a fast, clear and trusted experience.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition dark:bg-slate-950 dark:border-white/10">
                    <div
                        class="w-14 h-14 rounded-2xl bg-indigo-100 text-indigo-700 flex items-center justify-center text-2xl mb-6 dark:bg-indigo-500/20 dark:text-indigo-300">
                        ⚡</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white" data-en="Fast Performance"
                        data-ar="أداء سريع">Fast Performance</h3>
                    <p class="mt-3 text-slate-600 leading-7 dark:text-slate-300"
                        data-en="Optimized sections and clean structure for fast loading and smooth browsing."
                        data-ar="أقسام منظمة وبنية نظيفة تساعد على تحميل سريع وتصفح سلس.">
                        Optimized sections and clean structure for fast loading and smooth browsing.
                    </p>
                </div>

                <div
                    class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition dark:bg-slate-950 dark:border-white/10">
                    <div
                        class="w-14 h-14 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-2xl mb-6 dark:bg-cyan-500/20 dark:text-cyan-300">
                        🔒</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white" data-en="Trusted Experience"
                        data-ar="تجربة موثوقة">Trusted Experience</h3>
                    <p class="mt-3 text-slate-600 leading-7 dark:text-slate-300"
                        data-en="Professional visual identity that helps customers trust your company from the first visit."
                        data-ar="هوية بصرية احترافية تساعد العملاء على الثقة بشركتك من الزيارة الأولى.">
                        Professional visual identity that helps customers trust your company from the first visit.
                    </p>
                </div>

                <div
                    class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition dark:bg-slate-950 dark:border-white/10">
                    <div
                        class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl mb-6 dark:bg-emerald-500/20 dark:text-emerald-300">
                        📱</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white" data-en="Mobile Friendly"
                        data-ar="متوافق مع الموبايل">Mobile Friendly</h3>
                    <p class="mt-3 text-slate-600 leading-7 dark:text-slate-300"
                        data-en="Responsive design that looks clean on desktop, tablet and mobile screens."
                        data-ar="تصميم متجاوب يظهر بشكل جميل على الكمبيوتر والتابلت والموبايل.">
                        Responsive design that looks clean on desktop, tablet and mobile screens.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- SERVICES --}}
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end mb-12">
                <div>
                    <p class="text-indigo-600 font-bold uppercase tracking-wide text-sm dark:text-indigo-400"
                        data-en="Services" data-ar="الخدمات">Services</p>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white"
                        data-en="Digital solutions for modern companies" data-ar="حلول رقمية للشركات الحديثة">
                        Digital solutions for modern companies
                    </h2>
                </div>
                <p class="text-slate-600 leading-8 dark:text-slate-300"
                    data-en="Use this template to present your main services clearly and guide visitors toward contacting your business."
                    data-ar="Put what you want here">
                    Use this template to present your main services clearly and guide visitors toward contacting your
                    business.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="group rounded-[2rem] bg-slate-50 border border-slate-200 p-8 hover:bg-indigo-600 hover:text-white transition dark:bg-slate-900 dark:border-white/10">
                    <div class="text-4xl mb-8">💻</div>
                    <h3 class="text-2xl font-black" data-en="Website Development" data-ar="تطوير المواقع">Website
                        Development</h3>
                    <p class="mt-4 text-slate-600 leading-7 group-hover:text-indigo-100 dark:text-slate-300"
                        data-en="Modern pages that explain your company, services, products and contact information."
                        data-ar="صفحات حديثة تعرض شركتك وخدماتك ومنتجاتك ومعلومات التواصل.">
                        Modern pages that explain your company, services, products and contact information.
                    </p>
                </div>

                <div
                    class="group rounded-[2rem] bg-slate-50 border border-slate-200 p-8 hover:bg-indigo-600 hover:text-white transition dark:bg-slate-900 dark:border-white/10">
                    <div class="text-4xl mb-8">📊</div>
                    <h3 class="text-2xl font-black" data-en="Business Solutions" data-ar="حلول الأعمال">Business
                        Solutions</h3>
                    <p class="mt-4 text-slate-600 leading-7 group-hover:text-indigo-100 dark:text-slate-300"
                        data-en="Ready structure to connect later with dashboards, products, orders and customer data."
                        data-ar="بنية جاهزة للربط لاحقاً مع اللوحات والمنتجات والطلبات وبيانات العملاء.">
                        Ready structure to connect later with dashboards, products, orders and customer data.
                    </p>
                </div>

                <div
                    class="group rounded-[2rem] bg-slate-50 border border-slate-200 p-8 hover:bg-indigo-600 hover:text-white transition dark:bg-slate-900 dark:border-white/10">
                    <div class="text-4xl mb-8">🚀</div>
                    <h3 class="text-2xl font-black" data-en="Digital Marketing" data-ar="التسويق الرقمي">Digital
                        Marketing</h3>
                    <p class="mt-4 text-slate-600 leading-7 group-hover:text-indigo-100 dark:text-slate-300"
                        data-en="Clear call-to-action areas that help convert visitors into real business leads."
                        data-ar="أقسام دعوة لاتخاذ إجراء تساعد على تحويل الزوار إلى عملاء محتملين.">
                        Clear call-to-action areas that help convert visitors into real business leads.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- STATS --}}
    <section class="py-20 bg-slate-950 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="rounded-3xl bg-white/10 border border-white/10 p-8 text-center">
                    <div class="text-4xl font-black">50+</div>
                    <div class="mt-2 text-slate-300" data-en="Projects" data-ar="مشروع">Projects</div>
                </div>
                <div class="rounded-3xl bg-white/10 border border-white/10 p-8 text-center">
                    <div class="text-4xl font-black">75+</div>
                    <div class="mt-2 text-slate-300" data-en="Clients" data-ar="عميل">Clients</div>
                </div>
                <div class="rounded-3xl bg-white/10 border border-white/10 p-8 text-center">
                    <div class="text-4xl font-black">1+</div>
                    <div class="mt-2 text-slate-300" data-en="Countries" data-ar="دولة">Countries</div>
                </div>
                <div class="rounded-3xl bg-white/10 border border-white/10 p-8 text-center">
                    <div class="text-4xl font-black">99%</div>
                    <div class="mt-2 text-slate-300" data-en="Satisfaction" data-ar="رضا العملاء">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14">
                <p class="text-indigo-600 font-bold uppercase tracking-wide text-sm dark:text-indigo-400"
                    data-en="Testimonials" data-ar="آراء العملاء">Testimonials</p>
                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white"
                    data-en="What customers say about the experience" data-ar="ماذا يقول العملاء عن التجربة">
                    What customers say about the experience
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm dark:bg-slate-950 dark:border-white/10">
                    <p class="text-slate-600 leading-8 dark:text-slate-300"
                        data-en="The website looks clean, professional and easy for customers to understand."
                        data-ar="الموقع يبدو نظيفاً واحترافياً وسهل الفهم للعملاء.">
                        The website looks clean, professional and easy for customers to understand.
                    </p>
                    <div class="mt-6 font-bold text-slate-900 dark:text-white" data-en="Business Owner"
                        data-ar="صاحب شركة">Business Owner</div>
                    <div class="text-sm text-slate-500 dark:text-slate-400" data-en="Retail Company"
                        data-ar="شركة تجارية">Retail Company</div>
                </div>

                <div
                    class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm dark:bg-slate-950 dark:border-white/10">
                    <p class="text-slate-600 leading-8 dark:text-slate-300"
                        data-en="The design gives a strong first impression and works perfectly on mobile."
                        data-ar="التصميم يعطي انطباعاً قوياً من أول زيارة ويعمل بشكل ممتاز على الموبايل.">
                        The design gives a strong first impression and works perfectly on mobile.
                    </p>
                    <div class="mt-6 font-bold text-slate-900 dark:text-white" data-en="Marketing Manager"
                        data-ar="مدير تسويق">Marketing Manager</div>
                    <div class="text-sm text-slate-500 dark:text-slate-400" data-en="Service Company"
                        data-ar="شركة خدمات">Service Company</div>
                </div>

                <div
                    class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm dark:bg-slate-950 dark:border-white/10">
                    <p class="text-slate-600 leading-8 dark:text-slate-300"
                        data-en="The Arabic and English support makes it suitable for our local market."
                        data-ar="دعم العربي والإنكليزي يجعله مناسباً جداً للسوق المحلي.">
                        The Arabic and English support makes it suitable for our local market.
                    </p>
                    <div class="mt-6 font-bold text-slate-900 dark:text-white" data-en="General Manager"
                        data-ar="مدير عام">General Manager</div>
                    <div class="text-sm text-slate-500 dark:text-slate-400" data-en="Local Business"
                        data-ar="شركة محلية">Local Business</div>
                </div>
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="relative overflow-hidden rounded-[2rem] bg-indigo-600 px-6 py-16 text-center shadow-2xl shadow-indigo-600/20">
                <div class="absolute -top-20 -left-20 h-56 w-56 rounded-full bg-white/20 blur-3xl"></div>
                <div class="absolute -bottom-20 -right-20 h-56 w-56 rounded-full bg-cyan-300/20 blur-3xl"></div>

                <div class="relative max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white"
                        data-en="Ready to grow your business online?"
                        data-ar="هل أنت جاهز لتطوير حضور شركتك على الإنترنت؟">
                        Ready to grow your business online?
                    </h2>
                    <p class="mt-4 text-indigo-100 leading-8"
                        data-en="Start with a modern website experience that looks trusted, premium and professional."
                        data-ar="ابدأ بتجربة موقع حديثة تبدو موثوقة وراقية واحترافية.">
                        Start with a modern website experience that looks trusted, premium and professional.
                    </p>
                    <div class="mt-8">
                        <a href="/contact"
                            class="inline-flex rounded-full bg-white px-8 py-3 text-sm font-bold text-indigo-700 hover:bg-indigo-50 transition"
                            data-en="Contact Us Today" data-ar="تواصل معنا اليوم">
                            Contact Us Today
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
