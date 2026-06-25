<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FabriQ')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

    <!-- Swiper CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family: 'Poppins', sans-serif;
            background:#070707;
            overflow-x:hidden;
        }

        /* Container */
        .container-custom{
            max-width:1400px;
            margin:auto;
            padding-left:32px;
            padding-right:32px;
        }

        @media(max-width:768px){
            .container-custom{
                padding-left:20px;
                padding-right:20px;
            }
        }

        /* Hero Background */
        .hero-bg{
            background:
            radial-gradient(circle at center,
            rgba(255,140,0,0.12),
            transparent 40%),

            linear-gradient(#111111 1px, transparent 1px),
            linear-gradient(90deg,#111111 1px, transparent 1px),

            #070707;

            background-size:
            100% 100%,
            50px 50px,
            50px 50px,
            cover;
        }

        /* Buttons */

        .primary-btn{
            background:#FF8C00;
            color:#fff;
            border-radius:9999px;
            padding:14px 32px;
            font-weight:600;
            transition:0.3s ease;
        }

        .primary-btn:hover{
            background:#e67e00;
            transform:translateY(-2px);
        }

      <button class="border border-gray-300
               text-gray-700
               rounded-full
               py-3 text-sm
               hover:border-[#FF8A1E]
               hover:text-[#FF8A1E]
               transition">
    View Profile
</button>   

        .secondary-btn:hover{
            border-color:#FF8C00;
        }

        /* Card Hover */

        .card-hover{
            transition:all .3s ease;
        }

        .card-hover:hover{
            transform:translateY(-8px);
        }

        /* Section Heading */

        .section-title{
            font-size:48px;
            font-weight:800;
            line-height:1.2;
            color:white;
        }

        @media(max-width:768px){
            .section-title{
                font-size:34px;
            }
        }

        /* Orange Text */

        .text-primary{
            color:#FF8C00;
        }

        /* Navbar Blur */

        .navbar-blur{
            backdrop-filter: blur(12px);
            background: rgba(0,0,0,0.45);
        }

    </style>

    @stack('styles')
</head>

<body>

    @include('header')

    <main>
        @yield('content')
    </main>

    @include('footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')

</body>
</html>