@extends('layouts.frontend')
@section('body')
<!-- About Us Header Start -->
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
            Services
        </h1>

        <!-- breadcrumb -->
        <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                <li><a href="{{ route('home') }}"
                        class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                        Page</a></li>
                <li class="select-none  text-[#333333]">></li>
                <li class="font-semibold text-sm text-[#333333]">About Us</li>
            </ol>
        </nav>
    </div>
</section>
<!-- About Us Header End -->
<!-- Services Section Start -->

<div class="container relative mx-auto py-16 px-6 md:px-12 lg:px-36 overflow-hidden mb-40 bg-opacity-20">
    <div class="absolute right-0 bottom-0 -z-10">
        <img src="{{ asset('images/circleshape.svg') }}" class="w-[467px] h-[601] object-cover" alt="" srcset="">
    </div>
    <!-- Section Heading -->
    <div class="text-center mb-12">
        <h3 class="text-xl md:text-xl font-medium text-[#555555] font-sub">Digital Printing Service</h3>
        <h2 class="text-3xl md:text-4xl lg:text-[40px] font-extrabold text-[#111111] mt-4 font-heading">Explore
            all service</h2>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        <!-- Service Card 1: Graphic Design -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden">
                <img src="{{ asset('images/digital.jpg') }}" alt="Graphic Design Icon"
                    class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Graphic Design</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <a href="{{ route('serviceDetails') }}"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Read More <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Service Card 2: Digital Printing -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden ">
                <img src="{{ asset('images/digital.jpg') }}" alt="Digital Printing Icon"
                    class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Digital Printing</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <Button href="#"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Readmore
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Service Card 3: Offset Printing -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden">
                <img src="{{ asset('images/offset.jpg') }}" alt="Offset Printing Icon"
                    class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Offset Printing</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <Button href="#"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Readmore
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Service Card 4: Magazine -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden">
                <img src="{{ asset('images/magine.jpg') }}" alt="Magazine Icon" class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Magazine</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <Button href="#"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Readmore
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Service Card 5: Large Format Print -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden ">
                <img src="{{ asset('images/large.jpg') }}" alt="Large Format Print Icon"
                    class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Large Format Print</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <Button href="#"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Readmore
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Service Card 6: Signage -->
        <div
            class="bg-white rounded-[8px] shadow-[0_4px_12px_rgba(0,0,0,0.1)] p-6 flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-4">
            <!-- Image container with responsive sizing -->
            <div class="w-full md:w-[122px] h-[156px] rounded-[4px] overflow-hidden">
                <img src="{{ asset('images/signage.jpg') }}" alt="Signage Icon" class="w-full h-full object-cover">
            </div>
            <div class="flex-1">
                <h4 class="text-xl text-[#111111] font-semibold mb-2">Signage</h4>
                <p class="text-[#333333] text-justify text-[14px] mb-4 font-body font-semibold leading-[25px]">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                </p>
                <Button href="#"
                    class="block bg-pink-500 hover:bg-pink-600 text-white w-3xs h-[32px] size-fit text-[12px] font-semibold font-heading text-center py-2 px-4 rounded-sm">
                    Readmore
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->
@endsection