@extends('layouts.frontend')
@section('body')
    <!-- Portfolio Header Start -->
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
                Portfolio
            </h1>

            <!-- breadcrumb -->
            <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                    <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                            Page</a></li>
                    <li class="select-none  text-[#333333]">></li>
                    <li class="font-semibold text-sm text-[#333333]">Portfoli</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Portfoli Header End -->

    <!-- Portfolio main section start-->
    <main x-data="{ activeTab: 'brochure' }" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-10 mb-32 mt-16">

        <!-- ===== Tabs ===== -->
        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 pb-4 mt-8">
            <button @click="activeTab = 'logo'"
                :class="activeTab === 'logo' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Logo Design
            </button>

            <button @click="activeTab = 'brochure'"
                :class="activeTab === 'brochure' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Brochure Design
            </button>

            <button @click="activeTab = 'flyer'"
                :class="activeTab === 'flyer' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Flyer
            </button>

            <button @click="activeTab = 'business'"
                :class="activeTab === 'business' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Business Card
            </button>

            <button @click="activeTab = 'idcard'"
                :class="activeTab === 'idcard' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                ID Card
            </button>

            <button @click="activeTab = 'poster'"
                :class="activeTab === 'poster' ? 'bg-[#E04794] text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Poster Print
            </button>

            <button @click="activeTab = 'video'"
                :class="activeTab === 'video' ? 'bg-[#E04794]500 text-white border-pink-500' :
                    'bg-white text-gray-800 border-[#E0E0E0] hover:bg-[#FCEDF4]'"
                class="px-5 py-2.5 rounded-sm border text-sm font-medium font-heading shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                Video Promotion
            </button>
        </div>

        <!-- ===== Tab Contents ===== -->
        <section class="mt-6 sm:mt-12">
            <!-- Logo -->
            <!-- <div x-show="activeTab==='logo'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Logo+1" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Creative Logo 1</h3>
                    </div>
                </article>
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Logo+2" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Creative Logo 2</h3>
                    </div>
                </article>
            </div> -->

            <!-- Brochure -->
            <div x-show="activeTab==='brochure'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <div class="relative">
                        <!-- Replace src with your image -->
                        <img src="{{ asset('images/brochure1.png') }}" alt="Nepal theme brochure"
                            class="h-80 w-full object-cover sm:h-[28rem]" />
                    </div>
                    <!-- <div class="p-4 sm:p-5">
                        <h3 class="text-base font-semibold">Festival / National Day Brochure</h3>
                        <p class="mt-1 text-sm text-gray-600">Rooms, food, drinks & bakery</p>
                    </div> -->
                </article>
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <div class="relative">
                        <!-- Replace src with your image -->
                        <img src="{{ asset('images/brochure2.png') }}" alt="Nepal theme brochure"
                            class="h-80 w-full object-cover sm:h-[28rem]" />
                    </div>
                    <!-- <div class="p-4 sm:p-5">
                        <h3 class="text-base font-semibold">Festival / National Day Brochure</h3>
                        <p class="mt-1 text-sm text-gray-600">Rooms, food, drinks & bakery</p>
                    </div> -->
                </article>
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <div class="relative">
                        <!-- Replace src with your image -->
                        <img src="{{ asset('images/brochure3.png') }}" alt="Nepal theme brochure"
                            class="h-80 w-full object-cover sm:h-[28rem]" />
                    </div>
                    <!-- <div class="p-4 sm:p-5">
                        <h3 class="text-base font-semibold">Festival / National Day Brochure</h3>
                        <p class="mt-1 text-sm text-gray-600">Rooms, food, drinks & bakery</p>
                    </div> -->
                </article>
            </div>

            <!-- Flyer -->
            <!-- <div x-show="activeTab==='flyer'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Flyer+1" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Promotional Flyer</h3>
                    </div>
                </article>
            </div> -->

            <!-- Business Card -->
            <!-- <div x-show="activeTab==='business'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Business+Card+1" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Minimal Business Card</h3>
                    </div>
                </article>
            </div> -->

            <!-- ID Card -->
            <!-- <div x-show="activeTab==='idcard'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=ID+Card" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Employee ID Card</h3>
                    </div>
                </article>
            </div> -->

            <!-- Poster -->
            <!-- <div x-show="activeTab==='poster'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Poster+Design" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Event Poster</h3>
                    </div>
                </article>
            </div> -->

            <!-- Video -->
            <!-- <div x-show="activeTab==='video'" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 overflow-hidden">
                    <img src="https://via.placeholder.com/400x250?text=Video+Promotion" class="w-full h-64 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Video Promo Campaign</h3>
                    </div>
                </article>
            </div> -->
        </section>
    </main>
    <!-- Portfolio main section end -->
@endsection
