<!-- header.blade.php -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-black">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
        <nav class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 flex-shrink-0">
                <div class="w-9 h-9 rounded-xl bg-[#FF8C00] flex items-center justify-center">
                    <i class="fas fa-tools text-white text-sm"></i>
                </div>
                <h2 id="logo-text" class="text-white text-2xl font-bold tracking-tight transition-colors duration-300">
                    FabriQ
                </h2>
            </a>

            <!-- Navigation Links -->
            <ul class="hidden lg:flex items-center gap-8">
                <li>
                    <a href="/services"
                       class="text-sm font-medium pb-2 transition duration-300 nav-link {{ request()->is('services') || request()->is('services/*') ? 'active' : '' }}">
                        Services
                    </a>
                </li>

                <li>
                    <a href="/vendors"
                       class="text-sm font-medium pb-2 transition duration-300 nav-link {{ request()->is('vendors') || request()->is('vendor-profile') || request()->is('vendors/*') ? 'active' : '' }}">
                        Vendors
                    </a>
                </li>

                <li>
                    <a href="/how-it-works"
                       class="text-sm font-medium pb-2 transition duration-300 nav-link {{ request()->is('how-it-works') ? 'active' : '' }}">
                        How it works
                    </a>
                </li>

                <li>
                    <a href="/amc-plans"
                       class="text-sm font-medium pb-2 transition duration-300 nav-link {{ request()->is('amc-plans') ? 'active' : '' }}">
                        AMC Plans
                    </a>
                </li>
            </ul>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center gap-3">
                <button id="find-vendors-btn" class="px-4 py-2 rounded-full text-sm font-medium border border-white/30 hover:bg-white/10 transition text-white">
                    Find Vendors
                </button>
                <a href="{{ url('/quote-details') }}" id="get-quote-btn" class="px-5 py-2 rounded-full text-sm font-semibold text-white bg-[#FF8C00] hover:bg-[#e67a00] transition inline-block">
                    Get Free Quote
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="lg:hidden text-white text-2xl">
                <i class="fas fa-bars"></i>
            </button>

        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-black border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16 py-4">
            <ul class="flex flex-col gap-4">
                <li><a href="/services" class="text-white text-sm block hover:text-[#FF8C00] transition mobile-nav-link {{ request()->is('services') || request()->is('services/*') ? 'active' : '' }}">Services</a></li>
                <li><a href="/vendors" class="text-white text-sm block hover:text-[#FF8C00] transition mobile-nav-link {{ request()->is('vendors') || request()->is('vendor-profile') || request()->is('vendors/*') ? 'active' : '' }}">Vendors</a></li>
                <li><a href="/how-it-works" class="text-white text-sm block hover:text-[#FF8C00] transition mobile-nav-link {{ request()->is('how-it-works') ? 'active' : '' }}">How it works</a></li>
                <li><a href="/amc-plans" class="text-white text-sm block hover:text-[#FF8C00] transition mobile-nav-link {{ request()->is('amc-plans') ? 'active' : '' }}">AMC Plans</a></li>
                <li class="pt-2 border-t border-gray-800">
                    <button class="w-full py-2.5 rounded-full text-sm font-medium border border-white/30 text-white hover:bg-white/10 transition">
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

<style>
    /* Base nav link styles */
    .nav-link {
        color: #ffffff;
        border-bottom: 2px solid transparent;
    }
    
    .nav-link:hover {
        color: #FF8C00;
    }
    
    .nav-link.active {
        color: #FF8C00 !important;
        border-bottom-color: #FF8C00 !important;
    }
    
    /* Mobile nav link styles */
    .mobile-nav-link {
        color: #ffffff;
    }
    
    .mobile-nav-link:hover {
        color: #FF8C00;
    }
    
    .mobile-nav-link.active {
        color: #FF8C00 !important;
    }
    
    /* White header styles */
    #main-header.white-header .nav-link {
        color: #374151;
    }
    
    #main-header.white-header .nav-link:hover {
        color: #FF8C00;
    }
    
    #main-header.white-header .nav-link.active {
        color: #FF8C00 !important;
        border-bottom-color: #FF8C00 !important;
    }
    
    #main-header.white-header .mobile-nav-link {
        color: #374151;
    }
    
    #main-header.white-header .mobile-nav-link:hover {
        color: #FF8C00;
    }
    
    #main-header.white-header .mobile-nav-link.active {
        color: #FF8C00 !important;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('main-header');
    const logoText = document.getElementById('logo-text');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    const findVendorsBtn = document.getElementById('find-vendors-btn');
    const getQuoteBtn = document.getElementById('get-quote-btn');
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    // Check if we're on the landing page (home page)
    const isLandingPage = window.location.pathname === '/' || window.location.pathname === '';

    // Mobile menu toggle
    menuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });

    // Function to update header based on scroll
    function updateHeader() {
        const currentScrollY = window.scrollY;

        if (currentScrollY > 50) {
            // Scrolled down - white header
            header.classList.remove('bg-black');
            header.classList.add('bg-white', 'shadow-sm', 'white-header');

            // Logo text - black
            logoText.classList.remove('text-white');
            logoText.classList.add('text-black');

            // Nav links - black (active ones will stay orange via CSS)
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-700');
            });

            // Find Vendors button - black border
            findVendorsBtn.classList.remove('border-white/30', 'text-white');
            findVendorsBtn.classList.add('border-gray-300', 'text-gray-700');

            // Mobile menu button - black
            menuBtn.classList.remove('text-white');
            menuBtn.classList.add('text-gray-700');

            // Mobile menu background
            mobileMenu.classList.remove('bg-black');
            mobileMenu.classList.add('bg-white');
            mobileMenu.querySelectorAll('a, button').forEach(el => {
                if (!el.classList.contains('mobile-nav-link')) {
                    el.classList.remove('text-white');
                    el.classList.add('text-gray-700');
                }
            });
            mobileMenu.querySelectorAll('.border-gray-800').forEach(el => {
                el.classList.remove('border-gray-800');
                el.classList.add('border-gray-200');
            });

        } else {
            // At top - black header
            header.classList.remove('bg-white', 'shadow-sm', 'white-header');
            header.classList.add('bg-black');

            // Logo text - white
            logoText.classList.remove('text-black');
            logoText.classList.add('text-white');

            // Nav links - white (active ones will stay orange via CSS)
            navLinks.forEach(link => {
                link.classList.remove('text-gray-700');
                link.classList.add('text-white');
            });

            // Find Vendors button - white border
            findVendorsBtn.classList.remove('border-gray-300', 'text-gray-700');
            findVendorsBtn.classList.add('border-white/30', 'text-white');

            // Mobile menu button - white
            menuBtn.classList.remove('text-gray-700');
            menuBtn.classList.add('text-white');

            // Mobile menu background
            mobileMenu.classList.remove('bg-white');
            mobileMenu.classList.add('bg-black');
            mobileMenu.querySelectorAll('a, button').forEach(el => {
                if (!el.classList.contains('mobile-nav-link')) {
                    el.classList.remove('text-gray-700');
                    el.classList.add('text-white');
                }
            });
            mobileMenu.querySelectorAll('.border-gray-200').forEach(el => {
                el.classList.remove('border-gray-200');
                el.classList.add('border-gray-800');
            });
        }
    }

    if (isLandingPage) {
        // ===== LANDING PAGE: BLACK → WHITE ON SCROLL =====
        // Initial state - black header
        header.classList.add('bg-black');
        header.classList.remove('bg-white', 'shadow-sm', 'white-header');

        // Listen to scroll
        window.addEventListener('scroll', updateHeader, { passive: true });

        // Also update on load
        updateHeader();

    } else {
        // ===== OTHER PAGES: ALWAYS WHITE =====
        header.classList.remove('bg-black');
        header.classList.add('bg-white', 'shadow-sm', 'white-header');

        // Logo - black
        logoText.classList.remove('text-white');
        logoText.classList.add('text-black');

        // Nav links - black (active ones will stay orange via CSS)
        navLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-gray-700');
        });

        // Find Vendors - black border
        findVendorsBtn.classList.remove('border-white/30', 'text-white');
        findVendorsBtn.classList.add('border-gray-300', 'text-gray-700');

        // Menu button - black
        menuBtn.classList.remove('text-white');
        menuBtn.classList.add('text-gray-700');

        // Mobile menu - white
        mobileMenu.classList.remove('bg-black');
        mobileMenu.classList.add('bg-white');
        mobileMenu.querySelectorAll('a, button').forEach(el => {
            if (!el.classList.contains('mobile-nav-link')) {
                el.classList.remove('text-white');
                el.classList.add('text-gray-700');
            }
        });
        mobileMenu.querySelectorAll('.border-gray-800').forEach(el => {
            el.classList.remove('border-gray-800');
            el.classList.add('border-gray-200');
        });
        
        // Make sure mobile nav links have correct color
        mobileNavLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-gray-700');
        });
    }
});
</script>