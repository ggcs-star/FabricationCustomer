<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>My Orders</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body{
            background:#f6f7f9;
            font-family:'Barlow', Arial, Helvetica, sans-serif;
        }

        .sidebar{
            background:#eef2f6;
            min-height:100vh;
            padding:25px;
        }

        .profile-title{
            font-size:28px;
            font-weight:600;
        }

        .menu-item{
            background:transparent;
            border:none;
            padding:16px 20px;
            border-radius:15px;
            margin-bottom:10px;
            font-size:17px;
            transition:0.3s;
            cursor:pointer;
            width:100%;
            text-align:left;
            display:flex;
            align-items:center;
        }

        .menu-item:hover{
            background:white;
        }

        .menu-active{
            background:white;
            color:#73A8E8;
            font-weight:600;
        }

        .order-card{
            border:none;
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
            background:white;
            height:100%;
        }

        .order-img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .status-bar{
            background:#f2f4f6;
            text-align:center;
            padding:12px;
            font-weight:600;
            font-size:18px;
        }

        .cancelled{
            color:#dc3545;
        }

        .navbar-custom{
            background:white;
            border-bottom:1px solid #ddd;
        }

        .search-box{
            width:250px;
            border-radius:30px;
        }

        .rating i{
            color:#294A7A;
        }

        /* ===== RESPONSIVE FIXES ===== */
        @media(max-width:1199px){
            .sidebar{
                min-height:auto;
                padding:20px;
            }
            .profile-title{
                font-size:24px;
            }
        }

        @media(max-width:991px){
            .sidebar{
                min-height:auto;
                padding:16px;
            }
            .profile-title{
                font-size:22px;
            }
            .search-box{
                width:100%;
                max-width:300px;
            }
            .order-img{
                height:200px;
            }
            .menu-item{
                padding:14px 16px;
                font-size:15px;
            }
        }

        @media(max-width:768px){
            .sidebar{
                min-height:auto;
                padding:14px 16px;
            }
            .profile-title{
                font-size:20px;
            }
            .order-card .row{
                flex-direction:column;
            }
            .order-card .col-md-4,
            .order-card .col-md-8{
                width:100%;
                flex:0 0 100%;
                max-width:100%;
            }
            .order-img{
                height:200px;
            }
            .status-bar{
                font-size:15px;
                padding:10px;
            }
            .menu-item{
                padding:12px 14px;
                font-size:14px;
                margin-bottom:6px;
            }
            .navbar-custom .container-fluid{
                padding-left:12px;
                padding-right:12px;
            }
            .navbar-custom .navbar-brand{
                font-size:1.5rem;
            }
        }

        @media(max-width:576px){
            .sidebar{
                padding:10px 12px;
            }
            .profile-title{
                font-size:18px;
            }
            .profile-title i{
                font-size:1.2rem;
            }
            .menu-item{
                padding:10px 12px;
                font-size:13px;
                border-radius:10px;
            }
            .menu-item i{
                font-size:0.9rem;
                margin-right:10px !important;
            }
            .order-img{
                height:180px;
            }
            .order-card .p-4{
                padding:16px !important;
            }
            .order-card h4{
                font-size:1.1rem;
            }
            .order-card h5{
                font-size:1rem;
            }
            .status-bar{
                font-size:13px;
                padding:8px;
            }
            .navbar-custom .navbar-brand{
                font-size:1.2rem;
            }
            .navbar-custom .navbar-nav .nav-link{
                font-size:0.9rem;
                padding:6px 0;
            }
            .navbar-custom .d-flex.gap-3{
                gap:12px !important;
            }
            .navbar-custom .d-flex.gap-3 i{
                font-size:1.1rem !important;
            }
            .search-box{
                max-width:200px;
                font-size:0.85rem;
                padding:4px 12px;
            }
            .col-xl-6.col-lg-12.mb-4{
                padding-left:8px;
                padding-right:8px;
            }
            .container-fluid > .row > .col-lg-9{
                padding:12px !important;
            }
            .rating i{
                font-size:0.9rem;
            }
        }

        @media(max-width:400px){
            .sidebar{
                padding:8px 10px;
            }
            .profile-title{
                font-size:16px;
            }
            .menu-item{
                padding:8px 10px;
                font-size:12px;
                border-radius:8px;
            }
            .menu-item i{
                font-size:0.8rem;
                margin-right:8px !important;
            }
            .order-img{
                height:150px;
            }
            .order-card .p-4{
                padding:12px !important;
            }
            .order-card h4{
                font-size:1rem;
            }
            .order-card h5{
                font-size:0.9rem;
            }
            .status-bar{
                font-size:12px;
                padding:6px;
            }
            .search-box{
                max-width:150px;
                font-size:0.75rem;
                padding:3px 8px;
            }
        }

        /* Fix for navbar toggler on very small screens */
        .navbar-toggler{
            padding:6px 10px;
            font-size:1.2rem;
        }

        /* Ensure menu items stay clickable */
        .menu-item a{
            text-decoration:none;
            color:inherit;
            display:flex;
            align-items:center;
            width:100%;
            gap:12px;
        }

        /* Better spacing for sidebar on all devices */
        .sidebar .d-flex.justify-content-between{
            flex-wrap:wrap;
            gap:8px;
        }

        /* Fix for rating stars wrapping */
        .rating{
            display:flex;
            gap:4px;
            flex-wrap:wrap;
        }

        /* Adjust order cards on medium screens */
        @media(min-width:769px) and (max-width:991px){
            .order-card .row{
                flex-direction:row;
            }
            .order-card .col-md-4{
                flex:0 0 35%;
                max-width:35%;
            }
            .order-card .col-md-8{
                flex:0 0 65%;
                max-width:65%;
            }
            .order-img{
                height:180px;
            }
        }

        /* Fix for sidebar icons alignment */
        .menu-item i{
            width:24px;
            text-align:center;
            flex-shrink:0;
        }

        /* Better touch targets on mobile */
        .menu-item{
            min-height:44px;
        }

        /* Smooth transitions */
        .order-card, .menu-item{
            transition:all 0.2s ease;
        }

        /* Navbar brand responsive */
        .navbar-brand{
            white-space:nowrap;
        }

        /* Fix for search input on mobile */
        .search-box:focus{
            box-shadow:none;
            border-color:#73A8E8;
        }

        /* Status bar text truncation */
        .status-bar{
            overflow:hidden;
            text-overflow:ellipsis;
            white-space:nowrap;
        }
        @media(max-width:576px){
            .status-bar{
                white-space:normal;
                font-size:12px;
            }
        }
    </style>
</head>
<body>

@php

$orders = [

[
'id'=>'ORD1234',
'name'=>'Royal Fortress Steel Gate',
'vendor'=>'Apex Metal Works',
'price'=>'₹12,500',
'image'=>'https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800',
'status'=>'Out for Delivery',
'cancelled'=>false
],

[
'id'=>'ORD1230',
'name'=>'Bespoke Metal Gate',
'vendor'=>'PrimeFab Solutions',
'price'=>'₹35,000',
'image'=>'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=800',
'status'=>'Order Cancelled',
'cancelled'=>true
],

[
'id'=>'ORD1225',
'name'=>'Smooth Glide Sliding Gate',
'vendor'=>'Apex Metal Works',
'price'=>'₹12,000',
'image'=>'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=800',
'status'=>'Delivered on 23 Mar',
'cancelled'=>false
]

];

@endphp


<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-custom px-3 px-sm-4">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold fs-2 fs-sm-3" href="#">
            FABRIQ
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-1 mx-lg-2">
                    <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item mx-1 mx-lg-2">
                    <a class="nav-link" href="#">Services</a>
                </li>

                <li class="nav-item mx-1 mx-lg-2">
                    <a class="nav-link" href="#">Vendors</a>
                </li>

                <li class="nav-item mx-1 mx-lg-2">
                    <a class="nav-link" href="#">How We Work</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2 gap-sm-3 flex-wrap flex-sm-nowrap">

                <input
                    type="text"
                    class="form-control search-box"
                    placeholder="Search">

                <i class="fa-solid fa-user fs-5 fs-md-4"></i>

                <i class="fa-solid fa-cart-shopping fs-5 fs-md-4"></i>

            </div>

        </div>

    </div>
</nav>


<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->

        <div class="col-lg-3 sidebar">

            <div class="d-flex justify-content-between align-items-center mb-3 mb-md-4">

                <div class="d-flex align-items-center">
                    <i class="fa-regular fa-user fs-3 fs-md-2 me-2"></i>
                    <span class="profile-title">
                        My Profile
                    </span>
                </div>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <div class="menu-item menu-active">
                <i class="fa-solid fa-box me-3"></i>
                Orders
            </div>

            <div class="menu-item">
                <i class="fa-regular fa-heart me-3"></i>
                Wishlist
            </div>

            <div class="menu-item">
                <i class="fa-regular fa-bell me-3"></i>
                Notifications
            </div>

            <div class="menu-item">
                <i class="fa-solid fa-location-dot me-3"></i>
                Saved Addresses
            </div>

            <div class="menu-item">
                <i class="fa-solid fa-circle-info me-3"></i>
                App Info & Support
            </div>

            <div class="menu-item">
                <i class="fa-solid fa-triangle-exclamation me-3"></i>
                Account Actions
            </div>

            <div class="menu-item">
                <i class="fa-solid fa-briefcase me-3"></i>
                Become a Vendor
            </div>

            <div class="menu-item">
                <i class="fa-solid fa-right-from-bracket me-3"></i>
                Logout
            </div>

        </div>


        <!-- Orders Section -->

        <div class="col-lg-9 p-3 p-md-4">

            <div class="row g-3 g-md-4">

                @foreach($orders as $order)

                <div class="col-xl-6 col-lg-12 mb-3 mb-md-4">

                    <p class="text-muted mb-1 mb-md-2">
                        Order ID : {{ $order['id'] }}
                    </p>

                    <div class="order-card">

                        <div class="row g-0">

                            <div class="col-md-4">
                                <img
                                    src="{{ $order['image'] }}"
                                    class="order-img"
                                    alt="">
                            </div>

                            <div class="col-md-8">

                                <div class="p-3 p-sm-4">

                                    <h4 class="fw-bold fs-5 fs-md-4">
                                        {{ $order['name'] }}
                                    </h4>

                                    <p class="text-muted mb-1">
                                        by {{ $order['vendor'] }}
                                    </p>

                                    <h5 class="fw-bold mt-2 mt-md-3 fs-6 fs-md-5">
                                        From {{ $order['price'] }}
                                    </h5>

                                    <div class="mt-3 mt-md-4">
                                        <small class="fw-semibold">
                                            Rate this
                                        </small>

                                        <div class="rating mt-1 mt-md-2">

                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="status-bar {{ $order['cancelled'] ? 'cancelled' : '' }}">
                            {{ $order['status'] }}
                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
