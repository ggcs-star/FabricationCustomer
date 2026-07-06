@extends('app')

@section('title','About Us')

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
}

.about-page {
    max-width: 1100px;
    margin: 0 auto;
    padding: 2.5rem 1.5rem 3rem;
    background: #ffffff;
}

.page-title {
    text-align: center;
    font-size: 42px;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 45px;
    margin-top: 50px;
    position: relative;
}

.page-title span {
    background: linear-gradient(135deg, #F97316 0%, #FB923C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    padding-bottom: 8px;
    border-bottom: 4px solid #F97316;
}

.about-card {
    background: #FBFCFE;
    padding: 28px 32px;
    border-radius: 22px;
    margin-bottom: 28px;
    border: 1px solid #E8EDF2;
    border-left: 5px solid #F97316;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
}

.about-card:hover {
    transform: translateX(6px);
    box-shadow: 0 14px 36px -12px rgba(249, 115, 22, 0.12);
    border-color: #F97316;
    background: #ffffff;
}

.about-card h3 {
    color: #0F172A;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.about-card h3::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #F97316;
    border-radius: 50%;
    flex-shrink: 0;
}

.about-card hr {
    border: none;
    border-top: 2px solid #E8EDF2;
    margin-bottom: 16px;
}

.about-card p {
    color: #475569;
    line-height: 1.8;
    font-size: 16px;
}

.about-card ul {
    padding-left: 22px;
    list-style: none;
}

.about-card ul li {
    margin-bottom: 10px;
    color: #475569;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.about-card ul li::before {
    content: '✦';
    color: #F97316;
    font-size: 18px;
    font-weight: 700;
}

@media (max-width: 992px) {
    .about-card {
        padding: 24px 28px;
    }
}

@media (max-width: 768px) {
    .about-page {
        padding: 1.5rem 1rem 2rem;
    }
    .page-title {
        font-size: 32px;
        margin-bottom: 35px;
        margin-top: 20px;
    }
    .about-card {
        padding: 20px 22px;
        margin-bottom: 22px;
    }
    .about-card h3 {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 26px;
        margin-bottom: 28px;
        margin-top: 15px;
    }
    .about-card {
        padding: 16px 18px;
        margin-bottom: 18px;
    }
    .about-card h3 {
        font-size: 18px;
    }
    .about-card p {
        font-size: 14px;
    }
    .about-card ul li {
        font-size: 14px;
    }
}
</style>

@endpush

@section('content')

<div class="about-page">

    <h1 class="page-title">
        <span>About Us</span>
    </h1>

    <div class="about-card">
        <h3>Who We Are</h3>
        <hr>
        <p>
            FabriQ is a platform that connects customers with trusted fabrication
            vendors for custom fabrication, maintenance services, and industrial
            solutions through one simple marketplace.
        </p>
    </div>

    <div class="about-card">
        <h3>What We Do</h3>
        <hr>
        <ul>
            <li>Help customers request customized quotations.</li>
            <li>Connect users with verified fabrication vendors.</li>
            <li>Provide secure communication between customers and vendors.</li>
            <li>Offer transparent pricing and service tracking.</li>
        </ul>
    </div>

    <div class="about-card">
        <h3>Why Choose Us</h3>
        <hr>
        <ul>
            <li>Verified & trusted vendors</li>
            <li>Quick quotation process</li>
            <li>Transparent communication</li>
            <li>Fast customer support</li>
            <li>Reliable fabrication partners</li>
        </ul>
    </div>

    <div class="about-card">
        <h3>Our Mission</h3>
        <hr>
        <p>
            Our mission is to simplify the fabrication industry by helping
            customers easily discover reliable vendors, compare quotations,
            and complete projects with confidence.
        </p>
    </div>

    <div class="about-card">
        <h3>Our Vision</h3>
        <hr>
        <p>
            To become India's most trusted digital marketplace for fabrication,
            industrial services, and manufacturing solutions.
        </p>
    </div>

</div>

@endsection