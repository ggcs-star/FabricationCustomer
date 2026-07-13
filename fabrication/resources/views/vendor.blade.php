{{-- resources/views/vendors/index.blade.php --}}
@extends('app')

@section('content')
<style>
    .vendor-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.07);
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        cursor: pointer;
    }
    .vendor-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    .vendor-card .image-container {
        min-height: 180px;
        overflow: hidden;
        position: relative;
    }
    .vendor-card .image-container img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .vendor-card:hover .image-container img {
        transform: scale(1.05);
    }

    .vendor-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        transition: all 0.3s ease;
    }

    .vendor-card.hidden-card {
        display: none !important;
    }

    .no-results {
        display: none;
        text-align: center;
        padding: 40px 20px;
        background: #f9f9f9;
        border-radius: 16px;
        border: 1px dashed #ddd;
        grid-column: 1 / -1;
    }
    .no-results.show {
        display: block;
    }

    /* ===== HERO SECTION ===== */
    .vendors-hero {
        padding-top: 100px;
        padding-bottom: 40px;
        min-height: 320px;
        transition: all 0.5s ease;
        background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0d0d0d 100%);
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid #FF7A00;
    }
    .vendors-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255,122,0,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .vendors-hero .hero-content {
        position: relative;
        z-index: 1;
    }

    /* Verified Badge */
    .verified-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,122,0,0.12);
        border: 1px solid rgba(255,122,0,0.2);
        border-radius: 9999px;
        padding: 4px 16px 4px 12px;
        font-family: 'Inter', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        color: #FF7A00;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 16px;
    }
    .verified-badge .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #FF7A00;
        animation: pulse-dot 2s infinite;
    }
    @keyframes pulse-dot {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }

    /* Search Bar */
    .search-bar-wrapper {
        display: flex;
        gap: 12px;
        max-width: 700px;
        flex-wrap: wrap;
    }
    .search-bar-wrapper .search-input {
        flex: 1;
        min-width: 200px;
        padding: 14px 20px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.15);
        background: rgba(255,255,255,0.06);
        color: #fff;
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    .search-bar-wrapper .search-input::placeholder {
        color: rgba(255,255,255,0.4);
    }
    .search-bar-wrapper .search-input:focus {
        outline: none;
        border-color: #FF7A00;
        background: rgba(255,255,255,0.1);
        box-shadow: 0 0 0 4px rgba(255,122,0,0.06);
    }
    .search-bar-wrapper .filter-btn {
        padding: 14px 24px;
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.15);
        background: rgba(255,255,255,0.06);
        color: #fff;
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }
    .search-bar-wrapper .filter-btn:hover {
        background: rgba(255,255,255,0.12);
        border-color: rgba(255,255,255,0.25);
    }
    .search-bar-wrapper .filter-btn.active {
        background: #FF7A00;
        border-color: #FF7A00;
        color: #fff;
    }

    /* ===== FILTERS SECTION ===== */
    .filters-section {
        display: none;
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 16px;
        padding: 24px 28px;
        margin-top: 24px;
        animation: fadeInUp 0.4s ease;
    }
    .filters-section.show {
        display: block;
    }
    .filters-section .filter-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
    .filters-section .filter-group .filter-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        color: rgba(255,255,255,0.5);
        text-transform: uppercase;
        letter-spacing: 0.8px;
        display: block;
        margin-bottom: 10px;
    }
    .filters-section .filter-group .filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .filters-section .filter-group .filter-option {
        padding: 6px 16px;
        border-radius: 9999px;
        font-size: 0.78rem;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
        background: rgba(255,255,255,0.06);
        color: rgba(255,255,255,0.6);
        border: 1px solid rgba(255,255,255,0.08);
        cursor: pointer;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .filters-section .filter-group .filter-option:hover {
        background: rgba(255,255,255,0.12);
        color: #fff;
    }
    .filters-section .filter-group .filter-option.active {
        background: #FF7A00;
        color: #fff;
        border-color: #FF7A00;
    }

    /* ===== RESULTS COUNT ===== */
    .results-count {
        font-family: 'Inter', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.5);
        margin-top: 20px;
    }
    .results-count span {
        color: #FF7A00;
        font-weight: 700;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .vendors-hero {
            padding-top: 90px;
        }
        .vendor-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .vendors-hero {
            padding-top: 80px;
        }
        h1 {
            font-size: 2rem !important;
        }
        .search-bar-wrapper .search-input {
            min-width: 150px;
            padding: 12px 16px;
            font-size: 0.9rem;
        }
        .search-bar-wrapper .filter-btn {
            padding: 12px 18px;
            font-size: 0.85rem;
        }
        .filters-section {
            padding: 18px 16px;
        }
        .filters-section .filter-row {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .filters-section .filter-group .filter-options {
            gap: 6px;
        }
        .filters-section .filter-group .filter-option {
            font-size: 0.7rem;
            padding: 4px 12px;
        }
        .vendor-grid {
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
    }

    @media (max-width: 480px) {
        .vendors-hero {
            padding-top: 70px;
        }
        h1 {
            font-size: 1.6rem !important;
        }
        .search-bar-wrapper {
            flex-direction: column;
        }
        .search-bar-wrapper .filter-btn {
            justify-content: center;
        }
        .vendor-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
    }
</style>

<!-- ===== HERO SECTION ===== -->
<section class="vendors-hero" id="vendorsHero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="hero-content">
            
            <!-- Verified Badge -->
            <div class="verified-badge">
                <span class="dot"></span>
                Verified Network
            </div>

            <!-- Heading -->
            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 3rem; color: #fff; margin-bottom: 12px;">
                Find <span style="color: #FF7A00;">Fabrication</span> Vendors
            </h1>
            <p style="font-family: 'Inter', sans-serif; color: rgba(255,255,255,0.6); font-size: 1.05rem; max-width: 550px; line-height: 1.7; margin-bottom: 28px;">
                Browse 12 verified fabricators across India. Compare, shortlist and get quotes.
            </p>

            <!-- Search Bar -->
            <div class="search-bar-wrapper">
                <input type="text" 
                       id="searchVendor"
                       placeholder="Search vendors, specialties..." 
                       class="search-input">
                <button class="filter-btn" id="filterToggleBtn">
                    <i class="fas fa-sliders-h"></i> Filters
                </button>
            </div>

            <!-- Filters Section -->
            <div class="filters-section" id="filtersSection">
                <div class="filter-row">
                    <!-- Left Column: Categories -->
                    <div class="filter-group">
                        <span class="filter-label">Categories</span>
                        <div class="filter-options">
                            <span class="filter-option active" data-category="all">All Categories</span>
                            <span class="filter-option" data-category="steel">Steel Structure</span>
                            <span class="filter-option" data-category="glass">Glass Work</span>
                            <span class="filter-option" data-category="aluminium">Aluminium Work</span>
                            <span class="filter-option" data-category="ceiling">False Ceiling</span>
                            <span class="filter-option" data-category="interior">Interior Work</span>
                            <span class="filter-option" data-category="ms">MS Fabrication</span>
                            <span class="filter-option" data-category="ss">SS Fabrication</span>
                            <span class="filter-option" data-category="custom">Custom Projects</span>
                        </div>
                    </div>

                    <!-- Right Column: Sort By -->
                    <div class="filter-group">
                        <span class="filter-label">Sort By</span>
                        <div class="filter-options">
                            <span class="filter-option active" data-sort="rating">Best Rating</span>
                            <span class="filter-option" data-sort="projects">Most Projects</span>
                            <span class="filter-option" data-sort="price">Lowest Price</span>
                            <span class="filter-option" data-sort="experience">Most Experienced</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results Count -->
            <div class="results-count">
                <span id="vendorCountNumber">12</span> vendors found
            </div>

        </div>
    </div>
</section>

<!-- ===== VENDOR GRID ===== -->
<section class="py-8 md:py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="vendor-grid" id="vendorGrid">

            <!-- Vendor 1: Mehta Steel Works -->
            <div class="vendor-card" data-category="steel" data-rating="4.9" data-projects="820" data-price="85" data-experience="18"
                 data-name="Mehta Steel Works" data-specialty="Industrial & Commercial Steel" data-location="Ahmedabad">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=300&fit=crop&auto=format" 
                         alt="Mehta Steel Works" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Top Rated
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">Mehta Steel Works</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Industrial & Commercial Steel</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">18 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">820</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹85+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.9 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

            <!-- Vendor 2: PrimeStruct Co. -->
            <div class="vendor-card" data-category="steel" data-rating="4.9" data-projects="1200" data-price="70" data-experience="22"
                 data-name="PrimeStruct Co." data-specialty="Large-scale Structural Work" data-location="Delhi">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?w=600&h=300&fit=crop&auto=format" 
                         alt="PrimeStruct Co." loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Top Rated
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">PrimeStruct Co.</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Large-scale Structural Work</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">22 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">1200</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹70+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.9 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

            <!-- Vendor 3: IronVault Structures -->
            <div class="vendor-card" data-category="steel" data-rating="4.8" data-projects="980" data-price="75" data-experience="20"
                 data-name="IronVault Structures" data-specialty="Pre-engineered Buildings" data-location="Mumbai">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&h=300&fit=crop&auto=format" 
                         alt="IronVault Structures" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Most Experienced
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">IronVault Structures</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Pre-engineered Buildings</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">20 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">980</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹75+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.8 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

            <!-- Vendor 4: GlassEdge Interiors -->
            <div class="vendor-card" data-category="glass" data-rating="4.7" data-projects="340" data-price="120" data-experience="9"
                 data-name="GlassEdge Interiors" data-specialty="Glass Partitions & Facades" data-location="Pune">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?w=600&h=300&fit=crop&auto=format" 
                         alt="GlassEdge Interiors" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Glass Specialist
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">GlassEdge Interiors</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Glass Partitions & Facades</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">9 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">340</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹120+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.7 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

            <!-- Vendor 5: AlcoFab Solutions -->
            <div class="vendor-card" data-category="aluminium" data-rating="4.6" data-projects="560" data-price="95" data-experience="12"
                 data-name="AlcoFab Solutions" data-specialty="Aluminium Facades & Windows" data-location="Bangalore">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=300&fit=crop&auto=format" 
                         alt="AlcoFab Solutions" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Aluminium Expert
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">AlcoFab Solutions</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Aluminium Facades & Windows</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">12 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">560</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹95+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.6 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

            <!-- Vendor 6: CeilingCraft -->
            <div class="vendor-card" data-category="ceiling" data-rating="4.5" data-projects="290" data-price="65" data-experience="8"
                 data-name="CeilingCraft" data-specialty="False Ceiling Solutions" data-location="Surat">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=300&fit=crop&auto=format" 
                         alt="CeilingCraft" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Ceiling Specialist
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">CeilingCraft</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">False Ceiling Solutions</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">8 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">290</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹65+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.5 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button onclick="window.location.href='/vendor-profile'" class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">View Profile</button>
                        <button onclick="window.location.href='/quote-details'" class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" style="background: #FF7A00; font-family: 'Inter', sans-serif;">Get Quote <i class="fas fa-arrow-right text-xs"></i></button>
                    </div>
                </div>
            </div>

        </div>

        <!-- No Results -->
        <div class="no-results" id="noResults">
            <i class="fas fa-search text-4xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-bold text-gray-700">No vendors found</h3>
            <p class="text-gray-500 text-sm mt-2">Try adjusting your filters or search criteria</p>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterToggleBtn = document.getElementById('filterToggleBtn');
    const filtersSection = document.getElementById('filtersSection');
    const filterOptions = document.querySelectorAll('.filters-section .filter-option');
    const searchInput = document.getElementById('searchVendor');
    const vendorCards = document.querySelectorAll('.vendor-card');
    const vendorCountNumber = document.getElementById('vendorCountNumber');
    const noResults = document.getElementById('noResults');
    const vendorGrid = document.getElementById('vendorGrid');

    let currentCategory = 'all';
    let currentSort = 'rating';
    let searchTerm = '';

    // Toggle filters
    if (filterToggleBtn) {
        filterToggleBtn.addEventListener('click', function() {
            filtersSection.classList.toggle('show');
            this.classList.toggle('active');
            
            if (filtersSection.classList.contains('show')) {
                this.innerHTML = '<i class="fas fa-times"></i> Hide Filters';
            } else {
                this.innerHTML = '<i class="fas fa-sliders-h"></i> Filters';
            }
        });
    }

    // Filter options click
    filterOptions.forEach(option => {
        option.addEventListener('click', function() {
            const parent = this.parentElement;
            const siblings = parent.querySelectorAll('.filter-option');
            siblings.forEach(s => s.classList.remove('active'));
            this.classList.add('active');

            if (this.dataset.category) {
                currentCategory = this.dataset.category;
            } else if (this.dataset.sort) {
                currentSort = this.dataset.sort;
            }
            filterVendors();
        });
    });

    // Search input
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            searchTerm = this.value.toLowerCase().trim();
            filterVendors();
        });
    }

    // Filter vendors
    function filterVendors() {
        let visibleCount = 0;

        vendorCards.forEach(card => {
            const category = card.dataset.category;
            const name = card.querySelector('h3')?.textContent.toLowerCase() || '';
            const desc = card.querySelector('p')?.textContent.toLowerCase() || '';
            const matchCategory = currentCategory === 'all' || category === currentCategory;
            const matchSearch = name.includes(searchTerm) || desc.includes(searchTerm);

            if (matchCategory && matchSearch) {
                card.classList.remove('hidden-card');
                visibleCount++;
            } else {
                card.classList.add('hidden-card');
            }
        });

        if (vendorCountNumber) {
            vendorCountNumber.textContent = visibleCount;
        }

        if (noResults) {
            if (visibleCount === 0) {
                noResults.classList.add('show');
            } else {
                noResults.classList.remove('show');
            }
        }

        sortVendors();
    }

    // Sort vendors
    function sortVendors() {
        const visibleCards = Array.from(document.querySelectorAll('.vendor-card:not(.hidden-card)'));
        
        visibleCards.sort((a, b) => {
            let aVal, bVal;
            switch(currentSort) {
                case 'rating':
                    aVal = parseFloat(a.dataset.rating);
                    bVal = parseFloat(b.dataset.rating);
                    return bVal - aVal;
                case 'projects':
                    aVal = parseInt(a.dataset.projects);
                    bVal = parseInt(b.dataset.projects);
                    return bVal - aVal;
                case 'price':
                    aVal = parseInt(a.dataset.price);
                    bVal = parseInt(b.dataset.price);
                    return aVal - bVal;
                case 'experience':
                    aVal = parseInt(a.dataset.experience);
                    bVal = parseInt(b.dataset.experience);
                    return bVal - aVal;
                default:
                    return 0;
            }
        });

        visibleCards.forEach(card => {
            if (vendorGrid) {
                vendorGrid.appendChild(card);
            }
        });
    }

    // Initial filter
    filterVendors();
});
</script>
@endsection