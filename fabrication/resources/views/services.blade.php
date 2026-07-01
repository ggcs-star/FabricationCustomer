
@extends('app')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <title>Our Services · FabriQ</title>
    <!-- Font Awesome (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font (inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7;
            color: #1e1e1e;
            line-height: 1.5;
        }

        .container-custom {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ----- hero ----- */
        .hero-bg {
            background: #0b1a2b;
            background-image: radial-gradient(circle at 10% 30%, #1f3a4e 0%, #0b1a2b 80%);
        }

        .secondary-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #e0e0e0;
            padding: 0.65rem 1.8rem;
            border-radius: 999px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: 0.2s;
            cursor: default;
        }

        .secondary-btn:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* ----- service card (flex layout) ----- */
        .service-card {
            background: white;
            border-radius: 28px;
            border: 1px solid #e9edf2;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            transition: box-shadow 0.2s;
        }

        .service-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.04);
        }

        .card-img {
            width: 42%;
            flex-shrink: 0;
            position: relative;
            min-height: 200px;
            background-color: #d9e0e8;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .card-body {
            width: 58%;
            padding: 1.75rem 1.8rem 1.8rem 1.8rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .badge-pill {
            position: absolute;
            top: 16px;
            left: 16px;
            background: #FF8A1E;
            color: white;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.25rem 1rem;
            border-radius: 999px;
            letter-spacing: 0.3px;
        }

        .tag {
            background: #f0f2f5;
            color: #4a4f57;
            font-size: 0.75rem;
            padding: 0.3rem 1rem;
            border-radius: 40px;
            font-weight: 500;
        }

        .btn-outline {
            border: 1px solid #cfd5de;
            background: transparent;
            border-radius: 999px;
            padding: 0.7rem 1rem;
            font-weight: 600;
            color: #1e1e1e;
            transition: 0.2s;
            flex: 1;
            text-align: center;
            cursor: default;
        }

        .btn-primary {
            background: #FF8A1E;
            border: none;
            border-radius: 999px;
            padding: 0.7rem 1rem;
            font-weight: 600;
            color: white;
            transition: 0.2s;
            flex: 1;
            text-align: center;
            cursor: default;
        }

        .btn-primary:hover {
            background: #e6760e;
        }

        .btn-outline:hover {
            background: #f0f2f5;
            border-color: #b0b8c4;
        }

        /* ----- stats ----- */
        .stat-card {
            background: white;
            border-radius: 28px;
            padding: 2.2rem 1rem;
            text-align: center;
        }

        /* ----- responsive ----- */
        @media screen and (max-width: 1024px) {
            .container-custom {
                padding: 0 20px;
            }
        }

        @media screen and (max-width: 900px) {
            .service-card {
                flex-direction: column;
            }

            .card-img {
                width: 100%;
                height: 220px;
            }

            .card-body {
                width: 100%;
                padding: 1.5rem 1.5rem 1.8rem;
            }

            .hero-bg h1 {
                font-size: 2.8rem !important;
            }
        }

        @media screen and (max-width: 640px) {
            .hero-bg {
                padding-top: 8rem !important;
                padding-bottom: 3rem !important;
            }

            .hero-bg h1 {
                font-size: 2.2rem !important;
            }

            .hero-bg p {
                font-size: 1rem !important;
                max-width: 100% !important;
            }

            .filter-buttons {
                flex-wrap: wrap;
                gap: 0.5rem !important;
            }

            .filter-buttons button {
                font-size: 0.8rem;
                padding: 0.4rem 1.2rem;
            }

            .card-body {
                padding: 1.2rem 1.2rem 1.5rem;
            }

            .card-body h3 {
                font-size: 1.5rem !important;
            }

            .flex-gap-10 {
                gap: 1.5rem !important;
            }

            .stat-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .stat-card {
                padding: 1.5rem 0.5rem;
            }

            .stat-card h3 {
                font-size: 2rem !important;
            }

            .service-card .btn-outline,
            .service-card .btn-primary {
                font-size: 0.9rem;
                padding: 0.65rem 0.5rem;
            }
        }

        @media screen and (max-width: 480px) {
            .container-custom {
                padding: 0 12px;
            }

            .stat-grid {
                grid-template-columns: 1fr 1fr;
                gap: 0.8rem;
            }

            .stat-card {
                padding: 1.2rem 0.2rem;
                border-radius: 20px;
            }

            .stat-card h3 {
                font-size: 1.6rem !important;
            }

            .stat-card i {
                font-size: 1.8rem !important;
            }
        }

        /* utility */
        .gap-2 {
            gap: 0.5rem;
        }
        .gap-4 {
            gap: 1rem;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .mt-5 {
            margin-top: 1.5rem;
        }
        .mt-6 {
            margin-top: 1.8rem;
        }
        .mt-8 {
            margin-top: 2.2rem;
        }
        .mt-10 {
            margin-top: 2.5rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .py-20 {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        .pb-20 {
            padding-bottom: 4rem;
        }

        .text-gray-400 {
            color: #9aa3b0;
        }
        .text-gray-500 {
            color: #6b7482;
        }
        .text-gray-600 {
            color: #3d4552;
        }
        .text-orange-500 {
            color: #FF8A1E;
        }
        .bg-orange-100 {
            background: #fff0e0;
        }
        .bg-orange-500 {
            background: #FF8A1E;
        }
        .border-gray-200 {
            border-color: #e2e8f0;
        }
        .border-gray-300 {
            border-color: #d1d8e0;
        }
        .rounded-3xl {
            border-radius: 28px;
        }
        .rounded-full {
            border-radius: 999px;
        }
        .flex {
            display: flex;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .items-center {
            align-items: center;
        }
        .justify-between {
            justify-content: space-between;
        }
        .w-full {
            width: 100%;
        }
        .grid {
            display: grid;
        }
        .lg\:grid-cols-4 {
            grid-template-columns: repeat(4, 1fr);
        }
        .object-cover {
            object-fit: cover;
        }
        .relative {
            position: relative;
        }
        .absolute {
            position: absolute;
        }
        .top-4 {
            top: 1rem;
        }
        .left-4 {
            left: 1rem;
        }

        @media (max-width: 640px) {
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .lg\:grid-cols-4 {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* icons inside cards */
        .icon-box {
            width: 2.8rem;
            height: 2.8rem;
            background: #fff0e0;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .icon-box i {
            font-size: 1.3rem;
            color: #FF8A1E;
        }
    </style>


    <!-- Hero (exactly as given, but with responsive adjustments) -->
  <section class="hero-bg pt-36 pb-16" style="padding-top: 8rem; padding-bottom: 3.5rem; background: #ffffff;">
    <div class="container-custom">
        <p class="text-[#FF8A1E] uppercase text-sm tracking-[3px] font-semibold">
            What We Offer
        </p>
        <h1 class="text-black text-6xl font-bold mt-4" style="font-size: 3.6rem;">
            Our Services
        </h1>
        <p class="text-gray-600 mt-5 max-w-2xl text-lg leading-8">
            From structural steel to premium glass work — discover
            the full range of fabrication services available through
            verified vendors on FabriQ.
        </p>
        <div class="flex flex-wrap gap-4 mt-10 filter-buttons">
            <button class="bg-[#FF8A1E] text-white px-6 py-3 rounded-full border-0 font-semibold" style="background:#FF8A1E;">All</button>
            <button class="border border-gray-300 text-black rounded-full px-6 py-3 font-semibold hover:border-[#FF8A1E] hover:text-[#FF8A1E] transition">Popular</button>
            <button class="border border-gray-300 text-black rounded-full px-6 py-3 font-semibold hover:border-[#FF8A1E] hover:text-[#FF8A1E] transition">Steel</button>
            <button class="border border-gray-300 text-black rounded-full px-6 py-3 font-semibold hover:border-[#FF8A1E] hover:text-[#FF8A1E] transition">Glass</button>
            <button class="border border-gray-300 text-black rounded-full px-6 py-3 font-semibold hover:border-[#FF8A1E] hover:text-[#FF8A1E] transition">Interior</button>
            <button class="border border-gray-300 text-black rounded-full px-6 py-3 font-semibold hover:border-[#FF8A1E] hover:text-[#FF8A1E] transition">Aluminium</button>
        </div>
    </div>
</section>

    <!-- Services Grid -->
    <section class="bg-[#F7F7F7] py-20">
        <div class="container-custom">
            <!-- all cards (exactly 8) with full data, using flex row and responsive fallback -->
            @php
            $services = [
                [
                    'badge' => 'Popular',
                    'title' => 'Steel structure',
                    'vendors' => '480+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Heavy and light steel fabrication for commercial, industrial and residential structures.',
                    'tags' => ['Structural Steel','Roofing','Mezzanine','Industrial'],
                    'price' => '₹80-₹150/sqft',
                    'time' => '15-45 days',
                    'icon' => 'fa-building'
                ],
                [
                    'badge' => 'Popular',
                    'title' => 'Glass Work',
                    'vendors' => '210+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Toughened, laminated and structural glass solutions.',
                    'tags' => ['Partitions','Facade','Skylight','Frameless'],
                    'price' => '₹100-₹220/sqft',
                    'time' => '7-21 days',
                    'icon' => 'fa-window-maximize'
                ],
                [
                    'badge' => '',
                    'title' => 'Aluminium Work',
                    'vendors' => '330+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Powder-coated aluminium profiles for windows and facades.',
                    'tags' => ['Windows','Doors','Curtain Wall','Louvers'],
                    'price' => '₹90-₹180/sqft',
                    'time' => '10-30 days',
                    'icon' => 'fa-draw-polygon'
                ],
                [
                    'badge' => '',
                    'title' => 'False Ceiling',
                    'vendors' => '290+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Gypsum, POP and metal ceiling systems.',
                    'tags' => ['Gypsum','POP','Metal Grid','Wooden'],
                    'price' => '₹60-₹130/sqft',
                    'time' => '5-15 days',
                    'icon' => 'fa-layer-group'
                ],
                [
                    'badge' => 'Popular',
                    'title' => 'Interior Work',
                    'vendors' => '540+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Complete interior fabrication including furniture and partitions.',
                    'tags' => ['Modular','Paneling','Custom Joinery','Reception'],
                    'price' => '₹150-₹500/sqft',
                    'time' => '20-60 days',
                    'icon' => 'fa-couch'
                ],
                [
                    'badge' => '',
                    'title' => 'MS Fabrication',
                    'vendors' => '160+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Mild steel fabrication for gates, grills and railings.',
                    'tags' => ['Gates','Grills','Staircases','Handrails'],
                    'price' => '₹70-₹140/kg',
                    'time' => '7-25 days',
                    'icon' => 'fa-helmet-safety'
                ],
                [
                    'badge' => '',
                    'title' => 'SS Fabrication',
                    'vendors' => '120+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Stainless steel work for commercial kitchens and hospitals.',
                    'tags' => ['Kitchen','Hospital','Railings','Decorative'],
                    'price' => '₹200-₹400/kg',
                    'time' => '10-30 days',
                    'icon' => 'fa-kitchen-set'
                ],
                [
                    'badge' => '',
                    'title' => 'Custom Projects',
                    'vendors' => '180+ vendors',
                    'image' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&h=400&fit=crop&crop=center',
                    'desc' => 'Bespoke fabrication for unique architectural concepts.',
                    'tags' => ['Bespoke','Exhibition','Display','Installation'],
                    'price' => 'Custom Quote',
                    'time' => 'Varies',
                    'icon' => 'fa-pen-ruler'
                ]
            ];
            @endphp

           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($services as $service)

    <div class="bg-white rounded-[28px] overflow-hidden border border-gray-200 shadow-sm">

        <!-- Image -->
        <div class="relative">

            <img src="{{ $service['image'] }}"
                 alt="{{ $service['title'] }}"
                 class="w-full h-[260px] object-cover">

            @if($service['badge'])
            <span class="absolute top-4 left-4
                         bg-[#FF8A1E] text-white
                         text-xs px-3 py-1 rounded-full">

                {{ $service['badge'] }}

            </span>
            @endif

        </div>

        <!-- Content -->
        <div class="p-6">

            <!-- Icon + Title -->
            <div class="flex gap-3 items-center">

                <div class="w-12 h-12 rounded-xl bg-orange-100
                            flex items-center justify-center">

                    <i class="fas {{ $service['icon'] }}
                              text-[#FF8A1E] text-lg"></i>

                </div>

                <div>

                    <h3 class="text-xl font-bold">
                        {{ $service['title'] }}
                    </h3>

                    <p class="text-gray-500 text-sm">
                        {{ $service['vendors'] }}
                    </p>

                </div>

            </div>

            <!-- Price + Timeline -->
            <div class="flex justify-between mt-8">

                <div>
                    <p class="text-gray-400 text-sm">
                        Price
                    </p>

                    <p class="font-semibold">
                        {{ $service['price'] }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-400 text-sm">
                        Timeline
                    </p>

                    <p class="font-semibold">
                        {{ $service['time'] }}
                    </p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3 mt-8">

                <button
                    class="flex-1 border border-gray-300
                           rounded-full py-3 text-gray-700
                           hover:border-[#FF8A1E]
                           hover:text-[#FF8A1E]
                           transition">

                    Find Vendors

                </button>

                <button
                    class="flex-1 bg-[#FF8A1E]
                           text-white rounded-full py-3
                           hover:bg-orange-600 transition">

                    Get Quote →

                </button>

            </div>

        </div>

    </div>

    @endforeach

</div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-[#F7F7F7] pb-20">
        <div class="container-custom">
            <div class="grid lg:grid-cols-4 gap-6 stat-grid">
                <div class="stat-card">
                    <i class="fas fa-check-circle text-[#FF8A1E] text-3xl" style="color:#FF8A1E; font-size:2.2rem;"></i>
                    <h3 class="text-4xl font-bold mt-5" style="font-size:2.6rem;">8-Point</h3>
                    <p class="text-gray-500 mt-3">Vendor Verification</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-star text-[#FF8A1E] text-3xl" style="color:#FF8A1E; font-size:2.2rem;"></i>
                    <h3 class="text-4xl font-bold mt-5" style="font-size:2.6rem;">4.8★</h3>
                    <p class="text-gray-500 mt-3">Average Service Rating</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-briefcase text-[#FF8A1E] text-3xl" style="color:#FF8A1E; font-size:2.2rem;"></i>
                    <h3 class="text-4xl font-bold mt-5" style="font-size:2.6rem;">5000+</h3>
                    <p class="text-gray-500 mt-3">Projects Delivered</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-clock text-[#FF8A1E] text-3xl" style="color:#FF8A1E; font-size:2.2rem;"></i>
                    <h3 class="text-4xl font-bold mt-5" style="font-size:2.6rem;">48 hrs</h3>
                    <p class="text-gray-500 mt-3">First Quote Guarantee</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>