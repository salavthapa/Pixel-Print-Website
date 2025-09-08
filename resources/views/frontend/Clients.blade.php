@extends('layouts.frontend')
@section('body')
<!-- Clients Header Start -->
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
            Clients
        </h1>

        <!-- breadcrumb -->
        <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-xs">Home
                        Page</a></li>
                <li class="select-none  text-[#333333]">></li>
                <li class="font-semibold text-xs text-[#333333]">Clinets</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Clients Header End -->

<!-- Portfolio main section start-->
<section class="w-full bg-white mb-16 ">
    <div class="mx-auto max-w-8xl px-6 lg:px-8 py-10 lg:py-24">
        <!-- vertical gap between rows -->
        <div class="space-y-12">

            <!-- ROW 1: 7 logos (centered, gap-12) -->
            <ul class="flex flex-wrap justify-center gap-4">
                <!-- tile -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Khalti
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/khalti.png') }}" alt="Khalti"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>

                <!-- duplicate this <li> pattern to make 7 in this row -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Bhat-bhateni
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/bhat-bhateni.png') }}" alt="bhat-bhateni"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Tansen
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/tansen.png') }}" alt="Tansen"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Prabhu
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/prabhu.png') }}" alt="Prabhu"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Chandragiri
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/chandragiri.png') }}" alt="chandragiri"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Timber
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/timber.png') }}" alt="timber"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <div
                    class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                    <!-- tooltip -->
                    <div
                        class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                        Kathmandu Forestry College
                        <div
                            class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                        </div>
                    </div>
                    <div class="h-[75px] grid place-items-center">
                        <img src="{{ asset('images/kathmandu.png') }}" alt="timber"
                            class="max-h-full max-w-full object-contain" />
                    </div>
                </div>

                <!-- ...add 5 more cards for row-1 (total 7) ... -->
            </ul>

            <!-- ROW 2: 6 logos (centered, gap-12) -->
            <ul class="flex flex-wrap justify-center gap-4">
                <!-- 6 tiles -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Gyan Jyoti
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/gyan.png') }}" alt="gyan jyoti"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>

                <!-- ...add 5 more cards for row-2 (total 6) ... -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Jyoti Bikash Bank
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/jyoti bikash bank.png') }}" alt="jyoti bikash bank"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Rmc Food
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/rmc.png') }}" alt="Rmc Food"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Team Vertex Nepal
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/teamvertex.png') }}" alt="team vertex nepal"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Timber Gallery
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/timbergallery.png') }}" alt="Timber Gallery"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Frontline Hospital
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/frontline.png') }}" alt="frontline hospital"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
            </ul>

            <!-- ROW 3: 5 logos (centered, gap-12) -->
            <ul class="flex flex-wrap justify-center gap-4">
                <!-- 5 tiles -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Manakamana Cable Car
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/manakamana.png') }}" alt="Manakamana Cable Car"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>

                <!-- ...add 4 more cards for row-3 (total 5) ... -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            EnerTech Group
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/ener.png') }}" alt="enertech group"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Cosmos
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/cosmos.png') }}" alt="cosmos"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Bhatbhateni
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/bhatbhateni.png') }}" alt="Bhatbhateni"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Popeye
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/popeye.png') }}" alt="popeye"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
            </ul>

            <!-- ROW 4: 4 logos (centered, gap-12) -->
            <ul class="flex flex-wrap justify-center gap-4">
                <!-- 4 tiles -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Sunlife
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/sunlife.png') }}" alt="sunlife"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>

                <!-- ...add 3 more cards for row-4 (total 4) ... -->
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Nepal L.P Gas Industry Association
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/NepalLP.png') }}" alt="Nepal L.P Gas Industry Association"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Edu-Bridge
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/edu.png') }}" alt="Edu-Bridge"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
                <li class="w-[163px]">
                    <div
                        class="group flex justify-center relative rounded-2xl  bg-white p-4 ring-1 ring-black/5 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] ">
                        <!-- tooltip -->
                        <div
                            class="absolute bottom-full mb-2 px-3 py-1 bg-gray-800 text-white text-xs rounded-lg font-heading font-medium opacity-0 group-hover:opacity-100 transition pointer-events-none">
                            Deprose
                            <div
                                class="absolute left-1/2 transform -translate-x-1/2 top-full w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
                            </div>
                        </div>
                        <div class="h-[75px] grid place-items-center">
                            <img src="{{ asset('images/deprose.png') }}" alt="Deprose"
                                class="max-h-full max-w-full object-contain" />
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</section>
<!-- Portfolio main section End-->
@endsection