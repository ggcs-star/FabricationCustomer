@extends('app')
@include('header')

@section('content')

<div class="bg-[#ECEFF3] min-h-screen">

    <!-- Header -->
    <section class="pt-12 pb-8">

        <div class="text-center">

            <h1 class="text-5xl font-bold text-[#183153]">
                FAQs
            </h1>

            <div class="w-24 h-[2px] bg-[#BCD1EA] mx-auto mt-3"></div>

        </div>

    </section>

    <!-- FAQ Section -->
    <section class="max-w-5xl mx-auto px-8 pb-20">

        <div class="space-y-5">

            <!-- FAQ 1 -->
            <details class="group bg-[#F3F5F9] rounded-[18px] border border-[#D7DCE3]">

                <summary class="flex justify-between items-center px-6 py-5 cursor-pointer text-xl font-medium text-[#1D2433] list-none">

                    How do I book a fabrication service?

                    <span class="group-open:rotate-180 transition duration-300">
                        ▼
                    </span>

                </summary>

                <div class="px-6 pb-5 text-gray-600">

                    Select a service, choose a vendor, submit your requirements,
                    and confirm the booking.

                </div>

            </details>

            <!-- FAQ 2 -->
            <details class="group bg-[#F3F5F9] rounded-[18px] border border-[#D7DCE3]">

                <summary class="flex justify-between items-center px-6 py-5 cursor-pointer text-xl font-medium text-[#1D2433] list-none">

                    Are the vendors verified?

                    <span class="group-open:rotate-180 transition duration-300">
                        ▼
                    </span>

                </summary>

                <div class="px-6 pb-5 text-gray-600">

                    Yes, all vendors go through a verification process before
                    being listed on the platform.

                </div>

            </details>

            <!-- FAQ 3 -->
            <details class="group bg-[#F3F5F9] rounded-[18px] border border-[#D7DCE3]">

                <summary class="flex justify-between items-center px-6 py-5 cursor-pointer text-xl font-medium text-[#1D2433] list-none">

                    How is the pricing calculated?

                    <span class="group-open:rotate-180 transition duration-300">
                        ▼
                    </span>

                </summary>

                <div class="px-6 pb-5 text-gray-600">

                    Pricing depends on material, dimensions, complexity,
                    labor requirements, and delivery location.

                </div>

            </details>

            <!-- FAQ 4 -->
            <details class="group bg-[#F3F5F9] rounded-[18px] border border-[#D7DCE3]">

                <summary class="flex justify-between items-center px-6 py-5 cursor-pointer text-xl font-medium text-[#1D2433] list-none">

                    Is on-site measurement available?

                    <span class="group-open:rotate-180 transition duration-300">
                        ▼
                    </span>

                </summary>

                <div class="px-6 pb-5 text-gray-600">

                    Yes, vendors can visit your location for accurate
                    measurements before fabrication starts.

                </div>

            </details>

            <!-- FAQ 5 -->
            <details class="group bg-[#F3F5F9] rounded-[18px] border border-[#D7DCE3]">

                <summary class="flex justify-between items-center px-6 py-5 cursor-pointer text-xl font-medium text-[#1D2433] list-none">

                    What if I am not satisfied with the service?

                    <span class="group-open:rotate-180 transition duration-300">
                        ▼
                    </span>

                </summary>

                <div class="px-6 pb-5 text-gray-600">

                    Contact our support team and we will work with both
                    parties to resolve the issue.

                </div>

            </details>

        </div>

    </section>

</div>
@include('footer')

@endsection