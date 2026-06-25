@extends('app')
@include('header')
@section('content')

<div class="bg-[#ECEFF3] min-h-screen">

    <!-- Page Heading -->
    <section class="pt-8 sm:pt-10 pb-6 sm:pb-8 px-4">

        <div class="text-center">

            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#183153]">
                About Us
            </h1>

            <div class="w-24 sm:w-32 h-[2px] bg-[#BCD1EA] mx-auto mt-2 sm:mt-3"></div>

        </div>

    </section>

    <!-- Content -->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8 pb-12 sm:pb-16 space-y-4 sm:space-y-6">

        <!-- Who We Are -->
        <div class="bg-[#F3F5F9] rounded-[16px] sm:rounded-[20px] p-4 sm:p-6">

            <h2 class="text-xl sm:text-2xl font-semibold text-[#183153]">
                Who We Are
            </h2>

            <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>

            <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                We are a platform that connects customers with trusted vendors
                for custom fabrication and service needs.
            </p>

        </div>

        <!-- What We Do -->
        <div class="bg-[#F3F5F9] rounded-[16px] sm:rounded-[20px] p-4 sm:p-6">

            <h2 class="text-xl sm:text-2xl font-semibold text-[#183153]">
                What We Do
            </h2>

            <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>

            <ul class="list-disc pl-4 sm:pl-5 text-sm sm:text-base text-gray-700 space-y-1 sm:space-y-1.5">

                <li>Help users request customized quotes</li>
                <li>Connect users with verified vendors</li>
                <li>Provide a smooth and transparent experience</li>

            </ul>

        </div>

        <!-- Why Choose Us -->
        <div class="bg-[#F3F5F9] rounded-[16px] sm:rounded-[20px] p-4 sm:p-6">

            <h2 class="text-xl sm:text-2xl font-semibold text-[#183153]">
                Why Choose Us
            </h2>

            <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>

            <ul class="list-disc pl-4 sm:pl-5 text-sm sm:text-base text-gray-700 space-y-1 sm:space-y-1.5">

                <li>Trusted vendors</li>
                <li>Easy quote process</li>
                <li>Transparent communication</li>
                <li>Fast response time</li>

            </ul>

        </div>

        <!-- Mission -->
        <div class="bg-[#F3F5F9] rounded-[16px] sm:rounded-[20px] p-4 sm:p-6">

            <h2 class="text-xl sm:text-2xl font-semibold text-[#183153]">
                Our Mission
            </h2>

            <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>

            <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                Our mission is to simplify the process of finding reliable
                vendors and getting accurate quotes quickly and efficiently.
            </p>

        </div>

        <!-- Vision -->
        <div class="bg-[#F3F5F9] rounded-[16px] sm:rounded-[20px] p-4 sm:p-6">

            <h2 class="text-xl sm:text-2xl font-semibold text-[#183153]">
                Our Vision
            </h2>

            <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>

            <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                To become the most trusted marketplace for custom fabrication
                and service solutions.
            </p>

        </div>

    </section>

</div>
@include('footer')
@endsection