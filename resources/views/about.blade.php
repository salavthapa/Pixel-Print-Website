@extends('layouts.main')
@section('body')
<!-- About Us Header Start -->
<section class="relative overflow-hidden bg-[#F0EAF4]">
    <!-- background images (decorations) -->
    <img src="{{asset('images/circle.svg')}}" alt=""
        class=" pointer-events-none absolute -top-8 right-78 hidden sm:block w-[450px] h-auto">

    <img src="{{asset('images/circle3.svg')}}" alt=""
        class=" pointer-events-none absolute -bottom-0 left-40 hidden sm:block w-[600px] h-auto">

    <img src="{{asset('images/circle2.svg')}}" alt=""
        class="pointer-events-none absolute -bottom-0 -right-0 hidden sm:block w-[500px] h-auto">

    <!-- content -->
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 py-12 sm:py-16 lg:py-20">
        <h1 class="text-center text-[#111111]
               text-[34px] sm:text-5xl lg:text-[50px] leading-tight font-bold">
            About us
        </h1>

        <!-- breadcrumb -->
        <nav class="mt-4 flex justify-center" aria-label="Breadcrumb">
            <ol class="flex items-center gap-3 text-[15px] sm:text-base text-gray-800">
                <li><a href="/" class="hover:text-[#E04794] text-[#333333] font-body font-semibold text-sm">Home
                        Page</a></li>
                <li class="select-none  text-[#333333]">></li>
                <li class="font-semibold text-sm text-[#333333]">About Us</li>
            </ol>
        </nav>
    </div>
</section>
<!-- About Us Header End -->

<!-- About us section start -->
<section class="py-10 sm:py-14 lg:py-20 mt-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <!-- headings -->
        <p class="text-center text-xl sm:text-xl font-regular text-[#555555] font-sub ">
            About Pixel Print
        </p>
        <h2 class="mt-4 text-center text-3xl sm:text-4xl lg:text-[40px] font-bold text-[#111111] font-heading">
            Know About
        </h2>

        <!-- content -->
        <div class="mt-8 lg:mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            <!-- left: copy -->
            <div
                class="text-[15px] sm:text-base leading-7 sm:leading-8 text-[#333333] font-semibold font-body text-justify">
                <p class="mb-4">
                    Pixel Print Pvt. Ltd. is a Kathmandu-based firm that provides the full spectrum of graphic
                    design and printing services—our portfolio includes; print design; publishing; advertising;
                    and production for large and small clients. Our clients include individuals, small businesses,
                    corporations, and nonprofits, ranging from specialty restaurants to insurance companies,
                    colleges and universities, financial services firms, publishers, and beyond. We work within
                    your budget and timeframe to develop powerful, memorable, and effective integrated print
                    and Graphic solutions that grab and hold your audience.
                </p>
                <p class="mb-4">
                    In this day of prefabricated graphic and print media, we serve clients who seek to
                    differentiate themselves through refined, custom design. Every decision we make involves
                    thoughtful consideration of how to achieve your intended results and satisfy your needs.
                    Let us help you get your projects off the ground. Look at our portfolio and get acquainted
                    with the work we’ve produced. Then contact us to learn what we can do for you.
                </p>

                <!-- highlighted line -->
                <p class="font-semibold text-[#E04794] text-base font-body text-justify leading-[30px]">
                    Comprehensive services in print and graphic design. A personalized approach to creating
                    fully custom and unique designs. Extensive work in multiple industries with proven results
                    for diverse large- and small-scale clients. Expert print design backed by years of
                    experience.
                </p>
            </div>

            <!-- right: image -->
            <div class="order-first lg:order-none">
                <img src="{{asset('images/about.png')}}" alt="Colorful eye artwork"
                    class="w-full h-auto rounded-2xl shadow-sm" />
            </div>
        </div>
    </div>
</section>
<!-- About us section end -->

<!-- Wrapper -->
<section class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 lg:py-14">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <article
                class="relative rounded-2xl border border-gray-200 bg-white p-6 sm:p-8 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)">
                <!-- Number -->
                <span
                    class="absolute right-6 top-6 text-[50px] sm:text-[50px] font-extrabold font-heading tracking-[16%]"
                    style="-webkit-text-stroke: 2px #ec4899; color: transparent;">01</span>

                <!-- Icon -->
                <div class="mb-5 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#E04794]">
                    <!-- target icon -->
                    <i class=" fa-solid fa-bullseye text-[25px] text-white"></i>
                </div>

                <h3 class="text-2xl font-bold text-[#111111] font-heading">Mission</h3>
                <p class="mt-2 text-[#333333] text-regular text-justify leading-[25px] rounded-[15px]">
                    To empower businesses and individuals with high-quality, innovative, and affordable printing
                    and digital solutions that bring ideas to life with speed, precision, and creativity.
                </p>
            </article>

            <!-- Card 2 -->
            <article
                class="relative rounded-2xl border border-gray-200 bg-white p-6 sm:p-8 shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)">
                <!-- Number -->
                <span
                    class="absolute right-6 top-6 text-[50px] sm:text-[50px] font-extrabold font-heading tracking-[16%]"
                    style="-webkit-text-stroke: 2px #ec4899; color: transparent;">02</span>

                <!-- Icon -->
                <div class="mb-5 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#E04794]">
                    <!-- eye icon -->
                    <i class="fa-solid fa-eye text-[25px] text-white"></i>
                </div>

                <h3 class="text-2xl font-bold text-[#111111] font-heading">Vision</h3>
                <p class="mt-2 text-[#333333] text-regular text-justify leading-[25px] rounded-[15px]">
                    To become a leading modern printing and digital solutions agency, recognized for transforming
                    creativity into impactful designs and helping brands communicate with clarity and style.
                </p>
            </article>

            <!-- Card 3 (highlight) -->
            <article
                class="relative rounded-2xl bg-[#CC4187] p-6 sm:p-8 text-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)">
                <!-- Number -->
                <span
                    class="absolute right-6 top-6 text-[50px] sm:text-[50px] font-extrabold font-heading tracking-[16%] text-white/0"
                    style="-webkit-text-stroke: 2px #ffffff;">03</span>

                <!-- Icon -->
                <div class="mb-5 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FCFCFC]">
                    <!-- shield icon -->
                    <i class="fa-solid fa-shield text-[25px] text-black"></i>
                </div>

                <h3 class="text-2xl font-bold text-white font-heading">Trusted Services</h3>
                <p class="mt-2 text-white text-regular text-justify leading-[25px] rounded-[15px]">
                    Pixel Print Pvt. Ltd. provides creative, reliable, and high-quality design and printing
                    solutions delivered on time to help your brand stand out.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="w-full bg-[#64308E] h-[320px] sm:h-[380px] md:h-[440px] lg:h-[440px] mt-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid items-center gap-10 lg:grid-cols-2">
            <!-- Left: Heading + CTA -->
            <div class="text-white">
                <h1
                    class="font-bold tracking-tight leading-tight text-[20px] md:text-[44px] lg:text-4xl font-heading max-w-xl">
                    PIXEL PRINT helps you create a modern agency site in minutes.
                </h1>

                <div class="md:block mt-12">
                    <a href="#"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-4 py-3 rounded-sm font-heading">
                        Explore Team
                    </a>
                </div>
            </div>

            <!-- Right: Stat Cards -->
            <div class="grid gap-0 sm:grid-cols-2 lg:justify-items-end invisible sm:visible">
                <!-- Card 1 -->
                <div class="w-full sm:w-[260px] rounded-lg bg-white p-5 ">
                    <div class="flex items-start justify-between gap-4 ">
                        <div
                            class="h-11 w-11 rounded-full bg-[#64308E] grid place-content-center shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                            <svg class=" h-[20px] w-[20px] text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m19 1l-1.26 2.75L15 5l2.74 1.26L19 9l1.25-2.74L23 5l-2.75-1.25M9 4L6.5 9.5L1 12l5.5 2.5L9 20l2.5-5.5L17 12l-5.5-2.5M19 15l-1.26 2.74L15 19l2.74 1.25L19 23l1.25-2.75L23 19l-2.75-1.26" />
                            </svg>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold text-[#111111] font-heading">99%</div>
                            <div class="text-sm font-medium text-[#555555] font-heading">Success Rate</div>
                        </div>
                    </div>
                    <div class="mt-5 h-1.5 w-full rounded-full bg-gray-200">
                        <div class="h-full w-[96%] rounded-full bg-[#9539EB]" role="progressbar" aria-valuenow="99"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full sm:w-[260px] rounded-lg bg-white p-5">
                    <div class="flex items-start justify-between gap-4">
                        <div
                            class="h-11 w-11 rounded-full bg-[#64308E] grid place-content-center shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)]">
                            <svg class="h-[20px] w-[20px] text-white" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15" />
                            </svg>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold text-[#111111] font-heading">$10M</div>
                            <div class="text-sm font-medium text-[#555555] font-heading">Revenue Generated</div>
                        </div>
                    </div>
                    <div class="mt-5 h-1.5 w-full rounded-full bg-gray-200">
                        <div class="h-full w-[80%] rounded-full bg-[#9539EB]" role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SLIDER (overlaps the purple area slightly) -->
<section id="team" class="relative -mt-10 mb-40">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 -mt-32 sm:-mt-16 md:-mt-16 lg:-mt-44">


        <div class="relative mt-6">
            <!-- Controls -->
            <button id="sliderPrev" aria-label="Previous" class="absolute left-2 md:-left-2 top-1/2 -translate-y-1/2 z-10
           size-10 rounded-full bg-white/90 shadow
           grid place-items-center hover:bg-white">
                <svg class="size-5 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button id="sliderNext" aria-label="Next" class="absolute right-2 md:-right-2 top-1/2 -translate-y-1/2 z-10
           size-10 rounded-full bg-white/90 shadow grid place-items-center hover:bg-white">
                <svg class="size-5 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <!-- right chevron -->
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Viewport -->
            <div id="sliderViewport" class="overflow-hidden">
                <!-- Track -->
                <ul id="sliderTrack" class="flex gap-4 md:gap-6 will-change-transform">
                    <!-- Slide 1 -->
                    <li class="slide shrink-0">
                        <div
                            class="w-[calc(100vw-3rem)] sm:w-[260px] rounded-lg bg-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
                            <img class=" sm:h-[313px] sm:w-[291px] w-full object-cover"
                                src="{{asset('images/team1.png')}}" alt="Manoj Basnet" />
                            <div class="p-4">
                                <p class="text-lg sm:text-sm font-semibold text-[#111111]">Manoj Basnet</p>
                                <p class="text-sm font-medium sm:text-xs text-[#333333]">CEO</p>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li class="slide shrink-0">
                        <div
                            class="w-[calc(100vw-3rem)] sm:w-[260px] rounded-lg bg-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
                            <img class=" sm:h-[313px] sm:w-[291px] w-full object-cover"
                                src="{{asset('images/team2.png')}}" alt="Pramila Thapa" />
                            <div class="p-4">
                                <p class="text-base sm:text-sm font-semibold text-gray-900">Pramila Thapa</p>
                                <p class="text-sm sm:text-xs text-gray-500">Administrator</p>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li class="slide shrink-0">
                        <div
                            class="w-[calc(100vw-3rem)] sm:w-[260px] rounded-lg bg-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
                            <img class="sm:h-[313px] sm:w-[291px] w-full object-cover"
                                src="{{asset('images/team3.png')}}" alt="Nabin Awal" />
                            <div class="p-4">
                                <p class="text-base sm:text-sm font-semibold text-gray-900">Mr.Babu Adhikari</p>
                                <p class="text-sm sm:text-xs text-gray-500">Product Manager</p>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 4 -->
                    <li class="slide shrink-0">
                        <div
                            class="w-[calc(100vw-3rem)] sm:w-[260px] rounded-lg bg-white shadow-[0_1px_3px_rgba(0,0,0,0.10),0_1px_2px_rgba(0,0,0,0.06)] overflow-hidden">
                            <img class="sm:h-[313px] sm:w-[291px] w-full object-cover"
                                src="{{asset('images/team4.png')}}" alt="Paras Basnet" />
                            <div class="p-4">
                                <p class="text-base sm:text-sm font-semibold text-gray-900">Nabin Awal</p>
                                <p class="text-sm sm:text-xs text-gray-500">Senior Graphic Design</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->
<script>
// Minimal vanilla JS slider: 1-by-1, infinite, mobile-friendly
(() => {
    const viewport = document.getElementById("sliderViewport");
    const track = document.getElementById("sliderTrack");
    const prev = document.getElementById("sliderPrev");
    const next = document.getElementById("sliderNext");

    const baseSlides = Array.from(track.children);
    const gap = () => parseFloat(getComputedStyle(track).gap || "0");

    const slideW = () => {
        const first = track.querySelector(".slide");
        return first ? first.getBoundingClientRect().width + gap() : 0;
    };

    const visible = () => {
        const w = viewport.clientWidth;
        const sw = slideW();
        return Math.max(1, Math.floor((w + gap()) / sw));
    };

    const cloneEdges = () => {
        const v = visible();
        const front = baseSlides.slice(0, v).map(n => n.cloneNode(true));
        const back = baseSlides.slice(-v).map(n => n.cloneNode(true));
        back.forEach(n => track.insertBefore(n, track.firstChild));
        front.forEach(n => track.appendChild(n));
        return v;
    };

    let edgeCount = cloneEdges();
    let index = edgeCount;
    let isAnimating = false;

    const setX = (instant = false) => {
        const x = -index * slideW();
        track.style.transition = instant ? "none" : "transform 500ms";
        track.style.transform = `translateX(${x}px)`;
        if (instant) track.getBoundingClientRect();
    };
    setX(true);

    const go = dir => {
        if (isAnimating) return;
        isAnimating = true;
        index += dir;
        setX(false);
    };

    track.addEventListener("transitionend", () => {
        const total = track.children.length;
        const realCount = total - 2 * edgeCount;

        if (index >= realCount + edgeCount) {
            index = edgeCount; // loop to first real
            setX(true);
        } else if (index < edgeCount) {
            index = realCount + edgeCount - 1; // loop to last real
            setX(true);
        }
        isAnimating = false;
    });

    prev.addEventListener("click", () => go(-1));
    next.addEventListener("click", () => go(1));

    // autoplay (pause on hover)
    let timer = setInterval(() => go(1), 3000);
    viewport.addEventListener("mouseenter", () => clearInterval(timer));
    viewport.addEventListener("mouseleave", () => (timer = setInterval(() => go(1), 3000)));

    // Rebuild on resize so widths based on vw stay correct
    let resizeTO;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTO);
        resizeTO = setTimeout(() => {
            track.innerHTML = "";
            baseSlides.forEach(n => track.appendChild(n.cloneNode(true)));
            edgeCount = cloneEdges();
            index = edgeCount;
            setX(true);
        }, 150);
    });
})();
</script>


@endsection