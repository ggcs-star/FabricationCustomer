<header class="fixed top-0 left-0 w-full z-50 bg-white shadow-sm">

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">

        <nav class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 flex-shrink-0">
                <div class="w-9 h-9 rounded-xl bg-[#FF8C00] flex items-center justify-center">
                    <i class="fas fa-tools text-white text-sm"></i>
                </div>
                <h2 class="text-black text-2xl font-bold tracking-tight">
                    FabriQ
                </h2>
            </a>

            <!-- Desktop Menu - Centered with spacing -->
            <ul class="hidden lg:flex items-center gap-8">

                <li>
                    <a href="/services"
                       class="text-gray-700 text-sm font-medium hover:text-[#FF8C00] transition duration-300">
                        Services
                    </a>
                </li>

                <li>
                    <a href="/vendors"
                       class="text-gray-700 text-sm font-medium hover:text-[#FF8C00] transition duration-300">
                        Vendors
                    </a>
                </li>

                <li>
                    <a href="/how-it-works"
                       class="text-gray-700 text-sm font-medium hover:text-[#FF8C00] transition duration-300">
                        How it works
                    </a>
                </li>

                <li>
                    <a href="/amc-plans"
                       class="text-gray-700 text-sm font-medium hover:text-[#FF8C00] transition duration-300">
                        AMC Plans
                    </a>
                </li>

            </ul>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-3">

                <button class="px-4 py-2 rounded-full text-sm font-medium border border-gray-300 hover:bg-gray-50 transition text-gray-700">
                    Find Vendors
                </button>

                <button class="px-5 py-2 rounded-full text-sm font-semibold text-white bg-[#FF8C00] hover:bg-[#e67a00] transition">
                    Get Free Quote
                </button>

            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn"
                    class="lg:hidden text-gray-700 text-2xl">

                <i class="fas fa-bars"></i>

            </button>

        </nav>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
         class="hidden lg:hidden bg-white border-t border-gray-200">

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16 py-4">

            <ul class="flex flex-col gap-4">

                <li>
                    <a href="/services" class="text-gray-700 text-sm block hover:text-[#FF8C00] transition">
                        Services
                    </a>
                </li>

                <li>
                    <a href="/vendors" class="text-gray-700 text-sm block hover:text-[#FF8C00] transition">
                        Vendors
                    </a>
                </li>

                <li>
                    <a href="/track-project" class="text-gray-700 text-sm block hover:text-[#FF8C00] transition">
                        Track Project
                    </a>
                </li>

                <li>
                    <a href="/amc-plans" class="text-gray-700 text-sm block hover:text-[#FF8C00] transition">
                        AMC Plans
                    </a>
                </li>

                <li class="pt-2 border-t border-gray-200">
                    <button class="w-full py-2.5 rounded-full text-sm font-medium border border-gray-300 text-gray-700 hover:bg-gray-50 transition">
                        Find Vendors
                    </button>
                </li>

                <li>
                    <button class="w-full py-2.5 rounded-full text-sm font-semibold text-white bg-[#FF8C00] hover:bg-[#e67a00] transition">
                        Get Free Quote
                    </button>
                </li>

            </ul>

        </div>

    </div>

</header>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });

});
</script>