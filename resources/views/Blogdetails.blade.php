@extends('layouts.main')
@section('body')
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 mb-32">
    <!-- Title + Back -->
    <div class="text-center">
        <h1 class="text-[22px] sm:text-[26px] lg:text-[28px] font-semibold font-heading">
            Setting Up Standard Operating Procedures While Outsourcing
            <br class="hidden sm:block"> Graphic Design for Print Work
        </h1>
        <div class="mt-3">
            <a href="{{route('blog')}}"
                class="inline-flex items-center gap-1 rounded-sm bg-pink-500 px-3 py-1.5 text-sm font-bold font-heading text-white hover:bg-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10"
                        clip-rule="evenodd" />
                </svg> Back
            </a>
        </div>
    </div>

    <!-- Main: Article + Sticky Sidebar -->
    <div class="mt-18 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
        <!-- Article -->
        <article class="lg:col-span-8">
            <!-- Cover -->
            <figure class="rounded-lg overflow-hidden ring-1 ring-slate-200 shadow-sm">
                <img src="{{asset('images/blog1.png')}}" alt="Printer" class="w-full h-60 sm:h-[520px] object-cover" />
            </figure>

            <!-- Date -->
            <p class="mt-4 text-sm text-[#555555] font-heading font-semibold">August 10, 2025</p>

            <!-- Body -->
            <div class="mt-3 space-y-4 text-base font-regular leading-[33px] text-[#333333] font-body">
                <p>
                    As a printing business owner, outsourcing graphic design work can be an excellent way to
                    enhance the quality of your work and improve your overall customer experience. However,
                    outsourcing graphic design work can be challenging—especially when it comes to
                    maintaining consistency and quality in your print work.
                </p>

                <h3 class="font-semibold font-heading text-xl">Step 1: Create a Brief &amp; Style Guide</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Define scope, timeline,
                    budget, and requirements. Include brand identity, colors, logos, and design
                    elements.</p>

                <h3 class="font-semibold font-heading text-xl">Step 2: Assign a Point of Contact</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Choose one person to handle
                    all communication and feedback with the design team.</p>

                <h3 class="font-semibold font-heading text-xl">Step 3: Apply Quality Control</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Use a checklist for
                    alignment, resolution, color, typography, copy, and final export level.</p>

                <h3 class="font-semibold font-heading text-xl">Step 4: Schedule Regular Check-ins</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Hold short recurring syncs to
                    track progress, remove blockers, and align on schedules.</p>

                <h3 class="font-semibold font-heading text-xl">Step 5: Streamline File Management</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Keep an organized folder
                    system with source sharing and version control.</p>

                <h3 class="font-semibold font-heading text-xl">Step 6: Clarify Ownership &amp; Rights</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Agree in writing on ownership
                    and usage rights.</p>

                <h3 class=" font-semibold font-heading text-xl">Step 7: Consider Cultural Differences</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Ensure designs are
                    appropriate for your audience and respect cultural nuances.</p>

                <h3 class="font-semibold font-heading text-xl">Step 8: Give Clear Feedback</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Provide specific, actionable
                    feedback with comments or annotations.</p>

                <h3 class="font-semibold font-heading text-xl">Step 9: Define Payment Terms</h3>
                <p class=" text-base font-regular leading-[33px] text-[#333333] font-body">Agree on payment amount,
                    schedule, method, and invoicing process upfront.</p>
            </div>
        </article>

        <!-- Sticky Sidebar -->
        <aside class="lg:col-span-4 lg:sticky lg:top-[120px] h-max">
            <div class="rounded-lg bg-[#F5F5F5] ring-1 ring-slate-200 overflow-hidden">
                <div class="px-4 py-3 border-b border-slate-200">
                    <h3 class="text-xl text-[#111111] font-semibold font-heading">Recent Post</h3>
                </div>

                <ul class="divide-y divide-slate-200">
                    <!-- Item -->
                    <li>
                        <a href="#" class="flex gap-3 p-3 hover:bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=400&auto=format&fit=crop"
                                alt="" class="h-14 w-14 rounded-md object-cover ring-1 ring-slate-200" />
                            <div class="min-w-0">
                                <p class="text-sm font-regular font-medium text-[#111111] line-clamp-2 font-heading">
                                    Setting Up Standard Operating Procedures While Outsourcing Graphic Design for Print
                                    Work
                                </p>
                                <p class="mt-0.5 text-xs text-slate-500 font-heading font-medium">Aug 10, 2025</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex gap-3 p-3 hover:bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&w=400&auto=format&fit=crop"
                                alt="" class="h-14 w-14 rounded-md object-cover ring-1 ring-slate-200" />
                            <div class="min-w-0">
                                <p class="text-sm font-regular font-medium text-[#111111] line-clamp-2 font-heading">
                                    Preflight Tips: Avoiding the Most Common Print Production Mistakes
                                </p>
                                <p class="mt-0.5 text-xs text-slate-500 font-heading font-medium">Jul 28, 2025</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</section>

@endsection