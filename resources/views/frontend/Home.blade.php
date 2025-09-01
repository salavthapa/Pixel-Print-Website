@extends('layouts.frontend')
@section('body')
    <!-- Your page content -->

    <!-- Scroll to Top Button -->
    <button x-show="showTop" @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 rounded-full bg-pink-500 p-3 text-white shadow-lg hover:bg-pink-600 transition"
        x-transition aria-label="Scroll to top">
        <!-- Up arrow icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>



    <!-- Hero Section -->
    <div class="relative w-full overflow-hidden">
        <!-- Slides -->
        <div id="slides" class="flex w-[200%]  transition-transform duration-1000">
            <div class="w-full h-[558px] flex-shrink-0">
                <img src="{{ asset('images/slider 1.jpg') }}" alt="Slide 1" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-[558px] flex-shrink-0">
                <img src="{{ asset('images/slider 2.jpg') }}" alt="Slide 2" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Fixed Content -->
        <div
            class="absolute inset-0 flex flex-col  justify-center h-[558px] items-center text-center px-0 text-white bg-black/50   pt-40">
            <h1 class="text-4xl md:text-6xl  font-bold font-heading">DIGITAL & OFFSET PRINTING</h1>
            <p class="max-w-4xl mt-4 text-lg md:text-lg  font-body font-regular leading-[30px]">
                We provide high-quality, cost-effective printing for business stationery, forms, manuals, reports, and more.
                With the power of digital printing, you can explore endless possibilities in signage, special finishes, and
                innovative ink options to make your projects stand out.
            </p>
            <x-Button color="pink-500">
                Explore More
            </x-Button>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Section-->
    <section class="relative bg-white overflow-hidden">
        <!-- Yellow Vector SVG (Background) -->
        <div class="absolute inset-0  -top-[400px] -left-6">
            <img src="{{ asset('images/Vector.png') }}" alt="Vector Shape" class="w-[920px] h-[760px]">
        </div>

        <!-- Content Wrapper -->
        <div class="relative max-w-7xl mx-auto px-6 lg:px-4 py-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left Content -->
            <div class="space-y-4">
                <p class="text-xl font-regular text-[#555555]  font-sub tracking-[3%]">about us</p>
                <h2 class="text-[40px] md:text-[40px] font-bold text-[#111111] leading-snug font-heading">
                    High Quality Printing Service Nepal
                </h2>
                <p class="text-[#333333] font-body font-semibold text-justify leading-[30px]">
                    Pixel Print Pvt. Ltd. is a Kathmandu-based firm that provides the full spectrum
                    of graphic design and printing services—our portfolio includes; print design; publishing;
                    advertising; and production for large and small clients. Our clients include individuals,
                    small businesses, corporations, and nonprofits, ranging from specialty restaurants to
                    insurance companies, colleges and universities, financial services firms, publishers,
                    and beyond.
                </p>
                <x-Button color="pink-500" size="text">
                    Discover More
                </x-Button>
            </div>

            <!-- Right Content -->
            <div class="relative flex justify-center top-4">
                <img src="{{ asset('images/about.png') }}" alt="Colorful Print"
                    class="rounded-xl shadow-lg w-full max-w-md object-cover">

                <!-- Floating Card -->
                <div class="absolute -top-8 right-4 bg-white shadow-md px-4 py-2 rounded-lg">
                    <p class="text-xl text-[#111111] font-headind font-semibold">25,000 +</p>
                    <span class="text-xs text-[#333333] font-semibold  font-heading">Customer Worldwide</span>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Services Section Start -->

    <div class="container relative mx-auto py-16 px-6 md:px-12 lg:px-36 overflow-hidden bg-[#F0EAF4] mt-16 bg-opacity-20">
        <div class="absolute right-0 bottom-0 -z-10">
            <img src="{{ asset('images/bg-shape.svg') }}" class="w-[819px] h-[601] object-cover" alt=""
                srcset="">
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



    <!-- Partner section start -->

    <section class="max-w-7xl mx-auto px-4 py-12 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

            <!-- Left Column -->
            <div class="bg-white rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] p-10 lg:p-8">
                <p class="text-lg font-regular text-[#555555] mb-0 font-sub">Partners</p>
                <h2 class="text-[40px] font-semibold text-[#111111] mb-2 font-heading">Clients</h2>
                <p class="text-base text-[#333333] font-semibold font-body leading-[30px]">
                    We collaborate closely with partners and clients, building trust and delivering tailored solutions that
                    drive lasting value and mutual success.
                </p>
                <x-Button color="pink-500" size="text">
                    View More
                </x-Button>
            </div>

            <!-- Right Column (Logos Grid) -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <!-- Logo Card -->
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/prabhu.png') }}" alt="Prabhu"
                        class="w-full h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Prabhu
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/khalti.png') }}" alt="khalti"
                        class="w-full h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Khalti
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/bhatbhateni.png') }}" alt="bhat bhateni"
                        class="w-[120px] h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        bhat-bhateni
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/bhat-bhateni.png') }}" alt="bhat-bhateni super store"
                        class="w-[120px] h-[67px] object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        bhat-bhateni super store
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>

                <!-- Repeat for all 12 logos -->

                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/jyoti bikash bank.png') }}" alt="bhat-bhateni"
                        class="w-[120px] h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Jyoti Bikash Bank
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/chandragiri.png') }}" alt="Chandragiri Savings & Credit Cooperative"
                        class="w-[120px] h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Chandragiri Savings & Credit Cooperative
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/timber.png') }}" alt="Timber craft Pvt.Ltd."
                        class="w-[120px] h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Timber craft Pvt.Ltd.
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/tansen.png') }}" alt="Tansen cement"
                        class="w-[120px] h-[65px] object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Tansen Cement
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/sunlife.png') }}" alt="Sun Nepal Life insurance"
                        class="w-[120px] h-[65px] object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Sun Nepal Life insurance
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/rmc.png') }}" alt="Rmc Foods"
                        class="w-[120px] h-[65px] object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Rmc Foods
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/popeye.png') }}" alt="PoP Eye"
                        class="w-[120px] h-[65px] object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        PoP Eye
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white rounded-xl shadow h-[75px] w-[141px] flex flex-col items-center justify-centershadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <img src="{{ asset('images/NepalLP.png') }}" alt="Nepal L.P. Gas Industry Association"
                        class="w-[120px] h-full object-contain bottom-0">
                    <!-- Tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Nepal L.P. Gas Industry Association
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner section End -->

    <!-- Message from chairman section start -->
    <section class="bg-[#F0EAF4] bg-opacity-30 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8 ">
                <!-- Image -->
                <div class="flex-shrink-0 w-full md:w-[45%]">
                    <img src="{{ asset('images/messagefromchairman.png') }}" alt="Chairman"
                        class="rounded-lg object-fill w-full h-full" />
                </div>

                <!-- Text Content -->
                <div class="w-full md:w-2/3">
                    <p class="text-lg font-regular text-[#555555] mb-2 font-sub">Leadership Message</p>
                    <h2 class="text-[40px] sm:text-4xl font-bold mb-4 font-heading">Message from chairman</h2>
                    <p class="text-[#333333] font-semibold mb-4 font-body text-justify leading-[30px]">
                        As we embark on another year of innovation and growth, I am proud to reflect on our organization's
                        continued commitment to excellence and our unwavering dedication to serving our stakeholders with
                        integrity and purpose.
                    </p>
                    <p class="text-[#333333] font-semibold mb-4 font-body text-justify leading-[30px]">
                        Our vision extends far beyond traditional boundaries, embracing sustainable practices and fostering
                        meaningful partnerships that create lasting value for our communities. Through strategic innovation
                        and collaborative leadership, we continue to shape the future of our industry.
                    </p>
                    <p class="text-[#333333] font-semibold mb-4 font-body text-justify leading-[30px]">
                        I invite you to join us on this transformative journey as we build tomorrow's solutions today,
                        guided by our core values of transparency, innovation, and social responsibility.
                    </p>
                    <hr class="border-gray-300 mb-4">
                    <p class="font-semibold italic text-[#111111] text-lg">John Mitchell</p>
                    <p class="font-medium italic text-[#333333] text-sm">Chairman & Chief Executive Officer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Message from chairman section End -->
    <!-- Section Header -->
    <div class="text-center py-10 mt-16">
        <h4 class="text-[#555555] font-regular text-lg font-sub">Recent News & Blogs</h4>
        <h1 class="text-3xl md:text-[40px] font-heading font-bold mt-2 leading-[50px]">
            Pixel Print: Here for <br> small business since 1995.
        </h1>
    </div>

    <!--Blog Cards Start -->
    <div class="container max-w-7xl mx-auto px-5 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

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
                    Setting Up Standard Operating Procedures While Outsourcing Graphic Design for Print Work
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

    <!-- Testimonials Start -->
    <section class="w-full max-w-7xl px-4 md:px-8 mx-auto mt-16">
        <!-- Heading -->
        <div class="text-center mb-10">
            <p class="text-[#555555] font-regular text-lg font-sub">Testimonials</p>
            <h2 class="text-3xl md:text-[40px] font-bold mt-2 font-heading">Our Work in Their Words</h2>
        </div>

        <!-- Slider -->
        <div class="relative">
            <div id="slider"
                class="flex overflow-x-auto snap-x snap-mandatory gap-6 pb-6
               [scrollbar-width:none] [-ms-overflow-style:none]
               [&::-webkit-scrollbar]:hidden scroll-smooth">

                <!-- Slide 1 -->
                <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center">
                    <div
                        class="bg-[#FCFCFC] rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] stroke-[#E0E0E0] border-opacit-[0.3px] p-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full">
                            <div class="flex-1">
                                <h4 class="font-semibold font-heading text-lg text-[#111111]">Sophia Moore</h4>
                                <p class="font-medium font-heading text-sm text-[#555555]">CEO</p>
                            </div>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                            </div>
                        </div>
                        <p class="font-bold text-base mb-2 text-[#111111] font-heading">“The best Webflow Templates”</p>
                        <p class="text-gray-600 text-sm font-semibold text-justify font-body leading-[25px]">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat aute irure sint amet occaecat cupidatat non proident.
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center">
                    <div
                        class="bg-[#FCFCFC] rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] stroke-[#E0E0E0] border-opacit-[0.3px] p-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full">
                            <div class="flex-1">
                                <h4 class="font-semibold font-heading text-lg text-[#111111]">Sophia Moore</h4>
                                <p class="font-medium font-heading text-sm text-[#555555]">CEO</p>
                            </div>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                            </div>
                        </div>
                        <p class="font-bold text-base mb-2 text-[#111111] font-heading">“The best Webflow Templates”</p>
                        <p class="text-gray-600 text-sm font-semibold text-justify font-body leading-[25px]">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat aute irure sint amet occaecat cupidatat non proident.
                        </p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center">
                    <div
                        class="bg-[#FCFCFC] rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] stroke-[#E0E0E0] border-opacit-[0.3px] p-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full">
                            <div class="flex-1">
                                <h4 class="font-semibold font-heading text-lg text-[#111111]">Sophia Moore</h4>
                                <p class="font-medium font-heading text-sm text-[#555555]">CEO</p>
                            </div>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                            </div>
                        </div>
                        <p class="font-bold text-base mb-2 text-[#111111] font-heading">“The best Webflow Templates”</p>
                        <p class="text-gray-600 text-sm font-semibold text-justify font-body leading-[25px]">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat aute irure sint amet occaecat cupidatat non proident.
                        </p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center">
                    <div
                        class="bg-[#FCFCFC] rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] stroke-[#E0E0E0] border-opacit-[0.3px] p-6">
                        <div class="flex items-center space-x-2 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-14 h-14 rounded-full">
                            <div class="flex-1">
                                <h4 class="font-semibold font-heading text-lg text-[#111111]">Sophia Moore</h4>
                                <p class="font-medium font-heading text-sm text-[#555555]">CEO</p>
                            </div>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                                <i class="fa-solid fa-star text-xs"></i>
                            </div>
                        </div>
                        <p class="font-bold text-base mb-2 text-[#111111] font-heading">“The best Webflow Templates”</p>
                        <p class="text-gray-600 text-sm font-semibold text-justify font-body leading-[25px]">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat aute irure sint amet occaecat cupidatat non proident.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Controls (Dots) -->
            <div class="flex justify-center space-x-2" id="dots">
                <button class="h-[8px] w-[50px] rounded-lg bg-pink-500 transition-all"></button>
                <button class="h-[8px] w-[30px] rounded-lg bg-black transition-all"></button>
                <!-- <button class="h-2 w-2 rounded-full bg-gray-400 transition-all"></button>
                <button class="h-2 w-2 rounded-full bg-gray-400 transition-all"></button> -->
            </div>
        </div>
    </section>

    <!-- Auto Slide Script -->
    <script>
        const slider = document.getElementById('slider');
        const dots = document.querySelectorAll('#dots button');
        let index = 0;

        function showSlide(i) {
            const card = slider.querySelector('div');
            const cardWidth = card.offsetWidth + 24; // width + gap
            let perView = 1;
            if (window.innerWidth >= 1024) perView = 3; // lg
            else if (window.innerWidth >= 640) perView = 2; // sm/md

            slider.scrollTo({
                left: cardWidth * perView * i,
                behavior: 'smooth'
            });

            dots.forEach((dot, idx) => {
                if (idx === i) {
                    dot.classList.remove('w-[30px]', 'bg-black');
                    dot.classList.add('w-[50px]', 'bg-[#E04794]');
                } else {
                    dot.classList.remove('w-[50px]', 'bg-[#E04794]');
                    dot.classList.add('w-[30px]', 'bg-black');
                }
            });
        }

        function autoSlide() {
            index = (index + 1) % dots.length;
            showSlide(index);
        }

        // Auto every 3s
        setInterval(autoSlide, 8000);

        // Dot controls
        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                index = i;
                showSlide(index);
            });
        });

        // Init
        showSlide(index);
    </script>

    <!-- Testimonials End -->

    <!-- Request a quote start -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden mt-16 " id="quoteForm">

        <!-- Purple Background with Wave using skew -->
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-[#2A143C] transform -skew-y-6 origin-bottom -z-80"></div>

        <div class="relative container max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-center">

            <!-- Left Illustration -->
            <div class="w-full md:w-1/2 flex justify-center mb-10 md:mb-0 ">
                <img src="{{ asset('images/request.png') }}" alt="Illustration"
                    class="max-w-xs md:max-w-md hidden md:block">
            </div>

            <!-- Right Form -->
            <div
                class="w-full md:w-1/2 bg-white rounded-lg shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] stroke-[#E0E0E0] border-opacit-[0.3px] p-6 md:p-10 z-10">
                <h2 class="text-2xl md:text-2xl font-bold mb-6 text-center font-heading">Request a Quote</h2>
                <form class="space-y-5">

                    <!-- Name & Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Name"
                            class=" rounded-sm border border-[#E0E0E0] px-4 py-3
                                   text-gray-900 placeholder-[#E0E0E0]
                                    focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">
                        <input type="email" placeholder="Email"
                            class="rounded-sm border border-[#E0E0E0] px-4 py-3
                              text-gray-900 placeholder-[#E0E0E0]
                                focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">
                    </div>
                    <!-- Phone & Services Dropdown -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Phone"
                            class="w-full rounded-sm border border-[#E0E0E0] px-4 py-3
                                text-gray-900 placeholder-[#E0E0E0]
                                focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition">
                        <div class="relative" id="service-dd">
                            <!-- Trigger -->
                            <button type="button"
                                class="w-full flex items-center justify-between rounded-sm border border-[#E0E0E0] bg-white px-4 py-3"
                                data-dd-toggle>
                                <span data-dd-label>Select Service</span>
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Menu -->
                            <ul class="absolute left-0 top-full z-10 mt-2 w-full rounded-lg border border-gray-200 bg-white shadow-lg hidden"
                                data-dd-menu>
                                <li class="px-4 py-2 cursor-pointer hover:bg-[#E04794] hover:text-white font-heading font-medium text-sm"
                                    data-dd-item>Logo
                                </li>
                                <li class="px-4 py-2 cursor-pointer hover:bg-[#E04794] hover:text-white font-heading font-medium text-sm"
                                    data-dd-item>
                                    Brochure</li>
                                <li class="px-4 py-2 cursor-pointer hover:bg-[#E04794] hover:text-white font-heading font-medium text-sm"
                                    data-dd-item>Poster
                                    Print</li>
                                <li class="px-4 py-2 cursor-pointer hover:bg-[#E04794] hover:text-white font-heading font-medium text-sm"
                                    data-dd-item>
                                    Business Card</li>
                                <li class="px-4 py-2 cursor-pointer hover:bg-[#E04794] hover:text-white font-heading font-medium text-sm"
                                    data-dd-item>ID
                                    Card</li>
                            </ul>

                            <!-- (optional) hidden input to submit value -->
                            <input type="hidden" name="service" value="" data-dd-input>
                        </div>


                    </div>

                    <!-- Message -->
                    <textarea placeholder="Write your message" rows="4"
                        class="w-full h-32 rounded-lg border border-[#E0E0E0] px-4 py-3
                                text-gray-900 placeholder-[#E0E0E0]
                                focus:outline-none focus:border-pink-50 focus:ring-1 focus:ring-pink-500 transition"></textarea>

                    <!-- Button -->
                    <div class="text-right">
                        <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-4 py-2 rounded-sm transition duration-300">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Request a quote End -->
@endsection
