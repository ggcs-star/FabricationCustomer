@extends('app')

@section('title', 'FabriQ - Home')

@section('content')

<section class="hero-bg min-h-screen pt-32 pb-20">

    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->

            <div>

                <!-- Badge -->

                <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-[#FF8C00]/40 bg-[#FF8C00]/10">

                    <span class="w-2 h-2 rounded-full bg-[#FF8C00]"></span>

                    <span class="text-[#FF8C00] text-sm font-medium">
                        India's #1 Fabrication Marketplace
                    </span>

                </div>


                <!-- Heading -->

                <h1 class="text-white text-[48px] lg:text-[78px] font-extrabold leading-[1.1] mt-8">

                    Build Your

                    <br>

                    <span class="text-[#FF8C00]">
                        Dream Space
                    </span>

                    <br>

                    With Verified

                    <br>

                    Fabrication Experts

                </h1>


                <!-- Description -->

                <p class="text-gray-400 text-lg lg:text-xl leading-9 mt-8 max-w-2xl">

                    Get quotations from trusted vendors for Steel Structures,
                    Glass Work, Aluminium, False Ceiling, Interior and Custom
                    Fabrication.

                </p>


                <!-- Buttons -->

                <div class="flex flex-wrap gap-5 mt-10">

                    <a href="#"
                       class="primary-btn flex items-center gap-3">

                        Get Free Quote

                        <i class="fas fa-arrow-right"></i>

                    </a>

                    <a href="#"
                       class="secondary-btn">

                        Explore Services

                    </a>

                </div>


                <!-- Stats -->

                <div class="border-t border-gray-800 mt-14 pt-10">

                    <div class="grid grid-cols-3 gap-6">

                        <div>

                            <h3 class="text-white text-4xl font-bold">
                                5000+
                            </h3>

                            <p class="text-gray-500 mt-2">
                                Projects Completed
                            </p>

                        </div>

                        <div>

                            <h3 class="text-white text-4xl font-bold">
                                250+
                            </h3>

                            <p class="text-gray-500 mt-2">
                                Verified Vendors
                            </p>

                        </div>

                        <div>

                            <h3 class="text-white text-4xl font-bold">
                                4.8 ★
                            </h3>

                            <p class="text-gray-500 mt-2">
                                Customer Rating
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT IMAGE -->

            <div class="relative">

                <!-- Glow -->

                <div class="absolute -inset-10 bg-[#FF8C00]/20 blur-[100px] rounded-full"></div>


                <!-- Image -->

                <div class="relative rounded-[36px] overflow-hidden">

                    <img
                        src="{{ asset('images/hero-fabrication.jpg') }}"
                        alt="Fabrication"
                        class="w-full h-[650px] object-cover">

                </div>


                <!-- Play Button -->

                <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                               w-24 h-24 rounded-full bg-white shadow-2xl
                               flex items-center justify-center">

                    <i class="fas fa-play text-2xl text-black ml-1"></i>

                </button>


                <!-- Floating Card -->

                <div class="absolute -bottom-6 left-0 bg-white rounded-3xl p-5 shadow-2xl">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center">

                            <i class="fas fa-check text-[#FF8C00] text-xl"></i>

                        </div>

                        <div>

                            <h4 class="font-bold text-gray-900">
                                Quality Guaranteed
                            </h4>

                            <p class="text-gray-500 text-sm">
                                Every project inspected
                            </p>

                        </div>

                    </div>
                    

                </div>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-white">

    <div class="container-custom">

        <div class="flex justify-between items-end mb-12">

            <div>

                <p class="text-[#FF8C00] uppercase text-sm font-semibold tracking-wider">
                    What We Offer
                </p>

                <h2 class="text-5xl font-bold mt-3 text-black">
                    Service Categories
                </h2>

            </div>

            <a href="#" class="text-[#FF8C00] font-medium">
                View All →
            </a>

        </div>


        @php

        $services = [

            ['icon'=>'fa-building','title'=>'Steel Structure','vendors'=>'480+ vendors'],

            ['icon'=>'fa-layer-group','title'=>'Glass Work','vendors'=>'210+ vendors'],

            ['icon'=>'fa-border-all','title'=>'Aluminium Work','vendors'=>'330+ vendors'],

            ['icon'=>'fa-vector-square','title'=>'False Ceiling','vendors'=>'290+ vendors'],

            ['icon'=>'fa-house','title'=>'Interior Work','vendors'=>'540+ vendors'],

            ['icon'=>'fa-gear','title'=>'MS Fabrication','vendors'=>'960+ vendors'],

        ];

        @endphp


        <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-6">

            @foreach($services as $service)

            <div class="border rounded-3xl p-6 hover:shadow-xl transition-all duration-300 group">

                <div class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center">

                    <i class="fas {{ $service['icon'] }} text-[#FF8C00] text-xl"></i>

                </div>

                <h3 class="font-bold mt-6 text-lg text-black">
                    {{ $service['title'] }}
                </h3>

                <p class="text-gray-500 mt-2 text-sm">
                    {{ $service['vendors'] }}
                </p>

                <a href="#" class="text-[#FF8C00] text-sm mt-5 inline-block">
                    Explore →
                </a>

            </div>

            @endforeach

        </div>

    </div>

</section>
<section class="py-24 bg-[#F7F7F7]">

    <div class="container-custom">

        <div class="text-center mb-16">

            <p class="text-[#FF8C00] uppercase text-sm font-semibold">
                Simple Process
            </p>

            <h2 class="text-5xl font-bold mt-3 text-black">
                How It Works
            </h2>

        </div>


        @php

        $steps = [

            [
                'title'=>'Upload Requirement',
                'desc'=>'Share your project details, drawings or photos.'
            ],

            [
                'title'=>'Get Measurements',
                'desc'=>'Book a free site visit. Our engineers take measurements.'
            ],

            [
                'title'=>'Receive Quotations',
                'desc'=>'Compare itemised quotes from verified vendors.'
            ],

            [
                'title'=>'Project Execution',
                'desc'=>'Your selected vendor delivers with QA oversight.'
            ],

        ];

        @endphp


        <div class="grid lg:grid-cols-4 gap-8">

            @foreach($steps as $index => $step)

            <div class="bg-white rounded-3xl p-8 relative shadow-sm">

                <span class="absolute top-5 right-6 text-5xl font-bold text-orange-100">

                    {{ sprintf('%02d',$index+1) }}

                </span>

                <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center">

                    <i class="fas fa-file-alt text-[#FF8C00]"></i>

                </div>

                <h3 class="font-bold text-xl mt-8 text-black">
                    {{ $step['title'] }}
                </h3>

                <p class="text-gray-500 mt-4 leading-8">
                    {{ $step['desc'] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>
<section class="py-24 bg-white">

    <div class="container-custom">

        <div class="flex justify-between items-end mb-12">

            <div>

                <p class="text-[#FF8C00] uppercase text-sm font-semibold">
                    Top Rated
                </p>

                <h2 class="text-5xl font-bold mt-3 text-black">
                    Top Verified Fabricators <br>
                    Near You
                </h2>

            </div>

            <a href="#" class="text-[#FF8C00]">
                View All Vendors →
            </a>

        </div>


        @php

        $vendors = [

            [
                'name'=>'Mehta Steel Works',
                'city'=>'Ahmedabad',
                'rating'=>'4.9',
                'image'=>'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200'
            ],

            [
                'name'=>'ArcLight Fabricators',
                'city'=>'Mumbai',
                'rating'=>'4.8',
                'image'=>'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200'
            ],

            [
                'name'=>'GlassEdge Interiors',
                'city'=>'Pune',
                'rating'=>'4.7',
                'image'=>'https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200'
            ],

            [
                'name'=>'PrimeStruct Co.',
                'city'=>'Delhi',
                'rating'=>'4.9',
                'image'=>'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200'
            ],

        ];

        @endphp


        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">

            @foreach($vendors as $vendor)

            <div class="rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition-all">

                <div class="relative">

                    <img src="{{ $vendor['image'] }}"
                         class="w-full h-72 object-cover">

                    <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold">

                        ⭐ {{ $vendor['rating'] }}

                    </div>

                </div>

                <div class="p-6">

                    <h3 class="font-bold text-xl text-black">
                        {{ $vendor['name'] }}
                    </h3>

                    <p class="text-gray-500 mt-2">
                        📍 {{ $vendor['city'] }}
                    </p>

                    <button class="primary-btn w-full mt-6">
                        View Profile
                    </button>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>
<section class="py-24 bg-black">
    <div class="container-custom">

        <p class="text-[#FF8C00] uppercase text-sm font-semibold">
            Portfolio
        </p>

        <h2 class="text-5xl font-bold text-white mb-12">
            Featured Projects
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            <div class="lg:col-span-2 lg:row-span-2 rounded-3xl overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="absolute bottom-6 left-6">
                    <p class="text-orange-400 text-sm">Interior</p>
                    <h3 class="text-white text-2xl font-bold">Luxury Office Interior</h3>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f"
                     class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold">Glass Partition Project</h3>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd"
                     class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold">Warehouse Fabrication</h3>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab"
                     class="w-full h-80 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold">Commercial Structure</h3>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85"
                     class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="font-bold">Residential Terrace Work</h3>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="py-24 bg-white">

    <div class="container-custom">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <div>
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                     class="rounded-3xl w-full h-[500px] object-cover">
            </div>

            <div>

                <p class="text-[#FF8C00] uppercase text-sm font-semibold">
                    Book a Measurement
                </p>

                <h2 class="text-5xl font-bold text-black mt-4">
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
<section class="py-24 bg-[#F7F7F7]">

    <div class="container-custom">

        <div class="text-center mb-16">

            <p class="text-[#FF8C00] uppercase text-sm font-semibold">
                Testimonials
            </p>

            <h2 class="text-5xl font-bold text-black">
                What Our Customers Say
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-8">

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
<section class="bg-[#F8F8F8] py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
<p class="text-[#FF8A1E] text-xs uppercase tracking-[10px] font-bold leading-10">
    Our Advantage
</p>


            <h2 class="text-[48px] font-bold text-[#111827] mt-3">
                Why Choose FabriQ
            </h2>

        </div>

        @php

        $features = [

            [
                'icon' => 'fa-shield-alt',
                'title' => 'Verified Vendors',
                'desc' => 'All vendors pass a rigorous 8-point verification including GST, trade license and site audits.'
            ],

            [
                'icon' => 'fa-chart-line',
                'title' => 'Transparent Pricing',
                'desc' => 'Compare itemized quotations side-by-side. No hidden charges, no surprises.'
            ],

            [
                'icon' => 'fa-chart-bar',
                'title' => 'Live Project Tracking',
                'desc' => 'Real-time milestone updates, photo reports and payment-linked progress gates.'
            ],

            [
                'icon' => 'fa-medal',
                'title' => 'Quality Assurance',
                'desc' => 'Independent QA inspectors visit your site at key milestones — at no extra cost.'
            ],

            [
                'icon' => 'fa-headset',
                'title' => 'Dedicated Support',
                'desc' => 'A personal project manager is assigned from quote to handover.'
            ],

            [
                'icon' => 'fa-clock',
                'title' => 'AMC Services',
                'desc' => 'Annual maintenance contracts to keep your fabrication performing for years.'
            ],

        ];

        @endphp

        <div class="grid lg:grid-cols-3 gap-5">

            @foreach($features as $feature)

            <div class="bg-white border border-[#E8E8E8]
                        rounded-[20px] p-8">

                <div class="w-12 h-12 rounded-xl
                            bg-[#FFF4EA]
                            flex items-center justify-center">

                    <i class="fas {{ $feature['icon'] }}
                              text-[#FF8A1E] text-lg"></i>

                </div>

                <h3 class="text-[20px] font-semibold
                           text-[#111827] mt-8">

                    {{ $feature['title'] }}

                </h3>

                <p class="text-[#6B7280]
                          text-[15px]
                          leading-7 mt-4">

                    {{ $feature['desc'] }}

                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>
<section class="bg-black py-28 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 items-center gap-24">

            <!-- Left -->

            <div>

                <p class="text-[#FF8A1E]
                          uppercase text-xs
                          tracking-[3px]
                          font-semibold">

                    Real-Time Dashboard

                </p>

                <h2 class="text-white
                           text-[56px]
                           font-bold
                           leading-[64px]
                           mt-4">

                    Live Project
                    <br>
                    Tracking

                </h2>

                <p class="text-gray-400
                          text-lg
                          mt-8
                          max-w-md">

                    Know exactly where your project stands —
                    from first measurement to final handover.

                </p>

                <button class="mt-10
                               bg-[#FF8A1E]
                               hover:bg-orange-600
                               text-white
                               px-8 py-4
                               rounded-full
                               font-medium
                               transition">

                    View Full Dashboard →

                </button>

            </div>


            <!-- Right Card -->

            <div class="bg-[#141414]
                        border border-[#262626]
                        rounded-[24px]
                        p-8
                        max-w-[500px]">

                <div class="flex justify-between items-start">

                    <div>

                        <h3 class="text-white
                                   font-semibold
                                   text-xl">

                            Office Renovation — Phase 2

                        </h3>

                        <p class="text-gray-500 text-sm mt-2">
                            Project ID: FQ-2024-0872
                        </p>

                    </div>

                    <span class="bg-[#2A1A09]
                                 text-[#FF8A1E]
                                 text-xs
                                 px-4 py-2
                                 rounded-full">

                        On Track

                    </span>

                </div>


                <!-- Progress -->

                <div class="mt-8">

                    <div class="flex justify-between text-sm mb-3">

                        <span class="text-gray-400">
                            Overall Progress
                        </span>

                        <span class="text-[#FF8A1E]">
                            75%
                        </span>

                    </div>

                    <div class="w-full h-2 rounded-full bg-[#2A2A2A]">

                        <div class="w-[75%]
                                    h-2
                                    rounded-full
                                    bg-[#FF8A1E]">

                        </div>

                    </div>

                </div>


                <!-- Steps -->

                <div class="space-y-8 mt-10">

                    <div class="flex items-center gap-4">

                        <div class="w-6 h-6 rounded-full
                                    bg-green-500
                                    flex items-center justify-center">

                            <i class="fas fa-check text-white text-[10px]"></i>

                        </div>

                        <span class="text-white">
                            Measurement Completed
                        </span>

                    </div>


                    <div class="flex items-center gap-4">

                        <div class="w-6 h-6 rounded-full
                                    bg-green-500
                                    flex items-center justify-center">

                            <i class="fas fa-check text-white text-[10px]"></i>

                        </div>

                        <span class="text-white">
                            Design Submitted
                        </span>

                    </div>


                    <div class="flex items-center gap-4">

                        <div class="w-6 h-6 rounded-full
                                    bg-green-500
                                    flex items-center justify-center">

                            <i class="fas fa-check text-white text-[10px]"></i>

                        </div>

                        <span class="text-white">
                            Quotation Approved
                        </span>

                    </div>


                    <div class="flex items-center gap-4">

                        <div class="w-6 h-6 rounded-full
                                    bg-green-500
                                    flex items-center justify-center">

                            <i class="fas fa-check text-white text-[10px]"></i>

                        </div>

                        <span class="text-white">
                            Payment Received
                        </span>

                    </div>


                    <!-- Active Step -->

                    <div class="border border-[#6B3D13]
                                bg-[#2A1A09]
                                rounded-xl
                                px-5 py-4
                                flex justify-between items-center">

                        <div class="flex items-center gap-4">

                            <div class="w-6 h-6 rounded-full
                                        bg-[#FF8A1E]
                                        flex items-center justify-center">

                                <i class="fas fa-circle text-white text-[7px]"></i>

                            </div>

                            <span class="text-white">
                                Execution Running
                            </span>

                        </div>

                        <span class="bg-[#FF8A1E]
                                     text-white
                                     text-xs
                                     px-3 py-1
                                     rounded-full">

                            Active

                        </span>

                    </div>

                </div>


                <p class="text-gray-500 text-sm mt-8">
                    Completion 75%
                </p>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-[#F5F5F5]">

    <div class="container-custom">

        <div class="bg-gradient-to-r from-[#FF8C1A] to-[#FF932E]
                    rounded-[32px] overflow-hidden">

            <div class="grid lg:grid-cols-2 gap-10 items-center p-8 lg:p-14">

                <!-- Left Content -->

                <div>

                    <p class="uppercase text-white/80 text-xs font-semibold tracking-wider">
                        Annual Maintenance
                    </p>

                    <h2 class="text-white text-4xl lg:text-5xl font-bold mt-4 leading-tight">
                        Keep Your Structure
                        Maintained For Years
                    </h2>

                    <p class="text-white/90 mt-6 leading-8 max-w-xl">
                        Quarterly inspections, priority response and preventive
                        maintenance — keeping your fabrication performing at its best.
                    </p>

                    <button class="mt-8 bg-white text-[#FF8C1A]
                                   px-8 py-4 rounded-full font-semibold
                                   hover:scale-105 transition">

                        Explore AMC Plans →
                    </button>

                </div>


                <!-- Right Image -->

                <div class="relative">

                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200"
                         class="rounded-[24px] w-full h-[320px] object-cover">

                    <!-- Floating Card -->

                    <div class="absolute -bottom-5 left-6 bg-white
                                rounded-2xl px-5 py-4 shadow-xl">

                        <h4 class="font-semibold text-sm">
                            AMC Coverage
                        </h4>

                        <div class="flex gap-3 mt-2 text-xs text-gray-500">

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

@endsection