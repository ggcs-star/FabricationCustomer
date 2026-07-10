@extends('app')

@section('title', 'Vendor Profile')

@section('content')

<section class="bg-[#F6F6F6] pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Back -->
        <a href="/vendors" class="inline-flex items-center gap-2 text-gray-600 hover:text-[#FF7A00] mb-6">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Vendors
        </a>

        <div class="grid lg:grid-cols-3 gap-8">

            <!-- Left Side -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Vendor Card -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm">

                    <div class="relative">

                        <img
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=320&fit=crop&auto=format"
                            alt="Vendor Banner"
                            class="w-full h-[300px] object-cover">

                        <div
                            class="absolute top-5 right-5 bg-white rounded-full px-4 py-2 flex items-center gap-2 shadow">

                            <i class="fa-solid fa-circle-check text-green-500"></i>

                            <span class="text-sm font-semibold text-green-600">
                                Verified Vendor
                            </span>

                        </div>

                    </div>

                    <div class="p-8">

                        <div class="flex justify-between items-start">

                            <div>

                                <h2 class="text-3xl font-bold">
                                    Mehta Steel Works
                                </h2>

                                <p class="text-[#FF7A00] text-base mt-2">
                                    Industrial & Commercial Steel
                                </p>

                                <div class="flex flex-wrap gap-5 mt-4 text-gray-500">

                                    <span class="text-sm">
                                        <i class="fa-solid fa-location-dot"></i>
                                        Ahmedabad
                                    </span>

                                    <span class="text-sm">
                                        <i class="fa-regular fa-calendar"></i>
                                        Est. 2006
                                    </span>

                                    <span class="text-sm">
                                        <i class="fa-solid fa-industry"></i>
                                        Steel Structure
                                    </span>

                                </div>

                            </div>

                            <div
                                class="bg-[#FFF5EC] rounded-full px-5 py-2.5 font-bold text-lg">

                                ⭐ 4.9
                                <span class="text-gray-500 font-normal text-sm">
                                    /5.0
                                </span>

                            </div>

                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-4 mt-8 bg-[#FAFAFA] rounded-2xl">

                            <div class="text-center py-5">

                                <h3 class="text-xl font-bold">
                                    18 yrs
                                </h3>

                                <p class="text-gray-500 text-xs">
                                    Experience
                                </p>

                            </div>

                            <div class="text-center py-5">

                                <h3 class="text-xl font-bold">
                                    820+
                                </h3>

                                <p class="text-gray-500 text-xs">
                                    Projects
                                </p>

                            </div>

                            <div class="text-center py-5">

                                <h3 class="text-xl font-bold">
                                    ₹85+
                                </h3>

                                <p class="text-gray-500 text-xs">
                                    Per sqft
                                </p>

                            </div>

                            <div class="text-center py-5">

                                <h3 class="text-xl font-bold">
                                    3
                                </h3>

                                <p class="text-gray-500 text-xs">
                                    Certifications
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ============================================ -->
                <!-- TABS SECTION: ABOUT | PORTFOLIO | REVIEWS   -->
                <!-- ============================================ -->
                <div class="bg-white rounded-[24px] shadow-sm overflow-hidden">

                    <!-- Tabs -->
                    <div class="flex border-b border-gray-200">

                        <button onclick="showTab('about')" id="tab-about" class="flex-1 py-4 text-[#FF7A00] font-medium border-b-2 border-[#FF7A00] transition text-sm">
                            About
                        </button>

                        <button onclick="showTab('portfolio')" id="tab-portfolio" class="flex-1 py-4 text-gray-600 hover:text-[#FF7A00] transition text-sm">
                            Portfolio
                        </button>

                        <button onclick="showTab('reviews')" id="tab-reviews" class="flex-1 py-4 text-gray-600 hover:text-[#FF7A00] transition text-sm">
                            Reviews
                        </button>

                    </div>

                    <!-- ===== TAB CONTENT: ABOUT ===== -->
                    <div id="content-about" class="p-8">

                        <h3 class="text-2xl font-bold text-[#111111] mb-4">
                            About
                        </h3>

                        <p class="text-[#555555] text-base leading-8 mb-8">
                            Mehta Steel Works is Ahmedabad's most trusted structural steel fabricator with 18 years of delivering precision-engineered steel structures for industrial warehouses, commercial buildings, mezzanine floors and pre-engineered buildings across Gujarat and Maharashtra.
                        </p>

                        <h3 class="text-xl font-bold text-[#111111] mb-4">
                            Services Offered
                        </h3>

                        <div class="grid md:grid-cols-2 gap-y-4 gap-x-16 mb-8">

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Structural Steel Fabrication</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Pre-Engineered Buildings</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Mezzanine Floors</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Industrial Roofing</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Steel Staircases</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                                <span class="text-base text-[#333]">Warehouse Structures</span>
                            </div>

                        </div>

                        <h3 class="text-xl font-bold text-[#111111] mb-4">
                            Certifications
                        </h3>

                        <div class="flex flex-wrap gap-3 mb-6">

                            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[#FFD8B0] bg-[#FFF7F0] text-[#FF7A00] text-sm font-medium">
                                <i class="fa-solid fa-award"></i>
                                ISO 9001:2015
                            </span>

                            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[#FFD8B0] bg-[#FFF7F0] text-[#FF7A00] text-sm font-medium">
                                <i class="fa-solid fa-award"></i>
                                BIS Certified
                            </span>

                            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-[#FFD8B0] bg-[#FFF7F0] text-[#FF7A00] text-sm font-medium">
                                <i class="fa-solid fa-award"></i>
                                NSIC Registered
                            </span>

                        </div>

                        <p class="text-gray-400 text-sm">
                            GSTIN: 24AAGCM1234F1Z5
                        </p>

                    </div>

                    <!-- ===== TAB CONTENT: PORTFOLIO ===== -->
                    <div id="content-portfolio" class="p-6 hidden">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <!-- Image 1 -->
                            <div class="overflow-hidden rounded-2xl">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=400&fit=crop"
                                    alt="Steel Structure Warehouse"
                                    class="w-full h-[220px] object-cover hover:scale-105 transition duration-300">
                            </div>

                            <!-- Image 2 -->
                            <div class="overflow-hidden rounded-2xl">
                                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=600&h=400&fit=crop"
                                    alt="Industrial Shed Construction"
                                    class="w-full h-[220px] object-cover hover:scale-105 transition duration-300">
                            </div>

                            <!-- Image 3 -->
                            <div class="overflow-hidden rounded-2xl">
                                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop"
                                    alt="Commercial Building Steel"
                                    class="w-full h-[220px] object-cover hover:scale-105 transition duration-300">
                            </div>

                            <!-- Image 4 -->
                            <div class="overflow-hidden rounded-2xl">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=600&h=320&fit=crop&auto=format"
                                    alt="Pre-Engineered Building"
                                    class="w-full h-[220px] object-cover hover:scale-105 transition duration-300">
                            </div>

                        </div>

                        <!-- View All Button -->
                       
                    </div>

                    <!-- ===== TAB CONTENT: REVIEWS ===== -->
                    <div id="content-reviews" class="p-8 hidden">

                        <div class="flex items-center gap-3 mb-5">
                            <h3 class="text-2xl font-bold text-[#111111]">Reviews</h3>
                            <span class="bg-[#FFF5EC] text-[#FF7A00] px-3 py-0.5 rounded-full text-base font-bold">4.9</span>
                            <span class="text-gray-400 text-xs">Based on 3 reviews</span>
                        </div>

                        <!-- Review 1 -->
                        <div class="border-b border-gray-100 pb-5 mb-5">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-base">Rajan Shah</span>
                                <span class="text-gray-400 text-xs">40,000 sqft Warehouse · Mar 2024</span>
                            </div>
                            <div class="text-[#FF7A00] text-sm mb-1.5">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <p class="text-gray-600 text-sm leading-7">
                                Exceptional quality and timely delivery. The warehouse structure was completed 3 days ahead of schedule.
                            </p>
                        </div>

                        <!-- Review 2 -->
                        <div class="border-b border-gray-100 pb-5 mb-5">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-base">Priya Mehta</span>
                                <span class="text-gray-400 text-xs">Commercial Mezzanine · Jan 2024</span>
                            </div>
                            <div class="text-[#FF7A00] text-sm mb-1.5">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <p class="text-gray-600 text-sm leading-7">
                                Best steel fabricator in Ahmedabad. Transparent pricing, no hidden costs, superb finishing.
                            </p>
                        </div>

                        <!-- Review 3 -->
                        <div class="pb-5">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-base">Vivek Patel</span>
                                <span class="text-gray-400 text-xs">Industrial Shed · Dec 2023</span>
                            </div>
                            <div class="text-[#FF7A00] text-sm mb-1.5">
                                ⭐⭐⭐⭐☆
                            </div>
                            <p class="text-gray-600 text-sm leading-7">
                                Good work overall. Minor delay in drawing approvals but execution was excellent.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Right Side -->
            <div class="space-y-6">

                <!-- Pricing -->
                <div class="bg-white rounded-3xl shadow-sm p-6">

                    <h3 class="font-bold text-xl">
                        Starting from
                    </h3>

                    <div class="mt-3">

                        <span class="text-4xl font-bold text-[#FF7A00]">
                            ₹85
                        </span>

                        <span class="text-base text-gray-500">
                            /sqft
                        </span>

                    </div>

                    <p class="text-gray-500 text-sm mt-1.5">
                        Response within 4 hours
                    </p>

                    <button
                        class="w-full mt-6 bg-[#FF7A00] text-white py-3.5 rounded-xl font-semibold hover:bg-orange-600 transition text-sm">

                        Get Quote from This Vendor
                        →

                    </button>

                    <button
                        class="w-full mt-3 border py-3.5 rounded-xl font-semibold hover:bg-gray-50 text-sm">

                        <i class="fa-solid fa-phone mr-2"></i>

                        Call Vendor

                    </button>

                </div>

                <!-- Contact -->
                <div class="bg-white rounded-3xl shadow-sm p-6">

                    <h3 class="text-xl font-bold mb-5">
                        Contact Details
                    </h3>

                    <div class="space-y-4">

                        <div class="flex gap-3 items-center">

                            <div class="w-9 h-9 rounded-lg bg-orange-50 flex items-center justify-center">

                                <i class="fa-solid fa-phone text-[#FF7A00] text-sm"></i>

                            </div>

                            <span class="text-gray-700 text-sm">+91 98765 11111</span>

                        </div>

                        <div class="flex gap-3 items-center">

                            <div class="w-9 h-9 rounded-lg bg-orange-50 flex items-center justify-center">

                                <i class="fa-solid fa-envelope text-[#FF7A00] text-sm"></i>

                            </div>

                            <span class="text-gray-700 text-sm">info@mehtasteel.in</span>

                        </div>

                        <div class="flex gap-3 items-center">

                            <div class="w-9 h-9 rounded-lg bg-orange-50 flex items-center justify-center">

                                <i class="fa-solid fa-location-dot text-[#FF7A00] text-sm"></i>

                            </div>

                            <span class="text-gray-700 text-sm">Ahmedabad, India</span>

                        </div>

                    </div>

                </div>

                <!-- Trust -->
                <div class="bg-white rounded-3xl shadow-sm p-6">

                    <h3 class="text-xl font-bold mb-5">
                        Why Trust This Vendor
                    </h3>

                    <ul class="space-y-3">

                        <li class="flex gap-3 items-start">
                            <i class="fa-solid fa-shield text-[#FF7A00] mt-0.5 text-sm"></i>
                            <span class="text-gray-700 text-sm">8-Point FabriQ Verified</span>
                        </li>

                        <li class="flex gap-3 items-start">
                            <i class="fa-solid fa-star text-[#FF7A00] mt-0.5 text-sm"></i>
                            <span class="text-gray-700 text-sm">Highly Rated by Customers</span>
                        </li>

                        <li class="flex gap-3 items-start">
                            <i class="fa-solid fa-user-check text-[#FF7A00] mt-0.5 text-sm"></i>
                            <span class="text-gray-700 text-sm">Experienced Team</span>
                        </li>

                        <li class="flex gap-3 items-start">
                            <i class="fa-solid fa-clock text-[#FF7A00] mt-0.5 text-sm"></i>
                            <span class="text-gray-700 text-sm">On-Time Project Delivery</span>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>
</section>

<script>
    function showTab(tab) {

        // Hide all content
        document.getElementById('content-about').classList.add('hidden');
        document.getElementById('content-portfolio').classList.add('hidden');
        document.getElementById('content-reviews').classList.add('hidden');

        // Remove active styles from all tabs
        const tabs = ['about', 'portfolio', 'reviews'];
        tabs.forEach(function(t) {
            const tabEl = document.getElementById('tab-' + t);
            tabEl.classList.remove('text-[#FF7A00]', 'border-[#FF7A00]', 'font-medium');
            tabEl.classList.add('text-gray-600');
            tabEl.style.borderBottomColor = 'transparent';
        });

        // Show selected content and activate tab
        if (tab === 'about') {
            document.getElementById('content-about').classList.remove('hidden');
            const tabEl = document.getElementById('tab-about');
            tabEl.classList.add('text-[#FF7A00]', 'border-[#FF7A00]', 'font-medium');
            tabEl.style.borderBottomColor = '#FF7A00';
        } else if (tab === 'portfolio') {
            document.getElementById('content-portfolio').classList.remove('hidden');
            const tabEl = document.getElementById('tab-portfolio');
            tabEl.classList.add('text-[#FF7A00]', 'border-[#FF7A00]', 'font-medium');
            tabEl.style.borderBottomColor = '#FF7A00';
        } else if (tab === 'reviews') {
            document.getElementById('content-reviews').classList.remove('hidden');
            const tabEl = document.getElementById('tab-reviews');
            tabEl.classList.add('text-[#FF7A00]', 'border-[#FF7A00]', 'font-medium');
            tabEl.style.borderBottomColor = '#FF7A00';
        }
    }

    // Set About as default active tab on page load
    document.addEventListener('DOMContentLoaded', function() {
        showTab('about');
    });
</script>

@endsection