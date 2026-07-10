@extends('app')

@section('title', 'AMC Plans')

@section('content')

<!-- HERO SECTION -->
<section class="bg-[#0B0B0D] overflow-hidden pt-8 md:pt-12 lg:pt-16">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16 py-12 md:py-16">

        <div class="grid lg:grid-cols-2 gap-10 items-center">

            <!-- Left -->
            <div>
                <span class="text-[#FF8C00] uppercase text-xs font-semibold tracking-wider">
                    Annual Maintenance Contract
                </span>

                <h1 class="text-3xl md:text-4xl font-bold text-white mt-3 leading-tight">
                    Keep Your Structure
                    <span class="text-[#FF8C00] block">
                        Maintained For Years
                    </span>
                </h1>

                <p class="text-gray-300 mt-4 text-sm md:text-base leading-relaxed">
                    Protect your fabrication investment with scheduled inspections,
                    preventive maintenance and 24×7 emergency support — from the same engineers who built it.
                </p>

                <div class="flex flex-wrap gap-4 mt-6 text-gray-300 text-sm">

                    <div>✓ Plans from ₹4,999/year</div>
                    <div>✓ 2,000+ Structures</div>
                    <div>✓ Serving 18+ Cities</div>

                </div>

                <div class="flex flex-wrap gap-3 mt-8">
                    <a href="/vendors" class="bg-[#FF8C00] text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:bg-orange-600 transition">
                        Find Vendors
                    </a>
                    <a href="/quote-details" class="border border-gray-400 text-white px-6 py-2.5 rounded-full text-sm font-semibold hover:border-[#FF8C00] hover:text-[#FF8C00] transition">
                        Get Free Quote
                    </a>
                </div>
            </div>

            <!-- Right -->
            <div class="relative">

                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800" 
                     class="rounded-2xl w-full h-[320px] object-cover">

                <div class="absolute bottom-4 left-4 right-4 bg-white rounded-xl p-4 shadow-xl">

                    <h4 class="font-semibold text-sm">Next Scheduled Visit</h4>

                    <p class="text-gray-500 text-xs mt-1">
                        📅 April 15, 2026 • 10:00 AM
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- COVERAGE -->
@php
$features = [
    [
        'icon' => 'fa-solid fa-screwdriver-wrench',
        'title' => 'Structural Inspection',
        'description' => 'Complete check of all joints, welds and load-bearing elements'
    ],
    [
        'icon' => 'fa-regular fa-shield',
        'title' => 'Corrosion Assessment',
        'description' => 'Early detection of rust, coating failure and surface degradation'
    ],
    [
        'icon' => 'fa-solid fa-chart-column',
        'title' => 'Digital Health Report',
        'description' => 'Detailed report with photos, measurements and recommendations'
    ],
    [
        'icon' => 'fa-solid fa-circle-exclamation',
        'title' => 'Risk Flagging',
        'description' => 'Immediate alert if any safety-critical issue is discovered'
    ],
    [
        'icon' => 'fa-regular fa-calendar',
        'title' => 'Scheduled Maintenance',
        'description' => 'Preventive work like re-torquing, sealing and re-painting'
    ],
    [
        'icon' => 'fa-solid fa-headset',
        'title' => 'Year-round Support',
        'description' => 'Call us any time — our team is available to address concerns'
    ],
];
@endphp

<section class="bg-[#F7F7F7] py-14">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-10">
            <p class="text-[#FF7A00] uppercase tracking-[3px] text-xs font-semibold mb-2">
                Every Plan Includes
            </p>

            <h2 class="text-3xl font-bold text-[#111827]">
                Comprehensive Maintenance Coverage
            </h2>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            @foreach($features as $feature)

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition duration-300 p-5">

                <div class="w-11 h-11 rounded-xl bg-[#FFF3E9] flex items-center justify-center mb-4">
                    <i class="{{ $feature['icon'] }} text-[#FF7A00] text-base"></i>
                </div>

                <h3 class="text-xl font-semibold text-[#111827] mb-2">
                    {{ $feature['title'] }}
                </h3>

                <p class="text-gray-600 leading-6 text-sm">
                    {{ $feature['description'] }}
                </p>

            </div>

            @endforeach

        </div>
    </div>
</section>

<!-- PRICING -->
<section class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">

        <div class="text-center mb-12">

            <span class="text-[#FF8C00] uppercase text-xs font-semibold">
                Transparent Pricing
            </span>

            <h2 class="text-2xl md:text-3xl font-bold mt-2">
                Choose Your AMC Plan
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-6">

            <!-- Essential -->
            <div class="border rounded-2xl p-6 hover:shadow-lg transition">

                <h3 class="text-xl font-bold">Essential</h3>

                <p class="text-gray-500 text-sm mt-1">
                    Small residential projects
                </p>

                <h2 class="text-4xl font-bold mt-5">
                    ₹4,999
                    <span class="text-base text-gray-500">/year</span>
                </h2>

                <ul class="space-y-3 mt-6 text-gray-600 text-sm">

                    <li>✓ 2 site visits/year</li>
                    <li>✓ Visual inspection</li>
                    <li>✓ Email support</li>
                    <li>✓ 48hr response</li>
                    <li>✓ Structural report</li>

                </ul>

              <a href="{{ url('/quote-details') }}"
   class="w-full border border-gray-300 py-2.5 rounded-full mt-6 text-sm hover:bg-gray-100 transition inline-block text-center">
    Get Started
</a>
            </div>

            <!-- Professional -->
            <div class="border-2 border-[#FF8C00] rounded-2xl p-6 relative hover:shadow-lg transition">

                <span
                    class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#FF8C00] text-white px-4 py-1 rounded-full text-[10px] font-semibold">
                    Most Popular
                </span>

                <h3 class="text-xl font-bold">Professional</h3>

                <p class="text-gray-500 text-sm mt-1">
                    Offices & Commercial
                </p>

                <h2 class="text-4xl font-bold mt-5 text-[#FF8C00]">
                    ₹9,999
                    <span class="text-base text-gray-500">/year</span>
                </h2>

                <ul class="space-y-3 mt-6 text-gray-600 text-sm">

                    <li>✓ 4 quarterly visits</li>
                    <li>✓ Structural audit</li>
                    <li>✓ Priority support</li>
                    <li>✓ 24hr response</li>
                    <li>✓ Inspection reports</li>
                    <li>✓ 10% spare discount</li>

                </ul>

          <a href="{{ url('/quote-details') }}"
   class="w-full bg-[#FF8C00] text-white py-2.5 rounded-full mt-6 text-sm hover:bg-orange-600 transition inline-block text-center">
    Choose Professional
</a>

            </div>

            <!-- Enterprise -->
            <div class="border rounded-2xl p-6 hover:shadow-lg transition">

                <h3 class="text-xl font-bold">Enterprise</h3>

                <p class="text-gray-500 text-sm mt-1">
                    Large industrial projects
                </p>

                <h2 class="text-4xl font-bold mt-5">
                    ₹19,999
                    <span class="text-base text-gray-500">/year</span>
                </h2>

                <ul class="space-y-3 mt-6 text-gray-600 text-sm">

                    <li>✓ Monthly visits</li>
                    <li>✓ Comprehensive reports</li>
                    <li>✓ 24×7 support</li>
                    <li>✓ Same-day dispatch</li>
                    <li>✓ Dedicated engineer</li>
                    <li>✓ Unlimited emergency visits</li>

                </ul>

                <a href="{{ url('/quote-details') }}"
                    class="w-full border border-gray-300 py-2.5 rounded-full mt-6 text-sm hover:bg-gray-100 transition inline-block text-center">
                    Contact Sales
                </a>

            </div>

        </div>

        <!-- Footer note: All plans include GST + custom plan -->
        <div class="text-center mt-10 pt-6 border-t border-gray-200">
            <p class="text-gray-500 text-sm">
                All plans include GST. Need a custom plan for a large portfolio? 
                <a href="#" class="text-[#FF8C00] font-medium hover:underline">Contact our team</a>
            </p>
        </div>

    </div>

</section>

<!-- STATS -->
<section class="bg-black py-10">

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">

            <div>
                <h3 class="text-[#FF8C00] text-3xl md:text-4xl font-bold">2,000+</h3>
                <p class="text-gray-300 text-sm mt-1">Structures Under AMC</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-3xl md:text-4xl font-bold">18+</h3>
                <p class="text-gray-300 text-sm mt-1">Cities Covered</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-3xl md:text-4xl font-bold">4.9★</h3>
                <p class="text-gray-300 text-sm mt-1">Customer Rating</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-3xl md:text-4xl font-bold">&lt; 4 hrs</h3>
                <p class="text-gray-300 text-sm mt-1">Emergency Response</p>
            </div>

        </div>

    </div>

</section>

<!-- TESTIMONIALS -->
<section class="py-16 bg-[#F8F9FB]">

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">

        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                What AMC Customers Say
            </h2>
        </div>

        @php
        $testimonials = [
            [
                'name'=>'Sanjay Patel',
                'city'=>'Ahmedabad',
                'plan'=>'Professional',
                'review'=>'The quarterly visit identified a corrosion issue early. Saved us from a major repair cost. Worth every rupee.'
            ],
            [
                'name'=>'Meera Nair',
                'city'=>'Bangalore',
                'plan'=>'Enterprise',
                'review'=>'Enterprise plan gives us complete peace of mind. Monthly inspections and 24×7 support are exactly what our facility needed.'
            ],
            [
                'name'=>'Amit Shah',
                'city'=>'Mumbai',
                'plan'=>'Professional',
                'review'=>'Smooth and professional service. The engineer report was detailed and the follow-up work was completed within a week.'
            ]
        ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($testimonials as $item)

            <div class="bg-white rounded-2xl p-6 shadow-sm border hover:shadow-lg transition">

                <div class="text-[#FF8C00] text-base mb-4">
                    ★★★★★
                </div>

                <p class="text-gray-600 text-sm leading-7 mb-6">
                    "{{ $item['review'] }}"
                </p>

                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-3">

                        <div class="w-9 h-9 rounded-full bg-[#FF8C00] text-white flex items-center justify-center font-bold text-sm">
                            {{ strtoupper(substr($item['name'],0,1)) }}
                        </div>

                        <div>
                            <h4 class="font-semibold text-sm">
                                {{ $item['name'] }}
                            </h4>

                            <p class="text-xs text-gray-500">
                                {{ $item['city'] }}
                            </p>
                        </div>

                    </div>

                    <span class="bg-orange-100 text-[#FF8C00] px-2.5 py-0.5 rounded-full text-[10px] font-medium">
                        {{ $item['plan'] }}
                    </span>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- FAQ -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">

        <!-- Heading -->
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                Frequently Asked Questions
            </h2>
        </div>

        @php
            $faqs = [
                [
                    'question' => 'What does an AMC site visit include?',
                    'answer' => 'An AMC visit includes structural inspection, corrosion assessment, preventive maintenance, safety checks, and a detailed digital report with photos and measurements.'
                ],
                [
                    'question' => 'Can I add extra visits to my plan?',
                    'answer' => 'Yes. Additional visits can be scheduled at discounted AMC customer rates.'
                ],
                [
                    'question' => 'How soon can I get an emergency visit?',
                    'answer' => 'Emergency visits are generally scheduled within 4 to 24 hours depending on your AMC plan.'
                ],
                [
                    'question' => 'Does the AMC cover all types of fabrication?',
                    'answer' => 'Yes, AMC plans cover most fabrication structures including steel, aluminum, glass, railings, and industrial setups.'
                ],
                [
                    'question' => 'Can I upgrade my plan mid-year?',
                    'answer' => 'Absolutely. You can upgrade your AMC plan anytime by paying the difference amount.'
                ],
            ];
        @endphp

        <div class="space-y-3">

            @foreach($faqs as $index => $faq)

                <details class="group border border-gray-200 rounded-xl overflow-hidden">

                    <summary
                        class="flex items-center justify-between px-5 py-4 cursor-pointer list-none bg-white">

                        <span class="font-medium text-gray-900 text-sm">
                            {{ $faq['question'] }}
                        </span>

                        <span
                            class="w-7 h-7 rounded-full bg-[#FF8C00] text-white flex items-center justify-center text-lg font-medium group-open:rotate-45 transition duration-300">
                            +
                        </span>

                    </summary>

                    <div class="px-5 pb-4 text-gray-500 text-sm leading-7 border-t border-gray-100">
                        {{ $faq['answer'] }}
                    </div>

                </details>

            @endforeach

        </div>

    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div
            class="max-w-5xl mx-auto rounded-[32px] bg-gradient-to-r from-[#FF8A1F] to-[#FF6B00] px-8 md:px-16 py-16 text-center">

            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-5">
                Ready to Protect Your Investment?
            </h2>

            <!-- Description -->
            <p class="text-white/90 text-lg md:text-xl mb-10">
                Join 2,000+ customers who trust FabriQ AMC to keep their
                structures safe and performing.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-5">

                <!-- Primary Button -->
                <a href="#"
                    class="inline-flex items-center justify-center gap-3 bg-white text-[#FF6B00] font-semibold text-lg px-10 py-4 rounded-full hover:scale-105 transition duration-300">

                    Get AMC Quote

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14M13 5l7 7-7 7"/>
                    </svg>

                </a>

                <!-- Secondary Button -->
                <a href="#"
                    class="inline-flex items-center justify-center gap-3 border-2 border-white text-white font-semibold text-lg px-10 py-4 rounded-full hover:bg-white hover:text-[#FF6B00] transition duration-300">

                    <i class="fa-solid fa-phone"></i>

                    Talk to Expert

                </a>

            </div>

        </div>

    </div>
</section>
@endsection