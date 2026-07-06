
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>My Wishlist - FabriQ</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background: #f6f7f9;
            font-family: 'Barlow', Arial, Helvetica, sans-serif;
            padding-top: 60px;
        }

        /* ===== NAVBAR STYLES ===== */
        .navbar-custom {
            background: white;
            border-bottom: 1px solid #ddd;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 10px 0;
        }

        .navbar-custom .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: #0F172A;
        }

        .navbar-custom .navbar-brand i {
            color: #F97316;
        }

        .search-box {
            width: 250px;
            border-radius: 30px;
            border: 1px solid #E8EDF2;
            padding: 6px 16px;
            font-size: 14px;
            transition: 0.3s;
        }

        .search-box:focus {
            outline: none;
            border-color: #F97316;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
        }

        .navbar-custom .nav-link {
            color: #475569;
            font-weight: 500;
            padding: 8px 16px;
            transition: 0.3s;
            border-radius: 8px;
        }

        .navbar-custom .nav-link:hover {
            color: #F97316;
            background: #FFF4EA;
        }

        .navbar-custom .nav-link.active {
            color: #F97316;
            background: #FFF4EA;
        }

        .navbar-custom .nav-icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .navbar-custom .nav-icons i {
            font-size: 1.3rem;
            color: #475569;
            cursor: pointer;
            transition: 0.3s;
        }

        .navbar-custom .nav-icons i:hover {
            color: #F97316;
        }

        /* ===== MAIN CONTENT WITH SIDEBAR ===== */
        .wishlist-page {
            padding: 30px 40px;
            max-width: 1500px;
            margin: 0 auto;
        }

        .page-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 30px;
            align-items: start;
        }

        /* ===== SIDEBAR STYLES ===== */
        .profile-sidebar {
            background: #FBFCFE;
            border-radius: 18px;
            border: 1px solid #E8EDF2;
            padding: 20px 16px;
            border-left: 4px solid #F97316;
            height: fit-content;
            position: sticky;
            top: 80px;
        }

        .profile-sidebar .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            font-weight: 700;
            color: #0F172A;
            padding-bottom: 16px;
            border-bottom: 2px solid #F97316;
            margin-bottom: 16px;
        }

        .profile-sidebar .sidebar-brand i {
            color: #F97316;
            font-size: 22px;
        }

        .profile-sidebar .user-info {
            margin-bottom: 12px;
        }

        .profile-sidebar .user-name {
            font-size: 16px;
            font-weight: 700;
            color: #0F172A;
        }

        .profile-sidebar .user-email {
            font-size: 12px;
            color: #94A3B8;
            word-break: break-all;
        }

        .profile-sidebar hr {
            border: none;
            border-top: 1px solid #E8EDF2;
            margin-bottom: 10px;
        }

        .profile-sidebar .nav-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 12px;
            border-radius: 8px;
            color: #475569;
            font-size: 13px;
            font-weight: 500;
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
            margin-bottom: 2px;
        }

        .profile-sidebar .nav-item .nav-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-sidebar .nav-item .nav-left i {
            width: 18px;
            text-align: center;
            color: #94A3B8;
            font-size: 14px;
            transition: 0.3s;
        }

        .profile-sidebar .nav-item .arrow {
            color: #CBD5E1;
            font-size: 12px;
            transition: 0.3s;
        }

        .profile-sidebar .nav-item .right-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .profile-sidebar .nav-item:hover {
            background: #FFF4EA;
            color: #F97316;
        }

        .profile-sidebar .nav-item:hover .nav-left i {
            color: #F97316;
        }

        .profile-sidebar .nav-item:hover .arrow {
            color: #F97316;
        }

        .profile-sidebar .nav-item.active {
            background: #FFF4EA;
            color: #F97316;
        }

        .profile-sidebar .nav-item.active .nav-left i {
            color: #F97316;
        }

        .profile-sidebar .nav-item.active .arrow {
            color: #F97316;
        }

        .profile-sidebar .nav-item .badge-count {
            background: #F97316;
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            padding: 1px 8px;
            border-radius: 30px;
            min-width: 20px;
            text-align: center;
        }

        .profile-sidebar .nav-item.logout {
            color: #EF4444;
            margin-top: 4px;
            border-top: 1px solid #E8EDF2;
            padding-top: 10px;
        }

        .profile-sidebar .nav-item.logout .nav-left i {
            color: #EF4444;
        }

        .profile-sidebar .nav-item.logout:hover {
            background: #FEF2F2;
            color: #EF4444;
        }

        .profile-sidebar .nav-item.logout:hover .nav-left i {
            color: #EF4444;
        }

        .profile-sidebar .nav-item.vendor-link {
            background: #FFF4EA;
            color: #F97316;
            margin-top: 4px;
        }

        .profile-sidebar .nav-item.vendor-link .nav-left i {
            color: #F97316;
        }

        .profile-sidebar .nav-item.vendor-link:hover {
            background: #F97316;
            color: #fff;
        }

        .profile-sidebar .nav-item.vendor-link:hover .nav-left i {
            color: #fff;
        }

        .profile-sidebar .nav-item.vendor-link:hover .arrow {
            color: #fff;
        }

        /* ===== MAIN CONTENT AREA ===== */
        .page-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 30px;
            padding-bottom: 16px;
            border-bottom: 2px solid #F97316;
        }

        .page-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #0F172A;
            margin: 0;
        }

        .page-header i {
            font-size: 28px;
            color: #F97316;
        }

        .page-header .badge {
            background: #F97316;
            font-size: 14px;
            padding: 6px 16px;
        }

        /* ===== WISHLIST CARDS ===== */
        .wishlist-card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            background: white;
            height: 100%;
            transition: 0.3s;
            border: 1px solid #E8EDF2;
            position: relative;
        }

        .wishlist-card:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .wishlist-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .wishlist-card .card-body {
            padding: 20px;
        }

        .wishlist-card .product-name {
            font-size: 18px;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 4px;
        }

        .wishlist-card .vendor-name {
            color: #94A3B8;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .wishlist-card .price {
            font-size: 20px;
            font-weight: 700;
            color: #F97316;
            margin-bottom: 10px;
        }

        .wishlist-card .rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
            flex-wrap: wrap;
        }

        .wishlist-card .rating .stars {
            color: #F97316;
            font-size: 16px;
        }

        .wishlist-card .rating .stars i {
            margin-right: 2px;
        }

        .wishlist-card .rating .rating-value {
            font-weight: 600;
            color: #0F172A;
            font-size: 15px;
        }

        .wishlist-card .rating .reviews {
            color: #94A3B8;
            font-size: 13px;
        }

        .wishlist-card .btn-add-cart {
            background: #F97316;
            color: #fff;
            border: none;
            padding: 8px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
            width: 100%;
        }

        .wishlist-card .btn-add-cart:hover {
            background: #E8680C;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
        }

        .wishlist-card .heart-icon {
            position: absolute;
            top: 12px;
            right: 12px;
            color: #EF4444;
            font-size: 22px;
            background: rgba(255, 255, 255, 0.9);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            border: none;
        }

        .wishlist-card .heart-icon:hover {
            transform: scale(1.1);
            background: white;
        }

        /* Empty state */
        .empty-wishlist {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-wishlist i {
            font-size: 64px;
            color: #CBD5E1;
            margin-bottom: 20px;
        }

        .empty-wishlist h3 {
            font-size: 24px;
            color: #0F172A;
            margin-bottom: 8px;
        }

        .empty-wishlist p {
            color: #94A3B8;
            font-size: 16px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .page-layout {
                grid-template-columns: 250px 1fr;
                gap: 24px;
            }
            .wishlist-page {
                padding: 24px 30px;
            }
        }

        @media (max-width: 992px) {
            .page-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .profile-sidebar {
                position: static;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
                gap: 4px;
                padding: 16px 20px;
                border-left: none;
                border-top: 4px solid #F97316;
                border-radius: 18px;
            }
            .profile-sidebar .sidebar-brand {
                grid-column: 1 / -1;
                border-bottom: 2px solid #F97316;
                padding-bottom: 12px;
                margin-bottom: 12px;
            }
            .profile-sidebar .user-info {
                grid-column: 1 / -1;
            }
            .profile-sidebar hr {
                grid-column: 1 / -1;
            }
            .profile-sidebar .nav-item {
                padding: 10px 14px;
                font-size: 13px;
                justify-content: center;
                flex-direction: column;
                text-align: center;
                gap: 4px;
            }
            .profile-sidebar .nav-item .nav-left {
                flex-direction: column;
                align-items: center;
                gap: 6px;
            }
            .profile-sidebar .nav-item .arrow {
                display: none;
            }
            .profile-sidebar .nav-item .right-group {
                display: none;
            }
            .profile-sidebar .nav-item.logout {
                grid-column: 1 / -1;
                flex-direction: row;
                justify-content: center;
            }
            .profile-sidebar .nav-item.logout .nav-left {
                flex-direction: row;
            }
            .profile-sidebar .nav-item.vendor-link {
                grid-column: 1 / -1;
                flex-direction: row;
                justify-content: center;
            }
            .profile-sidebar .nav-item.vendor-link .nav-left {
                flex-direction: row;
            }
            .wishlist-page {
                padding: 20px 20px;
            }
            .page-header h2 {
                font-size: 24px;
            }
            .wishlist-img {
                height: 180px;
            }
            .navbar-custom .navbar-brand {
                font-size: 1.5rem;
            }
            .search-box {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 55px;
                padding-bottom: 55px;
            }
            .wishlist-page {
                padding: 16px 14px;
            }
            .page-header {
                margin-bottom: 20px;
                padding-bottom: 12px;
            }
            .page-header h2 {
                font-size: 20px;
            }
            .page-header i {
                font-size: 22px;
            }
            .profile-sidebar {
                grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
                padding: 12px 16px;
                gap: 3px;
            }
            .profile-sidebar .sidebar-brand {
                font-size: 18px;
            }
            .profile-sidebar .nav-item {
                padding: 8px 10px;
                font-size: 12px;
            }
            .profile-sidebar .nav-item .nav-left i {
                font-size: 13px;
                width: 16px;
            }
            .profile-sidebar .user-name {
                font-size: 15px;
            }
            .profile-sidebar .user-email {
                font-size: 11px;
            }
            .wishlist-img {
                height: 200px;
            }
            .navbar-custom .navbar-brand {
                font-size: 1.3rem;
            }
            .navbar-custom .nav-link {
                padding: 6px 12px;
                font-size: 14px;
            }
            .navbar-custom .nav-icons i {
                font-size: 1.1rem;
            }
            .search-box {
                width: 160px;
                font-size: 13px;
                padding: 4px 12px;
            }
            .navbar-toggler {
                padding: 6px 10px;
                font-size: 1.1rem;
            }
            .wishlist-card .product-name {
                font-size: 16px;
            }
            .wishlist-card .price {
                font-size: 18px;
            }
            .bottom-nav {
                display: flex;
            }
        }

        @media (max-width: 576px) {
            .wishlist-page {
                padding: 12px 10px;
            }
            .page-header h2 {
                font-size: 18px;
            }
            .page-header i {
                font-size: 20px;
            }
            .profile-sidebar {
                grid-template-columns: 1fr 1fr;
                gap: 2px;
                padding: 10px 12px;
                border-radius: 14px;
            }
            .profile-sidebar .sidebar-brand {
                font-size: 16px;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }
            .profile-sidebar .sidebar-brand i {
                font-size: 18px;
            }
            .profile-sidebar .user-name {
                font-size: 14px;
            }
            .profile-sidebar .user-email {
                font-size: 10px;
            }
            .profile-sidebar .nav-item {
                padding: 6px 8px;
                font-size: 11px;
                border-radius: 6px;
            }
            .profile-sidebar .nav-item .nav-left {
                gap: 4px;
            }
            .profile-sidebar .nav-item .nav-left i {
                font-size: 12px;
                width: 14px;
            }
            .wishlist-img {
                height: 160px;
            }
            .wishlist-card .card-body {
                padding: 16px;
            }
            .wishlist-card .product-name {
                font-size: 15px;
            }
            .wishlist-card .price {
                font-size: 16px;
            }
            .wishlist-card .btn-add-cart {
                font-size: 13px;
                padding: 6px 20px;
            }
            .navbar-custom .navbar-brand {
                font-size: 1.1rem;
            }
            .navbar-custom .nav-link {
                font-size: 13px;
                padding: 4px 10px;
            }
            .navbar-custom .nav-icons i {
                font-size: 1rem;
            }
            .search-box {
                width: 130px;
                font-size: 12px;
                padding: 3px 10px;
            }
            .wishlist-card .heart-icon {
                width: 30px;
                height: 30px;
                font-size: 18px;
                top: 8px;
                right: 8px;
            }
        }

        @media (max-width: 400px) {
            .wishlist-page {
                padding: 8px 6px;
            }
            .page-header h2 {
                font-size: 16px;
            }
            .page-header i {
                font-size: 18px;
            }
            .profile-sidebar {
                padding: 8px 8px;
                gap: 1px;
                border-radius: 12px;
            }
            .profile-sidebar .sidebar-brand {
                font-size: 14px;
                padding-bottom: 8px;
                margin-bottom: 8px;
            }
            .profile-sidebar .user-name {
                font-size: 13px;
            }
            .profile-sidebar .user-email {
                font-size: 9px;
            }
            .profile-sidebar .nav-item {
                padding: 4px 6px;
                font-size: 10px;
                border-radius: 4px;
            }
            .profile-sidebar .nav-item .nav-left i {
                font-size: 11px;
                width: 12px;
            }
            .wishlist-img {
                height: 140px;
            }
            .wishlist-card .card-body {
                padding: 12px;
            }
            .wishlist-card .product-name {
                font-size: 14px;
            }
            .wishlist-card .price {
                font-size: 14px;
            }
            .wishlist-card .btn-add-cart {
                font-size: 12px;
                padding: 5px 16px;
            }
            .search-box {
                width: 100px;
                font-size: 11px;
                padding: 2px 8px;
            }
            .navbar-custom .navbar-brand {
                font-size: 1rem;
            }
            .navbar-custom .nav-link {
                font-size: 12px;
            }
            .navbar-custom .nav-icons i {
                font-size: 0.9rem;
            }
        }

        /* Bottom nav for mobile */
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #ffffff;
            border-top: 1px solid #E8EDF2;
            padding: 4px 0;
            z-index: 40;
            justify-content: space-around;
            align-items: center;
        }

        .bottom-nav a {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1px;
            color: #94A3B8;
            font-size: 8px;
            text-decoration: none;
            transition: 0.3s;
            padding: 4px 8px;
        }

        .bottom-nav a i {
            font-size: 16px;
        }

        .bottom-nav a.active {
            color: #F97316;
        }

        .bottom-nav a:hover {
            color: #F97316;
        }

        @media (max-width: 768px) {
            .bottom-nav {
                display: flex;
            }
        }
    </style>
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-custom px-3 px-sm-4">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-cube"></i> FABRIQ
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1 mx-lg-2">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item mx-1 mx-lg-2">
                        <a class="nav-link" href="#"><i class="fas fa-tools"></i> Services</a>
                    </li>
                    <li class="nav-item mx-1 mx-lg-2">
                        <a class="nav-link" href="#"><i class="fas fa-store"></i> Vendors</a>
                    </li>
                    <li class="nav-item mx-1 mx-lg-2">
                        <a class="nav-link active" href="#"><i class="fas fa-heart"></i> Wishlist</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 flex-wrap flex-sm-nowrap">

                    <input type="text" class="form-control search-box" placeholder="Search wishlist...">

                    <div class="nav-icons">
                        <i class="fa-regular fa-user"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                </div>

            </div>

        </div>
    </nav>

    <!-- ===== MAIN CONTENT WITH SIDEBAR ===== -->
    <div class="wishlist-page">

        <div class="page-layout">

            <!-- ===== SIDEBAR ===== -->
            @include('sidebar')

            <!-- ===== WISHLIST CONTENT ===== -->
            <div class="wishlist-content">

                <!-- Page Header -->
                <div class="page-header">
                    <i class="fas fa-heart"></i>
                    <h2>My Wishlist</h2>
                    <span class="badge">6 items</span>
                </div>

                <!-- Wishlist Grid -->
                <div class="row g-4">

                    @php
                    $wishlistItems = [
                        [
                            'name' => 'Royal Fortress Steel Gate',
                            'vendor' => 'Apex Metal Works',
                            'price' => '₹12,000',
                            'rating' => 4.7,
                            'reviews' => 128,
                            'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800'
                        ],
                        [
                            'name' => 'Premium Designer Main Door',
                            'vendor' => 'PrimeFab Solutions',
                            'price' => '₹4,000',
                            'rating' => 4.2,
                            'reviews' => 89,
                            'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=800'
                        ],
                        [
                            'name' => 'Bespoke Metal Craft Gate',
                            'vendor' => 'SteelCraft Industries',
                            'price' => '₹35,000',
                            'rating' => 4.8,
                            'reviews' => 256,
                            'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800'
                        ],
                        [
                            'name' => 'Royal Fortress Steel Gate',
                            'vendor' => 'Apex Metal Works',
                            'price' => '₹10,000',
                            'rating' => 3.7,
                            'reviews' => 45,
                            'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=800'
                        ],
                        [
                            'name' => 'Bespoke Metal Craft Gate',
                            'vendor' => 'SteelCraft Industries',
                            'price' => '₹25,000',
                            'rating' => 4.8,
                            'reviews' => 312,
                            'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800'
                        ],
                        [
                            'name' => 'Modern Sliding Gate System',
                            'vendor' => 'Apex Metal Works',
                            'price' => '₹18,500',
                            'rating' => 4.5,
                            'reviews' => 167,
                            'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=800'
                        ]
                    ];
                    @endphp

                    @foreach($wishlistItems as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="wishlist-card">
                            <img src="{{ $item['image'] }}" class="wishlist-img" alt="{{ $item['name'] }}">
                            
                            <!-- Heart icon (filled) -->
                            <button class="heart-icon" aria-label="Remove from wishlist">
                                <i class="fas fa-heart"></i>
                            </button>

                            <div class="card-body">
                                <h5 class="product-name">{{ $item['name'] }}</h5>
                                <p class="vendor-name">by {{ $item['vendor'] }}</p>
                                <div class="price">From {{ $item['price'] }}</div>

                                <div class="rating">
                                    <div class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($item['rating']))
                                                <i class="fas fa-star"></i>
                                            @elseif($i - $item['rating'] < 1 && $item['rating'] - floor($item['rating']) >= 0.5)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="rating-value">{{ $item['rating'] }}</span>
                                    <span class="reviews">({{ $item['reviews'] }} reviews)</span>
                                </div>

                                <button class="btn-add-cart">
                                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

    <!-- ===== BOTTOM NAV (MOBILE) ===== -->
    <div class="bottom-nav">
        <a href="#" class="active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="#">
            <i class="fas fa-tools"></i>
            <span>Services</span>
        </a>
        <a href="#">
            <i class="fas fa-store"></i>
            <span>Vendors</span>
        </a>
        <a href="#">
            <i class="fas fa-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="#">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add to cart button click handler
        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.card-body').querySelector('.product-name').textContent;
                alert('✅ Added to cart: ' + productName);
            });
        });

        // Remove from wishlist (heart icon click)
        document.querySelectorAll('.heart-icon').forEach(heart => {
            heart.addEventListener('click', function() {
                const card = this.closest('.wishlist-card');
                const productName = card.querySelector('.product-name').textContent;
                if (confirm('Remove "' + productName + '" from wishlist?')) {
                    card.style.transition = 'all 0.3s ease';
                    card.style.transform = 'scale(0.8)';
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        // Update count
                        const badge = document.querySelector('.badge');
                        const currentCount = parseInt(badge.textContent);
                        badge.textContent = (currentCount - 1) + ' items';
                        // Show empty state if no items left
                        const remainingItems = document.querySelectorAll('.wishlist-card').length;
                        if (remainingItems === 0) {
                            const grid = document.querySelector('.row.g-4');
                            grid.innerHTML = `
                                <div class="col-12">
                                    <div class="empty-wishlist">
                                        <i class="fas fa-heart"></i>
                                        <h3>Your wishlist is empty</h3>
                                        <p>Start adding items you love to your wishlist!</p>
                                        <a href="#" class="btn" style="background:#F97316; color:#fff; padding:10px 30px; border-radius:50px; font-weight:600;">Start Shopping</a>
                                    </div>
                                </div>
                            `;
                            // Hide badge
                            const badge = document.querySelector('.badge');
                            if (badge) badge.style.display = 'none';
                        }
                    }, 300);
                }
            });
        });
    </script>

</body>
</html>
