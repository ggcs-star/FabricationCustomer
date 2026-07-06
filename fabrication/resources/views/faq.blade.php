@extends('app')

@section('title','FAQ')

@push('styles')
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FabriQ · FAQs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet" />
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
      padding-top: 0px;
    }

    .faq-page {
      max-width: 1100px;
      margin: 0 auto;
      padding: 5rem 1.5rem 3rem;
      background: #ffffff;
    }

    .faq-hero {
      background: linear-gradient(135deg, #F97316 0%, #FB923C 50%, #FBAF6C 100%);
      padding: 40px 48px 36px;
      border-radius: 32px;
      color: #fff;
      position: relative;
      overflow: hidden;
      margin-bottom: 36px;
      margin-top: 0px;
    }

    .faq-hero::after {
      content: '';
      position: absolute;
      top: -40%;
      right: -15%;
      width: 500px;
      height: 500px;
      background: rgba(255, 255, 255, 0.06);
      border-radius: 50%;
      pointer-events: none;
    }

    .faq-hero .hero-content {
      position: relative;
      z-index: 2;
      max-width: 760px;
    }

    .faq-tag {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(4px);
      padding: 8px 22px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 0.3px;
      margin-bottom: 18px;
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .faq-hero h1 {
      font-size: 38px;
      font-weight: 700;
      line-height: 1.12;
      margin-bottom: 14px;
      letter-spacing: -0.02em;
    }

    .faq-hero p {
      max-width: 620px;
      font-size: 16px;
      opacity: 0.92;
      line-height: 1.6;
      font-weight: 400;
      margin-bottom: 22px;
    }

    .hero-stats {
      display: flex;
      gap: 24px;
      flex-wrap: wrap;
    }

    .hero-stat {
      display: flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(4px);
      padding: 6px 18px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hero-stat i {
      font-size: 16px;
    }

    .hero-stat span {
      font-size: 14px;
      font-weight: 500;
    }

    .section-title {
      font-size: 24px;
      font-weight: 700;
      color: #0F172A;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .section-title i {
      color: #F97316;
    }

    .faq-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 14px;
      margin-bottom: 32px;
    }

    .faq-item {
      background: #ffffff;
      padding: 20px 24px;
      border-radius: 18px;
      border: 1px solid #E8EDF2;
      border-left: 5px solid #F97316;
      transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
    }

    .faq-item:hover {
      transform: translateX(4px);
      box-shadow: 0 14px 36px -12px rgba(249, 115, 22, 0.12);
      border-color: #F97316;
      background: #ffffff;
    }

    .faq-item .faq-question {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 8px;
    }

    .faq-item .faq-question i {
      color: #F97316;
      font-size: 16px;
      margin-top: 2px;
      width: 22px;
      text-align: center;
    }

    .faq-item .faq-question h3 {
      font-size: 17px;
      font-weight: 600;
      color: #0F172A;
      line-height: 1.4;
    }

    .faq-item .faq-answer {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding-left: 34px;
    }

    .faq-item .faq-answer i {
      color: #94A3B8;
      font-size: 13px;
      margin-top: 3px;
      width: 22px;
      text-align: center;
    }

    .faq-item .faq-answer p {
      color: #475569;
      line-height: 1.6;
      font-size: 15px;
    }

    .contact-support {
      background: #ffffff;
      border-radius: 18px;
      padding: 22px 28px;
      border: 1px solid #E8EDF2;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 32px;
    }

    .contact-support .support-left {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .contact-support .support-left i {
      color: #F97316;
      font-size: 24px;
    }

    .contact-support .support-left h4 {
      font-size: 17px;
      font-weight: 600;
      color: #0F172A;
    }

    .contact-support .support-left p {
      color: #475569;
      font-size: 14px;
    }

    .contact-support .support-btn {
      background: #F97316;
      color: #fff;
      padding: 8px 24px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 14px;
      border: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: 0.2s;
      cursor: pointer;
      text-decoration: none;
    }

    .contact-support .support-btn i {
      color: #fff;
    }

    .contact-support .support-btn:hover {
      background: #E8680C;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px -8px rgba(249, 115, 22, 0.4);
    }

    @media (max-width: 992px) {
      .faq-hero {
        padding: 32px 32px 28px;
      }
      .faq-hero h1 {
        font-size: 30px;
      }
    }

    @media (max-width: 768px) {
      html, body {
        padding-top: 0px;
      }
      .faq-page {
        padding: 4rem 1rem 2rem;
      }
      .faq-hero {
        padding: 24px 20px 20px;
        border-radius: 24px;
        margin-bottom: 28px;
      }
      .faq-hero h1 {
        font-size: 24px;
      }
      .faq-hero p {
        font-size: 15px;
      }
      .faq-item {
        padding: 16px 18px;
      }
      .faq-item .faq-answer {
        padding-left: 0;
      }
      .faq-item .faq-answer i {
        display: none;
      }
      .contact-support {
        flex-direction: column;
        text-align: center;
        padding: 20px 18px;
      }
      .contact-support .support-left {
        flex-direction: column;
        text-align: center;
      }
      .section-title {
        font-size: 20px;
      }
      .hero-stats {
        gap: 10px;
      }
      .hero-stat {
        padding: 5px 14px;
        font-size: 12px;
      }
    }

    @media (max-width: 480px) {
      html, body {
        padding-top: 0px;
      }
      .faq-page {
        padding: 3.5rem 1rem 2rem;
      }
      .faq-hero {
        padding: 18px 16px 16px;
        border-radius: 20px;
      }
      .faq-hero h1 {
        font-size: 20px;
      }
      .faq-tag {
        font-size: 11px;
        padding: 4px 14px;
      }
      .faq-item .faq-question h3 {
        font-size: 15px;
      }
      html{
    background:#ffffff !important;
  }

  body{
    background:#ffffff !important;
  }

  main{
    background:#ffffff !important;
  }

  .faq-page{
    background:#ffffff !important;
  }
    }
  </style>

@endpush

@section('content')


  <section class="faq-page">

    <div class="faq-hero">
      <div class="hero-content">
        <span class="faq-tag">
          <i class="fas fa-circle-question"></i>
          Frequently Asked Questions
        </span>
        <h1>Everything You Need<br />To Know</h1>
        <p>
          Find quick answers to the most common questions about booking,
          vendors, pricing, and more. If you don't see your question here,
          feel free to reach out to our support team.
        </p>
        <div class="hero-stats">
          <div class="hero-stat">
            <i class="fas fa-check-circle"></i>
            <span>6+ FAQs</span>
          </div>
          <div class="hero-stat">
            <i class="fas fa-clock"></i>
            <span>Quick Answers</span>
          </div>
          <div class="hero-stat">
            <i class="fas fa-headset"></i>
            <span>24/7 Support</span>
          </div>
        </div>
      </div>
    </div>

    <div class="section-title">
      <i class="fas fa-comments"></i>
      Frequently Asked Questions
    </div>

    <div class="faq-grid">

      <div class="faq-item">
        <div class="faq-question">
          <i class="fas fa-question-circle"></i>
          <h3>How do I book a fabrication service?</h3>
        </div>
        <div class="faq-answer">
          <i class="fas fa-arrow-right"></i>
          <p>You can easily book a service by browsing available options or vendors, selecting your requirement, choosing a suitable date and time, and confirming your request through the platform.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <i class="fas fa-question-circle"></i>
          <h3>Are the vendors verified?</h3>
        </div>
        <div class="faq-answer">
          <i class="fas fa-arrow-right"></i>
          <p>Yes, all vendors listed on the platform go through a proper verification process. You can also check their ratings and customer reviews to ensure reliability and quality.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <i class="fas fa-question-circle"></i>
          <h3>How is the pricing calculated?</h3>
        </div>
        <div class="faq-answer">
          <i class="fas fa-arrow-right"></i>
          <p>Pricing depends on factors like material, labor, design complexity, and project size. The vendor usually provides a final quote after reviewing details or completing on-site measurement.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <i class="fas fa-question-circle"></i>
          <h3>Is on-site measurement available?</h3>
        </div>
        <div class="faq-answer">
          <i class="fas fa-arrow-right"></i>
          <p>Yes, vendors can visit your location to take accurate measurements and understand your requirements before starting the work.</p>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <i class="fas fa-question-circle"></i>
          <h3>What if I am not satisfied with the service?</h3>
        </div>
        <div class="faq-answer">
          <i class="fas fa-arrow-right"></i>
          <p>If you face any issues, you can contact support through the platform, and the team will assist you in resolving the problem as quickly as possible.</p>
        </div>
      </div>

    </div>

    <div class="contact-support">
      <div class="support-left">
        <i class="fas fa-headset"></i>
        <div>
          <h4>Still have questions?</h4>
          <p>Our support team is here to help you 24/7</p>
        </div>
      </div>
      <a href="#" class="support-btn">
        <i class="fas fa-envelope"></i> Contact Support
      </a>
    </div>

</section>
@endsection