@extends('layouts.frontend')
@section('body')
<!-- Portfolio Header Start -->
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
            Blogs
        </h1>

        <!-- breadcrumb -->
        <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                        Page</a></li>
                <li class="select-none  text-[#333333]">></li>
                <li class="font-semibold text-sm text-[#333333]">Blogs</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Portfoli Header End -->


<!--Blog Cards Start -->
<div class="container max-w-7xl mx-auto px-5 grid gap-6 md:grid-cols-2 lg:grid-cols-3 mt-24 mb-38">

    <!-- Card 1 -->

    <div
        class="bg-white rounded-lg overflow-hidden relative shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
        <img src="{{ asset('images/blog1.png') }}" alt="blog 1" class="w-full h-[329px] bg-black object-cover">
        <!-- Date Badge -->
        <div
            class="absolute top-4 left-4 bg-[#E04794] text-white text-center rounded-[100px] px-2 py-4 w-[62px] h-[75px]">
            <div class="flex flex-col items-center text-sm font-semibold">
                <i class="fa-solid fa-calendar text-xl"></i>
                <span class="text-sm font-body">Feb 07</span>
            </div>
        </div>
        <!-- Content -->
        <div class="p-5">
            <p class="flex items-center text-[#E04794] font-semibold font-heading text-sm mb-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                2 minutes
            </p>
            <h2 class="text-base font-semibold text-[#111111] hover:text-[#E04794] cursor-pointer leading-[25px]">
                <a href="{{ route('blogDetails') }}">Setting Up Standard Operating Procedures While Outsourcing
                    Graphic Design for Print Work</a>
            </h2>


        </div>
    </div>

    <!-- Card 2 -->
    <div
        class="bg-white rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden relative">
        <img src="{{ asset('images/blog2.png') }}" alt="blog 2" class="w-full h-[329px] object-cover">
        <!-- Date Badge -->
        <div
            class="absolute top-4 left-4 bg-[#E04794] text-white text-center rounded-[100px] px-2 py-4 w-[62px] h-[75px]">
            <div class="flex flex-col items-center text-sm font-semibold">
                <i class="fa-solid fa-calendar text-xl"></i>
                <span class="text-sm font-body">Feb 07</span>
            </div>
        </div>
        <!-- Content -->
        <div class="p-5">
            <p class="flex items-center text-[#E04794] font-semibold font-heading text-sm mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                14 hours
            </p>
            <h2 class="text-base font-semibold text-[#111111] hover:text-[#E04794] cursor-pointer leading-[25px]">
                Top 10 easy print on demand partners to kickstart your business
            </h2>
        </div>
    </div>

    <!-- Card 3 -->
    <div
        class="bg-white rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden relative">
        <img src="{{ asset('images/blog3.png') }}" alt="blog 3" class="w-full h-[329px] object-cover">
        <!-- Date Badge -->
        <div
            class="absolute top-4 left-4 bg-[#E04794] text-white text-center rounded-[100px] px-2 py-4 w-[62px] h-[75px]">
            <div class="flex flex-col items-center text-sm font-semibold">
                <i class="fa-solid fa-calendar text-xl"></i>
                <span class="text-sm font-body">Feb 07</span>
            </div>
        </div>
        <!-- Content -->
        <div class="p-5">
            <p class="flex items-center text-[#E04794] font-semibold font-heading text-sm mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                14 hours
            </p>
            <h2 class="text-base font-semibold text-[#111111] hover:text-[#E04794] cursor-pointer leading-[25px]">
                An Ultimate Guide On How To Make And Sell Merch For Creators
            </h2>
        </div>
    </div>
</div>
<!--Blog Cards End -->
@endsection