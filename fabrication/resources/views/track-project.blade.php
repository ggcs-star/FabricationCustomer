{{-- resources/views/track-project.blade.php --}}
@extends('app')

@section('content')
<style>
    .project-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.07);
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
    }
    .project-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    .status-badge {
        padding: 4px 12px;
        border-radius: 9999px;
        font-size: 0.7rem;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        display: inline-block;
    }
    .status-on-track {
        background: #e8f5e9;
        color: #2e7d32;
    }
    .status-completed {
        background: #e3f2fd;
        color: #1565c0;
    }
    .status-delayed {
        background: #fff3e0;
        color: #e65100;
    }
    .status-active {
        background: #fce4ec;
        color: #c62828;
    }
    .timeline-item {
        position: relative;
        padding-left: 28px;
        padding-bottom: 20px;
        border-left: 2px solid #e8e8e8;
    }
    .timeline-item:last-child {
        border-left: none;
        padding-bottom: 0;
    }
    .timeline-item .timeline-dot {
        position: absolute;
        left: -8px;
        top: 0;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        border: 2px solid #d0d0d0;
        background: #fff;
    }
    .timeline-item .timeline-dot.completed {
        background: #4CAF50;
        border-color: #4CAF50;
    }
    .timeline-item .timeline-dot.active {
        background: #FF7A00;
        border-color: #FF7A00;
        box-shadow: 0 0 0 4px rgba(255, 122, 0, 0.2);
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(255, 122, 0, 0.4); }
        70% { box-shadow: 0 0 0 8px rgba(255, 122, 0, 0); }
        100% { box-shadow: 0 0 0 0 rgba(255, 122, 0, 0); }
    }
    .timeline-item .timeline-date {
        font-size: 0.7rem;
        color: #999;
        font-family: 'Inter', sans-serif;
    }
    .timeline-item .timeline-title {
        font-size: 0.85rem;
        font-weight: 600;
        color: #111;
        font-family: 'Poppins', sans-serif;
    }
    .quick-action-btn {
        padding: 10px 16px;
        border-radius: 10px;
        border: 1px solid #e8e8e8;
        background: #fff;
        transition: all 0.3s ease;
        font-size: 0.85rem;
        font-weight: 500;
        font-family: 'Inter', sans-serif;
        color: #333;
        cursor: pointer;
        text-align: center;
        width: 100%;
    }
    .quick-action-btn:hover {
        border-color: #FF7A00;
        color: #FF7A00;
        background: #fff8f0;
    }
    .quick-action-btn i {
        margin-right: 8px;
        color: #FF7A00;
    }

    /* ===== Spacing between header and content ===== */
    .track-hero {
        padding-top: 100px;
    }

    @media (max-width: 1024px) {
        .track-hero {
            padding-top: 90px;
        }
    }

    @media (max-width: 768px) {
        .track-hero {
            padding-top: 80px;
        }
        h1 {
            font-size: 2rem !important;
        }
        .timeline-item {
            padding-left: 20px;
        }
        .quick-action-btn {
            padding: 8px 12px;
            font-size: 0.75rem;
        }
    }

    @media (max-width: 480px) {
        .track-hero {
            padding-top: 70px;
        }
        h1 {
            font-size: 1.6rem !important;
        }
    }

    /* Progress bar */
    .progress-bar-container {
        width: 100%;
        height: 6px;
        background: #f0f0f0;
        border-radius: 4px;
        overflow: hidden;
    }
    .progress-bar-container .progress-bar {
        height: 100%;
        border-radius: 4px;
        background: #FF7A00;
        transition: width 0.8s ease;
    }
    .progress-bar-container .progress-bar.completed {
        background: #4CAF50;
    }

    /* Live update photo grid */
    .photo-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        margin-top: 8px;
    }
    .photo-grid .photo-item {
        background: #f5f5f5;
        border-radius: 8px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 0.7rem;
        font-family: 'Inter', sans-serif;
        border: 1px solid #eee;
    }
    .photo-grid .photo-item i {
        font-size: 1.2rem;
        color: #ccc;
    }

    /* Live update item */
    .live-update-item {
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    .live-update-item:last-child {
        border-bottom: none;
    }
    .live-update-item .update-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 4px;
    }
    .live-update-item .update-time {
        font-size: 0.75rem;
        font-weight: 600;
        color: #111;
        font-family: 'Inter', sans-serif;
    }
    .live-update-item .update-icon {
        color: #FF7A00;
        font-size: 0.8rem;
    }
    .live-update-item .update-text {
        font-size: 0.85rem;
        color: #555;
        font-family: 'Inter', sans-serif;
        line-height: 1.5;
    }
</style>

<!-- Hero Section -->
<section class="track-hero py-8 md:py-12" style="background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">
        <div class="text-xs font-semibold uppercase tracking-widest mb-2" style="color: #FF7A00; font-family: 'Inter', sans-serif;">
            Real-Time Updates
        </div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-3" style="font-family: 'Poppins', sans-serif;">
            My Projects
        </h1>
        <p class="text-sm sm:text-base md:text-lg max-w-2xl" style="font-family: 'Inter', sans-serif; color: rgba(255,255,255,0.6);">
            Monitor every milestone of your active and completed fabrication projects.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-8 md:py-12 bg-[#F7F7F7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:px-16">

        <!-- Project Cards Grid -->
        <div class="grid lg:grid-cols-2 gap-6">
            
            <!-- Project Card 1 - On Track -->
            <div class="project-card">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-xs text-gray-500 font-medium" style="font-family: 'Inter', sans-serif;">FQ-2024-0872</span>
                        <span class="status-badge status-on-track">On Track</span>
                    </div>
                    <h3 class="font-bold text-lg text-black mb-1" style="font-family: 'Poppins', sans-serif;">Office Renovation — Phase 2</h3>
                    <p class="text-sm text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">Mehta Steel Works</p>
                    
                    <p class="text-sm text-gray-600 mb-4" style="font-family: 'Inter', sans-serif;">75% complete</p>

                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Budget</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">₹8,40,000</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Paid</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">₹6,30,000</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Start</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">12 Mar 2024</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Delivery</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">28 Apr 2024</p>
                        </div>
                    </div>

                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: 75%;"></div>
                    </div>

                    <div class="flex gap-3 mt-4">
                        <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Details
                        </button>
                        <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-2 transition-all hover:opacity-90" 
                                style="background: #FF7A00; font-family: 'Inter', sans-serif;">
                            <i class="fas fa-comment-dots text-xs"></i> Message
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 - Completed with Live Updates -->
            <div class="project-card">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-xs text-gray-500 font-medium" style="font-family: 'Inter', sans-serif;">FQ-2024-0644</span>
                        <span class="status-badge status-completed">Completed</span>
                    </div>
                    <h3 class="font-bold text-lg text-black mb-1" style="font-family: 'Poppins', sans-serif;">Glass Partition — HQ Floor 3</h3>
                    <p class="text-sm text-gray-500 mb-3" style="font-family: 'Inter', sans-serif;">GlassEdge Interiors</p>
                    
                    <p class="text-sm text-gray-600 mb-4" style="font-family: 'Inter', sans-serif;">100% complete</p>

                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Budget</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">₹5,20,000</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Paid</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">₹5,20,000</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Start</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">10 Jan 2024</p>
                        </div>
                        <div>
                            <span class="text-xs text-gray-500 block" style="font-family: 'Inter', sans-serif;">Delivery</span>
                            <p class="font-bold text-black text-sm" style="font-family: 'Poppins', sans-serif;">15 Mar 2024</p>
                        </div>
                    </div>

                    <div class="progress-bar-container mb-4">
                        <div class="progress-bar completed" style="width: 100%;"></div>
                    </div>

                    <!-- Live Updates Section -->
                    <div class="border-t border-gray-100 pt-4 mt-2">
                        <h4 class="text-sm font-bold text-black mb-3" style="font-family: 'Poppins', sans-serif;">Live Updates</h4>
                        
                        <!-- Update 1 -->
                        <div class="live-update-item">
                            <div class="update-header">
                                <span class="update-time">Today 2:30 PM</span>
                                <span class="update-icon"><i class="fas fa-camera"></i></span>
                            </div>
                            <p class="update-text">Steel fabrication 60% complete. 12 columns fabricated.</p>
                            <div class="photo-grid">
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                            </div>
                        </div>

                        <!-- Update 2 -->
                        <div class="live-update-item">
                            <div class="update-header">
                                <span class="update-time">Yesterday 4:00 PM</span>
                                <span class="update-icon"><i class="fas fa-camera"></i></span>
                            </div>
                            <p class="update-text">Beam welding started. 8 out of 20 beams welded.</p>
                            <div class="photo-grid">
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                            </div>
                        </div>

                        <!-- Update 3 -->
                        <div class="live-update-item">
                            <div class="update-header">
                                <span class="update-time">2 days ago</span>
                                <span class="update-icon"><i class="fas fa-file-alt"></i></span>
                            </div>
                            <p class="update-text">Raw materials (IS 2062 steel) inspected and approved.</p>
                            <div class="photo-grid">
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                                <div class="photo-item"><i class="fas fa-image"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-4">
                        <button class="flex-1 py-2.5 rounded-xl text-sm font-medium border transition-all hover:bg-gray-50" 
                                style="border-color: rgba(0,0,0,0.1); color: #111; font-family: 'Inter', sans-serif;">
                            View Details
                        </button>
                        <button class="flex-1 py-2.5 rounded-xl text-sm font-semibold text-white flex items-center justify-center gap-2 transition-all hover:opacity-90" 
                                style="background: #4CAF50; font-family: 'Inter', sans-serif;">
                            <i class="fas fa-download text-xs"></i> Report
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Timeline & Quick Actions Section -->
        <div class="grid lg:grid-cols-3 gap-6 mt-8">
            
            <!-- Timeline -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-6 border border-gray-100">
                    <h3 class="font-bold text-lg text-black mb-4" style="font-family: 'Poppins', sans-serif;">Project Timeline</h3>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot completed"></div>
                        <div class="timeline-title">Measurement Completed</div>
                        <div class="timeline-date">13 Mar</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot completed"></div>
                        <div class="timeline-title">Design Submitted</div>
                        <div class="timeline-date">17 Mar</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot completed"></div>
                        <div class="timeline-title">Quotation Approved</div>
                        <div class="timeline-date">20 Mar</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot completed"></div>
                        <div class="timeline-title">Payment Received</div>
                        <div class="timeline-date">22 Mar</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot active"></div>
                        <div class="timeline-title">Fabrication in Progress</div>
                        <div class="timeline-date" style="color: #FF7A00; font-weight: 600;">Ongoing</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-title">Site Installation</div>
                        <div class="timeline-date">Est. 10 Apr</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-title">QA Inspection</div>
                        <div class="timeline-date">Est. 20 Apr</div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-title">Project Handover</div>
                        <div class="timeline-date">Est. 28 Apr</div>
                    </div>
                    
                </div>
            </div>

            <!-- Quick Actions -->
            <div>
                <h3 class="font-bold text-lg text-black mb-4" style="font-family: 'Poppins', sans-serif;">Quick Actions</h3>
                <div class="space-y-3">
                    <button class="quick-action-btn">
                        <i class="fas fa-comment-dots"></i> Message Vendor
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-file-invoice"></i> View Invoice
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-file-alt"></i> Download Report
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-flag"></i> Raise Issue
                    </button>
                </div>
            </div>

        </div>

        <!-- Start New Project CTA -->
        <div class="mt-8 p-8 rounded-2xl text-center" style="background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);">
            <h3 class="text-2xl font-bold text-white mb-2" style="font-family: 'Poppins', sans-serif;">
                Start a New Fabrication Project
            </h3>
            <p class="text-gray-400 text-sm mb-4" style="font-family: 'Inter', sans-serif;">
                Get quotes from verified vendors in 48 hours
            </p>
            <a href="{{ url('/quote-details') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold text-white transition-all hover:opacity-90" 
               style="background: #FF7A00;">
                Get Free Quote
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate progress bars on load
    document.querySelectorAll('.progress-bar').forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0%';
        setTimeout(() => {
            bar.style.width = width;
        }, 300);
    });
});
</script>
@endsection