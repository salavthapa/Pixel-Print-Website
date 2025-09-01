@extends('layouts.frontend')
@section('body')
    <!-- Contact Header Start -->
    <section class="relative overflow-hidden bg-[#F0EAF4]">
        <!-- background images (decorations) -->
        <img src="{{ asset('images/circle.svg') }}" alt=""
            class=" pointer-events-none absolute -top-8 right-78 hidden sm:block w-[450px] h-auto">

        <img src="{{ asset('images/circle3.svg') }}" alt=""
            class=" pointer-events-none absolute -bottom-0 left-40 hidden sm:block w-[600px] h-auto">

        <img src="{{ asset('images/circle2.svg') }}" alt=""
            class="pointer-events-none absolute -bottom-0 -right-0 hidden sm:block w-[500px] h-auto">

        <!-- content -->
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 py-12 sm:py-16 lg:py-20">
            <h1
                class="text-center text-[#111111]
               text-[34px] sm:text-5xl lg:text-[50px] leading-tight font-bold">
                Contact Us
            </h1>

            <!-- breadcrumb -->
            <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                    <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                            Page</a></li>
                    <li class="select-none  text-[#333333]">></li>
                    <li class="font-semibold text-sm text-[#333333]">contact us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Contact Header End -->

    <!-- Conatact Main Section Start -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 mb-28 mt-8">
        <!-- ===== Top Info Cards ===== -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
            <!-- Card -->
            <div
                class="relative w-full max-w-[397px] h-[107px] bg-gray-100 rounded-br-[60px]  overflow-hidden flex items-center p-4">
                <!-- Icon -->
                <div class="h-[45px] w-[45px] bg-[#E04794] grid place-items-center rounded-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <rect x="3" y="5" width="20" height="16" rx="2" />
                        <path d="M3 7l9 6 9-6" />
                    </svg>
                </div>
                <!-- Text -->
                <div class="ml-4">
                    <p class="font-semibold text-[#111111] font-heading text-base">Email Address:</p>
                    <p class="text-[#333333] text-sm sm:text-sm font-heading font-medium">pixelprintnepal@gmail.com</p>
                </div>
                <!-- Background Icon -->
                <svg class="absolute right-[-30px] bottom-[-8px] w-32 opacity-10  text-black" viewBox="0 0 200 200"
                    fill="none" stroke="currentColor" stroke-width="6">
                    <rect x="36" y="46" width="132" height="108" rx="18" />
                    <path d="M36 58l66 50 66-50" />
                </svg>
            </div>


            <!-- Office Address Card -->
            <div
                class="relative w-full max-w-[397px] h-[107px] bg-gray-100  rounded-br-[60px]  overflow-hidden flex items-center p-4">
                <!-- Icon -->
                <div class="h-[45px] w-[45px] bg-[#E04794] grid place-items-center rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                        <circle cx="12" cy="9" r="2.5" />
                    </svg>
                </div>
                <!-- Text -->
                <div class="ml-4">
                    <p class="font-semibold text-[#111111] font-heading text-base">Office Address:</p>
                    <p class="text-[#333333] text-sm sm:text-sm font-heading font-medium">Near to Shankha Park, Shankhamul,
                        Lalitpur</p>
                </div>
                <!-- Background Icon -->
                <svg class="absolute right-[-30px] bottom-[-2px] w-28 opacity-10 text-black"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="1">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                    <circle cx="12" cy="9" r="2.5" />
                </svg>
            </div>
            <div
                class="relative w-full max-w-[397px] h-[107px] bg-gray-100 rounded-br-[60px]  overflow-hidden flex items-center p-4">
                <!-- Icon -->
                <div class="h-[45px] w-[45px] bg-[#E04794] grid place-items-center rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            d="M22 16.92V21a2 2 0 01-2.18 2A19.79 19.79 0 013 5.18 2 2 0 015 3h4.09a2 2 0 012 1.72c.12.81.37 1.6.72 2.34a2 2 0 01-.45 2.11L10.1 10.9a16 16 0 006.9 6.9l1.73-1.27a2 2 0 012.11-.45c.74.35 1.53.6 2.34.72a2 2 0 011.72 2.02z" />
                    </svg>
                </div>
                <!-- Text -->
                <div class="ml-4">
                    <p class="font-semibold text-[#111111] font-heading text-base">Phone Number:</p>
                    <p class="text-[#333333] text-sm sm:text-sm font-heading font-medium">01-5914668 | 9804133001</p>
                </div>
                <!-- Background Icon -->
                <svg class="absolute right-[-20px] bottom-[-0px] w-28 opacity-10 text-black"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="0.7">
                    <path
                        d="M22 16.92V21a2 2 0 01-2.18 2A19.79 19.79 0 013 5.18 2 2 0 015 3h4.09a2 2 0 012 1.72c.12.81.37 1.6.72 2.34a2 2 0 01-.45 2.11L10.1 10.9a16 16 0 006.9 6.9l1.73-1.27a2 2 0 012.11-.45c.74.35 1.53.6 2.34.72a2 2 0 011.72 2.02z" />
                </svg>
            </div>

        </div>

        <!-- ===== Main Content (Left text+map / Right form) ===== -->
        <div class="mt-24 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
            <!-- Left -->
            <div>
                <p class="font-regular text-[#555555]  text-xl font-sub">Get in touch</p>
                <h2
                    class="mt-1 text-[28px] text-[#111111] sm:text-[32px] lg:text-[40px] font-bold font-heading tracking-tight">
                    Let’s Start talking with us
                </h2>
                <p class="mt-3 text-[15px] text-[#333333] text-justify font-body font-semibold leading-[30px]">
                    Mollis cursus at a accumsan blandit penatibus mattis vivamus hac donec. Augue eget
                    cursus eleifend auctor placerat sollicitudin vulputate arcu. Euismod class lectus
                    senectus hendrerit.
                </p>

                <!-- Map (screenshot-like) -->
                <div class="mt-4 rounded-xl overflow-hidden ring-1 ring-slate-200">
                    <!-- Replace this iframe with your map/image if needed -->
                    <iframe class="w-full h-64 lg:h-72 rounded-xl border"
                        src="https://maps.google.com/maps?q=Kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>

            <!-- Right (Form card) -->
            <section class="max-w-4xl ">
                <div
                    class="rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.08)]
           px-5 sm:px-7 pt-5 sm:pt-7 pb-4">
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-[#111111] mb-1 font-heading">First
                                    name</label>
                                <input type="text" placeholder="Enter your first name"
                                    class=" rounded-sm border w-full  h-[43px]  border-[#E0E0E0] font-body font-regular text-sm px-4 py-3
                                text-gray-900 placeholder-slate-400 focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">

                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#111111] mb-1 font-heading">Last
                                    name</label>
                                <input type="text" placeholder="Enter your Last name"
                                    class="  rounded-sm border w-full  h-[43px]  border-[#E0E0E0] font-body ffont-regular text-sm px-4 py-3
                                text-gray-900 placeholder-slate-400 focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">

                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-[#111111] mb-1 font-heading">Phone
                                    Number</label>
                                <input type="text" placeholder="Enter your phone number"
                                    class="  rounded-sm border w-full  h-[43px]  border-[#E0E0E0] font-body font-regular text-sm px-4 py-3
                                text-gray-900 placeholder-slate-400 focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">

                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#111111] mb-1 font-heading">Email
                                    Address</label>
                                <input type="text" placeholder="Add your email address"
                                    class="  rounded-sm border w-full  h-[43px]  border-[#E0E0E0] font-body font-regular text-sm px-4 py-3
                                text-gray-900 placeholder-slate-400 focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">

                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-[#111111] mb-1 font-heading">Message</label>
                            <textarea rows="4" placeholder="Write your message.."
                                class="w-full rounded-lg border border-slate-300 font-body font-regular bg-white px-3 py-2 text-sm placeholder-slate-400 focus:border-pink-500 focus:ring-pink-500"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full rounded-lg bg-pink-500 px-5 py-3 text-white text-[15px] font-semibold shadow-sm hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-400">
                            Send Message
                        </button>
                    </form>
                </div>
                <section>
        </div>
    </main>
    <!-- Conatact Main Section End -->
@endsection
