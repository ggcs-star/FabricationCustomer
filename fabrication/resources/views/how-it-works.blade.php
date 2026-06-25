@extends('app')

@section('title', 'How It Works')

@section('content')

<!-- Hero Section -->
<section class="bg-white pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto">
            <span
                class="inline-block px-5 py-2 rounded-full bg-orange-100 text-[#FF8A00] text-sm font-semibold mb-5">
                Simple Process
            </span>

            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                How <span class="text-[#FF8A00]">FABRIQ</span> Works
            </h1>

            <p class="text-gray-500 text-lg leading-relaxed">
                Book trusted fabrication services in a few simple steps.
                From request to project completion, we've made the entire
                process transparent and hassle-free.
            </p>
        </div>

    </div>
</section>

<!-- Steps -->
<section class="bg-[#FAFAFA] py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-8">

            @php
            $steps = [
            [
            'number'=>'01',
            'title'=>'Book a Fabrication Service',
            'desc'=>'Choose the fabrication service you need and submit your project requirements.',
            'icon'=>'fa-calendar-check'
            ],
            [
            'number'=>'02',
            'title'=>'Vendor Confirms Request',
            'desc'=>'Verified fabricators review your request and accept the booking.',
            'icon'=>'fa-user-check'
            ],
            [
            'number'=>'03',
            'title'=>'On-Site Measurement',
            'desc'=>'The vendor visits your location to inspect and take measurements.',
            'icon'=>'fa-ruler-combined'
            ],
            [
            'number'=>'04',
            'title'=>'Final Quote Approval',
            'desc'=>'Review pricing, material details and approve the final quotation.',
            'icon'=>'fa-file-invoice-dollar'
            ],
            [
            'number'=>'05',
            'title'=>'Fabrication Work Begins',
            'desc'=>'The selected vendor starts fabrication and keeps you updated.',
            'icon'=>'fa-hammer'
            ],
            [
            'number'=>'06',
            'title'=>'Secure Payment & Completion',
            'desc'=>'Release payment securely after successful project completion.',
            'icon'=>'fa-shield-halved'
            ]
            ];
            @endphp

            @foreach($steps as $step)

            <div
                class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">

                <div class="flex items-start gap-6">

                    <!-- Icon -->
                    <div
                        class="w-20 h-20 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0">

                        <i class="fa-solid {{ $step['icon'] }} text-3xl text-[#FF8A00]"></i>
                    </div>

                    <!-- Content -->
                    <div class="flex-1">

                        <span
                            class="inline-flex items-center justify-center px-3 py-1 rounded-full bg-orange-100 text-[#FF8A00] text-sm font-semibold mb-4">
                            Step {{ $step['number'] }}
                        </span>

                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            {{ $step['title'] }}
                        </h3>

                        <p class="text-gray-500 leading-7">
                            {{ $step['desc'] }}
                        </p>

                    </div>

                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-900">
                Why Choose FABRIQ?
            </h2>
            <div class="w-20 h-1 bg-[#FF8A00] mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-3xl p-8 shadow-sm border">
                <i class="fa-solid fa-circle-check text-4xl text-[#FF8A00] mb-5"></i>
                <h4 class="text-xl font-bold mb-3">Verified Vendors</h4>
                <p class="text-gray-500">
                    Work with trusted and verified fabrication professionals.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm border">
                <i class="fa-solid fa-wallet text-4xl text-[#FF8A00] mb-5"></i>
                <h4 class="text-xl font-bold mb-3">Transparent Pricing</h4>
                <p class="text-gray-500">
                    No hidden charges. Compare quotes and choose confidently.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm border">
                <i class="fa-solid fa-headset text-4xl text-[#FF8A00] mb-5"></i>
                <h4 class="text-xl font-bold mb-3">Dedicated Support</h4>
                <p class="text-gray-500">
                    Get support throughout your fabrication journey.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection