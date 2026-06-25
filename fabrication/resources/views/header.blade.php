<header class="fixed top-0 left-0 w-full z-50 navbar-blur">
    <div class="container-custom">

        <nav class="flex items-center justify-between py-6">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">

                <div class="w-11 h-11 rounded-xl bg-[#FF8C00]
                            flex items-center justify-center">

                    <i class="fas fa-tools text-white text-lg"></i>

                </div>

                <h2 class="text-white text-3xl font-bold">
                    FabriQ
                </h2>

            </a>


            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center gap-12">

                <li>
                    <a href="/services"
                       class="text-white hover:text-[#FF8C00] transition">
                        Services
                    </a>
                </li>

                <li>
                    <a href="/vendors"
                       class="text-white hover:text-[#FF8C00] transition">
                        Vendors
                    </a>
                </li>

              <li>
    <a href="/how-it-works"
       class="text-white hover:text-[#FF8C00] transition">
        How It Works
    </a>
</li>

                <li>
                    <a href="#"
                       class="text-white hover:text-[#FF8C00] transition">
                        AMC Plans
                    </a>
                </li>

            </ul>


            <!-- Desktop Buttons -->
          <div class="hidden lg:flex items-center gap-4">

    <a href="/vendors"
       class="bg-white text-gray-900 border border-gray-200 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition">
        Find Vendors
    </a>

    <a href="/quote"
       class="primary-btn">
        Get Free Quote
    </a>

</div>


            <!-- Mobile Menu Button -->
            <button id="menu-btn"
                    class="lg:hidden text-white text-3xl">

                <i class="fas fa-bars"></i>

            </button>

        </nav>

    </div>


    <!-- Mobile Menu -->
    <div id="mobile-menu"
         class="hidden lg:hidden bg-black border-t border-gray-800">

        <div class="container-custom py-6">

            <ul class="flex flex-col gap-6">

                <li>
                    <a href="/services"
                       class="text-white block">
                        Services
                    </a>
                </li>

                <li>
                    <a href="/vendors"
                       class="text-white block">
                        Vendors
                    </a>
                </li>

                <li>
                    <a href="#"
                       class="text-white block">
                        Track Project
                    </a>
                </li>

                <li>
                    <a href="#"
                       class="text-white block">
                        AMC Plans
                    </a>
                </li>

                <li>
                    <a href="/quote"
                       class="primary-btn text-center block">
                        Get Free Quote
                    </a>
                </li>

            </ul>

        </div>

    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

});
</script>