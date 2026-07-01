@extends('app')

@section('title', 'Terms & Conditions')

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

.terms-page {
    max-width: 1100px;
    margin: 0 auto;
    padding: 2rem 1.5rem 3rem;
    background: #ffffff;
}

.page-title {
    text-align: center;
    font-size: 42px;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 12px;
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

.last-updated {
    text-align: center;
    color: #94A3B8;
    font-size: 16px;
    margin-bottom: 50px;
    font-weight: 500;
}

.terms-card {
    background: #FBFCFE;
    padding: 32px 36px;
    border-radius: 22px;
    margin-bottom: 28px;
    border: 1px solid #E8EDF2;
    border-left: 5px solid #F97316;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
}

.terms-card:hover {
    transform: translateX(6px);
    box-shadow: 0 14px 36px -12px rgba(249, 115, 22, 0.12);
    border-color: #F97316;
    background: #ffffff;
}

.terms-card h3 {
    color: #0F172A;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 18px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.terms-card h3::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #F97316;
    border-radius: 50%;
    flex-shrink: 0;
}

.terms-card hr {
    border: none;
    border-top: 2px solid #E8EDF2;
    margin-bottom: 20px;
}

.terms-card p {
    color: #475569;
    line-height: 1.9;
    font-size: 17px;
}

.terms-card ul {
    padding-left: 22px;
    list-style: none;
}

.terms-card ul li {
    margin-bottom: 12px;
    color: #475569;
    font-size: 17px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.terms-card ul li::before {
    content: '✦';
    color: #F97316;
    font-size: 18px;
    font-weight: 700;
}

@media (max-width: 992px) {
    .terms-card {
        padding: 28px 30px;
    }
}

@media (max-width: 768px) {
    html, body {
        padding-top: 70px;
    }
    .terms-page {
        padding: 1rem 1rem 2rem;
    }
    .page-title {
        font-size: 32px;
    }
    .last-updated {
        font-size: 14px;
        margin-bottom: 35px;
    }
    .terms-card {
        padding: 22px 24px;
    }
    .terms-card h3 {
        font-size: 22px;
    }
}

@media (max-width: 480px) {
    html, body {
        padding-top: 60px;
    }
    .page-title {
        font-size: 26px;
    }
    .terms-card {
        padding: 18px 20px;
    }
    .terms-card h3 {
        font-size: 20px;
    }
    .terms-card p {
        font-size: 15px;
    }
    .terms-card ul li {
        font-size: 15px;
    }
}
</style>

@endpush

@section('content')

<div class="terms-page">

    <h1 class="page-title">
        <span>Terms & Conditions</span>
    </h1>

    <p class="last-updated">Last Updated: March 2026</p>

    <div class="terms-card">
        <h3>Introduction</h3>
        <hr>
        <p>Welcome to our platform. By accessing or using our services, you agree to be bound by these Terms & Conditions. Please read them carefully before using the app.</p>
    </div>

    <div class="terms-card">
        <h3>User Responsibilities</h3>
        <hr>
        <ul>
            <li>You must provide accurate and complete information.</li>
            <li>You are responsible for maintaining the confidentiality of your account.</li>
            <li>Any misuse of the platform may lead to account suspension.</li>
        </ul>
    </div>

    <div class="terms-card">
        <h3>Orders & Quotes</h3>
        <hr>
        <ul>
            <li>Users can request quotes from vendors based on their requirements.</li>
            <li>Vendors are responsible for providing accurate pricing and timelines.</li>
            <li>The platform does not guarantee final pricing or availability.</li>
        </ul>
    </div>

    <div class="terms-card">
        <h3>Payments & Transactions</h3>
        <hr>
        <ul>
            <li>Payments may be handled directly between users and vendors.</li>
            <li>We are not responsible for disputes related to payments outside the platform.</li>
        </ul>
    </div>

    <div class="terms-card">
        <h3>Cancellations & Refunds</h3>
        <hr>
        <ul>
            <li>Cancellation policies depend on the vendor.</li>
            <li>Refunds (if applicable) will be handled by the vendor.</li>
        </ul>
    </div>

    <div class="terms-card">
        <h3>Vendor Responsibility</h3>
        <hr>
        <ul>
            <li>Vendors must provide accurate details and deliver quality service.</li>
            <li>Any service issues should be resolved directly with the vendor.</li>
        </ul>
    </div>

    <div class="terms-card">
        <h3>Limitation of Liability</h3>
        <hr>
        <p>We are not liable for any damages, delays, or losses caused by vendors or third-party services.</p>
    </div>

    <div class="terms-card">
        <h3>Changes to Terms</h3>
        <hr>
        <p>We may update these terms from time to time. Continued use of the platform means you accept the updated terms.</p>
    </div>

</div>

@endsection