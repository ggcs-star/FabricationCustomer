<!DOCTYPE html>
<html lang="en">
    @extends('app')
    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Terms & Conditions - FabricationHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* custom smooth transitions */
        .terms-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .terms-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px -12px rgba(0,0,0,0.1);
        }
        /* responsive typography fine-tuning */
        @media (max-width: 640px) {
            .terms-section h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body class="bg-[#ECEFF3] font-sans antialiased">

    <!-- ================= MAIN WRAPPER ================= -->
    <div class="bg-[#ECEFF3] min-h-screen">

        <!-- Page Title - FULLY RESPONSIVE -->
        <section class="pt-8 sm:pt-10 md:pt-12 pb-6 md:pb-8">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="text-center">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#183153]">
                        Terms & Conditions
                    </h1>
                    <div class="w-32 sm:w-40 md:w-48 h-[2px] bg-[#BCD1EA] mx-auto mt-3"></div>
                </div>
                <p class="mt-6 sm:mt-8 md:mt-10 text-base sm:text-lg text-[#1D2433] text-center md:text-left">
                    Last Updated: March 2026
                </p>
            </div>
        </section>

        <!-- Terms Content - FULLY RESPONSIVE (no layout changes, only spacing & sizing adjustments for mobile) -->
        <section class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8 pb-16 md:pb-20 space-y-4 sm:space-y-5">
            
            <!-- Introduction Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Introduction
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    Welcome to our platform. By accessing or using our services,
                    you agree to be bound by these Terms & Conditions.
                    Please read them carefully before using the app.
                </p>
            </div>

            <!-- User Responsibilities Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    User Responsibilities
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>You must provide accurate and complete information.</li>
                    <li>You are responsible for maintaining account security.</li>
                    <li>Misuse of the platform may result in account suspension.</li>
                </ul>
            </div>

            <!-- Orders & Quotes Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Orders & Quotes
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>Users can request quotes from vendors.</li>
                    <li>Vendors provide pricing and delivery timelines.</li>
                    <li>The platform does not guarantee final pricing.</li>
                </ul>
            </div>

            <!-- Payments & Transactions Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Payments & Transactions
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>Payments may be handled directly between users and vendors.</li>
                    <li>We are not responsible for payment disputes outside the platform.</li>
                </ul>
            </div>

            <!-- Cancellations & Refunds Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Cancellations & Refunds
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>Cancellation policies depend on the vendor.</li>
                    <li>Refund requests are handled according to vendor policy.</li>
                </ul>
            </div>

            <!-- Vendor Responsibility Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Vendor Responsibility
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>Vendors must provide accurate service information.</li>
                    <li>Vendors are responsible for service quality and delivery.</li>
                </ul>
            </div>

            <!-- Limitation of Liability Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Limitation of Liability
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We are not liable for damages, delays, losses, or disputes
                    caused by vendors or third-party service providers.
                </p>
            </div>

            <!-- Changes to Terms Card -->
            <div class="bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5 terms-card">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Changes to Terms
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We may update these terms from time to time.
                    Continued use of the platform indicates acceptance of updates.
                </p>
            </div>

        </section>

    </div>

   @include('footer')

</body>
</html>
