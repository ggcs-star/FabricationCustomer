@extends('app')

@section('title', 'FabriQ - Notifications')

@section('content')

<!-- ===== LAYOUT: sidebar + main ===== -->
<div class="app-layout">

    <!-- ===== SIDEBAR (left) - using component ===== -->
    <aside class="sidebar-wrapper">
        @include('sidebar')
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">

        <!-- search bar -->
        <div class="top-bar">
            <div class="search-wrap">
                <input type="text" placeholder="Search notifications...">
                <button><i class="fas fa-search"></i> Search</button>
            </div>
        </div>

        <!-- notifications card -->
        <div class="notif-card">

            <!-- card header -->
            <div class="notif-header">
                <h2>
                    <i class="fas fa-bell"></i> Notifications
                    <span class="notif-badge">5 new</span>
                </h2>
                <div class="notif-actions">
                    <button class="mark-read"><i class="fas fa-check-double"></i> Mark all read</button>
                    <button><i class="fas fa-sliders-h"></i> Filter</button>
                </div>
            </div>

            <!-- notification list -->
            <div class="notif-list">

                <!-- 1. Order Shipped (unread) -->
                <div class="notif-item unread">
                    <div class="notif-icon ship"><i class="fas fa-truck"></i></div>
                    <div class="notif-content">
                        <div class="title">
                            Order Shipped
                            <span class="new-tag">NEW</span>
                        </div>
                        <div class="desc">
                            Your order <strong>Royal Fortress Steel Gate</strong> has been successfully placed and is now being processed by the vendor.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 2 min ago</span>
                            <span><i class="far fa-user-circle"></i> Vendor: SteelCraft</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button class="primary-sm"><i class="fas fa-eye"></i> Track order</button>
                            <button>Dismiss</button>
                        </div>
                    </div>
                </div>

                <!-- 2. New Quote Received (unread) -->
                <div class="notif-item unread">
                    <div class="notif-icon quote"><i class="fas fa-file-invoice"></i></div>
                    <div class="notif-content">
                        <div class="title">
                            New Quote Received
                            <span class="new-tag">NEW</span>
                        </div>
                        <div class="desc">
                            A vendor has reviewed your requirements and shared a detailed quote for your request.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 47 min ago</span>
                            <span><i class="fas fa-tag"></i> Quote #Q-1024</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button class="primary-sm"><i class="fas fa-file-signature"></i> View quote</button>
                            <button>Compare</button>
                        </div>
                    </div>
                </div>

                <!-- 3. Profile Updated (unread) -->
                <div class="notif-item unread">
                    <div class="notif-icon profile"><i class="fas fa-user-edit"></i></div>
                    <div class="notif-content">
                        <div class="title">
                            Profile Updated
                            <span class="new-tag">NEW</span>
                        </div>
                        <div class="desc">
                            Your profile information has been successfully updated. You can review or edit it anytime.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 2 hours ago</span>
                            <span><i class="fas fa-check-circle" style="color:#10b981;"></i> Verified</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button><i class="fas fa-user"></i> View profile</button>
                            <button>Dismiss</button>
                        </div>
                    </div>
                </div>

                <!-- 4. Vendor Accepted Request (unread) -->
                <div class="notif-item unread">
                    <div class="notif-icon vendor"><i class="fas fa-handshake"></i></div>
                    <div class="notif-content">
                        <div class="title">
                            Vendor Accepted Your Request
                            <span class="new-tag">NEW</span>
                        </div>
                        <div class="desc">
                            A vendor has accepted your request and will start working on your requirements shortly.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 5 hours ago</span>
                            <span><i class="fas fa-store"></i> PrimeStruct Co.</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button class="primary-sm"><i class="fas fa-comment-dots"></i> Contact vendor</button>
                            <button>View details</button>
                        </div>
                    </div>
                </div>

                <!-- 5. Order Delivered (read) -->
                <div class="notif-item">
                    <div class="notif-icon deliver"><i class="fas fa-box"></i></div>
                    <div class="notif-content">
                        <div class="title">Order Delivered</div>
                        <div class="desc">
                            Your <strong>Aluminium Sliding Window</strong> order has been delivered. Rate your experience.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 2 days ago</span>
                            <span><i class="fas fa-star" style="color:#fbbf24;"></i> 4.8 ★</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button><i class="fas fa-star"></i> Rate now</button>
                            <button>Dismiss</button>
                        </div>
                    </div>
                </div>

                <!-- 6. Quote Expired (read) -->
                <div class="notif-item">
                    <div class="notif-icon expired"><i class="fas fa-file-alt"></i></div>
                    <div class="notif-content">
                        <div class="title">Quote Expired</div>
                        <div class="desc">
                            The quote from <strong>GlassEdge Interiors</strong> has expired. Request a new one.
                        </div>
                        <div class="meta">
                            <span><i class="far fa-clock"></i> 3 days ago</span>
                        </div>
                        <div class="notif-actions-inline">
                            <button><i class="fas fa-redo"></i> Request new</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- card footer -->
       

        </div>
        <!-- end notif-card -->

    </main>
</div>

<style>
    /* ----- all styles embedded for completeness ----- */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: #f1f5f9;
        color: #0f172a;
        line-height: 1.5;
    }

    /* ===== HIDE FOOTER ===== */
    footer {
        display: none !important;
    }

    /* ----- LAYOUT: sidebar + main ----- */
    .app-layout {
        display: flex;
        min-height: calc(100vh - 72px);
        max-width: 1440px;
        margin: 0 auto;
        background: #f8fafc;
    }

    /* ----- SIDEBAR WRAPPER ----- */
    .sidebar-wrapper {
        flex-shrink: 0;
        width: 280px;
    }

    /* override profile-sidebar styles for this page */
    .profile-sidebar {
        height: calc(100vh - 72px);
        overflow-y: auto;
        position: sticky;
        top: 72px;
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

    /* ----- MAIN CONTENT ----- */
    .main-content {
        flex: 1;
        min-width: 0;
        padding: 24px 32px 40px;
        background: #f8fafc;
        overflow-y: auto;
        height: calc(100vh - 72px);
    }

    .top-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 16px 20px;
        margin-bottom: 24px;
    }
    .top-bar .search-wrap {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 60px;
        padding: 4px 4px 4px 20px;
        border: 1px solid #e2e8f0;
        flex: 1 1 280px;
        max-width: 420px;
    }
    .top-bar .search-wrap input {
        border: none;
        outline: none;
        background: transparent;
        padding: 10px 0;
        font-size: 14px;
        width: 100%;
        color: #0f172a;
    }
    .top-bar .search-wrap input::placeholder {
        color: #94a3b8;
    }
    .top-bar .search-wrap button {
        background: #f97316;
        border: none;
        color: #fff;
        padding: 8px 18px;
        border-radius: 60px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: 0.15s;
        white-space: nowrap;
    }
    .top-bar .search-wrap button:hover {
        background: #e16e0e;
    }

    .notif-card {
        background: #ffffff;
        border-radius: 28px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.02);
        border: 1px solid #eef2f6;
        overflow: hidden;
    }

    .notif-header {
        padding: 20px 24px;
        border-bottom: 1px solid #eef2f6;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }
    .notif-header h2 {
        font-size: 22px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .notif-header h2 i {
        color: #f97316;
    }
    .notif-badge {
        background: #f97316;
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        padding: 2px 14px;
        border-radius: 40px;
        margin-left: 4px;
    }
    .notif-actions {
        display: flex;
        gap: 8px;
    }
    .notif-actions button {
        background: transparent;
        border: none;
        font-size: 13px;
        font-weight: 500;
        color: #475569;
        cursor: pointer;
        padding: 6px 16px;
        border-radius: 40px;
        transition: 0.15s;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .notif-actions button:hover {
        background: #e9edf2;
        color: #0f172a;
    }
    .notif-actions .mark-read {
        background: #f97316;
        color: #fff;
    }
    .notif-actions .mark-read:hover {
        background: #e16e0e;
    }

    .notif-list {
        display: flex;
        flex-direction: column;
    }
    .notif-item {
        padding: 18px 24px;
        border-bottom: 1px solid #f1f5f9;
        transition: background 0.1s;
        display: flex;
        gap: 16px;
    }
    .notif-item:last-child {
        border-bottom: none;
    }
    .notif-item:hover {
        background: #fafcfd;
    }
    .notif-item.unread {
        background: #fef9f4;
        border-left: 4px solid #f97316;
    }
    .notif-item.unread:hover {
        background: #fef4ea;
    }

    .notif-icon {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .notif-icon.ship {
        background: #e6f7ec;
        color: #0b7e3d;
    }
    .notif-icon.quote {
        background: #fff1e0;
        color: #b45309;
    }
    .notif-icon.profile {
        background: #e0f2fe;
        color: #0369a1;
    }
    .notif-icon.vendor {
        background: #e8e0f5;
        color: #6d28d9;
    }
    .notif-icon.deliver {
        background: #f1f5f9;
        color: #64748b;
    }
    .notif-icon.expired {
        background: #f1f5f9;
        color: #64748b;
    }

    .notif-content {
        flex: 1;
        min-width: 0;
    }
    .notif-content .title {
        font-weight: 600;
        font-size: 16px;
        color: #0f172a;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
    }
    .notif-content .title .new-tag {
        font-size: 10px;
        background: #f97316;
        color: #fff;
        padding: 1px 12px;
        border-radius: 30px;
        font-weight: 700;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }
    .notif-content .desc {
        font-size: 15px;
        color: #334155;
        margin-top: 4px;
        line-height: 1.5;
    }
    .notif-content .desc strong {
        color: #0f172a;
    }
    .notif-content .meta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 16px;
        margin-top: 6px;
        font-size: 13px;
        color: #64748b;
    }
    .notif-content .meta i {
        margin-right: 4px;
        font-size: 12px;
        color: #94a3b8;
    }
    .notif-actions-inline {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }
    .notif-actions-inline button {
        background: transparent;
        border: 1px solid #e2e8f0;
        padding: 5px 16px;
        border-radius: 40px;
        font-size: 12px;
        font-weight: 500;
        color: #1e293b;
        cursor: pointer;
        transition: 0.15s;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .notif-actions-inline button:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
    }
    .notif-actions-inline .primary-sm {
        background: #f97316;
        border-color: #f97316;
        color: #fff;
    }
    .notif-actions-inline .primary-sm:hover {
        background: #e16e0e;
        border-color: #e16e0e;
    }

    .notif-footer {
        padding: 14px 24px;
        border-top: 1px solid #eef2f6;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        color: #64748b;
        gap: 8px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .sidebar-wrapper {
            width: 240px;
        }
        .profile-sidebar {
            min-width: 220px;
            padding: 20px 16px !important;
        }
    }

    @media (max-width: 820px) {
        .app-layout {
            flex-direction: column;
        }
        .sidebar-wrapper {
            width: 100%;
        }
        .profile-sidebar {
            height: auto;
            position: static;
            border-radius: 18px;
            border-left: 4px solid #F97316;
            border-right: none;
            margin: 0 0 16px 0 !important;
            padding: 20px 24px !important;
            min-width: auto;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 4px;
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
        .main-content {
            padding: 16px;
            height: auto;
            min-height: calc(100vh - 200px);
        }
    }

    @media (max-width: 600px) {
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
        .notif-item {
            padding: 14px 16px;
            flex-wrap: wrap;
        }
        .notif-header {
            padding: 16px;
        }
        .notif-header h2 {
            font-size: 19px;
        }
        .top-bar .search-wrap {
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
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
        .profile-sidebar .nav-item span {
            font-size: 10px;
        }
        .notif-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 4px;
        }
        .notif-footer span {
            font-size: 12px;
        }
    }
</style>
@endsection