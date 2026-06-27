<!DOCTYPE html>
<html lang="en" dir="ltr" id="siteHtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Website') }}</title>

    <script>
        document.documentElement.classList.toggle('dark', localStorage.getItem('theme') === 'dark');
        document.documentElement.lang = localStorage.getItem('lang') || 'en';
        document.documentElement.dir = (localStorage.getItem('lang') || 'en') === 'ar' ? 'rtl' : 'ltr';
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    x-data="siteLayout()"
    x-init="init()"
    class="bg-white text-slate-950 antialiased transition-colors duration-300 dark:bg-slate-950 dark:text-white">

    <div class="min-h-screen flex flex-col">

        <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur dark:border-white/10 dark:bg-slate-950/90">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="h-20 flex items-center justify-between gap-4">

                    <a wire:navigate href="/home" class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-2xl bg-indigo-600 text-white flex items-center justify-center font-black text-lg">
                            V
                        </div>
                        <div>
                            <div class="text-xl font-black leading-5" x-text="lang === 'ar' ? 'الموقع التجاري' : '{{ config('app.name', 'Website') }}'"></div>
                            <div class="text-xs text-slate-500 mt-1 dark:text-slate-400" x-text="lang === 'ar' ? 'موقع أعمال احترافي' : 'Premium Business Website'"></div>
                        </div>
                    </a>

                    <nav class="hidden md:flex items-center gap-8 text-sm font-semibold">
                        <a wire:navigate href="/home" class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white" x-text="lang === 'ar' ? 'الرئيسية' : 'Home'"></a>
                        <a wire:navigate href="/about" class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white" x-text="lang === 'ar' ? 'من نحن' : 'About'"></a>
                        <a wire:navigate href="/products" class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white" x-text="lang === 'ar' ? 'المنتجات' : 'Products'"></a>
                        <a wire:navigate href="/contact" class="text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white" x-text="lang === 'ar' ? 'تواصل معنا' : 'Contact'"></a>
                    </nav>

                    <div class="flex items-center gap-2">

                        <button type="button"
                            x-on:click="toggleLanguage()"
                            class="rounded-full border border-slate-200 px-4 py-2 text-sm font-bold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/10"
                            x-text="lang === 'ar' ? 'EN' : 'AR'">
                        </button>

                        <button type="button"
                            x-on:click="toggleTheme()"
                            class="rounded-full border border-slate-200 px-4 py-2 text-sm font-bold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/10">
                            <span x-show="!darkMode">🌙</span>
                            <span x-show="darkMode">☀️</span>
                        </button>

                        <a wire:navigate href="/login" class="hidden sm:inline-flex text-sm font-bold text-slate-700 hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white"
                           x-text="lang === 'ar' ? 'دخول' : 'Login'">
                        </a>

                        <a wire:navigate href="/contact" class="hidden sm:inline-flex items-center justify-center rounded-full bg-indigo-600 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-indigo-600/20 hover:bg-indigo-700"
                           x-text="lang === 'ar' ? 'ابدأ الآن' : 'Get Started'">
                        </a>

                        <button type="button"
                            x-on:click="mobileOpen = !mobileOpen"
                            class="md:hidden rounded-full border border-slate-200 px-4 py-2 text-sm font-bold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-white dark:hover:bg-white/10">
                            ☰
                        </button>

                    </div>

                </div>

                <div x-show="mobileOpen" x-transition class="md:hidden pb-5">
                    <div class="rounded-3xl border border-slate-200 bg-white p-4 shadow-lg dark:border-white/10 dark:bg-slate-900">
                        <div class="space-y-2 text-sm font-bold">
                            <a wire:navigate href="/home" x-on:click="mobileOpen=false" class="block rounded-2xl px-4 py-3 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/10" x-text="lang === 'ar' ? 'الرئيسية' : 'Home'"></a>
                            <a wire:navigate href="/about" x-on:click="mobileOpen=false" class="block rounded-2xl px-4 py-3 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/10" x-text="lang === 'ar' ? 'من نحن' : 'About'"></a>
                            <a wire:navigate href="/products" x-on:click="mobileOpen=false" class="block rounded-2xl px-4 py-3 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/10" x-text="lang === 'ar' ? 'المنتجات' : 'Products'"></a>
                            <a wire:navigate href="/contact" x-on:click="mobileOpen=false" class="block rounded-2xl px-4 py-3 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/10" x-text="lang === 'ar' ? 'تواصل معنا' : 'Contact'"></a>
                            <a wire:navigate href="/login" x-on:click="mobileOpen=false" class="block rounded-2xl px-4 py-3 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-white/10" x-text="lang === 'ar' ? 'دخول' : 'Login'"></a>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <main class="flex-1">
            {{ $slot }}
        </main>

        <footer class="bg-slate-950 text-white border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <div>
                        <div class="text-2xl font-black" x-text="lang === 'ar' ? 'الموقع التجاري' : '{{ config('app.name', 'Website') }}'"></div>
                        <p class="text-slate-400 text-sm mt-4 leading-7"
                           x-text="lang === 'ar' ? 'تجربة رقمية حديثة مصممة للشركات التي تحتاج إلى حضور إلكتروني احترافي وموثوق.' : 'A modern digital experience designed for companies that need a clean, trusted and professional online presence.'">
                        </p>
                    </div>

                    <div>
                        <div class="font-bold mb-4" x-text="lang === 'ar' ? 'الصفحات' : 'Pages'"></div>
                        <div class="space-y-3 text-sm text-slate-400">
                            <a wire:navigate href="/home" class="block hover:text-white" x-text="lang === 'ar' ? 'الرئيسية' : 'Home'"></a>
                            <a wire:navigate href="/about" class="block hover:text-white" x-text="lang === 'ar' ? 'من نحن' : 'About'"></a>
                            <a wire:navigate href="/products" class="block hover:text-white" x-text="lang === 'ar' ? 'المنتجات' : 'Products'"></a>
                            <a wire:navigate href="/contact" class="block hover:text-white" x-text="lang === 'ar' ? 'تواصل معنا' : 'Contact'"></a>
                        </div>
                    </div>

                    <div>
                        <div class="font-bold mb-4" x-text="lang === 'ar' ? 'التواصل' : 'Contact'"></div>
                        <div class="space-y-3 text-sm text-slate-400">
                            <div>info@example.com</div>
                            <div>+964 000 000 0000</div>
                            <div x-text="lang === 'ar' ? 'بغداد، العراق' : 'Baghdad, Iraq'"></div>
                        </div>
                    </div>

                </div>

                <div class="border-t border-white/10 mt-10 pt-6 text-sm text-slate-500 flex flex-col md:flex-row justify-between gap-4">
                    <span x-text="lang === 'ar' ? '© {{ date('Y') }} {{ config('app.name', 'Website') }}. جميع الحقوق محفوظة.' : '© {{ date('Y') }} {{ config('app.name', 'Website') }}. All rights reserved.'"></span>
                    <span x-text="lang === 'ar' ? 'تم البناء باستخدام Laravel و Livewire و Alpine.js' : 'Built with Laravel, Livewire & Alpine.js'"></span>
                </div>
            </div>
        </footer>

    </div>

    @livewireScripts

    <script>
        function siteLayout() {
            return {
                darkMode: localStorage.getItem('theme') === 'dark',
                lang: localStorage.getItem('lang') || 'en',
                mobileOpen: false,

                init() {
                    this.applyTheme();
                    this.applyLanguage();
                },

                toggleTheme() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                    this.applyTheme();
                },

                applyTheme() {
                    document.documentElement.classList.toggle('dark', this.darkMode);
                },

                toggleLanguage() {
                    this.lang = this.lang === 'ar' ? 'en' : 'ar';
                    localStorage.setItem('lang', this.lang);
                    this.applyLanguage();
                },

                applyLanguage() {
                    document.documentElement.lang = this.lang;
                    document.documentElement.dir = this.lang === 'ar' ? 'rtl' : 'ltr';

                    document.querySelectorAll('[data-en][data-ar]').forEach((el) => {
                        el.textContent = el.getAttribute(this.lang === 'ar' ? 'data-ar' : 'data-en');
                    });
                }
            }
        }
    </script>

</body>
</html>