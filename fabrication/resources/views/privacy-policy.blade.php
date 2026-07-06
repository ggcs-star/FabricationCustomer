
@extends('app')

@section('title', 'Privacy Policy')

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
    padding-top: 60px;
}

.privacy-page {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0.5rem 1.5rem 3rem;
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

.privacy-card {
    background: #FBFCFE;
    padding: 32px 36px;
    border-radius: 22px;
    margin-bottom: 28px;
    border: 1px solid #E8EDF2;
    border-left: 5px solid #F97316;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
}

.privacy-card:hover {
    transform: translateX(6px);
    box-shadow: 0 14px 36px -12px rgba(249, 115, 22, 0.12);
    border-color: #F97316;
    background: #ffffff;
}

.privacy-card h3 {
    color: #0F172A;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 18px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.privacy-card h3::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    background: #F97316;
    border-radius: 50%;
    flex-shrink: 0;
}

.privacy-card hr {
    border: none;
    border-top: 2px solid #E8EDF2;
    margin-bottom: 20px;
}

.privacy-card p {
    color: #475569;
    line-height: 1.9;
    font-size: 17px;
}

.privacy-card ul {
    padding-left: 22px;
    list-style: none;
}

.privacy-card ul li {
    margin-bottom: 12px;
    color: #475569;
    font-size: 17px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.privacy-card ul li::before {
    content: '✦';
    color: #F97316;
    font-size: 18px;
    font-weight: 700;
}

@media (max-width: 992px) {
    .privacy-card {
        padding: 28px 30px;
    }
}

@media (max-width: 768px) {
    html, body {
        padding-top: 70px;
    }
    .privacy-page {
        padding: 1rem 1rem 2rem;
    }
    .page-title {
        font-size: 32px;
    }
    .last-updated {
        font-size: 14px;
        margin-bottom: 35px;
    }
    .privacy-card {
        padding: 22px 24px;
    }
    .privacy-card h3 {
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
    .privacy-card {
        padding: 18px 20px;
    }
    .privacy-card h3 {
        font-size: 20px;
    }
    .privacy-card p {
        font-size: 15px;
    }
    .privacy-card ul li {
        font-size: 15px;
    }
}
</style>

@endpush

@section('content')

<div class="privacy-page">

    <h1 class="page-title">
        <span>Privacy Policy</span>
    </h1>

    <p class="last-updated">Last Updated: March 2026</p>

    <div class="privacy-card">
        <h3>Information We Collect</h3>
        <hr>
        <p>We collect basic user information such as name, email, phone number, and address to provide our services.</p>
    </div>

    <div class="privacy-card">
        <h3>How We Use Your Information</h3>
        <hr>
        <ul>
            <li>To connect you with vendors</li>
            <li>To improve user experience</li>
            <li>To send updates and notifications</li>
        </ul>
    </div>

    <div class="privacy-card">
        <h3>Data Sharing</h3>
        <hr>
        <p>We may share your details with vendors only to fulfill your requests. We do not sell your personal data.</p>
    </div>

    <div class="privacy-card">
        <h3>Data Security</h3>
        <hr>
        <p>We implement security measures to protect your data from unauthorized access.</p>
    </div>

    <div class="privacy-card">
        <h3>Cookies</h3>
        <hr>
        <p>We may use cookies to improve app performance and user experience.</p>
    </div>

    <div class="privacy-card">
        <h3>User Rights</h3>
        <hr>
        <p>You can update or delete your account information at any time.</p>
    </div>

</div>

@endsection