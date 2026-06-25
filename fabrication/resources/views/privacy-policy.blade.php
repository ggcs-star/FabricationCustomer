<!DOCTYPE html>
<html lang="en">
    @extends('app')

    @include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Privacy Policy - FABRIQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* custom styles for cards */
        .policy-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .policy-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px -8px rgba(0,0,0,0.08);
        }
        /* responsive typography */
        @media (max-width: 640px) {
            .policy-title {
                font-size: 2rem !important;
            }
            .policy-subtitle {
                font-size: 0.95rem !important;
            }
            .policy-card h2 {
                font-size: 1.1rem !important;
            }
            .policy-card p, .policy-card li {
                font-size: 0.9rem !important;
            }
        }
        @media (max-width: 480px) {
            .policy-title {
                font-size: 1.75rem !important;
            }
            .policy-card {
                padding: 1rem !important;
            }
        }
    </style>
</head>
<body class="bg-[#ECEFF3] font-sans antialiased">

    <!-- ================= MAIN WRAPPER ================= -->
    <div class="bg-[#ECEFF3] min-h-screen">

        <!-- ================= TITLE SECTION ================= -->
        <section class="pt-8 sm:pt-10 md:pt-12 pb-6 md:pb-8">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8">
                <div class="text-center">
                    <h1 class="policy-title text-3xl sm:text-4xl md:text-5xl font-bold text-[#183153]">
                        Privacy Policy
                    </h1>
                    <div class="w-32 sm:w-40 h-[2px] bg-[#BCD1EA] mx-auto mt-3"></div>
                </div>
                <p class="policy-subtitle mt-6 sm:mt-8 md:mt-10 text-base sm:text-lg text-[#1D2433] text-center md:text-left">
                    Last Updated: March 2026
                </p>
            </div>
        </section>

        <!-- ================= CONTENT SECTION ================= -->
        <section class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8 pb-12 md:pb-20 space-y-4 sm:space-y-5">

            <!-- Information We Collect -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Information We Collect
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We collect basic user information such as name, email,
                    phone number, and address to provide our services.
                </p>
            </div>

            <!-- How We Use Information -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    How We Use Your Information
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <ul class="list-disc pl-5 text-sm sm:text-base text-gray-700 space-y-1">
                    <li>To connect you with vendors</li>
                    <li>To improve user experience</li>
                    <li>To send updates and notifications</li>
                </ul>
            </div>

            <!-- Data Sharing -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Data Sharing
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We may share your details with vendors only to fulfill your
                    requests. We do not sell your personal data.
                </p>
            </div>

            <!-- Data Security -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Data Security
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We implement security measures to protect your data from
                    unauthorized access.
                </p>
            </div>

            <!-- Cookies -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    Cookies
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    We may use cookies to improve app performance and user experience.
                </p>
            </div>

            <!-- User Rights -->
            <div class="policy-card bg-[#F3F5F9] rounded-[18px] p-4 sm:p-5">
                <h2 class="text-lg sm:text-xl font-semibold text-[#183153]">
                    User Rights
                </h2>
                <div class="h-[1px] bg-[#BCD1EA] mt-2 sm:mt-3 mb-3 sm:mb-4"></div>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    You can update or delete your account information at any time.
                </p>
            </div>

        </section>

   @include('footer')

    </div>

</body>
</html>
