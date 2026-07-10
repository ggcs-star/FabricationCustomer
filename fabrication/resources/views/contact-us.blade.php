{{-- resources/views/contact.blade.php --}}
@extends('app')

@section('content')
<style>
    /* ===== CONTACT PAGE STYLES ===== */
    .contact-hero {
        background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #0d0d0d 100%);
        padding: 100px 0 60px;
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid #FF7A00;
    }
    .contact-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255,122,0,0.08) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    .contact-hero .hero-content {
        position: relative;
        z-index: 1;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }
    .contact-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.8rem;
        color: #fff;
        margin-bottom: 1rem;
    }
    .contact-hero h1 span {
        color: #FF7A00;
    }
    .contact-hero p {
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.6);
        font-size: 1.1rem;
        max-width: 600px;
        line-height: 1.8;
        margin: 0 auto;
    }

    /* ===== CONTACT INFO CARDS ===== */
    .contact-info-section {
        background: #f8f8f8;
        padding: 60px 0;
    }
    .contact-info-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .contact-info-card {
        background: #fff;
        border-radius: 16px;
        padding: 32px 28px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.04);
        border: 1px solid rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        text-align: center;
    }
    .contact-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 32px rgba(255,122,0,0.1);
        border-color: rgba(255,122,0,0.2);
    }
    .contact-info-card .icon-circle {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: rgba(255,122,0,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        color: #FF7A00;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }
    .contact-info-card:hover .icon-circle {
        background: #FF7A00;
        color: #fff;
        transform: scale(1.05);
    }
    .contact-info-card h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: #111;
        margin-bottom: 8px;
    }
    .contact-info-card .info-value {
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        color: #333;
        font-weight: 500;
        display: block;
    }
    .contact-info-card .info-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.75rem;
        color: #999;
        margin-top: 4px;
        display: block;
    }
    .contact-info-card a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .contact-info-card a:hover {
        color: #FF7A00;
    }

    /* ===== CONTACT FORM SECTION ===== */
    .contact-form-section {
        background: #fff;
        padding: 80px 0;
    }
    .contact-form-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }
    .contact-form-wrapper .section-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2rem;
        color: #111;
        margin-bottom: 8px;
        text-align: center;
    }
    .contact-form-wrapper .section-subtitle {
        font-family: 'Inter', sans-serif;
        color: #888;
        font-size: 0.95rem;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    .form-group label {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 0.85rem;
        color: #333;
        display: block;
        margin-bottom: 6px;
    }
    .form-group label .required {
        color: #FF7A00;
    }
    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 14px 18px;
        border: 2px solid #e8e8e8;
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        color: #333;
        transition: all 0.3s ease;
        background: #fafafa;
    }
    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #FF7A00;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(255,122,0,0.06);
    }
    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #bbb;
    }
    .form-group textarea {
        min-height: 160px;
        resize: vertical;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .btn-submit {
        background: #FF7A00;
        color: #fff;
        border: none;
        padding: 16px 48px;
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: 8px;
    }
    .btn-submit:hover {
        background: #e66e00;
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(255,122,0,0.3);
    }
    .btn-submit:active {
        transform: translateY(0);
    }
    .btn-submit i {
        font-size: 0.9rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .contact-info-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .contact-hero {
            padding: 80px 0 40px;
        }
        .contact-hero h1 {
            font-size: 2rem;
        }
        .contact-hero p {
            font-size: 0.95rem;
        }
        .contact-info-section {
            padding: 40px 0;
        }
        .contact-info-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .contact-info-card {
            padding: 24px 20px;
        }
        .contact-form-section {
            padding: 50px 0;
        }
        .contact-form-wrapper .section-title {
            font-size: 1.6rem;
        }
        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }
        .btn-submit {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .contact-hero {
            padding: 70px 0 30px;
        }
        .contact-hero h1 {
            font-size: 1.6rem;
        }
        .contact-form-wrapper .section-title {
            font-size: 1.4rem;
        }
        .form-group input,
        .form-group textarea {
            padding: 12px 14px;
            font-size: 0.9rem;
        }
    }

    /* ===== ANIMATIONS ===== */
    .fade-in-up {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }
    .fade-in-up.delay-1 { animation-delay: 0.1s; }
    .fade-in-up.delay-2 { animation-delay: 0.2s; }
    .fade-in-up.delay-3 { animation-delay: 0.3s; }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== SUCCESS TOAST ===== */
    #successToast {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 12px 48px rgba(0,0,0,0.12);
        border: 1px solid rgba(255,122,0,0.15);
        padding: 20px 24px;
        max-width: 380px;
        z-index: 999;
        animation: slideUp 0.5s ease forwards;
    }
    #successToast .toast-content {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }
    #successToast .toast-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255,122,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FF7A00;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    #successToast .toast-text h4 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        color: #111;
        margin-bottom: 2px;
    }
    #successToast .toast-text p {
        font-family: 'Inter', sans-serif;
        font-size: 0.85rem;
        color: #666;
        margin: 0;
    }
    #successToast .toast-close {
        background: none;
        border: none;
        color: #bbb;
        cursor: pointer;
        font-size: 1rem;
        padding: 4px;
        margin-left: auto;
        transition: color 0.3s ease;
    }
    #successToast .toast-close:hover {
        color: #333;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- ===== HERO SECTION ===== -->
<section class="contact-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="hero-content">
            <h1>We're Always <span>Here to Help</span> You</h1>
            <p>Have a question, feedback, or partnership idea? Let's connect — we'll get back to you within 24 hours.</p>
        </div>
    </div>
</section>

<!-- ===== CONTACT INFO CARDS ===== -->
<section class="contact-info-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="contact-info-grid">
            
            <!-- Phone Support -->
            <div class="contact-info-card fade-in-up">
                <div class="icon-circle">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Phone Support</h3>
                <a href="tel:+919876543210" class="info-value">+91 98765 43210</a>
                <span class="info-label">Mon - Sat, 9 AM - 6 PM</span>
            </div>

            <!-- Email Us -->
            <div class="contact-info-card fade-in-up delay-1">
                <div class="icon-circle">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <a href="mailto:support@quickhomeloan.in" class="info-value">support@quickhomeloan.in</a>
                <span class="info-label">Usually responds within 24 hours</span>
            </div>

            <!-- Our Office -->
            <div class="contact-info-card fade-in-up delay-2">
                <div class="icon-circle">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Our Office</h3>
                <span class="info-value">4th Floor, The Grand Emporio, Motera Stadium Rd</span>
                <span class="info-value" style="font-weight: 400; font-size: 0.9rem;">Motera, Ahmedabad, Gujarat 380005</span>
            </div>

        </div>
    </div>
</section>

<!-- ===== CONTACT FORM ===== -->
<section class="contact-form-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="contact-form-wrapper">
            <h2 class="section-title fade-in-up">Send Us a Message</h2>
            <p class="section-subtitle fade-in-up delay-1">Fill out the form below and our support team will reach out soon.</p>

            <form action="#" method="POST" class="fade-in-up delay-2">
                @csrf
                
                <!-- Full Name & Email Row -->
                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name <span class="required">*</span></label>
                        <input type="text" name="name" placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" name="email" placeholder="you@example.com" required>
                    </div>
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <label>Subject <span class="required">*</span></label>
                    <input type="text" name="subject" placeholder="Message subject" required>
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label>Message <span class="required">*</span></label>
                    <textarea name="message" placeholder="Write your message here..." required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- ===== SUCCESS TOAST (Optional) ===== -->
@if(session('success'))
<div id="successToast">
    <div class="toast-content">
        <div class="toast-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="toast-text">
            <h4>Message Sent!</h4>
            <p>We'll get back to you within 24 hours.</p>
        </div>
        <button class="toast-close" onclick="this.closest('#successToast').remove()">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>
@endif

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-dismiss toast after 5 seconds
    const toast = document.getElementById('successToast');
    if (toast) {
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(40px)';
            toast.style.transition = 'all 0.5s ease';
            setTimeout(() => toast.remove(), 500);
        }, 5000);
    }

    // Form submission loading state
    const form = document.querySelector('.contact-form-wrapper form');
    const submitBtn = form?.querySelector('.btn-submit');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            const originalHtml = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';

            // Re-enable after 2s (demo purpose - remove in production)
            setTimeout(() => {
                submitBtn.innerHTML = originalHtml;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
            }, 2000);
        });
    }
});
</script>
@endsection