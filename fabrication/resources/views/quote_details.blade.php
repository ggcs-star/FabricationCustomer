@extends('app')

@section('content')

<!-- Hero Section - Dark Background -->
<section class="relative bg-gradient-to-br from-[#0f0f0f] to-[#1a1a1a] py-24 overflow-hidden">
    
    <!-- Subtle background pattern / glow -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#FF7A00]/5 to-transparent pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-1/3 h-1/2 bg-gradient-to-t from-[#FF7A00]/5 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="max-w-3xl mx-auto text-center">

            <!-- Badge -->
            <span class="inline-flex items-center gap-2 bg-[#FF7A00]/10 text-[#FF7A00] text-xs font-semibold uppercase tracking-[2px] px-4 py-2 rounded-full border border-[#FF7A00]/20 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00] animate-pulse"></span>
                Free Service
            </span>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-5">
                Get Free <span class="text-[#FF7A00]">Quotations</span>
            </h1>

            <!-- Description -->
            <p class="text-[#D1D5DB] text-base md:text-lg leading-relaxed max-w-2xl mx-auto">
                Tell us about your project and receive competitive quotes
                from 3–5 verified vendors within 48 hours.
            </p>

            <!-- Trust / Stats -->
            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10 mt-8">
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <i class="fa-regular fa-circle-check text-[#FF7A00]"></i>
                    <span>100% Free</span>
                </div>
                <div class="w-px h-5 bg-gray-700 hidden sm:block"></div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <i class="fa-regular fa-shield text-[#FF7A00]"></i>
                    <span>Verified Vendors</span>
                </div>
                <div class="w-px h-5 bg-gray-700 hidden sm:block"></div>
                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <i class="fa-regular fa-clock text-[#FF7A00]"></i>
                    <span>48hr First Quote</span>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- Form Section - Light Gray Background -->
<div class="bg-gray-100 py-12">

    <div class="max-w-3xl mx-auto px-4">

        <!-- Progress Bar -->
        @php
        $currentStep = $currentStep ?? 1;
        $steps = [
            1 => 'Project Details',
            2 => 'Requirements',
            3 => 'Contact Info',
            4 => 'Confirmation',
        ];
        @endphp

        <div class="flex items-center justify-center mb-10">

            @foreach($steps as $step => $label)

                <div class="flex flex-col items-center step-indicator">

                    @if($step < $currentStep)
                        <div class="step-circle w-9 h-9 rounded-full bg-[#FF7A00] text-white flex items-center justify-center text-sm font-semibold">
                            <i class="fa-solid fa-check text-xs"></i>
                        </div>
                        <span class="step-label text-xs font-medium text-[#FF7A00] mt-2">{{ $label }}</span>

                    @elseif($step == $currentStep)
                        <div class="step-circle w-9 h-9 rounded-full bg-[#FF7A00] text-white flex items-center justify-center text-sm font-semibold ring-4 ring-[#FF7A00]/20">
                            {{ $step }}
                        </div>
                        <span class="step-label text-xs font-medium text-[#FF7A00] mt-2">{{ $label }}</span>

                    @else
                        <div class="step-circle w-9 h-9 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-semibold">
                            {{ $step }}
                        </div>
                        <span class="step-label text-xs font-medium text-gray-400 mt-2">{{ $label }}</span>
                    @endif

                </div>

                @if(!$loop->last)
                    @if($step < $currentStep)
                        <div class="progress-line w-16 h-[2px] bg-[#FF7A00] mx-2"></div>
                    @else
                        <div class="progress-line w-16 h-[2px] bg-gray-300 mx-2"></div>
                    @endif
                @endif

            @endforeach

        </div>

        <!-- ============================================================ -->
        <!-- STEP 1: PROJECT DETAILS                                       -->
        <!-- ============================================================ -->
        <div id="step1" class="step-container">
            <div class="bg-white rounded-3xl shadow-md p-8">

                <h2 class="text-3xl font-bold text-gray-900">What service do you need?</h2>
                <p class="text-gray-500 mt-2 mb-8">Select the primary fabrication category for your project.</p>

                @php
                $services = [
                    ['Steel Structure', 'fa-building'],
                    ['Glass Work', 'fa-layer-group'],
                    ['Aluminium Work', 'fa-border-all'],
                    ['False Ceiling', 'fa-draw-polygon'],
                    ['Interior Work', 'fa-house'],
                    ['MS Fabrication', 'fa-gear'],
                    ['SS Fabrication', 'fa-bolt'],
                    ['Custom Projects', 'fa-cube'],
                ];
                @endphp

                <div class="grid grid-cols-4 gap-4 mb-8">
                    @foreach($services as $service)
                    <label class="service-card border rounded-2xl p-4 cursor-pointer hover:border-[#FF7A00] hover:bg-orange-50 transition">
                        <input type="radio" name="service" value="{{ $service[0] }}" class="hidden peer" required>
                        <div class="flex flex-col items-center">
                            <div class="w-11 h-11 rounded-full bg-gray-100 flex items-center justify-center mb-3 peer-checked:bg-[#FFF1E6]">
                                <i class="fa-solid {{ $service[1] }} text-gray-500 peer-checked:text-[#FF7A00]"></i>
                            </div>
                            <span class="text-sm font-medium text-center peer-checked:text-[#FF7A00]">{{ $service[0] }}</span>
                        </div>
                    </label>
                    @endforeach
                </div>

                <label class="font-semibold text-sm block">Project City</label>

                @php $cities = ['Ahmedabad', 'Mumbai', 'Pune', 'Delhi', 'Bangalore', 'Chennai', 'Surat', 'Hyderabad', 'Other']; @endphp

                <div class="flex flex-wrap gap-3 mt-3 mb-8">
                    @foreach($cities as $city)
                    <button type="button" class="city-btn px-5 py-2 rounded-full border text-sm hover:bg-[#FF7A00] hover:text-white hover:border-[#FF7A00] transition">
                        {{ $city }}
                    </button>
                    @endforeach
                </div>

                <label class="font-semibold text-sm">
                    Approximate Area (sqft)
                    <span class="text-gray-400 font-normal">— Optional</span>
                </label>

                <input type="text" id="areaInput" placeholder="e.g. 2000"
                    class="mt-3 w-full h-12 rounded-xl border border-gray-300 px-4 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none">

                <input type="hidden" id="selectedCity" name="city" value="">

                <hr class="my-8">

                <div class="flex gap-4">
                    <button
    type="button"
    onclick="nextStep()"
    class="relative flex flex-1 items-center justify-center h-14 rounded-xl bg-[#FF7A00] hover:bg-orange-600 text-white font-semibold transition next-btn">
    <span>Continue</span>
    <span class="absolute right-6">→</span>
</button>
                </div>

            </div>
        </div>

        <!-- ============================================================ -->
        <!-- STEP 2: REQUIREMENTS (FIXED - wrapped with id="step2")       -->
        <!-- ============================================================ -->
        <div id="step2" class="step-container hidden">
            <div class="bg-white rounded-3xl shadow-md p-8">

                <h2 class="text-3xl font-bold text-gray-900">Project Requirements</h2>
                <p class="text-gray-500 mt-2 mb-8">Help vendors understand your project scope.</p>

                <!-- Budget -->
                <label class="block text-sm font-semibold mb-4">Budget Range</label>

                @php
                $budgets = ['Under ₹1 Lakh', '₹1–5 Lakh', '₹5–15 Lakh', '₹15–50 Lakh', '₹50 Lakh+', 'Not Sure Yet'];
                @endphp

                <div class="grid grid-cols-3 gap-3 mb-8">
                    @foreach($budgets as $budget)
                    <label class="cursor-pointer">
                        <input type="radio" name="budget" value="{{ $budget }}" class="hidden peer">
                        <div class="h-12 rounded-xl border border-gray-300 flex items-center justify-center text-sm transition-all hover:border-[#FF7A00] peer-checked:border-[#FF7A00] peer-checked:bg-[#FFF3E9] peer-checked:text-[#FF7A00]">
                            {{ $budget }}
                        </div>
                    </label>
                    @endforeach
                </div>

                <!-- Timeline -->
                <label class="block text-sm font-semibold mb-4">Project Timeline</label>

                @php
                $timelines = ['ASAP (< 1 month)', '1–3 months', '3–6 months', '6+ months', 'Flexible'];
                @endphp

                <div class="grid grid-cols-3 gap-3 mb-8">
                    @foreach($timelines as $time)
                    <label class="cursor-pointer">
                        <input type="radio" name="timeline" value="{{ $time }}" class="hidden peer">
                        <div class="h-12 rounded-xl border border-gray-300 flex items-center justify-center text-sm transition-all hover:border-[#FF7A00] peer-checked:border-[#FF7A00] peer-checked:bg-[#FFF3E9] peer-checked:text-[#FF7A00]">
                            {{ $time }}
                        </div>
                    </label>
                    @endforeach
                </div>

                <!-- Description -->
                <label class="block text-sm font-semibold mb-2">
                    Project Description
                    <span class="text-gray-400 font-normal">— Optional but recommended</span>
                </label>
                <p class="text-xs text-gray-400 mb-2">Describe your project: dimensions, materials preferred, design references, special requirements...</p>
                <textarea id="projectDescription" rows="4" placeholder="e.g. I need a 20ft x 15ft steel structure for my terrace garden with powder coating..."
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none resize-none"></textarea>

                <!-- Site Visit Toggle -->
                <div class="flex items-center justify-between mt-6">
                    <span class="text-sm font-medium">I need a free site visit for measurements</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" id="siteVisit" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-[#FF7A00] after:content-[''] after:absolute after:left-[2px] after:top-[2px] after:bg-white after:w-5 after:h-5 after:rounded-full after:transition-all peer-checked:after:translate-x-5"></div>
                    </label>
                </div>

                <!-- Upload -->
                <label class="block mt-8">
                    <input type="file" id="fileUpload" class="hidden" accept=".jpg,.jpeg,.png,.pdf" multiple>
                    <div class="border-2 border-dashed border-gray-300 rounded-2xl py-12 text-center cursor-pointer hover:border-[#FF7A00] transition">
                        <i class="fa-solid fa-upload text-3xl text-gray-400 mb-4"></i>
                        <p class="font-medium text-gray-700">Upload drawings, photos or references</p>
                        <p class="text-sm text-gray-400 mt-2">JPG, PNG, PDF — Max 10MB</p>
                    </div>
                </label>
                <div id="fileList" class="mt-3 space-y-2"></div>

                <hr class="my-8">

                <div class="flex gap-4">
                   <button
    type="button"
    onclick="prevStep()"
    class="flex items-center justify-center gap-2 px-8 h-14 rounded-xl border border-orange-200 bg-orange-50 text-orange-600 font-semibold hover:bg-orange-100 hover:border-orange-300 transition-all duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <span>Back</span>
</button>
                   <button
    type="button"
    onclick="nextStep()"
    class="relative flex flex-1 items-center justify-center h-14 rounded-xl bg-[#FF7A00] hover:bg-orange-600 text-white font-semibold transition next-btn">
    <span>Continue</span>
    <span class="absolute right-6">→</span>
</button>
                </div>

            </div>
        </div>

        <!-- ============================================================ -->
        <!-- STEP 3: CONTACT INFO                                          -->
        <!-- ============================================================ -->
        <div id="step3" class="step-container hidden">
            <div class="bg-white rounded-3xl shadow-md p-8">

                <h2 class="text-3xl font-bold text-gray-900">Contact Information</h2>
                <p class="text-gray-500 mt-2 mb-8">We'll use these details to send you the quotations.</p>

                <div class="mb-5">
                    <label for="fullName" class="font-semibold text-sm block mb-2">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" id="fullName" placeholder="John Doe"
                        class="w-full h-12 rounded-xl border border-gray-300 px-4 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none">
                </div>

                <div class="mb-5">
                    <label for="email" class="font-semibold text-sm block mb-2">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" placeholder="john@example.com"
                        class="w-full h-12 rounded-xl border border-gray-300 px-4 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none">
                </div>

                <div class="mb-5">
                    <label for="phone" class="font-semibold text-sm block mb-2">Phone Number <span class="text-red-500">*</span></label>
                    <input type="tel" id="phone" placeholder="+91 98765 43210"
                        class="w-full h-12 rounded-xl border border-gray-300 px-4 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none">
                </div>

                <div class="mb-5">
                    <label for="companyName" class="font-semibold text-sm block mb-2">Company Name <span class="text-gray-400 font-normal">— Optional</span></label>
                    <input type="text" id="companyName" placeholder="Your Company"
                        class="w-full h-12 rounded-xl border border-gray-300 px-4 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none">
                </div>

                <div class="mb-5">
                    <label for="notes" class="font-semibold text-sm block mb-2">Additional Notes <span class="text-gray-400 font-normal">— Optional</span></label>
                    <textarea id="notes" rows="3" placeholder="Any special requirements or details..."
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-[#FF7A00] focus:border-[#FF7A00] focus:outline-none resize-none"></textarea>
                </div>

                <hr class="my-8">

                <div class="flex gap-4">
                   <button
    type="button"
    onclick="prevStep()"
    class="flex items-center justify-center gap-2 px-8 h-14 rounded-xl border border-orange-200 bg-orange-50 text-orange-600 font-semibold hover:bg-orange-100 hover:border-orange-300 transition-all duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <span>Back</span>
</button>
                   <button
    type="button"
    onclick="nextStep()"
    class="relative flex flex-1 items-center justify-center h-14 rounded-xl bg-[#FF7A00] hover:bg-orange-600 text-white font-semibold text-base shadow-md hover:shadow-lg transition-all duration-300">
    <span>Review &amp; Submit</span>

    <svg xmlns="http://www.w3.org/2000/svg"
         class="absolute right-5 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M13 5l7 7-7 7"/>
    </svg>
</button>
                </div>

            </div>
        </div>

        <!-- ============================================================ -->
        <!-- STEP 4: CONFIRMATION                                          -->
        <!-- ============================================================ -->
        <div id="step4" class="step-container hidden">
            <div class="bg-white rounded-3xl shadow-md p-8">

                <h2 class="text-3xl font-bold text-gray-900">Review & Confirm</h2>
                <p class="text-gray-500 mt-2 mb-8">Please review your details before submitting.</p>

                <div class="bg-gray-50 rounded-2xl p-6 space-y-4">

                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="text-gray-500">Service:</span>
                            <p class="font-semibold text-gray-800" id="confirmService">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">City:</span>
                            <p class="font-semibold text-gray-800" id="confirmCity">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Area:</span>
                            <p class="font-semibold text-gray-800" id="confirmArea">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Budget:</span>
                            <p class="font-semibold text-gray-800" id="confirmBudget">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Timeline:</span>
                            <p class="font-semibold text-gray-800" id="confirmTimeline">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Site Visit:</span>
                            <p class="font-semibold text-gray-800" id="confirmSiteVisit">—</p>
                        </div>
                    </div>

                    <hr class="border-gray-200">

                    <div>
                        <span class="text-gray-500">Project Description:</span>
                        <p class="text-gray-800" id="confirmDescription">—</p>
                    </div>

                    <hr class="border-gray-200">

                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="text-gray-500">Name:</span>
                            <p class="font-semibold text-gray-800" id="confirmName">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Email:</span>
                            <p class="font-semibold text-gray-800" id="confirmEmail">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Phone:</span>
                            <p class="font-semibold text-gray-800" id="confirmPhone">—</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Company:</span>
                            <p class="font-semibold text-gray-800" id="confirmCompany">—</p>
                        </div>
                    </div>

                    <div>
                        <span class="text-gray-500">Additional Notes:</span>
                        <p class="text-gray-800" id="confirmNotes">—</p>
                    </div>

                </div>

                <div class="mt-6 bg-green-50 border border-green-200 rounded-xl p-4 flex items-start gap-3">
                    <i class="fa-solid fa-shield-check text-green-600 text-xl mt-0.5"></i>
                    <div>
                        <p class="text-sm font-semibold text-green-800">100% Free & No Obligation</p>
                        <p class="text-sm text-green-700">You'll receive quotes from 3-5 verified vendors within 48 hours.</p>
                    </div>
                </div>

                <hr class="my-8">

                <div class="flex gap-4">
                <button
    type="button"
    onclick="prevStep()"
    class="flex items-center justify-center gap-2 px-8 h-14 rounded-xl border border-orange-200 bg-orange-50 text-orange-600 font-semibold hover:bg-orange-100 hover:border-orange-300 transition-all duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <span>Back</span>
</button>
                      <button
    type="button"
    onclick="submitForm()"
    class="group relative flex flex-1 items-center justify-center h-14 rounded-xl bg-[#FF7A00] hover:bg-orange-600 text-white font-semibold text-base shadow-md hover:shadow-xl transition-all duration-300 submit-btn">

    <span>Submit Request</span>

    <span class="absolute right-5 text-lg transition-transform duration-300 group-hover:scale-110">
        ✓
    </span>

</button>
                </div>

            </div>
        </div>

        <!-- Bottom Badges -->
        <div class="grid grid-cols-3 gap-4 mt-6">

            <div class="bg-white rounded-xl py-4 text-center text-sm shadow">
                🛡️ 100% Free Service
            </div>

            <div class="bg-white rounded-xl py-4 text-center text-sm shadow">
                ⭐ Verified Vendors Only
            </div>

            <div class="bg-white rounded-xl py-4 text-center text-sm shadow">
                ⏰ 48hr First Quote
            </div>

        </div>

    </div>

</div>

<style>
    .service-card.selected {
        border-color: #FF7A00;
        background-color: #FFF8F0;
        box-shadow: 0 0 0 2px #FF7A00;
    }
    .city-btn[data-selected="true"] {
        background-color: #FF7A00;
        color: white;
        border-color: #FF7A00;
    }
    .step-container {
        transition: opacity 0.3s ease;
    }
    .step-container.hidden {
        display: none;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

    let currentStep = 1;
    const totalSteps = 4;

    // Store form data globally
    window.formData = {
        service: null,
        city: null,
        area: null,
        budget: null,
        timeline: null,
        description: null,
        siteVisit: false,
        name: null,
        email: null,
        phone: null,
        company: null,
        notes: null
    };

    // ========== STEP 1: Service & City Selection ==========
    const serviceCards = document.querySelectorAll('#step1 .service-card');
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            serviceCards.forEach(c => {
                c.classList.remove('selected');
                c.style.borderColor = '';
                c.style.backgroundColor = '';
            });
            this.classList.add('selected');
            this.style.borderColor = '#FF7A00';
            this.style.backgroundColor = '#FFF8F0';
        });
    });

    const cityBtns = document.querySelectorAll('#step1 .city-btn');
    cityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            cityBtns.forEach(b => {
                b.dataset.selected = 'false';
                b.classList.remove('bg-[#FF7A00]', 'text-white', 'border-[#FF7A00]');
                b.classList.add('border-gray-300');
            });
            this.dataset.selected = 'true';
            this.classList.add('bg-[#FF7A00]', 'text-white', 'border-[#FF7A00]');
            this.classList.remove('border-gray-300');
            document.getElementById('selectedCity').value = this.textContent.trim();
        });
    });

    // ========== STEP 2: Radio button styling ==========
    document.querySelectorAll('#step2 input[type="radio"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const parent = this.closest('label');
            const siblings = parent.parentElement.querySelectorAll('label');
            siblings.forEach(s => {
                s.style.borderColor = '';
                s.style.backgroundColor = '';
            });
            parent.style.borderColor = '#FF7A00';
            parent.style.backgroundColor = '#FFF8F0';
        });
    });

    // ========== FILE UPLOAD ==========
    const fileInput = document.getElementById('fileUpload');
    const fileList = document.getElementById('fileList');

    if (fileInput && fileList) {
        fileInput.addEventListener('change', function() {
            fileList.innerHTML = '';
            if (this.files.length > 0) {
                Array.from(this.files).forEach((file) => {
                    const div = document.createElement('div');
                    div.className = 'flex items-center justify-between bg-gray-50 rounded-lg px-4 py-2 text-sm';
                    div.innerHTML = `
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-file text-[#FF7A00]"></i>
                            <span class="text-gray-700">${file.name}</span>
                            <span class="text-gray-400 text-xs">(${(file.size / 1024).toFixed(1)} KB)</span>
                        </div>
                        <button type="button" onclick="this.parentElement.remove()" class="text-gray-400 hover:text-red-500 transition">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </button>
                    `;
                    fileList.appendChild(div);
                });
            }
        });
    }

    // ========== NAVIGATION FUNCTIONS ==========
    window.goToStep = function(step) {
        document.querySelectorAll('.step-container').forEach(el => {
            el.classList.add('hidden');
        });

        const target = document.getElementById('step' + step);
        if (target) {
            target.classList.remove('hidden');
        }

        currentStep = step;
        updateProgress(step);
        updateButtons(step);

        if (step === 4) {
            populateConfirmation();
        }

        document.querySelector('.max-w-3xl').scrollIntoView({ behavior: 'smooth', block: 'start' });
    };

    window.nextStep = function() {
        if (currentStep < totalSteps) {
            if (!validateStep(currentStep)) {
                return;
            }
            goToStep(currentStep + 1);
        }
    };

    window.prevStep = function() {
        if (currentStep > 1) {
            goToStep(currentStep - 1);
        }
    };

    function validateStep(step) {
        switch(step) {
            case 1:
                const service = document.querySelector('input[name="service"]:checked');
                const city = document.getElementById('selectedCity').value;
                if (!service) {
                    alert('Please select a service.');
                    return false;
                }
                if (!city) {
                    alert('Please select a city.');
                    return false;
                }
                window.formData.service = service.value;
                window.formData.city = city;
                window.formData.area = document.getElementById('areaInput').value || 'Not specified';
                return true;

            case 2:
                const budget = document.querySelector('input[name="budget"]:checked');
                const timeline = document.querySelector('input[name="timeline"]:checked');
                if (!budget) {
                    alert('Please select your budget range.');
                    return false;
                }
                if (!timeline) {
                    alert('Please select your timeline.');
                    return false;
                }
                window.formData.budget = budget.value;
                window.formData.timeline = timeline.value;
                window.formData.description = document.getElementById('projectDescription')?.value || 'Not specified';
                window.formData.siteVisit = document.getElementById('siteVisit')?.checked || false;
                return true;

            case 3:
                const name = document.getElementById('fullName');
                const email = document.getElementById('email');
                const phone = document.getElementById('phone');
                if (!name.value.trim()) {
                    alert('Please enter your full name.');
                    name.focus();
                    return false;
                }
                if (!email.value.trim() || !email.value.includes('@')) {
                    alert('Please enter a valid email address.');
                    email.focus();
                    return false;
                }
                if (!phone.value.trim() || phone.value.length < 10) {
                    alert('Please enter a valid phone number.');
                    phone.focus();
                    return false;
                }
                window.formData.name = name.value;
                window.formData.email = email.value;
                window.formData.phone = phone.value;
                window.formData.company = document.getElementById('companyName')?.value || 'Not specified';
                window.formData.notes = document.getElementById('notes')?.value || 'Not specified';
                return true;

            default:
                return true;
        }
    }

    function updateProgress(step) {
        const circles = document.querySelectorAll('.step-circle');
        const labels = document.querySelectorAll('.step-label');
        const lines = document.querySelectorAll('.progress-line');

        circles.forEach((circle, index) => {
            const num = index + 1;
            if (num < step) {
                circle.className = 'step-circle w-9 h-9 rounded-full bg-[#FF7A00] text-white flex items-center justify-center text-sm font-semibold';
                circle.innerHTML = '<i class="fa-solid fa-check text-xs"></i>';
                labels[index].className = 'step-label text-xs font-medium text-[#FF7A00] mt-2';
            } else if (num === step) {
                circle.className = 'step-circle w-9 h-9 rounded-full bg-[#FF7A00] text-white flex items-center justify-center text-sm font-semibold ring-4 ring-[#FF7A00]/20';
                circle.textContent = num;
                labels[index].className = 'step-label text-xs font-medium text-[#FF7A00] mt-2';
            } else {
                circle.className = 'step-circle w-9 h-9 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center text-sm font-semibold';
                circle.textContent = num;
                labels[index].className = 'step-label text-xs font-medium text-gray-400 mt-2';
            }
        });

        lines.forEach((line, index) => {
            if (index < step - 1) {
                line.className = 'progress-line w-16 h-[2px] bg-[#FF7A00] mx-2';
            } else {
                line.className = 'progress-line w-16 h-[2px] bg-gray-300 mx-2';
            }
        });
    }

    function updateButtons(step) {
        document.querySelectorAll('.back-btn').forEach(btn => {
            btn.style.display = (step === 1) ? 'none' : 'inline-flex';
        });
        document.querySelectorAll('.next-btn').forEach(btn => {
            btn.style.display = (step === totalSteps) ? 'none' : 'inline-flex';
        });
        document.querySelectorAll('.submit-btn').forEach(btn => {
            btn.style.display = (step === totalSteps) ? 'inline-flex' : 'none';
        });
    }

    function populateConfirmation() {
        const data = window.formData;
        document.getElementById('confirmService').textContent = data.service || '—';
        document.getElementById('confirmCity').textContent = data.city || '—';
        document.getElementById('confirmArea').textContent = data.area || '—';
        document.getElementById('confirmBudget').textContent = data.budget || '—';
        document.getElementById('confirmTimeline').textContent = data.timeline || '—';
        document.getElementById('confirmSiteVisit').textContent = data.siteVisit ? '✅ Yes' : '❌ No';
        document.getElementById('confirmDescription').textContent = data.description || '—';
        document.getElementById('confirmName').textContent = data.name || '—';
        document.getElementById('confirmEmail').textContent = data.email || '—';
        document.getElementById('confirmPhone').textContent = data.phone || '—';
        document.getElementById('confirmCompany').textContent = data.company || '—';
        document.getElementById('confirmNotes').textContent = data.notes || '—';
    }

    window.submitForm = function() {
        const btn = document.querySelector('#step4 .submit-btn');
        const originalText = btn.textContent;
        btn.textContent = 'Submitting...';
        btn.disabled = true;

        setTimeout(() => {
            alert('✅ Your quotation request has been submitted successfully!\n\nWe\'ll get back to you within 48 hours with quotes from 3-5 verified vendors.');
            btn.textContent = originalText;
            btn.disabled = false;
        }, 1500);
    };

    updateProgress(1);
    updateButtons(1);

});
</script>

@endsection