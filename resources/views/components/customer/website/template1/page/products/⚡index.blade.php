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

<div x-data="productsPage()" class="bg-white dark:bg-slate-950">

    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/30 via-slate-950 to-cyan-500/20"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="max-w-3xl">
                <div class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm text-slate-200 mb-6"
                    data-en="Our Products" data-ar="منتجاتنا">
                    Our Products
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight"
                    data-en="Explore products and services designed for your business."
                    data-ar="استعرض المنتجات والخدمات المصممة لأعمالك.">
                    Explore products and services designed for your business.
                </h1>

                <p class="mt-6 text-lg text-slate-300 leading-8"
                    data-en="Search, filter and preview products using Alpine.js. Later, these cards can be connected to the customer dashboard."
                    data-ar="ابحث وصفّي واستعرض المنتجات باستخدام Alpine.js. لاحقاً يمكن ربط هذه البطاقات بلوحة تحكم الزبون.">
                    Search, filter and preview products using Alpine.js. Later, these cards can be connected to the
                    customer dashboard.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white dark:bg-slate-950 border-b border-slate-200 dark:border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col lg:flex-row gap-5 lg:items-center lg:justify-between">
                <div class="w-full lg:max-w-xl">
                    <input type="text" x-model="search" placeholder="Search products..."
                        class="w-full rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-500">
                </div>

                <div class="flex flex-wrap gap-3">
                    <template x-for="cat in categories" :key="cat.key">
                        <button type="button" x-on:click="selectedCategory = cat.key"
                            class="rounded-full px-5 py-2.5 text-sm font-bold transition"
                            :class="selectedCategory === cat.key ?
                                'bg-indigo-600 text-white' :
                                'border border-slate-200 text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-slate-300 dark:hover:bg-white/10'">
                            <span x-text="currentLang() === 'ar' ? cat.ar : cat.en"></span>
                        </button>
                    </template>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-slate-50 dark:bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white" data-en="Featured Products"
                    data-ar="المنتجات المميزة">
                    Featured Products
                </h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300"
                    data-en="Interactive product cards with search, category filter and product details modal."
                    data-ar="بطاقات منتجات تفاعلية مع البحث والتصفية ونافذة تفاصيل المنتج.">
                    Interactive product cards with search, category filter and product details modal.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-7">

                <template x-for="product in filteredProducts()" :key="product.id">
                    <div
                        class="group rounded-[2rem] bg-white dark:bg-slate-950 border border-slate-200 dark:border-white/10 overflow-hidden shadow-sm hover:shadow-xl transition">

                        <div class="h-56 flex items-center justify-center text-white text-6xl font-black"
                            :class="product.gradient">
                            <span x-text="product.code"></span>
                        </div>

                        <div class="p-7">
                            <div class="flex items-center justify-between gap-4">
                                <h3 class="text-xl font-black text-slate-900 dark:text-white"
                                    x-text="currentLang() === 'ar' ? product.title_ar : product.title_en">
                                </h3>

                                <span class="rounded-full px-3 py-1 text-xs font-bold" :class="product.priceClass"
                                    x-text="product.price">
                                </span>
                            </div>

                            <div class="mt-3 inline-flex rounded-full bg-slate-100 dark:bg-white/10 px-3 py-1 text-xs font-bold text-slate-600 dark:text-slate-300"
                                x-text="currentLang() === 'ar' ? product.category_ar : product.category_en">
                            </div>

                            <p class="mt-4 text-slate-600 dark:text-slate-300 leading-7"
                                x-text="currentLang() === 'ar' ? product.desc_ar : product.desc_en">
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <button type="button" x-on:click="openProduct(product)"
                                    class="inline-flex rounded-full bg-slate-950 px-5 py-2.5 text-sm font-bold text-white hover:bg-indigo-600 dark:bg-white dark:text-slate-950"
                                    x-text="currentLang() === 'ar' ? 'عرض التفاصيل' : 'View Details'">
                                </button>

                                <a wire:navigate href="/contact"
                                    class="inline-flex rounded-full border border-slate-200 px-5 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/10"
                                    x-text="currentLang() === 'ar' ? 'طلب الخدمة' : 'Request'">
                                </a>
                            </div>
                        </div>
                    </div>
                </template>

            </div>

            <div x-show="filteredProducts().length === 0" class="mt-12 text-center">
                <div
                    class="rounded-[2rem] bg-white dark:bg-slate-950 border border-slate-200 dark:border-white/10 p-10">
                    <div class="text-5xl mb-4">🔍</div>
                    <h3 class="text-2xl font-black text-slate-900 dark:text-white"
                        x-text="currentLang() === 'ar' ? 'لا توجد منتجات' : 'No products found'">
                    </h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300"
                        x-text="currentLang() === 'ar' ? 'جرّب البحث بكلمة مختلفة أو اختر تصنيف آخر.' : 'Try another keyword or select another category.'">
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-8">
                    <div class="text-4xl mb-5">🚚</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Fast Delivery"
                        data-ar="تسليم سريع">Fast Delivery</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300"
                        data-en="Products and services are presented clearly for faster customer decisions."
                        data-ar="عرض المنتجات والخدمات بوضوح يساعد العميل على اتخاذ القرار بسرعة.">
                        Products and services are presented clearly for faster customer decisions.
                    </p>
                </div>

                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-8">
                    <div class="text-4xl mb-5">🛡️</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Trusted Quality"
                        data-ar="جودة موثوقة">Trusted Quality</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300"
                        data-en="A clean structure that helps build trust with visitors."
                        data-ar="هيكل واضح يساعد على بناء الثقة مع الزوار.">
                        A clean structure that helps build trust with visitors.
                    </p>
                </div>

                <div class="rounded-3xl border border-slate-200 dark:border-white/10 p-8">
                    <div class="text-4xl mb-5">📱</div>
                    <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Mobile Ready"
                        data-ar="جاهز للموبايل">Mobile Ready</h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300"
                        data-en="The product layout is responsive and works smoothly on all screens."
                        data-ar="تصميم المنتجات متجاوب ويعمل بسلاسة على جميع الشاشات.">
                        The product layout is responsive and works smoothly on all screens.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-indigo-600">
        <div class="max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-black text-white" data-en="Need a custom product or service?"
                data-ar="تحتاج منتج أو خدمة مخصصة؟">
                Need a custom product or service?
            </h2>
            <p class="mt-4 text-indigo-100"
                data-en="Contact us and we will help you choose the right solution for your business."
                data-ar="تواصل معنا وسنساعدك باختيار الحل المناسب لأعمالك.">
                Contact us and we will help you choose the right solution for your business.
            </p>
            <div class="mt-8">
                <a wire:navigate href="/contact"
                    class="inline-flex rounded-full bg-white px-8 py-3 text-sm font-black text-indigo-700 hover:bg-indigo-50 transition"
                    data-en="Contact Us" data-ar="تواصل معنا">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <div x-show="modalOpen" x-transition.opacity
        class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-950/70 px-4 py-8">

        <div x-on:click.outside="modalOpen = false" x-transition
            class="w-full max-w-2xl rounded-[2rem] bg-white dark:bg-slate-900 border border-slate-200 dark:border-white/10 shadow-2xl overflow-hidden">

            <div class="h-40 flex items-center justify-center text-white text-5xl font-black"
                :class="selectedProduct?.gradient">
                <span x-text="selectedProduct?.code"></span>
            </div>

            <div class="p-7">
                <div class="flex items-start justify-between gap-5">
                    <div>
                        <h3 class="text-2xl font-black text-slate-950 dark:text-white"
                            x-text="currentLang() === 'ar' ? selectedProduct?.title_ar : selectedProduct?.title_en">
                        </h3>
                        <p class="mt-2 text-slate-600 dark:text-slate-300"
                            x-text="currentLang() === 'ar' ? selectedProduct?.desc_ar : selectedProduct?.desc_en">
                        </p>
                    </div>

                    <button type="button" x-on:click="modalOpen = false"
                        class="rounded-full border border-slate-200 px-4 py-2 text-sm font-black text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/10">
                        ✕
                    </button>
                </div>

                <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <template x-for="feature in selectedProduct?.features || []" :key="feature.en">
                        <div class="rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-100 dark:border-white/10 p-4 text-sm font-bold text-slate-700 dark:text-slate-300"
                            x-text="currentLang() === 'ar' ? feature.ar : feature.en">
                        </div>
                    </template>
                </div>

                <div class="mt-7 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <div class="text-sm text-slate-500 dark:text-slate-400"
                            x-text="currentLang() === 'ar' ? 'السعر' : 'Price'"></div>
                        <div class="text-3xl font-black text-indigo-600" x-text="selectedProduct?.price"></div>
                    </div>

                    <a wire:navigate href="/contact"
                        class="inline-flex justify-center rounded-full bg-indigo-600 px-7 py-3 text-sm font-black text-white hover:bg-indigo-700"
                        x-text="currentLang() === 'ar' ? 'طلب هذا المنتج' : 'Request This Product'">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function productsPage() {
            return {
                search: '',
                selectedCategory: 'all',
                modalOpen: false,
                selectedProduct: null,

                categories: [{
                        key: 'all',
                        en: 'All',
                        ar: 'الكل'
                    },
                    {
                        key: 'services',
                        en: 'Services',
                        ar: 'الخدمات'
                    },
                    {
                        key: 'software',
                        en: 'Software',
                        ar: 'البرمجيات'
                    },
                    {
                        key: 'business',
                        en: 'Business',
                        ar: 'الأعمال'
                    },
                    {
                        key: 'office',
                        en: 'Office',
                        ar: 'المكتب'
                    },
                ],

                products: [{
                        id: 1,
                        code: '01',
                        category: 'business',
                        category_en: 'Business',
                        category_ar: 'الأعمال',
                        title_en: 'Business Website',
                        title_ar: 'موقع أعمال',
                        price: '$99',
                        desc_en: 'A modern website package for companies that need a premium online presence.',
                        desc_ar: 'باقة موقع حديثة للشركات التي تحتاج إلى حضور إلكتروني احترافي.',
                        gradient: 'bg-gradient-to-br from-indigo-500 to-cyan-400',
                        priceClass: 'bg-indigo-50 text-indigo-700 dark:bg-indigo-500/10 dark:text-indigo-300',
                        features: [{
                                en: 'Responsive Design',
                                ar: 'تصميم متجاوب'
                            },
                            {
                                en: 'Company Profile',
                                ar: 'ملف الشركة'
                            },
                            {
                                en: 'Contact Page',
                                ar: 'صفحة تواصل'
                            },
                        ]
                    },
                    {
                        id: 2,
                        code: '02',
                        category: 'services',
                        category_en: 'Services',
                        category_ar: 'الخدمات',
                        title_en: 'Digital Service',
                        title_ar: 'خدمة رقمية',
                        price: '$149',
                        desc_en: 'A flexible service card that can be used for consulting, support or digital work.',
                        desc_ar: 'بطاقة خدمة مرنة يمكن استخدامها للاستشارات أو الدعم أو الأعمال الرقمية.',
                        gradient: 'bg-gradient-to-br from-emerald-500 to-teal-400',
                        priceClass: 'bg-emerald-50 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-300',
                        features: [{
                                en: 'Consulting',
                                ar: 'استشارات'
                            },
                            {
                                en: 'Support',
                                ar: 'دعم'
                            },
                            {
                                en: 'Fast Delivery',
                                ar: 'تسليم سريع'
                            },
                        ]
                    },
                    {
                        id: 3,
                        code: '03',
                        category: 'software',
                        category_en: 'Software',
                        category_ar: 'البرمجيات',
                        title_en: 'Software Solution',
                        title_ar: 'حل برمجي',
                        price: '$299',
                        desc_en: 'A product card ready for SaaS, systems, apps or any custom software solution.',
                        desc_ar: 'بطاقة منتج جاهزة للأنظمة والتطبيقات وحلول البرمجيات المخصصة.',
                        gradient: 'bg-gradient-to-br from-fuchsia-500 to-indigo-500',
                        priceClass: 'bg-fuchsia-50 text-fuchsia-700 dark:bg-fuchsia-500/10 dark:text-fuchsia-300',
                        features: [{
                                en: 'Dashboard',
                                ar: 'لوحة تحكم'
                            },
                            {
                                en: 'Reports',
                                ar: 'تقارير'
                            },
                            {
                                en: 'Automation',
                                ar: 'أتمتة'
                            },
                        ]
                    },
                    {
                        id: 4,
                        code: '04',
                        category: 'office',
                        category_en: 'Office',
                        category_ar: 'المكتب',
                        title_en: 'Office Package',
                        title_ar: 'باقة مكتبية',
                        price: '$79',
                        desc_en: 'A clean product layout for office services, packages or business supplies.',
                        desc_ar: 'تصميم منتج مناسب للخدمات المكتبية أو الباقات أو مستلزمات الأعمال.',
                        gradient: 'bg-gradient-to-br from-orange-500 to-amber-400',
                        priceClass: 'bg-orange-50 text-orange-700 dark:bg-orange-500/10 dark:text-orange-300',
                        features: [{
                                en: 'Organized',
                                ar: 'منظم'
                            },
                            {
                                en: 'Flexible',
                                ar: 'مرن'
                            },
                            {
                                en: 'Business Ready',
                                ar: 'جاهز للأعمال'
                            },
                        ]
                    },
                    {
                        id: 5,
                        code: '05',
                        category: 'services',
                        category_en: 'Services',
                        category_ar: 'الخدمات',
                        title_en: 'Premium Support',
                        title_ar: 'دعم مميز',
                        price: '$49',
                        desc_en: 'A support service card for maintenance, follow-up and customer care.',
                        desc_ar: 'بطاقة خدمة دعم للصيانة والمتابعة وخدمة العملاء.',
                        gradient: 'bg-gradient-to-br from-sky-500 to-blue-500',
                        priceClass: 'bg-sky-50 text-sky-700 dark:bg-sky-500/10 dark:text-sky-300',
                        features: [{
                                en: 'Help Desk',
                                ar: 'مكتب مساعدة'
                            },
                            {
                                en: 'Follow-up',
                                ar: 'متابعة'
                            },
                            {
                                en: 'Customer Care',
                                ar: 'خدمة عملاء'
                            },
                        ]
                    },
                    {
                        id: 6,
                        code: '06',
                        category: 'software',
                        category_en: 'Software',
                        category_ar: 'البرمجيات',
                        title_en: 'Cloud Platform',
                        title_ar: 'منصة سحابية',
                        price: '$199',
                        desc_en: 'A SaaS-style product card suitable for subscriptions and cloud services.',
                        desc_ar: 'بطاقة منتج مناسبة للاشتراكات والخدمات السحابية.',
                        gradient: 'bg-gradient-to-br from-violet-500 to-purple-500',
                        priceClass: 'bg-violet-50 text-violet-700 dark:bg-violet-500/10 dark:text-violet-300',
                        features: [{
                                en: 'Cloud Ready',
                                ar: 'جاهز للسحابة'
                            },
                            {
                                en: 'Subscriptions',
                                ar: 'اشتراكات'
                            },
                            {
                                en: 'Scalable',
                                ar: 'قابل للتوسع'
                            },
                        ]
                    },
                ],

                currentLang() {
                    return localStorage.getItem('lang') || document.documentElement.lang || 'en';
                },

                filteredProducts() {
                    const keyword = this.search.toLowerCase().trim();

                    return this.products.filter((product) => {
                        const matchesCategory = this.selectedCategory === 'all' || product.category === this
                            .selectedCategory;

                        const searchableText = [
                            product.title_en,
                            product.title_ar,
                            product.desc_en,
                            product.desc_ar,
                            product.category_en,
                            product.category_ar,
                            product.price
                        ].join(' ').toLowerCase();

                        return matchesCategory && searchableText.includes(keyword);
                    });
                },

                openProduct(product) {
                    this.selectedProduct = product;
                    this.modalOpen = true;
                }
            }
        }
    </script>

</div>
