@extends('app')

@section('title', 'Vendors')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-br from-[#161616] via-[#1B1B1B] to-[#202020] pt-32 pb-12">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <p class="uppercase tracking-[4px] text-[#FF8C00] font-semibold text-xs mb-2">
            Verified Network
        </p>
        <h1 class="text-3xl lg:text-4xl font-bold text-white leading-tight">
            Find Fabrication Vendors
        </h1>
        <p class="text-gray-400 text-base mt-3 max-w-3xl leading-6">
            Browse verified fabrication vendors across India. Compare,
            shortlist and request quotations for your projects.
        </p>

        <!-- Search -->
        <div class="mt-6 flex flex-col lg:flex-row gap-3">
            <div class="relative flex-1">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                <input
                    type="text"
                    placeholder="Search vendors, specialties..."
                    class="w-full h-12 rounded-xl bg-[#2A2A2A] border border-[#3B3B3B] pl-12 pr-4 text-white placeholder:text-gray-500 text-sm focus:outline-none focus:border-[#FF8C00] transition">
            </div>
            <select class="w-full lg:w-40 h-12 rounded-xl bg-[#2A2A2A] border border-[#3B3B3B] text-white px-4 text-sm focus:outline-none focus:border-[#FF8C00]">
                <option>All Cities</option>
                <option>Ahmedabad</option>
                <option>Vadodara</option>
                <option>Surat</option>
                <option>Rajkot</option>
            </select>
            <button class="h-12 px-6 rounded-xl bg-[#2A2A2A] border border-[#3B3B3B] text-white font-semibold text-sm hover:bg-[#FF8C00] hover:border-[#FF8C00] transition">
                <i class="fas fa-sliders-h mr-2"></i>
                Filters
            </button>
        </div>
    </div>
</section>

<!-- Vendor Listing -->
<section class="bg-[#F7F7F7] py-8">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        
        <div class="flex items-center gap-3 mb-6 flex-wrap">
            <span class="text-sm font-medium" style="font-family: Inter, sans-serif; color: #111;">
                12 vendors found
            </span>
        </div>

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
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1497366412874-3415097a27e7?w=600&h=320&fit=crop&auto=format'
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
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'badge' => '',
                'name' => 'CraftBuild Projects',
                'category' => 'Bespoke & Exhibition Builds',
                'city' => 'Hyderabad',
                'experience' => '8yrs',
                'projects' => '210',
                'price' => '₹95+',
                'rating' => '4.6',
                'image' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'badge' => '',
                'name' => 'InnoFrame Aluminium',
                'category' => 'Modular Facade Systems',
                'city' => 'Pune',
                'experience' => '10yrs',
                'projects' => '320',
                'price' => '₹105+',
                'rating' => '4.6',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=320&fit=crop&auto=format'
            ],
            [
                'badge' => '',
                'name' => 'CeilCraft Interiors',
                'category' => 'Gypsum & Metal Ceilings',
                'city' => 'Chennai',
                'experience' => '7yrs',
                'projects' => '280',
                'price' => '₹65+',
                'rating' => '4.5',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=320&fit=crop&auto=format'
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($vendors as $vendor)
            <div class="bg-white rounded-2xl overflow-hidden border cursor-pointer transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl" 
                 style="border-color: rgba(0, 0, 0, 0.07); box-shadow: rgba(0, 0, 0, 0.05) 0px 2px 16px;">
                
                <!-- Image -->
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ $vendor['image'] }}" 
                         alt="{{ $vendor['name'] }}" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0" style="background: linear-gradient(transparent 40%, rgba(0, 0, 0, 0.6));"></div>
                    
                    <!-- Badge -->
                    @if($vendor['badge'] != '')
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: Inter, sans-serif;">
                        {{ $vendor['badge'] }}
                    </div>
                    @endif
                    
                    <!-- Verified Badge -->
                    <div class="absolute top-3 right-3 flex items-center gap-1 bg-white rounded-full px-2.5 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"/>
                            <path d="m9 11 3 3L22 4"/>
                        </svg>
                        <span class="text-xs font-semibold text-green-600">Verified</span>
                    </div>
                    
                    <!-- Location -->
                    <div class="absolute bottom-3 left-3">
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <span class="text-xs text-white">{{ $vendor['city'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="absolute bottom-3 right-3 flex items-center gap-1 bg-white rounded-full px-2 py-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="#FF7A00" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/>
                        </svg>
                        <span class="text-xs font-bold" style="color: #111;">{{ $vendor['rating'] }}</span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-5">
                    <div class="font-bold text-base mb-0.5" style="font-family: Poppins, sans-serif; color: #111;">
                        {{ $vendor['name'] }}
                    </div>
                    <div class="text-xs mb-3" style="font-family: Inter, sans-serif; color: #FF7A00;">
                        {{ $vendor['category'] }}
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-3 mb-4 text-center py-3 rounded-xl" style="background: #f9f9f9;">
                        <div>
                            <div class="text-sm font-bold" style="font-family: Poppins, sans-serif; color: #111;">
                                {{ $vendor['experience'] }}
                            </div>
                            <div class="text-xs" style="color: #999;">Experience</div>
                        </div>
                        <div>
                            <div class="text-sm font-bold" style="font-family: Poppins, sans-serif; color: #111;">
                                {{ $vendor['projects'] }}
                            </div>
                            <div class="text-xs" style="color: #999;">Projects</div>
                        </div>
                        <div>
                            <div class="text-sm font-bold" style="font-family: Poppins, sans-serif; color: #FF7A00;">
                                {{ $vendor['price'] }}
                            </div>
                            <div class="text-xs" style="color: #999;">Per sqft</div>
                        </div>
                    </div>
                    
                    <!-- Buttons -->
                   <div class="flex gap-2">
    <a href="{{ url('/vendor-profile') }}" class="flex-1">
        <button
            class="w-full py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50"
            style="border-color: rgba(0, 0, 0, 0.1); color: #111; font-family: Inter, sans-serif;">
            View Profile
        </button>
    </a>

                        <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                style="background: #FF7A00; font-family: Inter, sans-serif;">
                            Get Quote 
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection