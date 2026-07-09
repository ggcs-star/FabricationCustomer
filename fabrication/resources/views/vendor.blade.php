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

    /* ===== FULL WIDTH FILTERS SECTION ===== */
    .filters-section {
        background: #fff;
        border-bottom: 1px solid #e8e8e8;
        padding: 20px 0;
        position: sticky;
        top: 64px;
        z-index: 10;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }
    .filters-section .filter-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 16px 30px;
    }
    .filters-section .filter-group {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
    }
    .filters-section .filter-group .filter-label {
    font-size: 0.7rem;
        font-weight: 600;
        color: #100d0d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Inter', sans-serif;
        margin-right: 4px;
    }
    .filters-section .filter-group .filter-option {
        padding: 4px 14px;
        border-radius: 9999px;
        font-size: 0.78rem;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
        background: #f5f5f5;
        color: #666;
        border: 1px solid transparent;
        cursor: pointer;
        transition: all 0.2s ease;
        white-space: nowrap;
    }
    .filters-section .filter-group .filter-option:hover {
        background: #e8e8e8;
    }
    .filters-section .filter-group .filter-option.active {
        background: #FF7A00;
        color: #fff;
        border-color: #FF7A00;
    }
    .filters-section .filter-group .filter-option.verified {
        background: #e8f5e9;
        color: #2e7d32;
        border-color: #a5d6a7;
        cursor: default;
    }
    .filters-section .filter-group .filter-option.verified i {
        margin-right: 4px;
    }
    .filters-section .filter-divider {
        width: 1px;
        height: 28px;
        background: #e8e8e8;
        flex-shrink: 0;
    }
    .filters-section .results-count {
        font-size: 0.85rem;
        font-weight: 500;
        color: #333;
        font-family: 'Inter', sans-serif;
        margin-left: auto;
        white-space: nowrap;
    }
    .filters-section .results-count span {
        font-weight: 700;
        color: #FF7A00;
    }

    /* Filter toggle for mobile */
    .filter-toggle {
        display: none;
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        padding: 12px 16px;
        width: 100%;
        font-size: 0.9rem;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
        cursor: pointer;
        color: #333;
        margin-bottom: 0;
    }
    .filter-toggle i {
        margin-right: 8px;
        color: #FF7A00;
    }

    /* ===== HERO SECTION ===== */
    .vendors-hero {
        padding-top: 100px;
        padding-bottom: 40px;
        min-height: 320px;
        transition: all 0.5s ease;
    }
    .vendors-hero.expanded {
        min-height: 550px;
        transition: all 0.5s ease;
    }

    /* Vendor details in hero */
    .vendor-detail-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 20px 24px;
        margin-top: 16px;
        display: none;
        animation: fadeInUp 0.5s ease;
    }
    .vendor-detail-card.show {
        display: block;
    }
    .vendor-detail-card .detail-row {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }
    .vendor-detail-card .detail-row:last-child {
        border-bottom: none;
    }
    .vendor-detail-card .detail-label {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.8rem;
        font-family: 'Inter', sans-serif;
        min-width: 100px;
    }
    .vendor-detail-card .detail-value {
        color: #fff;
        font-size: 0.9rem;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }
    .vendor-detail-card .detail-value .highlight {
        color: #FF7A00;
        font-weight: 600;
    }

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

    .close-detail {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #fff;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .close-detail:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .stat-card {
        background: #fff;
        border-radius: 12px;
        padding: 16px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
        text-align: center;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .vendors-hero {
            padding-top: 90px;
        }
        .vendor-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .filters-section .filter-row {
            gap: 12px 20px;
        }
        .filters-section .filter-divider {
            display: none;
        }
        .filters-section .results-count {
            margin-left: 0;
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .vendors-hero {
            padding-top: 80px;
        }
        h1 {
            font-size: 2rem !important;
        }
        .vendor-detail-card {
            padding: 16px;
        }
        .vendor-detail-card .detail-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 4px;
        }
        .vendor-detail-card .detail-label {
            min-width: auto;
        }
        .filters-section {
            position: relative;
            top: 0;
            padding: 12px 0;
        }
        .filters-section .filter-row {
            display: none;
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }
        .filters-section .filter-row.open {
            display: flex;
        }
        .filters-section .filter-group {
            flex-wrap: wrap;
        }
        .filters-section .filter-group .filter-option {
            font-size: 0.7rem;
            padding: 3px 10px;
        }
        .filters-section .results-count {
            font-size: 0.8rem;
        }
        .filter-toggle {
            display: block;
        }
        .vendor-grid {
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        .filters-section .filter-divider {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .vendors-hero {
            padding-top: 70px;
        }
        h1 {
            font-size: 1.6rem !important;
        }
        .vendor-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .filters-section .filter-group .filter-option {
            font-size: 0.65rem;
            padding: 2px 8px;
        }
    }
</style>

<!-- ===== HERO SECTION ===== -->
<section class="vendors-hero py-8 md:py-12" id="vendorsHero" style="background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="text-xs font-semibold uppercase tracking-widest mb-2" style="color: #FF7A00; font-family: 'Inter', sans-serif;">
            Verified Network
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-3" style="font-family: 'Poppins', sans-serif;">
            Find Fabrication Vendors
        </h1>
        <p class="text-sm sm:text-base md:text-lg max-w-2xl" style="font-family: 'Inter', sans-serif; color: rgba(255,255,255,0.6);">
            Browse verified fabricators across India. Compare, shortlist and get quotes.
        </p>
        <div class="flex flex-wrap items-center gap-3 mt-6">
            <div class="flex-1 min-w-[200px]">
                <input type="text" 
                       id="searchVendor"
                       placeholder="Search vendors, specialties..." 
                       class="w-full px-4 py-2.5 rounded-full border border-white/20 bg-white/10 text-white placeholder:text-white/50 focus:outline-none focus:border-[#FF7A00] text-sm">
            </div>
            <select class="px-4 py-2.5 rounded-full border border-white/20 bg-white/10 text-white text-sm focus:outline-none focus:border-[#FF7A00]" id="cityFilter">
                <option value="" class="text-black">All Cities</option>
                <option value="ahmedabad" class="text-black">Ahmedabad</option>
                <option value="mumbai" class="text-black">Mumbai</option>
                <option value="delhi" class="text-black">Delhi</option>
                <option value="pune" class="text-black">Pune</option>
                <option value="bangalore" class="text-black">Bangalore</option>
                <option value="surat" class="text-black">Surat</option>
            </select>
            <button class="px-5 py-2.5 rounded-full text-sm font-semibold text-white" style="background: #FF7A00;" id="filterBtn">
                <i class="fas fa-sliders-h mr-2"></i> Filters
            </button>
        </div>

        <!-- Vendor Detail Card -->
        <div class="vendor-detail-card" id="vendorDetail">
            <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-bold text-white" style="font-family: 'Poppins', sans-serif;" id="detailName">Mohit Steel Works</h3>
                <button class="close-detail" id="closeDetail">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="detail-row">
                <span class="detail-label">Specialty</span>
                <span class="detail-value" id="detailSpecialty">Large-scale Structural Work</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Experience</span>
                <span class="detail-value" id="detailExperience">18 yrs</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Projects Done</span>
                <span class="detail-value" id="detailProjects">820</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Starting Price</span>
                <span class="detail-value" id="detailPrice"><span class="highlight">₹85+</span> / sqft</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Rating</span>
                <span class="detail-value" id="detailRating">⭐ 4.9 ★</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Location</span>
                <span class="detail-value" id="detailLocation">Ahmedabad</span>
            </div>
            <div class="mt-4 flex gap-3">
                <button class="px-6 py-2.5 rounded-xl text-sm font-medium border border-white/30 text-white hover:bg-white/10 transition">
                    View Full Profile
                </button>
                <button class="px-6 py-2.5 rounded-xl text-sm font-semibold text-white transition-all hover:opacity-90" style="background: #FF7A00;">
                    Get Quote
                    <i class="fas fa-arrow-right text-xs ml-2"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ===== FULL WIDTH FILTERS SECTION ===== -->
<section class="filters-section" id="filtersSection">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        
        <!-- Filter Toggle for Mobile -->
        <button class="filter-toggle" id="filterToggle">
            <i class="fas fa-sliders-h"></i> Show Filters
        </button>

        <!-- Filter Row -->
        <div class="filter-row" id="filterRow">
            
            <!-- Category -->
            <div class="filter-group">
<span class="filter-label" style="font-bold;">Category</span>

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


            <!-- Sort -->
            <div class="filter-group">

<span class="filter-label" style="font-weight:700;">Sort by</span>
                <span class="filter-option active" data-sort="rating">Best Rating</span>
                <span class="filter-option" data-sort="projects">Most Projects</span>
                <span class="filter-option" data-sort="price">Lowest Price</span>
                <span class="filter-option" data-sort="experience">Most Experienced</span>
            </div>

            <div class="filter-divider"></div>

            <!-- Verified Badges -->
          
            <!-- Results Count -->
            <div class="results-count">
                <span id="vendorCountNumber">9</span> vendors found
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vendor 7: ArcLight Fabricators -->
            <div class="vendor-card" data-category="steel" data-rating="4.8" data-projects="560" data-price="95" data-experience="12"
                 data-name="ArcLight Fabricators" data-specialty="Custom Steel Fabrication" data-location="Mumbai">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=600&h=300&fit=crop&auto=format" 
                         alt="ArcLight Fabricators" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Popular
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">ArcLight Fabricators</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Custom Steel Fabrication</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">12 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">560</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹95+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.8 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vendor 8: Premium Glass Works -->
            <div class="vendor-card" data-category="glass" data-rating="4.7" data-projects="450" data-price="150" data-experience="15"
                 data-name="Premium Glass Works" data-specialty="Architectural Glass Solutions" data-location="Delhi">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?w=600&h=300&fit=crop&auto=format" 
                         alt="Premium Glass Works" loading="lazy">
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
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">Premium Glass Works</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Architectural Glass Solutions</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">15 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">450</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹150+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.7 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vendor 9: MS Fabricators -->
            <div class="vendor-card" data-category="ms" data-rating="4.6" data-projects="380" data-price="70" data-experience="10"
                 data-name="MS Fabricators" data-specialty="Industrial MS Fabrication" data-location="Ahmedabad">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&h=300&fit=crop&auto=format" 
                         alt="MS Fabricators" loading="lazy">
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                         style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                        Popular
                    </div>
                    <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700" 
                         style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-check-circle"></i> Verified
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-bold text-base text-black" style="font-family: 'Poppins', sans-serif;">MS Fabricators</h3>
                    </div>
                    <p class="text-xs text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Industrial MS Fabrication</p>
                    <div class="flex flex-wrap gap-4 mb-3 text-xs" style="font-family: 'Inter', sans-serif;">
                        <div><span style="color: #999;">Experience: </span><span class="font-semibold" style="color: #111;">10 yrs</span></div>
                        <div><span style="color: #999;">Projects: </span><span class="font-semibold" style="color: #111;">380</span></div>
                        <div><span style="color: #999;">Price: </span><span class="font-semibold" style="color: #111;">₹70+</span></div>
                    </div>
                    <div class="flex items-center gap-1 mb-3">
                        <span class="text-xs text-gray-500" style="font-family: 'Inter', sans-serif;">Rating:</span>
                        <span class="text-xs font-semibold text-black" style="font-family: 'Inter', sans-serif;">⭐ 4.6 ★</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <button class="flex-1 py-2 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50 view-profile-btn" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Profile
                        </button>
                        <button class="flex-1 py-2 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90 get-quote-btn" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            Get Quote <i class="fas fa-arrow-right text-xs"></i>
                        </button>
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

<!-- ===== STATS SECTION ===== -->
<section class="py-8 md:py-12" style="background: #f5f5f5;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
            <div class="stat-card">
                <div class="text-2xl font-bold mb-0.5" style="font-family: 'Poppins', sans-serif; color: #111;">8-Point</div>
                <div class="text-xs sm:text-sm" style="font-family: 'Inter', sans-serif; color: #999;">Vendor Verification</div>
            </div>
            <div class="stat-card">
                <div class="text-2xl font-bold mb-0.5" style="font-family: 'Poppins', sans-serif; color: #111;">4.8★</div>
                <div class="text-xs sm:text-sm" style="font-family: 'Inter', sans-serif; color: #999;">Average Service Rating</div>
            </div>
            <div class="stat-card">
                <div class="text-2xl font-bold mb-0.5" style="font-family: 'Poppins', sans-serif; color: #111;">5000+</div>
                <div class="text-xs sm:text-sm" style="font-family: 'Inter', sans-serif; color: #999;">Projects Delivered</div>
            </div>
            <div class="stat-card">
                <div class="text-2xl font-bold mb-0.5" style="font-family: 'Poppins', sans-serif; color: #111;">48 hrs</div>
                <div class="text-xs sm:text-sm" style="font-family: 'Inter', sans-serif; color: #999;">First Quote Guarantee</div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const vendorCards = document.querySelectorAll('.vendor-card');
    const categoryOptions = document.querySelectorAll('.filter-group .filter-option[data-category]');
    const sortOptions = document.querySelectorAll('.filter-group .filter-option[data-sort]');
    const searchInput = document.getElementById('searchVendor');
    const vendorCountNumber = document.getElementById('vendorCountNumber');
    const noResults = document.getElementById('noResults');
    const vendorGrid = document.getElementById('vendorGrid');
    const vendorDetail = document.getElementById('vendorDetail');
    const closeDetail = document.getElementById('closeDetail');
    const vendorsHero = document.getElementById('vendorsHero');
    const filterToggle = document.getElementById('filterToggle');
    const filterRow = document.getElementById('filterRow');

    let currentCategory = 'all';
    let currentSort = 'rating';
    let searchTerm = '';

    // Toggle filters on mobile
    if (filterToggle) {
        filterToggle.addEventListener('click', function() {
            filterRow.classList.toggle('open');
            this.innerHTML = filterRow.classList.contains('open') ? 
                '<i class="fas fa-times"></i> Hide Filters' : 
                '<i class="fas fa-sliders-h"></i> Show Filters';
        });
    }

    // Show vendor details
    function showVendorDetails(card) {
        const name = card.dataset.name || card.querySelector('h3').textContent;
        const specialty = card.dataset.specialty || card.querySelector('p').textContent;
        const experience = card.dataset.experience || card.querySelector('.flex.gap-4 div:first-child .font-semibold').textContent;
        const projects = card.dataset.projects || card.querySelector('.flex.gap-4 div:nth-child(2) .font-semibold').textContent;
        const price = card.dataset.price || card.querySelector('.flex.gap-4 div:nth-child(3) .font-semibold').textContent;
        const rating = card.dataset.rating || '4.8';
        const location = card.dataset.location || 'India';

        document.getElementById('detailName').textContent = name;
        document.getElementById('detailSpecialty').textContent = specialty;
        document.getElementById('detailExperience').textContent = experience + ' yrs';
        document.getElementById('detailProjects').textContent = projects;
        document.getElementById('detailPrice').innerHTML = '<span class="highlight">₹' + price + '+</span> / sqft';
        document.getElementById('detailRating').textContent = '⭐ ' + rating + ' ★';
        document.getElementById('detailLocation').textContent = location;

        vendorDetail.classList.add('show');
        vendorsHero.classList.add('expanded');
        vendorsHero.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function closeVendorDetail() {
        vendorDetail.classList.remove('show');
        vendorsHero.classList.remove('expanded');
    }

    closeDetail.addEventListener('click', closeVendorDetail);

    vendorCards.forEach(card => {
        card.addEventListener('click', function(e) {
            if (e.target.closest('button')) return;
            showVendorDetails(this);
        });

        const viewBtn = card.querySelector('.view-profile-btn');
        if (viewBtn) {
            viewBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                showVendorDetails(card);
            });
        }

        const quoteBtn = card.querySelector('.get-quote-btn');
        if (quoteBtn) {
            quoteBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                showVendorDetails(card);
            });
        }
    });

    function filterVendors() {
        let visibleCount = 0;

        vendorCards.forEach(card => {
            const category = card.dataset.category;
            const name = card.querySelector('h3').textContent.toLowerCase();
            const desc = card.querySelector('p').textContent.toLowerCase();
            const matchCategory = currentCategory === 'all' || category === currentCategory;
            const matchSearch = name.includes(searchTerm) || desc.includes(searchTerm);

            if (matchCategory && matchSearch) {
                card.classList.remove('hidden-card');
                visibleCount++;
            } else {
                card.classList.add('hidden-card');
            }
        });

        vendorCountNumber.textContent = visibleCount;

        if (visibleCount === 0) {
            noResults.classList.add('show');
        } else {
            noResults.classList.remove('show');
        }

        sortVendors();
    }

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
            vendorGrid.appendChild(card);
        });
    }

    // Category filter
    categoryOptions.forEach(btn => {
        btn.addEventListener('click', function() {
            categoryOptions.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentCategory = this.dataset.category;
            filterVendors();
        });
    });

    // Sort filter
    sortOptions.forEach(btn => {
        btn.addEventListener('click', function() {
            sortOptions.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentSort = this.dataset.sort;
            filterVendors();
        });
    });

    // Search
    searchInput.addEventListener('input', function() {
        searchTerm = this.value.toLowerCase().trim();
        filterVendors();
    });

    filterVendors();
});
</script>
@endsection