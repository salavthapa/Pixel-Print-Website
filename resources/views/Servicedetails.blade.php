@extends('layouts.main')
@section('body')
<!-- ===== Custom Print Solutions (Responsive) ===== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 mb-32">
    <!-- Heading + Back chip -->
    <div class="text-center">
        <h1 class="text-[22px] sm:text-[26px] lg:text-[28px] font-semibold font-heading">
            Custom Print Solutions for Lasting Impressions
        </h1>
        <div class="mt-3">
            <a href="{{route('home')}}"
                class="inline-flex items-center gap-1 rounded-sm bg-pink-500 px-3 py-1.5 text-sm font-bold font-heading text-white hover:bg-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10"
                        clip-rule="evenodd" />
                </svg> Back
            </a>
        </div>
    </div>

    <!-- Main layout -->
    <div class="mt-7 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
        <!-- LEFT: Image + paragraph -->
        <div class="lg:col-span-8">
            <figure class="relative overflow-hidden rounded-lg ring-1 ring-slate-200 shadow-sm">
                <img src="{{asset('images/service1.png')}}" alt="Printing machine"
                    class="w-full h-56 sm:h-[32rem] object-cover" />

            </figure>

            <p class="mt-5 text-base sm:text-base text-justify text-[#333333] font-body">
                In this day of prefabricated graphic and print media, we serve clients who seek to
                differentiate themselves through refined, custom design. Every decision we make involves
                thoughtful consideration of how to achieve your intended results and satisfy your needs.
            </p>
        </div>

        <!-- RIGHT: Sidebar -->
        <aside class="lg:col-span-4 space-y-6">
            <!-- Service Offer -->
            <div class="rounded-lg bg-[#F5F5F5] ring-1 ring-slate-200  overflow-hidden">
                <div class="px-5 py-6">
                    <h3 class="text-xl text-[#111111] font-semibold font-heading">Service Offer</h3>
                </div>
                <nav class="space-y-3 px-6 p-6 -mt-8">
                    <!-- active row -->
                    <a href="#"
                        class="flex items-center justify-between rounded-sm bg-white px-4 py-3 font-heading text-sm font-semibold text-[#111111] ring-1 ring-pink-200 hover:bg-[#E04794] hover:text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                        <span>Digital Printing</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between rounded-sm bg-white px-4 py-3 font-heading text-sm font-semibold text-[#111111] ring-1 ring-pink-200 hover:bg-[#E04794] hover:text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                        <span>Offset Printing</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between rounded-sm bg-white px-4 py-3 font-heading text-sm font-semibold text-[#111111] ring-1 ring-pink-200 hover:bg-[#E04794] hover:text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                        <span>Magazine</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between rounded-sm bg-white px-4 py-3 font-heading text-sm font-semibold text-[#111111] ring-1 ring-pink-200 hover:bg-[#E04794] hover:text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                        <span>Large Format Print</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex items-center justify-between rounded-sm bg-white px-4 py-3 font-heading text-sm font-semibold text-[#111111] ring-1 ring-pink-200 hover:bg-[#E04794] hover:text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                        <span>Signage</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                        </svg>
                    </a>
                </nav>
            </div>

            <!-- Call card -->
            <div class="relative overflow-hidden rounded-lg bg-black text-white h-[247px]">
                <img src="{{asset('images/service1.png')}}"
                    class="absolute inset-0 h-full w-full object-cover opacity-40" alt="" />
                <div class="relative p-5">
                    <div class="flex items-center justify-center">
                        <div class="flex h-[47px] w-[47px] items-center justify-center rounded-sm bg-[#64308E]">
                            <!-- phone icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M8.172 15.829c3.845 3.845 7.408 4.266 8.454 4.305c1.264.046 2.554-.986 3.112-2.043c-.89-1.044-2.049-1.854-3.318-2.732c-.749.748-1.672 2.138-2.901 1.64c-.699-.281-2.425-1.076-3.933-2.585S7.283 11.18 7 10.482c-.498-1.231.896-2.156 1.645-2.905c-.878-1.29-1.674-2.479-2.716-3.324c-1.072.56-2.11 1.84-2.063 3.121c.039 1.046.46 4.609 4.306 8.455m8.38 6.304c-1.44-.053-5.521-.617-9.795-4.89c-4.273-4.274-4.836-8.354-4.89-9.795c-.08-2.196 1.602-4.329 3.545-5.162a1.47 1.47 0 0 1 1.445.159c1.608 1.173 2.717 2.95 3.67 4.342A1.504 1.504 0 0 1 10.35 8.7l-1.356 1.357C9.309 10.752 9.95 11.95 11 13s2.248 1.691 2.944 2.006l1.355-1.356a1.5 1.5 0 0 1 1.918-.171c1.42.984 3.088 2.077 4.304 3.634a1.47 1.47 0 0 1 .189 1.485c-.837 1.953-2.955 3.616-5.158 3.535" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-[22px] font-semibold font-heading">Looking for service printing</p>
                        <p class="text-[22px] font-semibold font-heading">service Provider ?</p>
                        <p class="mt-1 text-base font-semibold font-heading">Call Anytime</p>
                    </div>

                    <div class="mt-4 flex justify-center ">
                        <a href="tel:015914668"
                            class="inline-flex items-center justify-center rounded-md bg-[#E04794] px-4 py-2 text-sm font-body font-medium text-white ">
                            01-5914668 | 9804133001
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>

@endsection