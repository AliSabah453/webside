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
                    data-en="Contact Us" data-ar="تواصل معنا">
                    Contact Us
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight"
                    data-en="Let’s talk about your next business idea." data-ar="لنتحدث عن فكرة   عملك القادمة.">
                    Let’s talk about your next business idea.
                </h1>

                <p class="mt-6 text-lg text-slate-300 leading-8"
                    data-en="A clean contact page ready for customer inquiries, business requests and support messages."
                    data-ar="صفحة تواصل مرتبة وجاهزة لاستقبال استفسارات العملاء وطلبات الأعمال ورسائل الدعم.">
                    A clean contact page ready for customer inquiries, business requests and support messages.
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div
                    class="lg:col-span-2 rounded-[2rem] bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-white/10 p-6 sm:p-8">
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white"
                        data-en="Send us a message" data-ar="أرسل لنا رسالة">
                        Send us a message
                    </h2>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                        <input type="text" placeholder="Full Name"
                            class="rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-950 dark:text-white dark:placeholder:text-slate-500">

                        <input type="email" placeholder="Email Address"
                            class="rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-950 dark:text-white dark:placeholder:text-slate-500">

                        <input type="text" placeholder="Phone Number"
                            class="rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-950 dark:text-white dark:placeholder:text-slate-500">

                        <input type="text" placeholder="Subject"
                            class="rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-950 dark:text-white dark:placeholder:text-slate-500">

                        <textarea rows="6" placeholder="Message"
                            class="md:col-span-2 rounded-2xl border border-slate-200 bg-white px-5 py-4 text-sm outline-none focus:border-indigo-500 dark:border-white/10 dark:bg-slate-950 dark:text-white dark:placeholder:text-slate-500"></textarea>
                    </div>

                    <button type="button"
                        class="mt-6 inline-flex rounded-full bg-indigo-600 px-8 py-3 text-sm font-black text-white shadow-lg shadow-indigo-600/20 hover:bg-indigo-700"
                        data-en="Send Message" data-ar="إرسال الرسالة">
                        Send Message
                    </button>
                </div>

                <div class="space-y-5">
                    <div class="rounded-[2rem] bg-slate-950 text-white p-7">
                        <h3 class="text-xl font-black" data-en="Contact Information" data-ar="معلومات التواصل">
                            Contact Information
                        </h3>

                        <div class="mt-6 space-y-5 text-sm text-slate-300">
                            <div>
                                <div class="font-bold text-white" data-en="Email" data-ar="البريد الإلكتروني">Email
                                </div>
                                <div class="mt-1">info@example.com</div>
                            </div>

                            <div>
                                <div class="font-bold text-white" data-en="Phone" data-ar="الهاتف">Phone</div>
                                <div class="mt-1">+964 000 000 0000</div>
                            </div>

                            <div>
                                <div class="font-bold text-white" data-en="Address" data-ar="العنوان">Address</div>
                                <div class="mt-1" data-en="Baghdad, Iraq" data-ar="بغداد، العراق">Baghdad, Iraq</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-slate-200 dark:border-white/10 p-7">
                        <h3 class="text-xl font-black text-slate-900 dark:text-white" data-en="Working Hours"
                            data-ar="ساعات العمل">
                            Working Hours
                        </h3>

                        <div class="mt-6 space-y-4 text-sm text-slate-600 dark:text-slate-300">
                            <div class="flex justify-between gap-4">
                                <span data-en="Monday - Friday" data-ar="الاثنين - الجمعة">Monday - Friday</span>
                                <span>09:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between gap-4">
                                <span data-en="Saturday" data-ar="السبت">Saturday</span>
                                <span>10:00 - 14:00</span>
                            </div>
                            <div class="flex justify-between gap-4">
                                <span data-en="Sunday" data-ar="الأحد">Sunday</span>
                                <span data-en="Closed" data-ar="مغلق">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="pb-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="rounded-[2rem] bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-white/10 h-80 flex items-center justify-center text-center p-8">
                <div>
                    <div class="text-5xl mb-4">📍</div>
                    <h3 class="text-2xl font-black text-slate-900 dark:text-white" data-en="Google Map Placeholder"
                        data-ar="مكان خريطة Google">
                        Google Map Placeholder
                    </h3>
                    <p class="mt-3 text-slate-600 dark:text-slate-300"
                        data-en="Later, this section can be connected to the customer's real business location."
                        data-ar="لاحقاً يمكن ربط هذا القسم بموقع الزبون الحقيقي.">
                        Later, this section can be connected to the customer's real business location.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-indigo-600">
        <div class="max-w-5xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-black text-white" data-en="Need help with your project?"
                data-ar="تحتاج مساعدة في مشروعك؟">
                Need help with your project?
            </h2>
            <p class="mt-4 text-indigo-100"
                data-en="Send your request and our team will contact you as soon as possible."
                data-ar="أرسل طلبك وسيقوم فريقنا بالتواصل معك بأقرب وقت ممكن.">
                Send your request and our team will contact you as soon as possible.
            </p>
        </div>
    </section>

</div>
