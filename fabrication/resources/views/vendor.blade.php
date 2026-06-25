@extends('app')

@section('title', 'Vendors')

@section('content')

<!-- Hero Section -->

<section class="hero-bg pt-36 pb-16">

    <div class="container-custom">

        <p class="text-[#FF8A1E] uppercase text-sm tracking-[3px] font-semibold">
            Verified Network
        </p>

        <h1 class="text-white text-5xl font-bold mt-4">
            Find Fabrication Vendors
        </h1>

        <p class="text-gray-400 mt-5 text-lg">
            Browse verified fabricators across India.
            Compare, shortlist and get quotes.
        </p>

        <!-- Search -->

        <div class="flex flex-col lg:flex-row gap-4 mt-10">

            <div class="flex-1 relative">

                <i class="fa fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400"></i>

                <input type="text"
                       placeholder="Search vendors, specialities..."
                       class="w-full bg-[#171717] border border-[#2E2E2E]
                              rounded-2xl py-5 pl-14 pr-5 text-white">

            </div>

            <select class="bg-[#171717] border border-[#2E2E2E]
                           rounded-2xl px-6 text-white">

                <option>All Cities</option>
                <option>Ahmedabad</option>
                <option>Mumbai</option>
                <option>Pune</option>
                <option>Delhi</option>

            </select>

            <button class="secondary-btn">
                <i class="fa fa-sliders mr-2"></i>
                Filters
            </button>

        </div>

    </div>

</section>


<!-- Vendor Listing -->

<section class="bg-[#F7F7F7] py-20">

    <div class="container-custom">

        <p class="text-gray-600 mb-8">
            12 vendors found
        </p>

        @php

        $vendors = [

            [
                'badge' => 'Top Rated',
                'name' => 'Mehta Steel Works',
                'category' => 'Industrial & Commercial Steel',
                'city' => 'Ahmedabad',
                'experience' => '18yrs',
                'projects' => '820',
                'price' => '₹85+',
                'rating' => '4.9',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd'
            ],

            [
                'badge' => 'Most Experienced',
                'name' => 'PrimeStruct Co.',
                'category' => 'Large-scale Structural Work',
                'city' => 'Delhi',
                'experience' => '22yrs',
                'projects' => '1200',
                'price' => '₹75+',
                'rating' => '4.9',
                'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5'
            ],

            [
                'badge' => 'Top Rated',
                'name' => 'IronVault Structures',
                'category' => 'Pre-engineered Buildings',
                'city' => 'Ahmedabad',
                'experience' => '20yrs',
                'projects' => '980',
                'price' => '₹80+',
                'rating' => '4.9',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd'
            ],

            [
                'badge' => 'Fast Delivery',
                'name' => 'ArcLight Fabricators',
                'category' => 'Precision Metal Fabrication',
                'city' => 'Mumbai',
                'experience' => '12yrs',
                'projects' => '560',
                'price' => '₹95+',
                'rating' => '4.8',
                'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952'
            ],

            [
                'badge' => 'Premium',
                'name' => 'Luxo Design Studio',
                'category' => 'Premium Office Interiors',
                'city' => 'Mumbai',
                'experience' => '11yrs',
                'projects' => '390',
                'price' => '₹280+',
                'rating' => '4.8',
                'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85'
            ],

            [
                'badge' => '',
                'name' => 'GlassEdge Interiors',
                'category' => 'Commercial Glass & Facades',
                'city' => 'Pune',
                'experience' => '9yrs',
                'projects' => '340',
                'price' => '₹120+',
                'rating' => '4.7',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3'
            ],

            [
                'badge' => '',
                'name' => 'SteelForm Works',
                'category' => 'Stainless Steel Installations',
                'city' => 'Surat',
                'experience' => '16yrs',
                'projects' => '670',
                'price' => '₹88+',
                'rating' => '4.7',
                'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952'
            ],

            [
                'badge' => '',
                'name' => 'ClearView Glass Co.',
                'category' => 'Structural Glass & Railings',
                'city' => 'Delhi',
                'experience' => '13yrs',
                'projects' => '450',
                'price' => '₹135+',
                'rating' => '4.7',
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72'
            ],

            [
                'badge' => '',
                'name' => 'AluVision Systems',
                'category' => 'Curtain Walls & Windows',
                'city' => 'Bangalore',
                'experience' => '14yrs',
                'projects' => '430',
                'price' => '₹110+',
                'rating' => '4.6',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab'
            ],

        ];

        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

            @foreach($vendors as $vendor)

            <div class="bg-white rounded-[28px] overflow-hidden shadow-sm border">

                <!-- Image -->

                <div class="relative">

                    <img src="{{ $vendor['image'] }}"
                         class="w-full h-60 object-cover">

                    @if($vendor['badge'] != '')
                    <span class="absolute top-4 left-4
                                 bg-[#FF8A1E] text-white
                                 text-xs px-3 py-1 rounded-full">

                        {{ $vendor['badge'] }}

                    </span>
                    @endif

                    <span class="absolute top-4 right-4
                                 bg-green-100 text-green-700
                                 text-xs px-3 py-1 rounded-full">

                        ✓ Verified

                    </span>

                    <span class="absolute bottom-4 right-4
                                 bg-white px-3 py-1 rounded-full text-sm">

                        ⭐ {{ $vendor['rating'] }}

                    </span>

                    <span class="absolute bottom-4 left-4
                                 text-white text-sm">

                        📍 {{ $vendor['city'] }}

                    </span>

                </div>


                <!-- Content -->

                <div class="p-6">

                    <h3 class="font-bold text-xl">
                        {{ $vendor['name'] }}
                    </h3>

                    <p class="text-[#FF8A1E] text-sm mt-2">
                        {{ $vendor['category'] }}
                    </p>


                    <div class="grid grid-cols-3 gap-4 mt-6">

                        <div class="bg-gray-50 rounded-xl p-3 text-center">

                            <h4 class="font-bold">
                                {{ $vendor['experience'] }}
                            </h4>

                            <p class="text-xs text-gray-500">
                                Experience
                            </p>

                        </div>

                        <div class="bg-gray-50 rounded-xl p-3 text-center">

                            <h4 class="font-bold">
                                {{ $vendor['projects'] }}
                            </h4>

                            <p class="text-xs text-gray-500">
                                Projects
                            </p>

                        </div>

                        <div class="bg-gray-50 rounded-xl p-3 text-center">

                            <h4 class="font-bold text-[#FF8A1E]">
                                {{ $vendor['price'] }}
                            </h4>

                            <p class="text-xs text-gray-500">
                                Per sqft
                            </p>

                        </div>

                    </div>


                    <div class="grid grid-cols-2 gap-4 mt-6">

                        <button class="secondary-btn !py-3 text-sm">
                            View Profile
                        </button>

                        <button class="primary-btn !py-3 text-sm">
                            Get Quote →
                        </button>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endsection