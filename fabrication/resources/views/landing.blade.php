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
    }

    .service-carousel:active {
        cursor: grabbing;
    }

    .service-carousel-inner {
        display: flex;
        gap: 24px;
        transition: transform 0.4s ease;
        will-change: transform;
    }

    .service-carousel-item {
        flex: 0 0 auto;
        width: 280px;
    }

    /* Scrollbar hide */
    .service-carousel::-webkit-scrollbar {
        display: none;
    }

    .service-carousel {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Dots Navigation */
    .carousel-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 24px;
    }

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
    .carousel-arrows {
        display: flex;
        gap: 12px;
    }

    .carousel-arrows button {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 1px solid #E8EDF2;
        background: #ffffff;
        color: #1E293B;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .carousel-arrows button:hover {
        background: #F97316;
        border-color: #F97316;
        color: #ffffff;
        box-shadow: 0 8px 20px -8px rgba(249, 115, 22, 0.4);
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
            width: 240px;
        }
        .carousel-arrows button {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }
        .service-carousel-item .h-72 {
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        .service-carousel-item {
            width: 200px;
        }
        .service-carousel-item .h-72 {
            height: 160px;
        }
        .service-carousel-item .p-6 {
            padding: 16px;
        }
        .service-carousel-item h3 {
            font-size: 16px;
        }
        .service-carousel-item p {
            font-size: 13px;
        }
    }
</style>

<!-- ===== HERO SECTION ===== -->
<!-- ===== HERO SECTION ===== -->
<section class="bg-white pt-20 pb-8 md:pt-24 lg:pt-28">
    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-6 md:gap-8 items-center">
            <!-- LEFT CONTENT -->
            <div>

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-[#FF8C00]/40 bg-[#FF8C00]/10">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF8C00]"></span>
                    <span class="text-[#FF8C00] text-[10px] md:text-xs font-medium">
                        India's #1 Fabrication Marketplace
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-black text-[22px] sm:text-[28px] md:text-[34px] lg:text-[40px] font-bold leading-[1.2] mt-3">
                    Build Your
                    <br>
                    <span class="text-[#FF8C00]">Dream Space</span>
                    <br>
                    With Verified
                    <br>
                    Fabrication Experts
                </h1>

                <!-- Description -->
                <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-5 md:leading-6 mt-3 max-w-xl">
                    Get quotations from trusted vendors for Steel Structures,
                    Glass Work, Aluminium, False Ceiling, Interior and Custom
                    Fabrication.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-2 md:gap-3 mt-4">
                    <a href="#" class="primary-btn flex items-center gap-2 px-4 py-2 md:px-5 md:py-2.5 text-xs md:text-sm">
                        Get Free Quote
                        <i class="fas fa-arrow-right text-[10px] md:text-xs"></i>
                    </a>

                    <a href="/services"
                       class="border border-gray-300 text-black rounded-full px-4 py-2 md:px-5 md:py-2.5 text-xs md:text-sm font-semibold hover:border-[#FF8C00] hover:text-[#FF8C00] transition">
                        Explore Services
                    </a>
                </div>

                <!-- Stats -->
                <div class="border-t border-gray-200 mt-6 md:mt-8 pt-5 md:pt-6">

                    <div class="grid grid-cols-3 gap-3 md:gap-4">

                        <div>
                            <h3 class="text-black text-lg md:text-2xl font-bold">
                                5000+
                            </h3>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-0.5 md:mt-1">
                                Projects Completed
                            </p>
                        </div>

                        <div>
                            <h3 class="text-black text-lg md:text-2xl font-bold">
                                250+
                            </h3>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-0.5 md:mt-1">
                                Verified Vendors
                            </p>
                        </div>

                        <div>
                            <h3 class="text-black text-lg md:text-2xl font-bold">
                                4.8 ★
                            </h3>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-0.5 md:mt-1">
                                Customer Rating
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative mt-4 md:mt-0">

                <!-- Light Orange Glow -->
                <div class="absolute -inset-3 md:-inset-4 bg-[#FF8C00]/10 blur-[40px] md:blur-[60px] rounded-full"></div>

                <div class="relative rounded-[20px] md:rounded-[28px] overflow-hidden shadow-lg">

                    <img src="{{ asset('images/hero-fabrication.jpg') }}"
                         alt="Fabrication"
                         class="w-full h-[250px] sm:h-[300px] md:h-[380px] lg:h-[420px] object-cover"
                         onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200'">

                </div>

                <!-- Play Button -->
                <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                               w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-full bg-white shadow-xl
                               flex items-center justify-center">

                    <i class="fas fa-play text-base sm:text-lg md:text-xl text-black ml-0.5 sm:ml-1"></i>

                </button>

                <!-- Floating Card -->
                <div class="absolute -bottom-3 left-3 md:-bottom-4 md:left-4 bg-white rounded-xl md:rounded-2xl p-3 md:p-4 shadow-xl">

                    <div class="flex items-center gap-2 md:gap-3">

                        <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-orange-100 flex items-center justify-center">
                            <i class="fas fa-check text-[#FF8C00] text-xs md:text-base"></i>
                        </div>

                        <div>
                            <h4 class="font-bold text-gray-900 text-[10px] md:text-sm">
                                Quality Guaranteed
                            </h4>
                            <p class="text-gray-500 text-[8px] md:text-xs">
                                Every project inspected
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ===== SERVICE CATEGORIES CAROUSEL ===== -->
<section class="py-16 bg-white">
    <div class="container-custom">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <p class="text-[#FF8C00] uppercase text-sm font-semibold tracking-[6px]">
                    What We Offer
                </p>
                <h2 class="text-3xl md:text-5xl font-bold mt-3 text-black">
                    Service Categories
                </h2>
            </div>
            <div class="flex items-center gap-4">
                <a href="/services" class="text-[#FF8C00] font-medium whitespace-nowrap">
                    View All →
                </a>
                <div class="carousel-arrows">
                    <button id="prev-btn" aria-label="Previous">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="next-btn" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>

      @php
$services = [
    ['title'=>'Steel Structure','vendors'=>'480+ vendors','image'=>'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200'],
    ['title'=>'Glass Work','vendors'=>'210+ vendors','image'=>'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200'],
    ['title'=>'Aluminium Work','vendors'=>'330+ vendors','image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
    ['title'=>'False Ceiling','vendors'=>'290+ vendors','image'=>'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200'],
    ['title'=>'Interior Work','vendors'=>'540+ vendors','image'=>'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200'],
    ['title'=>'MS Fabrication','vendors'=>'160+ vendors','image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
    ['title'=>'HVAC Work','vendors'=>'180+ vendors','image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
    ['title'=>'Painting Work','vendors'=>'420+ vendors','image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
    ['title'=>'Electrical Work','vendors'=>'380+ vendors','image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
];
@endphp

        <div class="service-carousel" id="serviceCarousel">
            <div class="service-carousel-inner" id="carouselInner">
                @foreach($services as $service)
                <div class="service-carousel-item rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition-all bg-white border border-[#E8EDF2]">
                    <div class="relative">
                        <img src="{{ $service['image'] }}"
                             alt="{{ $service['title'] }}"
                             class="w-full h-72 object-cover"
                             onerror="this.src='https://via.placeholder.com/400x300/F97316/ffffff?text={{ substr($service['title'], 0, 1) }}'">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-black">{{ $service['title'] }}</h3>
                        <a href="/services" class="inline-flex items-center justify-center w-full mt-4 px-6 py-3 bg-[#FF8C00] text-white font-semibold rounded-full hover:bg-[#e67e00] transition-all">
                            Explore <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- <div class="carousel-dots" id="carouselDots"></div> -->
    </div>
</section>

<!-- ===== TOP VERIFIED FABRICATORS ===== -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <p class="text-[#FF8C00] uppercase text-sm font-semibold">Top Rated</p>
                <h2 class="text-3xl md:text-5xl font-bold mt-3 text-black">
                    Top Verified Fabricators <br class="hidden md:block"> Near You
                </h2>
            </div>
            <a href="/vendors" class="text-[#FF8C00] whitespace-nowrap">View All Vendors →</a>
        </div>

        @php
        $vendors = [
            ['name'=>'Mehta Steel Works', 'city'=>'Ahmedabad', 'rating'=>'4.9', 'image'=>'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200'],
            ['name'=>'ArcLight Fabricators', 'city'=>'Mumbai', 'rating'=>'4.8', 'image'=>'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200'],
            ['name'=>'GlassEdge Interiors', 'city'=>'Pune', 'rating'=>'4.7', 'image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'],
            ['name'=>'PrimeStruct Co.', 'city'=>'Delhi', 'rating'=>'4.9', 'image'=>'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200'],
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            @foreach($vendors as $vendor)
            <div class="rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition-all bg-white border border-[#E8EDF2]">
                <div class="relative">
                    <img src="{{ $vendor['image'] }}" class="w-full h-72 object-cover" alt="{{ $vendor['name'] }}">
                    <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">⭐ {{ $vendor['rating'] }}</div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl text-black">{{ $vendor['name'] }}</h3>
                    <p class="text-gray-500 mt-2">📍 {{ $vendor['city'] }}</p>
                  <a href="{{ route('vendor-profile') }}"
                    class="block w-full mt-4 px-6 py-3 bg-[#FF8C00] text-white font-semibold rounded-full hover:bg-[#e67e00] transition-all text-center">
                          View Profile
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ===== FEATURED PROJECTS ===== -->
<section class="py-24 bg-black">
    <div class="container-custom">
        <p class="text-[#FF8C00] uppercase text-sm font-semibold">Portfolio</p>
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-12">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="lg:col-span-2 lg:row-span-2 rounded-3xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72" class="w-full h-64 md:h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-6 left-6">
                    <p class="text-orange-400 text-sm">Interior</p>
                    <h3 class="text-white text-xl md:text-2xl font-bold">Luxury Office Interior</h3>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f" class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold text-sm md:text-base">Glass Partition Project</h3>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd" class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold text-sm md:text-base">Warehouse Fabrication</h3>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab" class="w-full h-80 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold text-sm md:text-base">Commercial Structure</h3>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold text-sm md:text-base">Residential Terrace Work</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== BOOK A MEASUREMENT ===== -->
<section class="py-24 bg-white">

    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            <div class="order-2 lg:order-1">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                     class="rounded-3xl w-full h-[300px] md:h-[500px] object-cover">
            </div>

            <div class="order-1 lg:order-2">

                <p class="text-[#FF8C00] uppercase text-sm font-semibold">
                    Book a Measurement
                </p>

                <h2 class="text-3xl md:text-5xl font-bold text-black mt-4">
                    Book A Free <br> Site Visit
                </h2>

                <p class="text-gray-500 mt-6">
                    Our trained engineers visit your site,
                    take precise measurements and provide
                    competitive quotations.
                </p>

                <form class="mt-10 space-y-5">

                    <input type="text"
                           placeholder="Full Name"
                           class="w-full border rounded-xl px-5 py-4">

                    <input type="text"
                           placeholder="Mobile Number"
                           class="w-full border rounded-xl px-5 py-4">

                    <input type="text"
                           placeholder="City"
                           class="w-full border rounded-xl px-5 py-4">

                    <select class="w-full border rounded-xl px-5 py-4">
                        <option>Select Project Type</option>
                        <option>Steel Structure</option>
                        <option>Glass Work</option>
                        <option>Interior Work</option>
                    </select>

                    <button class="primary-btn w-full">
                        Book Free Site Visit
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="py-24 bg-[#F7F7F7]">

    <div class="container-custom">

        <div class="text-center mb-16">

            <p class="text-[#FF8A1E] text-lg uppercase tracking-[10px] font-bold">
                TESTIMONIALS
            </p>
            <h2 class="text-3xl md:text-5xl font-bold text-black">
                What Our Customers Say
            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @for($i=1;$i<=6;$i++)

            <div class="bg-white rounded-3xl p-8 shadow-sm">

                <div class="text-orange-400 text-xl mb-4">
                    ★★★★★
                </div>

                <p class="text-gray-600 leading-8">
                    FabriQ made the entire process seamless.
                    Excellent vendors and transparent pricing.
                </p>

                <div class="mt-6 flex items-center gap-4">

                    <div class="w-12 h-12 rounded-full bg-orange-500 text-white flex items-center justify-center">
                        R
                    </div>

                    <div>
                        <h4 class="font-bold">Rahul Sharma</h4>
                        <p class="text-gray-500 text-sm">Ahmedabad</p>
                    </div>

                </div>

            </div>

            @endfor

        </div>

    </div>

</section>

<!-- ===== WHY CHOOSE FABRIQ ===== -->
<section class="bg-[#F8F8F8] py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <p class="text-[#FF8A1E] text-xl uppercase tracking-[10px] font-bold mb-4">
                OUR ADVANTAGE
            </p>
            <h2 class="text-[32px] md:text-[48px] font-bold text-[#111827] mt-3">
                Why Choose FabriQ
            </h2>
        </div>

        @php
        $features = [
            ['icon' => 'fa-shield-alt', 'title' => 'Verified Vendors', 'desc' => 'All vendors pass a rigorous 8-point verification including GST, trade license and site audits.'],
            ['icon' => 'fa-chart-line', 'title' => 'Transparent Pricing', 'desc' => 'Compare itemized quotations side-by-side. No hidden charges, no surprises.'],
            ['icon' => 'fa-chart-bar', 'title' => 'Live Project Tracking', 'desc' => 'Real-time milestone updates, photo reports and payment-linked progress gates.'],
            ['icon' => 'fa-medal', 'title' => 'Quality Assurance', 'desc' => 'Independent QA inspectors visit your site at key milestones — at no extra cost.'],
            ['icon' => 'fa-headset', 'title' => 'Dedicated Support', 'desc' => 'A personal project manager is assigned from quote to handover.'],
            ['icon' => 'fa-clock', 'title' => 'AMC Services', 'desc' => 'Annual maintenance contracts to keep your fabrication performing for years.'],
        ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">

            @foreach($features as $feature)

            <div class="bg-white border border-[#E8E8E8] rounded-[20px] p-8">

                <div class="w-12 h-12 rounded-xl bg-[#FFF4EA] flex items-center justify-center">
                    <i class="fas {{ $feature['icon'] }} text-[#FF8A1E] text-lg"></i>
                </div>

                <h3 class="text-[20px] font-semibold text-[#111827] mt-8">
                    {{ $feature['title'] }}
                </h3>

                <p class="text-[#6B7280] text-[15px] leading-7 mt-4">
                    {{ $feature['desc'] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- ===== LIVE PROJECT TRACKING ===== -->
<section class="bg-black py-28 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 items-center gap-16 lg:gap-24">

            <div>

                <p class="text-[#FF8A1E] uppercase text-xs tracking-[3px] font-semibold">
                    Real-Time Dashboard
                </p>

                <h2 class="text-white text-[32px] md:text-[56px] font-bold leading-[40px] md:leading-[64px] mt-4">
                    Live Project
                    <br>
                    Tracking
                </h2>

                <p class="text-gray-400 text-base md:text-lg mt-8 max-w-md">
                    Know exactly where your project stands —
                    from first measurement to final handover.
                </p>

                <button class="mt-10 bg-[#FF8A1E] hover:bg-orange-600 text-white px-8 py-4 rounded-full font-medium transition">
                    View Full Dashboard →
                </button>

            </div>

            <div class="bg-[#141414] border border-[#262626] rounded-[24px] p-6 md:p-8 max-w-[500px] w-full">

                <div class="flex flex-wrap justify-between items-start gap-2">
                    <div>
                        <h3 class="text-white font-semibold text-lg md:text-xl">
                            Office Renovation — Phase 2
                        </h3>
                        <p class="text-gray-500 text-sm mt-2">Project ID: FQ-2024-0872</p>
                    </div>
                    <span class="bg-[#2A1A09] text-[#FF8A1E] text-xs px-4 py-2 rounded-full">On Track</span>
                </div>

                <div class="mt-8">
                    <div class="flex justify-between text-sm mb-3">
                        <span class="text-gray-400">Overall Progress</span>
                        <span class="text-[#FF8A1E]">75%</span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-[#2A2A2A]">
                        <div class="w-[75%] h-2 rounded-full bg-[#FF8A1E]"></div>
                    </div>
                </div>

                <div class="space-y-6 md:space-y-8 mt-8 md:mt-10">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-[10px]"></i>
                        </div>
                        <span class="text-white text-sm md:text-base">Measurement Completed</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-[10px]"></i>
                        </div>
                        <span class="text-white text-sm md:text-base">Design Submitted</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-[10px]"></i>
                        </div>
                        <span class="text-white text-sm md:text-base">Quotation Approved</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-[10px]"></i>
                        </div>
                        <span class="text-white text-sm md:text-base">Payment Received</span>
                    </div>

                    <div class="border border-[#6B3D13] bg-[#2A1A09] rounded-xl px-4 md:px-5 py-3 md:py-4 flex flex-wrap justify-between items-center gap-2">
                        <div class="flex items-center gap-4">
                            <div class="w-6 h-6 rounded-full bg-[#FF8A1E] flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-circle text-white text-[7px]"></i>
                            </div>
                            <span class="text-white text-sm md:text-base">Execution Running</span>
                        </div>
                        <span class="bg-[#FF8A1E] text-white text-xs px-3 py-1 rounded-full">Active</span>
                    </div>
                </div>

                <p class="text-gray-500 text-sm mt-6 md:mt-8">Completion 75%</p>

            </div>

        </div>

    </div>

</section>

<!-- ===== AMC SECTION ===== -->
<section class="py-24 bg-[#F5F5F5]">

    <div class="container-custom">

        <div class="bg-gradient-to-r from-[#FF8C1A] to-[#FF932E] rounded-[32px] overflow-hidden">

            <div class="grid lg:grid-cols-2 gap-10 items-center p-6 md:p-8 lg:p-14">

                <div>

                    <p class="uppercase text-white/80 text-xs font-semibold tracking-wider">
                        Annual Maintenance
                    </p>

                    <h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold mt-4 leading-tight">
                        Keep Your Structure
                        Maintained For Years
                    </h2>

                    <p class="text-white/90 mt-6 leading-8 max-w-xl">
                        Quarterly inspections, priority response and preventive
                        maintenance — keeping your fabrication performing at its best.
                    </p>

                    <button class="mt-8 bg-white text-[#FF8C1A] px-8 py-4 rounded-full font-semibold hover:scale-105 transition">
                        Explore AMC Plans →
                    </button>

                </div>

                <div class="relative">

                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200"
                         class="rounded-[24px] w-full h-[280px] md:h-[320px] object-cover">

                    <div class="absolute -bottom-5 left-6 bg-white rounded-2xl px-4 md:px-5 py-4 shadow-xl max-w-[90%]">

                        <h4 class="font-semibold text-sm">AMC Coverage</h4>

                        <div class="flex flex-wrap gap-2 md:gap-3 mt-2 text-xs text-gray-500">
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
    let currentTranslate = 0;
    let prevTranslate = 0;

    function getItemWidth() {
        const item = inner.querySelector('.service-carousel-item');
        if (!item) return 280;
        const gap = 24;
        return item.offsetWidth + gap;
    }

    function getVisibleItems() {
        const containerWidth = carousel.offsetWidth;
        const itemW = getItemWidth();
        return Math.floor(containerWidth / itemW);
    }

    function updateCarousel() {
        itemWidth = getItemWidth();
        visibleItems = getVisibleItems();
        totalItems = inner.querySelectorAll('.service-carousel-item').length;

        const maxIndex = Math.max(0, totalItems - visibleItems);
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        const translateX = -currentIndex * itemWidth;
        inner.style.transform = `translateX(${translateX}px)`;
        currentTranslate = translateX;
        prevTranslate = translateX;

        updateDots();
        updateButtons();
    }

    function updateDots() {
        const totalDots = Math.ceil(totalItems / visibleItems);
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('button');
            dot.className = 'dot' + (i === currentIndex ? ' active' : '');
            dot.setAttribute('data-index', i);
            dot.addEventListener('click', () => {
                goTo(i);
            });
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
        if (currentIndex < maxIndex) {
            goTo(currentIndex + 1);
        }
    }

    function prev() {
        if (currentIndex > 0) {
            goTo(currentIndex - 1);
        }
    }

    // Mouse Drag Events
    carousel.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX;
        carousel.style.cursor = 'grabbing';
        carousel.style.transition = 'none';
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const currentX = e.pageX;
        const diff = currentX - startX;
        const translate = prevTranslate + diff;
        inner.style.transform = `translateX(${translate}px)`;
    });

    carousel.addEventListener('mouseup', (e) => {
        if (!isDragging) return;
        isDragging = false;
        carousel.style.cursor = 'grab';
        carousel.style.transition = 'transform 0.3s ease';

        const currentX = e.pageX;
        const diff = currentX - startX;
        const threshold = 50;

        if (diff < -threshold) {
            next();
        } else if (diff > threshold) {
            prev();
        } else {
            updateCarousel();
        }

        prevTranslate = -currentIndex * itemWidth;
    });

    carousel.addEventListener('mouseleave', () => {
        if (isDragging) {
            isDragging = false;
            carousel.style.cursor = 'grab';
            carousel.style.transition = 'transform 0.3s ease';
            updateCarousel();
            prevTranslate = -currentIndex * itemWidth;
        }
    });

    // Touch Events
    let touchStartX = 0;
    let touchPrevTranslate = 0;

    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        touchPrevTranslate = -currentIndex * itemWidth;
        carousel.style.transition = 'none';
    }, { passive: true });

    carousel.addEventListener('touchmove', (e) => {
        const currentX = e.touches[0].clientX;
        const diff = currentX - touchStartX;
        const translate = touchPrevTranslate + diff;
        inner.style.transform = `translateX(${translate}px)`;
    }, { passive: true });

    carousel.addEventListener('touchend', (e) => {
        carousel.style.transition = 'transform 0.3s ease';
        const diff = e.changedTouches[0].clientX - touchStartX;
        const threshold = 50;

        if (diff < -threshold) {
            next();
        } else if (diff > threshold) {
            prev();
        } else {
            updateCarousel();
        }
    }, { passive: true });

    // Button Events
    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);

    // Window Resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            updateCarousel();
        }, 200);
    });

    // Initialize
    setTimeout(updateCarousel, 100);
});
</script>

@endsection