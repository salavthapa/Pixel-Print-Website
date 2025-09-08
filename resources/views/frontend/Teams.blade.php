@extends('layouts.frontend')
@section('body')
<!-- Teams Header Start -->
<section class="relative overflow-hidden bg-[#F0EAF4]">
    <!-- background images (decorations) -->
    <img src="{{ asset('images/circle.svg') }}" alt=""
        class=" pointer-events-none absolute -top-8 right-80 hidden sm:block w-[450px] h-auto">

    <img src="{{ asset('images/circle3.svg') }}" alt=""
        class=" pointer-events-none absolute -bottom-0 left-40 hidden sm:block w-[600px] h-auto">

    <img src="{{ asset('images/circle2.svg') }}" alt=""
        class="pointer-events-none absolute -bottom-0 -right-0 hidden sm:block w-[500px] h-auto">

    <!-- content -->
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 py-12 sm:py-16 lg:py-20">
        <h1 class="text-center text-[#111111]
               text-[34px] sm:text-5xl lg:text-[50px] leading-tight font-bold">
            Our Teams
        </h1>

        <!-- breadcrumb -->
        <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                        Page</a></li>
                <li class="select-none  text-[#333333]">></li>
                <li class="font-semibold text-sm text-[#333333]">our teams</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Teams Header End -->

<!-- Our Teams Section Start -->

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-32 mt-16">
    <!-- Team Grid -->
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        <!-- Card -->
        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team1.png') }}" alt="Manoj Basnet"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Manoj Basnet</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">CEO</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team2.png') }}" alt="Pramila Thapa"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Pramila Thapa</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Administrator</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team3.png') }}" alt="Mr. Babu Adhikari"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Mr. Babu Adhikari</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Production Manager</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team4.png') }}" alt="Nabin Awal"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Nabin Awal</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Senior Graphic Design</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team5.png') }}" alt="Paras Basnet"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Paras Basnet</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Graphic Designer</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team6.png') }}" alt="Prabin Kumar Sharma"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Prabin Kumar Sharma</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Client Service Officer</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team7.png') }}" alt="Suman Shrestha"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Suman Shrestha</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Client Service Executive</p>
            </div>
        </li>

        <li
            class="group rounded-lg bg-white ring-1 ring-slate-200 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden">
                <img src="{{ asset('images/team8.png') }}" alt="Buddak Magar"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.02]" />
            </div>
            <div class="px-4 py-3 text-center">
                <p class="font-semibold text-base font-heading text-[#111111]">Buddak Magar</p>
                <p class="text-sm font-medium font-heading text-[#333333] mt-0.5">Machine Operator</p>
            </div>
        </li>
    </ul>
</main>
<!-- Our Team Section Ends -->
@endsection