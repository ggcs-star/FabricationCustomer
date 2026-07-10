@extends('app')

@section('title', 'FabriQ - Home')

@section('content')

<style>
    /* Hide footer on mobile devices only */
    @media (max-width: 768px) {
        footer {
            display: none !important;
        }
    }

    /* ===== SERVICE CAROUSEL STYLES ===== */
    .service-carousel {
        overflow: hidden;
        position: relative;
        cursor: grab;
        user-select: none;
        -webkit-user-select: none;
        touch-action: pan-y;
    }

    .service-carousel:active {
        cursor: grabbing;
    }

    .service-carousel-inner {
        display: flex;
        gap: 16px;
        transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        will-change: transform;
    }

    .service-carousel-item {
        flex: 0 0 auto;
        width: 240px;
        min-height: 120px;
    }

    .service-carousel::-webkit-scrollbar {
        display: none;
    }
    .service-carousel {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Dots */
    .carousel-dots .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #CBD5E1;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        padding: 0;
    }

    .carousel-dots .dot.active {
        background: #F97316;
        width: 28px;
        border-radius: 6px;
    }

    .carousel-dots .dot:hover {
        background: #F97316;
        opacity: 0.7;
    }

    /* Arrow Buttons */
    .carousel-arrows button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #E8EDF2;
        background: #ffffff;
        color: #1E293B;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }

    .carousel-arrows button:hover:not(:disabled) {
        background: #F97316;
        border-color: #F97316;
        color: #ffffff;
        box-shadow: 0 4px 12px -4px rgba(249, 115, 22, 0.4);
    }

    .carousel-arrows button:disabled {
        opacity: 0.3;
        cursor: not-allowed;
    }

    .carousel-arrows button:disabled:hover {
        background: #ffffff;
        border-color: #E8EDF2;
        color: #1E293B;
        box-shadow: none;
    }

    @media (max-width: 768px) {
        .service-carousel-item {
            width: 190px;
            min-height: 100px;
            padding: 16px !important;
        }
        .carousel-arrows button {
            width: 34px;
            height: 34px;
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .service-carousel-item {
            width: 160px;
            min-height: 90px;
            padding: 14px !important;
        }
    }

    /* Container */
    .container-custom {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
    }

    @media (min-width: 640px) {
        .container-custom {
            padding: 0 32px;
        }
    }

    /* Primary Button */
    .primary-btn {
        background: #FF8C00;
        color: #fff;
        border-radius: 9999px;
        padding: 14px 32px;
        font-weight: 600;
        transition: 0.3s ease;
        display: inline-block;
        border: none;
        cursor: pointer;
    }

    .primary-btn:hover {
        background: #e67e00;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px -8px rgba(249, 115, 22, 0.4);
    }

    /* Trending Products / Featured Projects Card */
    .trending-card {
        transition: all 0.3s ease;
    }
    .trending-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px -8px rgba(0, 0, 0, 0.15);
    }

    /* Scrollbar Hide */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<!-- ===== HERO SECTION ===== -->
<section class="bg-black pt-20 pb-8 md:pt-24 lg:pt-28">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-center">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-[#FF8C00]/40 bg-[#FF8C00]/10">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF8C00]"></span>
                    <span class="text-[#FF8C00] text-[10px] md:text-xs font-medium">India's #1 Fabrication Marketplace</span>
                </div>
                <h1 class="text-white text-[22px] sm:text-[28px] md:text-[34px] lg:text-[40px] font-bold leading-[1.2] mt-3">
                    Build Your <br><span class="text-[#FF8C00]">Dream Space</span><br> With Verified <br> Fabrication Experts
                </h1>
     <p class="text-gray-300 text-xs sm:text-sm md:text-base leading-5 md:leading-6 mt-3 max-w-xl">
    Get quotations from trusted vendors for Steel Structures, Glass Work, Aluminium, False Ceiling, Interior and Custom Fabrication.
</p>
                <div class="flex flex-wrap gap-2 md:gap-3 mt-4">
                    <a href="#" class="primary-btn flex items-center gap-2 px-4 py-2 md:px-5 md:py-2.5 text-xs md:text-sm">
                        Get Free Quote <i class="fas fa-arrow-right text-[10px] md:text-xs"></i>
                    </a>
<a href="/services"
   class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full border border-[#3A3A3A] text-white text-sm font-semibold transition-all duration-300 hover:border-[#FF8C00] hover:text-[#FF8C00]">
    Explore Services
    <span class="text-base"></span>
</a>
              </div>
                <div class="border-t border-[#1F2937] mt-6 md:mt-8 pt-5 md:pt-6">
                    <div class="grid grid-cols-3 gap-3 md:gap-4">
                        <div><h3 class="text-white text-lg md:text-2xl font-bold">5000+</h3><p class="text-[#B3B3B3] text-[10px] md:text-sm font-normal mt-1">Projects Completed</p></div>
                        <div><h3 class="text-white text-lg md:text-2xl font-bold">250+</h3><p class="text-[#B3B3B3] text-[10px] md:text-sm font-normal mt-1">Verified Vendors</p></div>
                        <div><h3 class="text-white text-lg md:text-2xl font-bold">4.8 ★</h3><p class="text-[#B3B3B3] text-[10px] md:text-sm font-normal mt-1">Customer Rating</p></div>
                    </div>
                </div>
            </div>
            <div class="relative mt-4 md:mt-0">
                <div class="absolute -inset-3 md:-inset-4 bg-[#FF8C00]/10 blur-[40px] md:blur-[60px] rounded-full"></div>
                <div class="relative rounded-[20px] md:rounded-[28px] overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200" alt="Fabrication" class="w-full h-[250px] sm:h-[300px] md:h-[380px] lg:h-[420px] object-cover">
                </div>
                <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-full bg-white shadow-xl flex items-center justify-center">
                    <i class="fas fa-play text-base sm:text-lg md:text-xl text-black ml-0.5 sm:ml-1"></i>
                </button>
                <div class="absolute -bottom-3 left-3 md:-bottom-4 md:left-4 bg-white rounded-xl md:rounded-2xl p-3 md:p-4 shadow-xl">
                    <div class="flex items-center gap-2 md:gap-3">
                        <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fas fa-check text-[#FF8C00] text-xs md:text-base"></i>
                        </div>
                        <div><h4 class="font-bold text-gray-900 text-[10px] md:text-sm">Quality Guaranteed</h4><p class="text-gray-500 text-[8px] md:text-xs">Every project inspected</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Floating Get Free Quote Button -->
<div class="fixed bottom-6 right-6 z-50">
    <a href="{{ url('/quote-details') }}"
       class="inline-flex items-center gap-3 bg-[#FF8C00] text-white px-7 py-4 rounded-full text-lg font-semibold shadow-[0_10px_30px_rgba(255,140,0,0.35)] hover:bg-[#E67A00] transition-all duration-300 hover:scale-105">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H9M17 7V15"/>
        </svg>

        Get Free Quote
    </a>
</div>

<!-- ===== SERVICE CATEGORIES - HORIZONTAL SCROLL ===== -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <!-- Header -->
        <div class="mb-10 transition-all duration-700 opacity-100 translate-y-0">
            <div class="flex items-end justify-between">
                <div>
                    <div class="text-xs font-semibold uppercase tracking-widest mb-2" style="color: rgb(255, 122, 0); font-family: Inter, sans-serif;">
                        What We Offer
                    </div>
                    <h2 class="text-4xl font-bold" style="font-family: Poppins, sans-serif; color: rgb(17, 17, 17);">
                        Service Categories
                    </h2>
                </div>
            <a href="{{ url('/services') }}"
   class="hidden md:flex items-center gap-2 text-sm font-medium text-[#FF7A00] hover:text-[#E56E00] transition"
   style="font-family: Inter, sans-serif;">

    View All

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
         viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14"></path>
        <path d="m12 5 7 7-7 7"></path>
    </svg>
</a>
            </div>
        </div>

        @php
        $services = [
            ['title' => 'Steel Structure', 'vendors' => '480+ vendors', 'icon' => 'M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18ZM6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2ZM18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2ZM10 6h4ZM10 10h4ZM10 14h4ZM10 18h4Z', 'viewBox' => '0 0 24 24'],
            ['title' => 'Glass Work', 'vendors' => '210+ vendors', 'icon' => 'M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83zM2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17', 'viewBox' => '0 0 24 24'],
            ['title' => 'Aluminium Work', 'vendors' => '330+ vendors', 'icon' => 'M3 3h18v18H3zM3 9h18M3 15h18M9 3v18M15 3v18', 'viewBox' => '0 0 24 24'],
            ['title' => 'False Ceiling', 'vendors' => '290+ vendors', 'icon' => 'M13.73 4a2 2 0 0 0-3.46 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z', 'viewBox' => '0 0 24 24'],
            ['title' => 'Interior Work', 'vendors' => '540+ vendors', 'icon' => 'M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z', 'viewBox' => '0 0 24 24'],
            ['title' => 'MS Fabrication', 'vendors' => '160+ vendors', 'icon' => 'M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2zM12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6z', 'viewBox' => '0 0 24 24'],
            ['title' => 'SS Fabrication', 'vendors' => '120+ vendors', 'icon' => 'M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z', 'viewBox' => '0 0 24 24'],
            ['title' => 'Custom Projects', 'vendors' => '180+ vendors', 'icon' => 'M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73zM12 22V12M3.29 7L12 12l8.71-5M7.5 4.27l9 5.15', 'viewBox' => '0 0 24 24'],
        ];
        @endphp

        <!-- Horizontal Scroll Carousel -->
        <div class="flex gap-5 overflow-x-auto pb-4 scrollbar-hide">
            @foreach($services as $index => $service)
            <div class="group flex-shrink-0 w-44 bg-white rounded-2xl p-5 cursor-pointer border transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md" 
                 style="border-color: rgba(0, 0, 0, 0.07); box-shadow: rgba(0, 0, 0, 0.04) 0px 2px 16px; transition: 0.5s {{ $index * 50 }}ms; opacity: 1; transform: translateY(0px);">
                
                <!-- Icon -->
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-3 transition-all duration-300 group-hover:scale-110" 
                     style="background: rgba(255, 122, 0, 0.08);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="{{ $service['viewBox'] }}" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="{{ $service['icon'] }}"></path>
                    </svg>
                </div>
                
                <!-- Title -->
                <div class="font-semibold text-sm mb-1" style="font-family: Poppins, sans-serif; color: rgb(17, 17, 17);">
                    {{ $service['title'] }}
                </div>
                
                <!-- Vendor Count -->
                <div class="text-xs mb-2" style="font-family: Inter, sans-serif; color: rgb(153, 153, 153);">
                    {{ $service['vendors'] }}
                </div>
                
                <!-- Explore Link -->
              <a href="{{ url('/services') }}" class="flex items-center gap-1 text-xs font-medium" style="color: rgb(255, 122, 0);">
    Explore
    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14"></path>
        <path d="m12 5 7 7-7 7"></path>
    </svg>
</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section class="py-16 bg-[#F8F8F8]">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="text-center mb-12">
            <p class="text-[#FF8C00] uppercase text-sm font-semibold tracking-[6px]">Simple Process</p>
            <h2 class="text-3xl md:text-4xl font-bold mt-3 text-black">How It Works</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Step 01 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-file-signature text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 01
                        </span>
                        <h3 class="text-lg font-semibold text-black">Request a Quote</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            Browse fabrication services, choose your project category, and submit your requirements to receive quotations from verified vendors.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-users text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 02
                        </span>
                        <h3 class="text-lg font-semibold text-black">Get Connected with Verified Vendors</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            Our platform matches your project with trusted fabrication vendors who review your requirements and respond with competitive quotations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-ruler-combined text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 03
                        </span>
                        <h3 class="text-lg font-semibold text-black">Book Free Site Inspection</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            Schedule a site visit where professionals inspect the location, take measurements, and understand your project requirements.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-file-invoice-dollar text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 04
                        </span>
                        <h3 class="text-lg font-semibold text-black">Approve the Final Quotation</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            Compare vendor quotations, review pricing, materials, and timelines before approving the proposal that best suits your project.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 05 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-screwdriver-wrench text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 05
                        </span>
                        <h3 class="text-lg font-semibold text-black">Fabrication & Installation</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            The selected vendor begins fabrication and installation while keeping you informed about every stage of the project.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 06 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition">
                        <i class="fas fa-circle-check text-2xl text-[#FF8C00]"></i>
                    </div>
                    <div>
                        <span class="inline-block bg-orange-100 text-[#FF8C00] text-xs font-semibold px-3 py-0.5 rounded-full mb-2">
                            Step 06
                        </span>
                        <h3 class="text-lg font-semibold text-black">Project Completion & Support</h3>
                        <p class="text-gray-500 text-sm mt-1 leading-relaxed">
                            Inspect the completed work, make secure payment, and enjoy post-installation support along with optional AMC services.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== TOP VERIFIED FABRICATORS - UPDATED WITH HOVER EFFECTS ===== -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <!-- Header -->
        <div class="flex items-end justify-between mb-10 transition-all duration-700 opacity-100 translate-y-0">
            <div>
                <div class="text-xs font-semibold uppercase tracking-widest mb-3" style="color: rgb(255, 122, 0); font-family: Inter, sans-serif;">
                    Top Rated
                </div>
                <h2 class="text-4xl font-bold" style="font-family: Poppins, sans-serif; color: rgb(17, 17, 17);">
                    Top Verified Fabricators<br>Near You
                </h2>
            </div>
            <button class="hidden md:flex items-center gap-2 text-sm font-medium" style="color: rgb(255, 122, 0); font-family: Inter, sans-serif;">
                View All Vendors 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>

        @php
        $vendors = [
            [
                'name' => 'Mehta Steel Works',
                'exp' => '18 yrs exp',
                'projects' => '820 projects',
                'price' => '₹85/sqft',
                'rating' => '4.9',
                'location' => 'Ahmedabad',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'name' => 'ArcLight Fabricators',
                'exp' => '12 yrs exp',
                'projects' => '560 projects',
                'price' => '₹95/sqft',
                'rating' => '4.8',
                'location' => 'Mumbai',
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'name' => 'GlassEdge Interiors',
                'exp' => '9 yrs exp',
                'projects' => '340 projects',
                'price' => '₹120/sqft',
                'rating' => '4.7',
                'location' => 'Pune',
                'image' => 'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'name' => 'PrimeStruct Co.',
                'exp' => '22 yrs exp',
                'projects' => '1200 projects',
                'price' => '₹75/sqft',
                'rating' => '4.9',
                'location' => 'Delhi',
                'image' => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=600&h=320&fit=crop&auto=format'
            ],
        ];
        @endphp

        <!-- Vendor Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($vendors as $index => $vendor)
            <div class="group bg-white rounded-2xl overflow-hidden border cursor-pointer transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-[#FF7A00]/30" 
                 style="border-color: rgba(0, 0, 0, 0.07); box-shadow: rgba(0, 0, 0, 0.05) 0px 2px 16px; transition: 0.5s {{ $index * 80 }}ms; opacity: 1; transform: translateY(0px);">
                
                <!-- Image Section -->
                <div class="h-40 relative overflow-hidden">
                    <img src="{{ $vendor['image'] }}" 
                         alt="{{ $vendor['name'] }}" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                         loading="lazy">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 transition-opacity duration-500 group-hover:bg-black/20" style="background: linear-gradient(transparent 40%, rgba(0, 0, 0, 0.5));"></div>
                    
                    <!-- Location Badge -->
                    <div class="absolute bottom-3 left-3 flex items-center gap-1 transition-all duration-300 group-hover:translate-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span class="text-xs text-white">{{ $vendor['location'] }}</span>
                    </div>
                    
                    <!-- Rating Badge -->
                    <div class="absolute top-3 right-3 bg-white rounded-full px-2.5 py-1 flex items-center gap-1 transition-all duration-300 group-hover:scale-105 group-hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="#FF7A00" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                        </svg>
                        <span class="text-xs font-semibold" style="color: rgb(17, 17, 17);">{{ $vendor['rating'] }}</span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-5 transition-all duration-300 group-hover:bg-orange-50/30">
                    <div class="font-bold text-base mb-1 transition-colors duration-300 group-hover:text-[#FF7A00]" style="font-family: Poppins, sans-serif; color: rgb(17, 17, 17);">
                        {{ $vendor['name'] }}
                    </div>
                    
                    <div class="flex gap-4 mb-4">
                        <span class="text-xs text-gray-500 transition-all duration-300 group-hover:text-gray-700">{{ $vendor['exp'] }}</span>
                        <span class="text-xs text-gray-500 transition-all duration-300 group-hover:text-gray-700">{{ $vendor['projects'] }}</span>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs text-gray-500 transition-all duration-300 group-hover:text-gray-700">From</span>
                        <span class="font-bold transition-all duration-300 group-hover:scale-105 group-hover:text-[#FF7A00]" style="font-family: Poppins, sans-serif; color: rgb(255, 122, 0);">
                            {{ $vendor['price'] }}
                        </span>
                    </div>
                    
                    <div class="flex gap-2">
                       <div class="flex-1">
    <a href="{{ url('/vendor-profile') }}">
        <button
            class="w-full py-2 rounded-xl text-sm font-medium border transition-all duration-300 hover:bg-gray-50 group-hover:border-[#FF7A00]/50 group-hover:text-[#FF7A00]"
            style="border-color: rgba(0, 0, 0, 0.1); color: rgb(17, 17, 17);">
            Profile
        </button>
    </a>
</div>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white transition-all duration-300 hover:opacity-90 hover:scale-105 hover:shadow-lg hover:shadow-orange-500/25" 
                                style="background: rgb(255, 122, 0);">
                            Get Quote
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== FEATURED PROJECTS ===== -->
<!-- ===== FEATURED PROJECTS ===== -->
<section class="bg-[#141414] py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="mb-10">
            <p class="text-[#FF8C00] uppercase tracking-[3px] text-xs font-semibold mb-2">
                Portfolio
            </p>

            <h2 class="text-white text-5xl font-bold">
                Featured Projects
            </h2>
        </div>

        <div class="grid grid-cols-12 gap-4">

            <!-- Left Large -->
            <div class="col-span-12 lg:col-span-4">
                <div class="relative h-[530px] rounded-3xl overflow-hidden group">

                 <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent"></div>

                    <div class="absolute bottom-7 left-7">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            Interior
                        </p>

                        <h3 class="text-white text-3xl font-bold mt-1">
                            Luxury Office Interior
                        </h3>
                    </div>

                </div>

                <div class="relative h-[230px] rounded-3xl overflow-hidden mt-4 group">

<img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                    <div class="absolute bottom-6 left-6">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            Aluminium
                        </p>

                        <h3 class="text-white text-2xl font-bold">
                            Residential Terrace Work
                        </h3>
                    </div>

                </div>

            </div>

            <!-- Middle -->
            <div class="col-span-12 lg:col-span-4">

                <div class="relative h-[250px] rounded-3xl overflow-hidden group">

                  <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                    <div class="absolute bottom-6 left-6">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            Glass Work
                        </p>

                        <h3 class="text-white text-2xl font-bold">
                            Glass Partition Project
                        </h3>
                    </div>

                </div>

                <div class="relative h-[510px] rounded-3xl overflow-hidden mt-4 group">

                  <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent"></div>

                    <div class="absolute bottom-7 left-7">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            MS Fabrication
                        </p>

                        <h3 class="text-white text-3xl font-bold">
                            Commercial Structure
                        </h3>
                    </div>

                </div>

            </div>

            <!-- Right -->
            <div class="col-span-12 lg:col-span-4">

                <div class="relative h-[250px] rounded-3xl overflow-hidden group">

                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                    <div class="absolute bottom-6 left-6">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            Steel Structure
                        </p>

                        <h3 class="text-white text-2xl font-bold">
                            Warehouse Fabrication
                        </h3>
                    </div>

                </div>

                <div class="relative h-[230px] rounded-3xl overflow-hidden mt-4 group">

              <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&auto=format&fit=crop"
     class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                    <div class="absolute bottom-6 left-6">
                        <p class="text-[#FF8C00] text-sm font-semibold">
                            Interior
                        </p>

                        <h3 class="text-white text-2xl font-bold">
                            Restaurant Interior
                        </h3>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ===== BOOK A MEASUREMENT ===== -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">
                <div class="order-2 lg:order-1">
               <div class="relative max-w-[520px]">

    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200"
         class="w-full h-[410px] object-cover rounded-[22px]"
         alt="Site Visit">

    <!-- Floating Badge -->
    <div class="absolute top-5 left-5 bg-white rounded-xl px-4 py-3 shadow-lg">
        <p class="font-semibold text-sm text-black">
            Free Site Visit
        </p>

        <p class="text-xs text-gray-500 mt-1">
            Within 24–48 hrs
        </p>
    </div>

</div>
            </div>
            <div class="order-1 lg:order-2">
                <!-- Label -->
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-[#FF8C00] uppercase text-xs font-semibold tracking-[3px]">Book a Measurement</span>
                </div>
                
                <h2 class="text-3xl md:text-5xl font-bold text-black leading-tight">
                    Book a Free <br> Site Visit
                </h2>
                
                <p class="text-gray-500 text-sm mt-4 leading-relaxed">
                    Our trained engineers visit your site, take precise measurements, and return with multiple competitive quotations.
                </p>
                
                <form class="mt-8 space-y-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name</label>
                        <input type="text" placeholder="Rajesh Mehta" 
                               class="w-full border border-gray-200 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:border-[#FF8C00] focus:ring-1 focus:ring-[#FF8C00] transition">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Mobile Number</label>
                        <input type="text" placeholder="+91 98765 43210" 
                               class="w-full border border-gray-200 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:border-[#FF8C00] focus:ring-1 focus:ring-[#FF8C00] transition">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1.5">City</label>
                        <input type="text" placeholder="Ahmedabad" 
                               class="w-full border border-gray-200 rounded-xl px-5 py-3.5 text-sm focus:outline-none focus:border-[#FF8C00] focus:ring-1 focus:ring-[#FF8C00] transition">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Project Type</label>
                        <select class="w-full border border-gray-200 rounded-xl px-5 py-3.5 text-sm text-gray-400 focus:outline-none focus:border-[#FF8C00] focus:ring-1 focus:ring-[#FF8C00] transition appearance-none bg-white" 
                                style="background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22%3E%3Cpath fill=%22%23999%22 d=%22M6 8L1 3h10z%22/%3E%3C/svg%3E'); background-repeat: no-repeat; background-position: right 16px center;">
                            <option value="" disabled selected>Select project type</option>
                            <option>Steel Structure</option>
                            <option>Glass Work</option>
                            <option>Aluminium Work</option>
                            <option>False Ceiling</option>
                            <option>Interior Work</option>
                            <option>MS Fabrication</option>
                            <option>SS Fabrication</option>
                            <option>Custom Projects</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="primary-btn w-full flex items-center justify-center gap-2 py-3.5 text-sm">
                        Book Free Site Visit
                        <i class="fas fa-arrow-right text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ===== TESTIMONIALS ===== -->
<!-- ===== TESTIMONIALS ===== -->
<section class="py-20 bg-[#F7F7F7]">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-14">
            <p class="text-[#FF7A00] text-sm font-semibold uppercase tracking-[3px] mb-3">
                TESTIMONIALS
            </p>

            <h2 class="text-[48px] leading-tight font-bold text-[#111111]">
                What Our Customers Say
            </h2>
        </div>

        @php
        $testimonials = [
            [
                'initial'=>'P',
                'name'=>'Priya Mehta',
                'city'=>'Ahmedabad',
                'review'=>'The quotation process was smooth and transparent. Got 4 vendors to compete — ended up saving 22% on my office fabrication.'
            ],
            [
                'initial'=>'R',
                'name'=>'Rohan Sharma',
                'city'=>'Mumbai',
                'review'=>'Live tracking was a game changer. I knew exactly when each milestone was hit without calling the vendor every day.'
            ],
            [
                'initial'=>'N',
                'name'=>'Neha Kapoor',
                'city'=>'Pune',
                'review'=>'Booked a free site visit and within 48 hours had verified measurements and 3 competitive quotes in hand.'
            ],
            [
                'initial'=>'A',
                'name'=>'Aditya Joshi',
                'city'=>'Delhi',
                'review'=>'Quality assurance team visited mid-project. The final glass partition looks stunning. Zero compromises on quality.'
            ],
            [
                'initial'=>'S',
                'name'=>'Sunita Patel',
                'city'=>'Surat',
                'review'=>'AMC plan has been excellent — quarterly inspections and quick response whenever something needed attention.'
            ],
            [
                'initial'=>'M',
                'name'=>'Manish Verma',
                'city'=>'Bangalore',
                'review'=>'Enterprise-grade platform experience. The vendor verification system gives you real confidence before signing.'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7">

            @foreach($testimonials as $item)

            <div class="bg-white rounded-[22px] p-8 border border-[#EEEEEE] shadow-[0_10px_35px_rgba(0,0,0,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_45px_rgba(0,0,0,0.08)]">
<div class="mb-3">
    <i class="fas fa-quote-left text-[#FFD2A6] text-4xl"></i>
</div>

                <!-- Stars -->
                <div class="flex gap-1 text-[#FF7A00] text-sm mb-5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

                <!-- Review -->
                <p class="text-[16px] leading-8 text-[#444444] mb-8">
                    "{{ $item['review'] }}"
                </p>

                <!-- User -->
                <div class="flex items-center">

                    <div class="w-11 h-11 rounded-full bg-[#FF7A00] text-white flex items-center justify-center font-semibold text-sm">
                        {{ $item['initial'] }}
                    </div>

                    <div class="ml-4">
                        <h4 class="font-bold text-[18px] text-[#111111] leading-none">
                            {{ $item['name'] }}
                        </h4>

                        <p class="text-[#9A9A9A] text-sm mt-1">
                            {{ $item['city'] }}
                        </p>
                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>
<!-- ===== WHY CHOOSE FABRIQ ===== -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="text-center mb-12">
            <p class="text-white text-xl uppercase tracking-[10px] font-bold mb-2">Our Advantage</p>
            <h2 class="text-[32px] md:text-[48px] font-bold text-[#111827] mt-1">Why Choose FabriQ</h2>
        </div>
        @php
        $features = [
            ['icon' => 'fa-shield-alt', 'title' => 'Verified Vendors', 'desc' => 'All vendors are registered with a verified certificate. This ensures that the products and services are legitimate and trustworthy.'],
            ['icon' => 'fa-chart-line', 'title' => 'Transparent Pricing', 'desc' => 'Our pricing is clearly outlined, making it easy for customers to understand the costs involved.'],
            ['icon' => 'fa-medal', 'title' => 'Quality Assurance', 'desc' => 'Our products undergo rigorous testing to ensure they meet the highest standards.'],
            ['icon' => 'fa-headset', 'title' => 'Dedicated Support', 'desc' => 'We offer dedicated support to help customers with any queries or issues they may encounter.'],
        ];
        @endphp
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($features as $feature)
            <div class="bg-white border border-[#E8E8E8] rounded-[20px] p-6">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4EA] flex items-center justify-center">
                    <i class="fas {{ $feature['icon'] }} text-[#FF8A1E] text-lg"></i>
                </div>
                <h3 class="text-[18px] font-semibold text-[#111827] mt-4">{{ $feature['title'] }}</h3>
                <p class="text-[#6B7280] text-[14px] leading-6 mt-2">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== LIVE PROJECT TRACKING ===== -->
<section class="py-16 bg-black">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="grid lg:grid-cols-2 items-center gap-12 lg:gap-16">
            <div>
                <p class="text-[#FF8A1E] uppercase text-xs tracking-[3px] font-semibold">Real-Time Dashboard</p>
                <h2 class="text-white text-[32px] md:text-[48px] font-bold leading-[40px] md:leading-[56px] mt-3">Live Project <br> Tracking</h2>
                <p class="text-gray-400 text-base md:text-lg mt-4 max-w-md">Know exactly where your project stands — from first measurement to final handover.</p>
                <button class="mt-6 bg-[#FF8A1E] hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition text-sm">View Full Dashboard →</button>
            </div>
            <div class="bg-[#141414] border border-[#262626] rounded-[20px] p-6 md:p-8 w-full">
                <div class="flex flex-wrap justify-between items-start gap-2">
                    <div>
                        <h3 class="text-white font-semibold text-lg md:text-xl">Office Renovation — Phase 2</h3>
                        <p class="text-gray-500 text-sm mt-1">Project ID: FQ-2024-0872</p>
                    </div>
                    <span class="bg-[#2A1A09] text-[#FF8A1E] text-xs px-4 py-1.5 rounded-full">On Track</span>
                </div>
                <div class="mt-6">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-400">Overall Progress</span>
                        <span class="text-[#FF8A1E]">75%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#2A2A2A]">
                        <div class="w-[75%] h-2 rounded-full bg-[#FF8A1E]"></div>
                    </div>
                </div>
                <div class="space-y-4 mt-6">
                    <div class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-[8px]"></i></div><span class="text-white text-sm">Measurement Completed</span></div>
                    <div class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-[8px]"></i></div><span class="text-white text-sm">Design Submitted</span></div>
                    <div class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-[8px]"></i></div><span class="text-white text-sm">Quotation Approved</span></div>
                    <div class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-check text-white text-[8px]"></i></div><span class="text-white text-sm">Payment Received</span></div>
                    <div class="border border-[#6B3D13] bg-[#2A1A09] rounded-xl px-4 py-3 flex flex-wrap justify-between items-center gap-2">
                        <div class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-[#FF8A1E] flex items-center justify-center flex-shrink-0"><i class="fas fa-circle text-white text-[6px]"></i></div><span class="text-white text-sm">Execution Running</span></div>
                        <span class="bg-[#FF8A1E] text-white text-xs px-3 py-0.5 rounded-full">Active</span>
                    </div>
                </div>
                <p class="text-gray-500 text-sm mt-4">Completion 75%</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== AMC SECTION ===== -->
<section class="py-16 bg-[#F5F5F5]">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <div class="bg-gradient-to-r from-[#FF8C1A] to-[#FF932E] rounded-[28px] overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-8 items-center p-8 md:p-10 lg:p-12">
                <div>
                    <p class="uppercase text-white/80 text-xs font-semibold tracking-wider">Annual Maintenance</p>
                    <h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold mt-3 leading-tight">Keep Your Structure Maintained For Years</h2>
                    <p class="text-white/90 mt-4 leading-7 max-w-xl text-sm">Quarterly inspections, priority response and preventive maintenance — keeping your fabrication performing at its best.</p>
<a href="/amc-plans">
    <button class="mt-6 bg-white text-[#FF8C1A] px-6 py-3 rounded-full font-semibold hover:scale-105 transition text-sm">
        Explore AMC Plans →
    </button>
</a>                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800" class="rounded-[20px] w-full h-[260px] md:h-[300px] object-cover" alt="AMC">
                    <div class="absolute -bottom-4 left-5 bg-white rounded-2xl px-4 py-3 shadow-xl max-w-[90%]">
                        <h4 class="font-semibold text-sm">AMC Coverage</h4>
                        <div class="flex flex-wrap gap-2 mt-1 text-xs text-gray-500">
                            <span>✓ Quarterly Visit</span>
                            <span>✓ 24h Response</span>
                            <span>✓ Parts Discount</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CAROUSEL JAVASCRIPT ===== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('serviceCarousel');
    const inner = document.getElementById('carouselInner');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dotsContainer = document.getElementById('carouselDots');

    let currentIndex = 0;
    let itemWidth = 0;
    let visibleItems = 0;
    let totalItems = 0;
    let isDragging = false;
    let startX = 0;
    let prevTranslate = 0;
    let autoPlayInterval = null;
    const AUTO_PLAY_DELAY = 4000;

    function getItemWidth() {
        const item = inner.querySelector('.service-carousel-item');
        if (!item) return 240;
        const gap = 16;
        return item.offsetWidth + gap;
    }

    function getVisibleItems() {
        const containerWidth = carousel.offsetWidth;
        const itemW = getItemWidth();
        return Math.max(1, Math.floor(containerWidth / itemW));
    }

    function updateCarousel() {
        itemWidth = getItemWidth();
        visibleItems = getVisibleItems();
        totalItems = inner.querySelectorAll('.service-carousel-item').length;

        const maxIndex = Math.max(0, totalItems - visibleItems);
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        inner.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
        prevTranslate = -currentIndex * itemWidth;

        updateDots();
        updateButtons();
    }

    function updateDots() {
        const totalDots = Math.ceil(totalItems / visibleItems);
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('button');
            dot.className = 'dot' + (i === currentIndex ? ' active' : '');
            dot.addEventListener('click', () => { goTo(i); resetAutoPlay(); });
            dotsContainer.appendChild(dot);
        }
    }

    function updateButtons() {
        const maxIndex = Math.max(0, totalItems - visibleItems);
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= maxIndex;
    }

    function goTo(index) {
        const maxIndex = Math.max(0, totalItems - visibleItems);
        currentIndex = Math.max(0, Math.min(index, maxIndex));
        updateCarousel();
    }

    function next() {
        const maxIndex = Math.max(0, totalItems - visibleItems);
        if (currentIndex < maxIndex) goTo(currentIndex + 1);
        else goTo(0);
        resetAutoPlay();
    }

    function prev() {
        if (currentIndex > 0) goTo(currentIndex - 1);
        else goTo(Math.max(0, totalItems - visibleItems));
        resetAutoPlay();
    }

    function resetAutoPlay() {
        if (autoPlayInterval) { clearInterval(autoPlayInterval); autoPlayInterval = null; }
        startAutoPlay();
    }

    function startAutoPlay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(() => {
            const maxIndex = Math.max(0, totalItems - visibleItems);
            if (currentIndex >= maxIndex) goTo(0);
            else next();
        }, AUTO_PLAY_DELAY);
    }

    // Mouse Drag
    carousel.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX;
        carousel.style.cursor = 'grabbing';
        carousel.style.transition = 'none';
        if (autoPlayInterval) { clearInterval(autoPlayInterval); autoPlayInterval = null; }
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        inner.style.transform = `translateX(${prevTranslate + (e.pageX - startX)}px)`;
    });

    carousel.addEventListener('mouseup', (e) => {
        if (!isDragging) return;
        isDragging = false;
        carousel.style.cursor = 'grab';
        carousel.style.transition = 'transform 0.3s ease';
        const diff = e.pageX - startX;
        if (diff < -50) next();
        else if (diff > 50) prev();
        else updateCarousel();
        prevTranslate = -currentIndex * itemWidth;
        startAutoPlay();
    });

    carousel.addEventListener('mouseleave', () => {
        if (isDragging) {
            isDragging = false;
            carousel.style.cursor = 'grab';
            carousel.style.transition = 'transform 0.3s ease';
            updateCarousel();
            prevTranslate = -currentIndex * itemWidth;
            startAutoPlay();
        }
    });

    // Touch
    let touchStartX = 0, touchPrevTranslate = 0;
    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        touchPrevTranslate = -currentIndex * itemWidth;
        carousel.style.transition = 'none';
        if (autoPlayInterval) { clearInterval(autoPlayInterval); autoPlayInterval = null; }
    }, { passive: true });

    carousel.addEventListener('touchmove', (e) => {
        const diff = e.touches[0].clientX - touchStartX;
        inner.style.transform = `translateX(${touchPrevTranslate + diff}px)`;
    }, { passive: true });

    carousel.addEventListener('touchend', (e) => {
        carousel.style.transition = 'transform 0.3s ease';
        const diff = e.changedTouches[0].clientX - touchStartX;
        if (diff < -50) next();
        else if (diff > 50) prev();
        else updateCarousel();
        startAutoPlay();
    }, { passive: true });

    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);

    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(updateCarousel, 200);
    });

    setTimeout(() => { updateCarousel(); startAutoPlay(); }, 100);

    carousel.addEventListener('mouseenter', () => {
        if (autoPlayInterval) { clearInterval(autoPlayInterval); autoPlayInterval = null; }
    });
    carousel.addEventListener('mouseleave', startAutoPlay);
});
</script>

@endsection