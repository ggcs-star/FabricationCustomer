@extends('app')

@section('title', 'AMC Plans')

@section('content')

<!-- HERO SECTION -->
<section class="bg-[#0B0B0D] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Left -->
            <div>
                <span class="text-[#FF8C00] uppercase text-sm font-semibold tracking-wider">
                    Annual Maintenance Contracts
                </span>

                <h1 class="text-4xl md:text-5xl font-bold text-white mt-4 leading-tight">
                    Keep Your Structure
                    <span class="text-[#FF8C00] block">
                        Maintained For Years
                    </span>
                </h1>

                <p class="text-gray-300 mt-6 text-lg leading-relaxed">
                    Protect your fabrication investment with scheduled inspections,
                    preventive maintenance and emergency support.
                </p>

                <div class="flex flex-wrap gap-6 mt-8 text-gray-300">

                    <div>✓ Plans from ₹4,999/year</div>
                    <div>✓ 2,000+ Structures</div>
                    <div>✓ Serving 18+ Cities</div>

                </div>
            </div>

            <!-- Right -->
            <div class="relative">

                <img src="{{ asset('images/amc-hero.jpg') }}"
                     class="rounded-3xl w-full h-[420px] object-cover">

                <div class="absolute bottom-6 left-6 right-6 bg-white rounded-2xl p-5 shadow-xl">

                    <h4 class="font-semibold">Next Scheduled Visit</h4>

                    <p class="text-gray-500 text-sm mt-2">
                        📅 April 15, 2026 • 10:00 AM
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- COVERAGE -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-[#FF8C00] uppercase text-sm font-semibold">
                Every Plan Includes
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Comprehensive Maintenance Coverage
            </h2>

        </div>

        @php
        $features = [
        ['Structural Inspection','Complete check of joints, welds and load-bearing elements'],
        ['Corrosion Assessment','Early rust detection and coating inspection'],
        ['Digital Health Report','Detailed report with recommendations'],
        ['Risk Flagging','Immediate alerts for critical issues'],
        ['Scheduled Maintenance','Preventive maintenance work'],
        ['Year-round Support','Dedicated support team available']
        ];
        @endphp

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($features as $feature)

            <div class="bg-white rounded-3xl p-8 shadow-sm border">

                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center mb-6">
                    🔧
                </div>

                <h4 class="font-bold text-xl mb-3">
                    {{ $feature[0] }}
                </h4>

                <p class="text-gray-500">
                    {{ $feature[1] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>


<!-- PRICING -->
<section class="py-20 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-[#FF8C00] uppercase text-sm font-semibold">
                Transparent Pricing
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Choose Your AMC Plan
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-8">

            <!-- Essential -->
            <div class="border rounded-3xl p-8">

                <h3 class="text-2xl font-bold">Essential</h3>

                <p class="text-gray-500 mt-2">
                    Small residential projects
                </p>

                <h2 class="text-5xl font-bold mt-6">
                    ₹4,999
                    <span class="text-lg text-gray-500">/year</span>
                </h2>

                <ul class="space-y-4 mt-8 text-gray-600">

                    <li>✓ 2 site visits/year</li>
                    <li>✓ Visual inspection</li>
                    <li>✓ Email support</li>
                    <li>✓ 48hr response</li>
                    <li>✓ Structural report</li>

                </ul>

                <button
                    class="w-full border border-gray-300 py-3 rounded-full mt-8 hover:bg-gray-100">
                    Get Started
                </button>

            </div>

            <!-- Professional -->
            <div class="border-2 border-[#FF8C00] rounded-3xl p-8 relative">

                <span
                    class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#FF8C00] text-white px-5 py-2 rounded-full text-sm">
                    Most Popular
                </span>

                <h3 class="text-2xl font-bold">Professional</h3>

                <p class="text-gray-500 mt-2">
                    Offices & Commercial
                </p>

                <h2 class="text-5xl font-bold mt-6 text-[#FF8C00]">
                    ₹9,999
                    <span class="text-lg text-gray-500">/year</span>
                </h2>

                <ul class="space-y-4 mt-8 text-gray-600">

                    <li>✓ 4 quarterly visits</li>
                    <li>✓ Structural audit</li>
                    <li>✓ Priority support</li>
                    <li>✓ 24hr response</li>
                    <li>✓ Inspection reports</li>
                    <li>✓ 10% spare discount</li>

                </ul>

                <button
                    class="w-full bg-[#FF8C00] text-white py-3 rounded-full mt-8 hover:bg-orange-600">
                    Choose Professional
                </button>

            </div>

            <!-- Enterprise -->
            <div class="bord
            
            er rounded-3xl p-8">

                <h3 class="text-2xl font-bold">Enterprise</h3>

                <p class="text-gray-500 mt-2">
                    Large industrial projects
                </p>

                <h2 class="text-5xl font-bold mt-6">
                    ₹19,999
                    <span class="text-lg text-gray-500">/year</span>
                </h2>

                <ul class="space-y-4 mt-8 text-gray-600">

                    <li>✓ Monthly visits</li>
                    <li>✓ Comprehensive reports</li>
                    <li>✓ 24×7 support</li>
                    <li>✓ Same-day dispatch</li>
                    <li>✓ Dedicated engineer</li>
                    <li>✓ Unlimited emergency visits</li>

                </ul>

                <button
                    class="w-full border border-gray-300 py-3 rounded-full mt-8 hover:bg-gray-100">
                    Contact Sales
                </button>

            </div>

        </div>

    </div>

</section>


<!-- STATS -->
<section class="bg-black py-12">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 text-center">

            <div>
                <h3 class="text-[#FF8C00] text-4xl font-bold">2,000+</h3>
                <p class="text-gray-300 mt-2">Structures Under AMC</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-4xl font-bold">18+</h3>
                <p class="text-gray-300 mt-2">Cities Covered</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-4xl font-bold">4.9★</h3>
                <p class="text-gray-300 mt-2">Customer Rating</p>
            </div>

            <div>
                <h3 class="text-[#FF8C00] text-4xl font-bold">&lt; 4 hrs</h3>
                <p class="text-gray-300 mt-2">Emergency Response</p>
            </div>

        </div>

    </div>

</section>
<section class="py-20 bg-[#F8F9FB]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-900">
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

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($testimonials as $item)

            <div class="bg-white rounded-3xl p-8 shadow-sm border hover:shadow-lg transition">

                <div class="text-[#FF8C00] text-xl mb-5">
                    ★★★★★
                </div>

                <p class="text-gray-600 leading-8 mb-8">
                    "{{ $item['review'] }}"
                </p>

                <div class="flex justify-between items-center">

                    <div class="flex items-center gap-3">

                        <div class="w-10 h-10 rounded-full bg-[#FF8C00] text-white flex items-center justify-center font-bold">
                            {{ strtoupper(substr($item['name'],0,1)) }}
                        </div>

                        <div>
                            <h4 class="font-semibold">
                                {{ $item['name'] }}
                            </h4>

                            <p class="text-sm text-gray-500">
                                {{ $item['city'] }}
                            </p>
                        </div>

                    </div>

                    <span class="bg-orange-100 text-[#FF8C00] px-3 py-1 rounded-full text-sm">
                        {{ $item['plan'] }}
                    </span>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- FAQ -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">
                Frequently Asked Questions
            </h2>
        </div>

        @php
            $faqs = [
                [
                    'question' => 'What does an AMC site visit include?',
                    'answer' => 'An AMC visit includes structural inspection, corrosion assessment, preventive maintenance, safety checks, and a detailed digital report.'
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

        <div class="space-y-4">

            @foreach($faqs as $index => $faq)

                <details class="group border border-gray-200 rounded-2xl overflow-hidden">

                    <summary
                        class="flex items-center justify-between px-6 py-5 cursor-pointer list-none bg-white">

                        <span class="font-medium text-gray-900">
                            {{ $faq['question'] }}
                        </span>

       <span
    class="w-8 h-8 rounded-full bg-[#FF8C00] text-white flex items-center justify-center text-xl font-medium group-open:rotate-45 transition duration-300">
    +
</span>

                    </summary>

                    <div class="px-6 pb-5 text-gray-500 leading-7 border-t border-gray-100">
                        {{ $faq['answer'] }}
                    </div>

                </details>

            @endforeach

        </div>

    </div>
</section>

@endsection