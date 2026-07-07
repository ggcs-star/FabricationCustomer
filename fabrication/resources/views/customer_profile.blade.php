@extends('app')

@section('title', 'FabriQ · My Profile')

@section('content')

<!-- ===== MAIN LAYOUT: sidebar + profile content (full height, scrollable) ===== -->
<div class="flex flex-col lg:flex-row bg-[#f8fafc] min-h-screen">

    <!-- ===== SIDEBAR (full height, sticky, scrollable) ===== -->
    <div class="lg:flex-shrink-0 lg:w-[280px] xl:w-[300px]">
        @include('sidebar')
    </div>

    <!-- ===== PROFILE CONTENT (scrollable) ===== -->
    <div class="flex-1 min-w-0 p-4 sm:p-6 md:p-8 lg:p-10 overflow-y-auto bg-[#f8fafc]">

        <!-- top bar with time/weather -->
        <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-[#0f172a] flex items-center gap-2">
                <i class="fas fa-user-edit text-[#f97316]"></i> My Profile
            </h1>
            <div class="flex items-center gap-3 sm:gap-4 text-xs sm:text-sm text-[#475569] flex-wrap">
                <span><i class="fas fa-cloud-sun text-[#f97316] mr-1"></i> 33°C</span>
                <span><i class="fas fa-clock mr-1"></i> 02:06 PM</span>
                <span class="hidden xs:inline"><i class="fas fa-calendar-alt mr-1"></i> 03-07-2026</span>
                <span class="hidden sm:inline">ENG <i class="fas fa-chevron-down ml-1"></i></span>
                <span class="hidden sm:inline">IN <i class="fas fa-chevron-down ml-1"></i></span>
            </div>
        </div>

        <!-- profile card -->
        <div class="bg-white rounded-3xl border border-[#eef2f6] p-5 sm:p-6 md:p-8 lg:p-10 max-w-3xl shadow-sm">

            <!-- First Name -->
            <div class="mb-5 sm:mb-6">
                <label class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#64748b]">First Name</label>
                <div class="text-lg sm:text-xl font-semibold text-[#0f172a] mt-1 pb-2 border-b border-[#f1f5f9]">
                    Chiranshi
                </div>
            </div>

            <!-- Last Name -->
            <div class="mb-5 sm:mb-6">
                <label class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#64748b]">Last Name</label>
                <div class="text-lg sm:text-xl font-semibold text-[#0f172a] mt-1 pb-2 border-b border-[#f1f5f9]">
                    Thummar
                </div>
            </div>

            <!-- Gender -->
            <div class="mb-5 sm:mb-6">
                <label class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#64748b]">Gender</label>
                <div class="flex flex-wrap gap-4 sm:gap-6 mt-2 pt-1">
                    <label class="flex items-center gap-2 text-sm font-medium text-[#1e293b] cursor-pointer">
                        <input type="radio" name="gender" value="female" checked class="accent-[#f97316] w-4 h-4"> Female
                    </label>
                    <label class="flex items-center gap-2 text-sm font-medium text-[#1e293b] cursor-pointer">
                        <input type="radio" name="gender" value="male" class="accent-[#f97316] w-4 h-4"> Male
                    </label>
                    <label class="flex items-center gap-2 text-sm font-medium text-[#1e293b] cursor-pointer">
                        <input type="radio" name="gender" value="other" class="accent-[#f97316] w-4 h-4"> Other
                    </label>
                </div>
            </div>

            <!-- Email Address -->
            <div class="mb-5 sm:mb-6">
                <label class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#64748b]">Email Address</label>
                <div class="text-sm sm:text-base font-medium text-[#0f172a] mt-1 pb-2 border-b border-[#f1f5f9] flex flex-wrap items-center justify-between gap-2">
                    <span class="break-all">chiranshithummar123@gmail.com</span>
                    <span class="text-[#10b981] text-xs sm:text-sm font-medium whitespace-nowrap"><i class="fas fa-check-circle mr-1"></i> Verified</span>
                </div>
            </div>

            <!-- Mobile Number -->
            <div class="mb-6 sm:mb-8">
                <label class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-[#64748b]">Mobile Number</label>
                <div class="text-lg sm:text-xl font-semibold text-[#0f172a] mt-1 pb-2 border-b border-[#f1f5f9]">
                    1234567890
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-3 sm:gap-4 pt-2">
                <button class="bg-[#f97316] hover:bg-[#e16e0e] text-white font-semibold px-5 sm:px-8 py-2.5 sm:py-3 rounded-full transition flex items-center gap-2 text-sm sm:text-base">
                    <i class="fas fa-save"></i> Save Changes
                </button>
                <button class="border border-[#e2e8f0] hover:bg-[#f1f5f9] text-[#1e293b] font-semibold px-5 sm:px-8 py-2.5 sm:py-3 rounded-full transition flex items-center gap-2 text-sm sm:text-base">
                    <i class="fas fa-edit"></i> Edit Profile
                </button>
            </div>

        </div>

        <!-- spacer for bottom -->
        <div class="h-4"></div>

    </div>
</div>

<!-- ===== STYLES TO OVERRIDE AND FIX LAYOUT ===== -->
<style>
    /* ===== HIDE FOOTER COMPLETELY ===== */
    footer {
        display: none !important;
    }

    /* ===== SIDEBAR OVERRIDES ===== */
    .profile-sidebar {
        height: 100vh;
        overflow-y: auto;
        position: sticky;
        top: 0;
        border-radius: 0 18px 18px 0;
        margin-left: 0 !important;
        padding-left: 24px !important;
        width: 100%;
        min-width: 260px;
        background: #FBFCFE;
        border: 1px solid #E8EDF2;
        border-left: none;
        border-right: 4px solid #F97316;
        padding: 24px 20px;
    }

    /* ===== RESPONSIVE BREAKPOINTS ===== */

    /* Tablet and below: sidebar becomes horizontal / grid */
    @media (max-width: 1024px) {
        .profile-sidebar {
            height: auto;
            position: static;
            border-radius: 18px;
            border-left: 4px solid #F97316;
            border-right: none;
            margin: 0 0 16px 0 !important;
            padding: 20px 24px !important;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 4px;
            min-width: auto;
            width: 100%;
        }

        .profile-sidebar .sidebar-header {
            grid-column: 1 / -1;
            border-bottom: 2px solid #F97316;
            padding-bottom: 16px;
            margin-bottom: 16px;
        }

        .profile-sidebar .user-info {
            grid-column: 1 / -1;
            margin-bottom: 12px;
        }

        .profile-sidebar hr {
            grid-column: 1 / -1;
            margin-bottom: 12px;
        }

        .profile-sidebar .nav-item {
            padding: 10px 14px;
            font-size: 13px;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            gap: 4px;
            margin-bottom: 2px;
        }

        .profile-sidebar .nav-item .nav-left {
            gap: 8px;
            flex-direction: column;
            align-items: center;
        }

        .profile-sidebar .nav-item .nav-left i {
            font-size: 16px;
            width: 20px;
        }

        .profile-sidebar .nav-item .arrow {
            display: none;
        }

        .profile-sidebar .nav-item .right-group {
            display: none;
        }

        .profile-sidebar .nav-item.logout {
            grid-column: 1 / -1;
            flex-direction: row;
            justify-content: center;
        }

        .profile-sidebar .nav-item.logout .nav-left {
            flex-direction: row;
        }

        .profile-sidebar .nav-item.vendor-link {
            grid-column: 1 / -1;
            flex-direction: row;
            justify-content: center;
        }

        .profile-sidebar .nav-item.vendor-link .nav-left {
            flex-direction: row;
        }

        .lg\:flex-shrink-0 {
            width: 100% !important;
        }
    }

    @media (max-width: 768px) {
        .profile-sidebar {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            padding: 16px 18px !important;
            gap: 3px;
            border-radius: 14px;
        }

        .profile-sidebar .sidebar-header {
            padding-bottom: 14px;
            margin-bottom: 14px;
        }

        .profile-sidebar .brand {
            font-size: 20px;
        }

        .profile-sidebar .brand i {
            font-size: 22px;
        }

        .profile-sidebar .nav-item {
            padding: 8px 10px;
            font-size: 12px;
        }

        .profile-sidebar .nav-item .nav-left {
            gap: 6px;
        }

        .profile-sidebar .nav-item .nav-left i {
            font-size: 14px;
            width: 18px;
        }

        .profile-sidebar .user-name {
            font-size: 16px;
        }

        .profile-sidebar .user-email {
            font-size: 12px;
        }

        /* ensure content scrolls */
        .flex-1 {
            overflow-y: auto !important;
            height: auto !important;
            min-height: 100vh;
        }

        body {
            overflow-x: hidden;
        }
    }

    @media (max-width: 576px) {
        .profile-sidebar {
            grid-template-columns: 1fr 1fr;
            gap: 2px;
            padding: 12px 14px !important;
            border-radius: 12px;
        }

        .profile-sidebar .sidebar-header {
            padding-bottom: 12px;
            margin-bottom: 12px;
        }

        .profile-sidebar .brand {
            font-size: 18px;
            gap: 8px;
        }

        .profile-sidebar .brand i {
            font-size: 20px;
        }

        .profile-sidebar .user-info {
            margin-bottom: 8px;
        }

        .profile-sidebar .user-name {
            font-size: 15px;
        }

        .profile-sidebar .user-email {
            font-size: 11px;
        }

        .profile-sidebar .nav-item {
            padding: 8px 8px;
            font-size: 11px;
            border-radius: 8px;
        }

        .profile-sidebar .nav-item .nav-left {
            gap: 5px;
        }

        .profile-sidebar .nav-item .nav-left i {
            font-size: 13px;
            width: 16px;
        }

        .profile-sidebar .nav-item.logout {
            padding: 8px 8px;
        }

        .profile-sidebar .nav-item.vendor-link {
            padding: 8px 8px;
        }

        /* extra small screens */
        .profile-sidebar .nav-item span {
            font-size: 10px;
        }

        /* hide some meta info on very small screens */
        .xs\:inline {
            display: none !important;
        }
    }

    @media (max-width: 400px) {
        .profile-sidebar {
            grid-template-columns: 1fr 1fr;
            gap: 2px;
            padding: 10px 10px !important;
            border-radius: 10px;
        }

        .profile-sidebar .sidebar-header {
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .profile-sidebar .brand {
            font-size: 16px;
            gap: 6px;
        }

        .profile-sidebar .brand i {
            font-size: 18px;
        }

        .profile-sidebar .user-name {
            font-size: 14px;
        }

        .profile-sidebar .user-email {
            font-size: 10px;
        }

        .profile-sidebar .nav-item {
            padding: 6px 6px;
            font-size: 10px;
            border-radius: 6px;
        }

        .profile-sidebar .nav-item .nav-left {
            gap: 4px;
        }

        .profile-sidebar .nav-item .nav-left i {
            font-size: 12px;
            width: 14px;
        }

        .profile-sidebar hr {
            margin-bottom: 8px;
        }
    }

    /* ensure scrolling works on all devices */
    html,
    body {
        height: 100%;
        overflow-x: hidden;
    }

    #app,
    main {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* fix for header overlap */
    .profile-sidebar {
        scroll-margin-top: 70px;
    }

    /* small screens - ensure the sidebar doesn't break */
    @media (max-width: 480px) {
        .profile-sidebar .brand {
            font-size: 17px;
        }
        .profile-sidebar .brand i {
            font-size: 19px;
        }
        .profile-sidebar .nav-item span {
            font-size: 10px;
        }
        .profile-sidebar .nav-item .nav-left i {
            font-size: 12px;
            width: 14px;
        }
    }
</style>

@endsection