@extends('app')

@section('title', 'Vendor Profile - Apex Metal Works')

@push('styles')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        background: #ffffff;
        font-family: 'Barlow', sans-serif;
        color: #1E293B;
        min-height: 100vh;
        padding-top: 80px;
    }

    .vendor-profile {
        max-width: 1100px;
        margin: 0 auto;
        padding: 2rem 1.5rem 3rem;
        background: #ffffff;
    }

    /* ===== VENDOR HEADER ===== */
    .vendor-header {
        background: #FBFCFE;
        border-radius: 24px;
        padding: 40px 44px;
        border: 1px solid #E8EDF2;
        border-left: 5px solid #F97316;
        margin-bottom: 32px;
    }

    .vendor-header h1 {
        font-size: 36px;
        font-weight: 700;
        color: #0F172A;
        margin-bottom: 8px;
    }

    .vendor-header .rating {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #F97316;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .vendor-header .rating span {
        color: #64748B;
        font-weight: 400;
        font-size: 15px;
    }

    .vendor-header .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 32px;
        margin-top: 16px;
    }

    .vendor-header .info-grid .info-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #475569;
        font-size: 15px;
    }

    .vendor-header .info-grid .info-item i {
        color: #F97316;
        width: 20px;
        text-align: center;
        font-size: 16px;
    }

    .vendor-header .specializations {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .vendor-header .specializations span {
        background: #FFF4EA;
        color: #F97316;
        padding: 6px 18px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 500;
    }

    .vendor-header .action-buttons {
        display: flex;
        gap: 16px;
        margin-top: 24px;
        flex-wrap: wrap;
    }

    .vendor-header .action-buttons .btn-primary {
        background: #F97316;
        color: #fff;
        padding: 12px 32px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: 0.2s;
        text-decoration: none;
        cursor: pointer;
    }

    .vendor-header .action-buttons .btn-primary:hover {
        background: #E8680C;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px -8px rgba(249, 115, 22, 0.4);
    }

    .vendor-header .action-buttons .btn-outline {
        background: transparent;
        color: #F97316;
        padding: 12px 32px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        border: 2px solid #F97316;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: 0.2s;
        text-decoration: none;
        cursor: pointer;
    }

    .vendor-header .action-buttons .btn-outline:hover {
        background: #F97316;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px -8px rgba(249, 115, 22, 0.4);
    }

    /* ===== SECTION CARDS ===== */
    .section-card {
        background: #FBFCFE;
        padding: 28px 32px;
        border-radius: 18px;
        border: 1px solid #E8EDF2;
        border-left: 5px solid #F97316;
        margin-bottom: 24px;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .section-card:hover {
        transform: translateX(4px);
        box-shadow: 0 14px 36px -12px rgba(249, 115, 22, 0.12);
        border-color: #F97316;
        background: #ffffff;
    }

    .section-card h3 {
        color: #0F172A;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .section-card h3::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 8px;
        background: #F97316;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .section-card hr {
        border: none;
        border-top: 2px solid #E8EDF2;
        margin-bottom: 18px;
    }

    /* ===== SERVICES & PRODUCTS GRID ===== */
    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
    }

    .service-item {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 14px;
        border: 1px solid #E8EDF2;
        transition: 0.3s;
    }

    .service-item:hover {
        border-color: #F97316;
        box-shadow: 0 4px 16px rgba(249, 115, 22, 0.08);
    }

    .service-item h4 {
        font-size: 17px;
        font-weight: 600;
        color: #0F172A;
        margin-bottom: 6px;
    }

    .service-item p {
        color: #64748B;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .service-item .meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .service-item .meta .time {
        color: #F97316;
        font-size: 13px;
        font-weight: 500;
        background: #FFF4EA;
        padding: 4px 14px;
        border-radius: 50px;
    }

    .service-item .meta .price {
        color: #0F172A;
        font-weight: 700;
        font-size: 16px;
    }

    /* ===== PRODUCT ITEMS ===== */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 24px;
    }

    .product-item {
        background: #ffffff;
        padding: 20px;
        border-radius: 16px;
        border: 1px solid #E8EDF2;
        text-align: center;
        transition: 0.3s;
    }

    .product-item:hover {
        border-color: #F97316;
        box-shadow: 0 8px 24px rgba(249, 115, 22, 0.12);
        transform: translateY(-4px);
    }

    .product-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 12px;
    }

    .product-item h4 {
        font-size: 17px;
        font-weight: 600;
        color: #0F172A;
        margin-bottom: 4px;
    }

    .product-item .price {
        color: #0F172A;
        font-weight: 700;
        font-size: 18px;
        margin: 6px 0 14px;
    }

    .product-item .btn-detail {
        background: #F97316;
        color: #ffffff;
        padding: 10px 28px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 14px;
        border: none;
        cursor: pointer;
        transition: 0.2s;
    }

    .product-item .btn-detail:hover {
        background: #E8680C;
        transform: scale(1.03);
        box-shadow: 0 4px 16px rgba(249, 115, 22, 0.3);
    }

    /* ===== GALLERY ===== */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 24px;
    }

    .gallery-item {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        transition: 0.3s;
    }

    .gallery-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(249, 115, 22, 0.15);
    }

    .gallery-item img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        transition: 0.5s;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-item .gallery-label {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        color: #ffffff;
        padding: 40px 20px 16px;
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        text-align: center;
    }

    /* ===== COVER IMAGE ===== */
    .cover-image {
        width: 100%;
        height: 320px;
        object-fit: cover;
        border-radius: 20px;
        margin-bottom: 24px;
    }

    /* ===== TERMS GRID ===== */
    .terms-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 16px;
    }

    .terms-grid .term-item {
        background: #ffffff;
        padding: 14px 20px;
        border-radius: 12px;
        border: 1px solid #E8EDF2;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .terms-grid .term-item i {
        color: #F97316;
        font-size: 18px;
    }

    .terms-grid .term-item span {
        color: #1E293B;
        font-weight: 500;
        font-size: 14px;
    }

    /* ===== REVIEWS ===== */
    .review-item {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 14px;
        border: 1px solid #E8EDF2;
        margin-bottom: 16px;
        transition: 0.3s;
    }

    .review-item:hover {
        border-color: #F97316;
    }

    .review-item .review-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 8px;
    }

    .review-item .review-header h4 {
        font-size: 16px;
        font-weight: 600;
        color: #0F172A;
    }

    .review-item .review-header .stars {
        color: #F97316;
        font-size: 15px;
    }

    .review-item .review-header .time {
        color: #94A3B8;
        font-size: 13px;
    }

    .review-item p {
        color: #475569;
        font-size: 15px;
        line-height: 1.7;
    }

    /* ===== ABOUT ===== */
    .about-text {
        color: #475569;
        font-size: 16px;
        line-height: 1.9;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        html, body {
            padding-top: 70px;
        }
        .vendor-profile {
            padding: 1rem 1rem 2rem;
        }
        .vendor-header {
            padding: 24px 20px;
        }
        .vendor-header h1 {
            font-size: 26px;
        }
        .vendor-header .info-grid {
            grid-template-columns: 1fr;
            gap: 8px;
        }
        .section-card {
            padding: 20px 20px;
        }
        .section-card h3 {
            font-size: 19px;
        }
        .service-grid {
            grid-template-columns: 1fr;
        }
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
        .terms-grid {
            grid-template-columns: 1fr 1fr;
        }
        .gallery-grid {
            grid-template-columns: 1fr;
        }
        .gallery-item img {
            height: 200px;
        }
        .cover-image {
            height: 200px;
        }
    }

    @media (max-width: 480px) {
        html, body {
            padding-top: 60px;
        }
        .vendor-header {
            padding: 18px 16px;
        }
        .vendor-header h1 {
            font-size: 22px;
        }
        .vendor-header .action-buttons {
            flex-direction: column;
        }
        .vendor-header .action-buttons .btn-primary,
        .vendor-header .action-buttons .btn-outline {
            width: 100%;
            justify-content: center;
        }
        .product-grid {
            grid-template-columns: 1fr;
        }
        .terms-grid {
            grid-template-columns: 1fr;
        }
        .section-card {
            padding: 16px 16px;
        }
        .cover-image {
            height: 160px;
        }
    }
</style>
@endpush

@section('content')

<div class="vendor-profile">

    <!-- ===== COVER IMAGE ===== -->
  

    <!-- ===== VENDOR HEADER ===== -->
    <div class="vendor-header">
          <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1600&q=80"
         alt="Cover Image"
         class="cover-image">
        <h1>Apex Metal Works</h1>
        <div class="rating">
            ★ 4.7 <span>(120 Reviews) · 10+ Years Experience</span>
        </div>

        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i> Plot 24, Industrial Estate, Nikol, Ahmedabad, Gujarat, India.
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i> +91 12345 67890
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i> contact@apexmetalworks.com
            </div>
            <div class="info-item">
                <i class="fas fa-clock"></i> Mon-Sat: 9:00 AM - 7:00 PM
            </div>
        </div>

        <div class="specializations">
            <span>Laser Cutting</span>
            <span>Metal Gates</span>
            <span>Sheet Metal</span>
        </div>

        <div class="action-buttons">
            <a href="#" class="btn-primary">
                <i class="fas fa-directions"></i> Get Directions
            </a>
            <a href="#" class="btn-outline">
                <i class="fas fa-file-invoice"></i> Request a Quote
            </a>
        </div>
    </div>

    <!-- ===== TERMS ===== -->
    <div class="section-card">
        <h3>Terms & Conditions</h3>
        <hr>
        <div class="terms-grid">
            <div class="term-item">
                <i class="fas fa-clock"></i>
                <span>Working Hours: 9 AM – 7 PM</span>
            </div>
            <div class="term-item">
                <i class="fas fa-money-bill-wave"></i>
                <span>Advance Payment Required: 30%</span>
            </div>
            <div class="term-item">
                <i class="fas fa-ban"></i>
                <span>Cancellation Policy: 24 hrs prior notice</span>
            </div>
            <div class="term-item">
                <i class="fas fa-shield-alt"></i>
                <span>Service Warranty: 3 months</span>
            </div>
        </div>
    </div>

    <!-- ===== RATINGS & REVIEWS ===== -->
    <div class="section-card">
        <h3>Ratings & Reviews</h3>
        <hr>

        <div style="display:flex;align-items:center;gap:20px;margin-bottom:20px;flex-wrap:wrap;">
            <div style="font-size:48px;font-weight:700;color:#0F172A;">4.7</div>
            <div>
                <div style="color:#F97316;font-size:20px;">★★★★★</div>
                <div style="color:#64748B;font-size:14px;">120 Reviews</div>
            </div>
        </div>

        <div class="review-item">
            <div class="review-header">
                <h4>Harsh Chauhan</h4>
                <span class="stars">★★★★★</span>
                <span class="time">2 Weeks ago</span>
            </div>
            <p>Professional and skilled team. They handled the welding and installation very well. Slight delay but overall great service.</p>
        </div>

        <div class="review-item">
            <div class="review-header">
                <h4>Chiranjhi Thummar</h4>
                <span class="stars">★★★★★</span>
                <span class="time">1 Week ago</span>
            </div>
            <p>Excellent work and timely delivery. The gate fabrication was perfect and the finish quality is amazing. Highly recommended!</p>
        </div>

        <div class="review-item">
            <div class="review-header">
                <h4>Khushi Hingu</h4>
                <span class="stars">★★★★★</span>
                <span class="time">2 Weeks ago</span>
            </div>
            <p>Very good experience. The vendor explained everything clearly and finished is amazing. Highly recommended!</p>
        </div>

        <div class="review-item">
            <div class="review-header">
                <h4>Piyush Rajput</h4>
                <span class="stars">★★★★★</span>
                <span class="time">3 Weeks ago</span>
            </div>
            <p>Good quality at reasonable. Satisfied with the metal rail pricing was fair and transparent.</p>
        </div>
    </div>

    <!-- ===== SERVICES ===== -->
    <div class="section-card">
        <h3>Our Services</h3>
        <hr>
        <div class="service-grid">
            <div class="service-item">
                <h4>Custom Fabrication</h4>
                <p>Design and build custom products as per requirements.</p>
                <div class="meta">
                    <span class="time"><i class="far fa-clock"></i> 3-5 days</span>
                    <span class="price">₹15,000 - ₹45,000</span>
                </div>
            </div>
            <div class="service-item">
                <h4>Welding Services</h4>
                <p>Strong and reliable metal joining for all fabrication needs.</p>
                <div class="meta">
                    <span class="time"><i class="far fa-clock"></i> 4-6 days</span>
                    <span class="price">₹300 - ₹500</span>
                </div>
            </div>
            <div class="service-item">
                <h4>Product Installation</h4>
                <p>Professional installation of products at your site.</p>
                <div class="meta">
                    <span class="time"><i class="far fa-clock"></i> 2-3 days</span>
                    <span class="price">₹1,500 - ₹2,000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== PRODUCTS ===== -->
    <div class="section-card">
        <h3>Our Products</h3>
        <hr>
        <div class="product-grid">
            <div class="product-item">
                <img src="https://images.unsplash.com/photo-1616046229478-9901c5536a45?auto=format&fit=crop&w=800&q=80" 
                     alt="Metal Gates">
                <h4>Metal Gates</h4>
                <div class="price">From ₹12,000</div>
                <button class="btn-detail">View Details</button>
            </div>
            <div class="product-item">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80" 
                     alt="Staircase Railings">
                <h4>Staircase Railings</h4>
                <div class="price">From ₹8,000</div>
                <button class="btn-detail">View Details</button>
            </div>
            <div class="product-item">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80" 
                     alt="Metal Dining Tables">
                <h4>Metal Dining Tables</h4>
                <div class="price">From ₹15,000</div>
                <button class="btn-detail">View Details</button>
            </div>
            <div class="product-item">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80" 
                     alt="Window Grills">
                <h4>Window Grills</h4>
                <div class="price">From ₹5,000</div>
                <button class="btn-detail">View Details</button>
            </div>
        </div>
    </div>

    <!-- ===== WORK GALLERY ===== -->
    <div class="section-card">
        <h3>Work Gallery</h3>
        <hr>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1200&q=80" 
                     alt="Welding">
                <div class="gallery-label">Welding</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80" 
                     alt="Steel Fabrication">
                <div class="gallery-label">Steel Fabrication</div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80" 
                     alt="Industrial Work">
                <div class="gallery-label">Industrial Work</div>
            </div>
        </div>
    </div>

    <!-- ===== ABOUT ===== -->
    <div class="section-card">
        <h3>About Us</h3>
        <hr>
        <p class="about-text">
            Apex Metal Works is a trusted fabrication company based in Ahmedabad with over 10 years of experience in delivering high-quality metal fabrication solutions. We specialize in custom gate fabrication, railings, sheet metal work, and structural fabrication for residential, commercial, and industrial projects.
            <br><br>
            Our team of skilled professionals ensures precision, durability, and timely delivery in every project we undertake. From design consultation to final installation, we focus on providing reliable and cost-effective solutions tailored to your requirements.
        </p>
    </div>

</div>

@endsection
