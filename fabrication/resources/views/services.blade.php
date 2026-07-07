{{-- resources/views/services/figma-services.blade.php --}}
@extends('app')

@section('content')
<style>
    .service-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.07);
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
    }
    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    .service-card .image-container {
        min-height: 220px;
        overflow: hidden;
    }
    .service-card .image-container img {
        transition: transform 0.5s ease;
    }
    .service-card:hover .image-container img {
        transform: scale(1.05);
    }
    .filter-btn.active {
        background: #FF7A00;
        color: #fff;
        border-color: #FF7A00;
    }
    .filter-btn {
        background: rgba(255, 255, 255, 0.08);
        color: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    .filter-btn:hover {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
    }
    .stat-card {
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }
    .tag {
        background: #f5f5f5;
        color: #666;
        font-family: 'Inter', sans-serif;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
    }
</style>

<div style="padding-top: 80px;">
    {{-- Hero Section --}}
    <section class="py-16" style="background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
            <div class="text-xs font-semibold uppercase tracking-widest mb-3" style="color: #FF7A00; font-family: 'Inter', sans-serif;">
                What We Offer
            </div>
            <h1 class="text-5xl font-bold text-white mb-4" style="font-family: 'Poppins', sans-serif;">
                Our Services
            </h1>
            <p class="text-lg max-w-2xl" style="font-family: 'Inter', sans-serif; color: rgba(255,255,255,0.6);">
                From structural steel to premium glass work — discover the full range of fabrication services available through verified vendors on FabriQ.
            </p>
            <div class="flex flex-wrap gap-3 mt-8">
                <button class="filter-btn active px-5 py-2 rounded-full text-sm font-medium transition-all" style="background: #FF7A00; color: #fff; border: 1px solid #FF7A00; font-family: 'Inter', sans-serif;">
                    All
                </button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all" style="font-family: 'Inter', sans-serif;">
                    Popular
                </button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all" style="font-family: 'Inter', sans-serif;">
                    Steel
                </button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all" style="font-family: 'Inter', sans-serif;">
                    Glass
                </button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all" style="font-family: 'Inter', sans-serif;">
                    Interior
                </button>
                <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all" style="font-family: 'Inter', sans-serif;">
                    Aluminium
                </button>
            </div>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                {{-- Steel Structure --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&h=300&fit=crop&auto=format" 
                                 alt="Steel Structure" 
                                 class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                                 style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                                Popular
                            </div>
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                                            <path d="M10 6h4"/>
                                            <path d="M10 10h4"/>
                                            <path d="M10 14h4"/>
                                            <path d="M10 18h4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            Steel Structure
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            480+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Heavy and light steel fabrication for commercial, industrial and residential structures. Includes columns, beams, trusses and roofing.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Structural Steel</span>
                                    <span class="tag">Roofing</span>
                                    <span class="tag">Mezzanine</span>
                                    <span class="tag">Industrial</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹80–₹150/sqft</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">15–45 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Glass Work --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?w=400&h=300&fit=crop&auto=format" 
                                 alt="Glass Work" 
                                 class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                                 style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                                Popular
                            </div>
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"/>
                                            <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"/>
                                            <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            Glass Work
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            210+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Toughened, laminated and structural glass solutions for partitions, facades, skylights, railings and interior elements.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Partitions</span>
                                    <span class="tag">Facade</span>
                                    <span class="tag">Skylight</span>
                                    <span class="tag">Frameless</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹100–₹220/sqft</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">7–21 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Aluminium Work --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=300&fit=crop&auto=format" 
                                 alt="Aluminium Work" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="18" x="3" y="3" rx="2"/>
                                            <path d="M3 9h18"/>
                                            <path d="M3 15h18"/>
                                            <path d="M9 3v18"/>
                                            <path d="M15 3v18"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            Aluminium Work
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            330+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Powder-coated aluminium profiles for windows, doors, curtain walls and decorative facades with superior weather resistance.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Windows</span>
                                    <span class="tag">Doors</span>
                                    <span class="tag">Curtain Wall</span>
                                    <span class="tag">Louvres</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹90–₹180/sqft</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">10–30 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- False Ceiling --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&h=300&fit=crop&auto=format" 
                                 alt="False Ceiling" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M13.73 4a2 2 0 0 0-3.46 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            False Ceiling
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            290+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Gypsum, POP, metal and wooden false ceiling systems for commercial and residential projects with concealed lighting integration.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Gypsum</span>
                                    <span class="tag">POP</span>
                                    <span class="tag">Metal Grid</span>
                                    <span class="tag">Wooden</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹60–₹130/sqft</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">5–15 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Interior Work --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400&h=300&fit=crop&auto=format" 
                                 alt="Interior Work" 
                                 class="w-full h-full object-cover">
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-xs font-semibold" 
                                 style="background: #FF7A00; color: #fff; font-family: 'Inter', sans-serif;">
                                Popular
                            </div>
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                                            <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            Interior Work
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            540+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Complete interior fabrication including modular furniture, partitions, panelling, reception desks and custom joinery.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Modular</span>
                                    <span class="tag">Panelling</span>
                                    <span class="tag">Custom Joinery</span>
                                    <span class="tag">Reception</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹150–₹500/sqft</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">20–60 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MS Fabrication --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=400&h=300&fit=crop&auto=format" 
                                 alt="MS Fabrication" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            MS Fabrication
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            160+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Mild steel fabrication for gates, grills, staircases, handrails, shelving and industrial equipment frames.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Gates</span>
                                    <span class="tag">Grills</span>
                                    <span class="tag">Staircases</span>
                                    <span class="tag">Handrails</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹70–₹140/kg</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">7–25 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SS Fabrication --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=400&h=300&fit=crop&auto=format" 
                                 alt="SS Fabrication" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            SS Fabrication
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            120+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Stainless steel work for commercial kitchens, hospitals, pharma facilities, decorative railings and premium interiors.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Kitchen</span>
                                    <span class="tag">Hospital</span>
                                    <span class="tag">Railings</span>
                                    <span class="tag">Decorative</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">₹200–₹600/kg</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">10–30 days</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Custom Projects --}}
                <div class="service-card rounded-2xl overflow-hidden cursor-pointer">
                    <div class="grid grid-cols-5">
                        <div class="col-span-2 image-container relative">
                            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=400&h=300&fit=crop&auto=format" 
                                 alt="Custom Projects" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="col-span-3 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center" 
                                         style="background: rgba(255, 122, 0, 0.1);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/>
                                            <path d="M12 22V12"/>
                                            <polyline points="3.29 7 12 12 20.71 7"/>
                                            <path d="m7.5 4.27 9 5.15"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold" style="font-family: 'Poppins', sans-serif; color: #111;">
                                            Custom Projects
                                        </div>
                                        <div class="text-xs" style="color: #999; font-family: 'Inter', sans-serif;">
                                            180+ vendors
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm leading-relaxed mb-4" style="font-family: 'Inter', sans-serif; color: #555;">
                                    Bespoke fabrication for unique architectural concepts, exhibition structures, display systems and one-off installations.
                                </p>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span class="tag">Bespoke</span>
                                    <span class="tag">Exhibition</span>
                                    <span class="tag">Display</span>
                                    <span class="tag">Installation</span>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-6 mb-4 text-xs" style="font-family: 'Inter', sans-serif;">
                                    <div>
                                        <span style="color: #999;">Price: </span>
                                        <span class="font-semibold" style="color: #111;">Custom Quote</span>
                                    </div>
                                    <div>
                                        <span style="color: #999;">Timeline: </span>
                                        <span class="font-semibold" style="color: #111;">Varies</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                            style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                                        Find Vendors
                                    </button>
                                    <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-1 transition-all hover:opacity-90" 
                                            style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                                        Get Quote 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"/>
                                            <path d="m12 5 7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-12" style="background: #f5f5f5;">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 xl:px-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="stat-card bg-white rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" 
                         style="background: rgba(255, 122, 0, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"/>
                            <path d="m9 11 3 3L22 4"/>
                        </svg>
                    </div>
                    <div class="text-xl font-bold mb-1" style="font-family: 'Poppins', sans-serif; color: #111;">
                        8-Point
                    </div>
                    <div class="text-sm" style="font-family: 'Inter', sans-serif; color: #999;">
                        Vendor Verification
                    </div>
                </div>

                <div class="stat-card bg-white rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" 
                         style="background: rgba(255, 122, 0, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/>
                        </svg>
                    </div>
                    <div class="text-xl font-bold mb-1" style="font-family: 'Poppins', sans-serif; color: #111;">
                        4.8★
                    </div>
                    <div class="text-sm" style="font-family: 'Inter', sans-serif; color: #999;">
                        Average Service Rating
                    </div>
                </div>

                <div class="stat-card bg-white rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" 
                         style="background: rgba(255, 122, 0, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/>
                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/>
                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/>
                            <path d="M10 6h4"/>
                            <path d="M10 10h4"/>
                            <path d="M10 14h4"/>
                            <path d="M10 18h4"/>
                        </svg>
                    </div>
                    <div class="text-xl font-bold mb-1" style="font-family: 'Poppins', sans-serif; color: #111;">
                        5000+
                    </div>
                    <div class="text-sm" style="font-family: 'Inter', sans-serif; color: #999;">
                        Projects Delivered
                    </div>
                </div>

                <div class="stat-card bg-white rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3" 
                         style="background: rgba(255, 122, 0, 0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#FF7A00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <div class="text-xl font-bold mb-1" style="font-family: 'Poppins', sans-serif; color: #111;">
                        48 hrs
                    </div>
                    <div class="text-sm" style="font-family: 'Inter', sans-serif; color: #999;">
                        First Quote Guarantee
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection