<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>My Profile - FABRIQ</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        /* custom styles for responsiveness and edit interactions */
        .edit-btn {
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 6px;
            border-radius: 50%;
        }
        .edit-btn:hover {
            background-color: rgba(24, 49, 83, 0.1);
            transform: scale(1.1);
        }
        .edit-btn:active {
            transform: scale(0.9);
        }
        .editable-field {
            transition: all 0.2s ease;
        }
        .editable-field.editing {
            background-color: #E8EEF8;
            border: 2px solid #183153;
        }
        .editable-field input {
            background: transparent;
            border: none;
            outline: none;
            width: 100%;
            font-size: inherit;
            color: inherit;
        }
        .editable-field input:focus {
            outline: none;
        }
        /* sidebar scroll fix */
        .sidebar-scroll {
            overflow-y: auto;
            max-height: calc(100vh - 80px);
        }
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-scroll::-webkit-scrollbar-track {
            background: #E2E8F0;
            border-radius: 10px;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #183153;
            border-radius: 10px;
        }
        /* responsive adjustments */
        @media (max-width: 1024px) {
            .sidebar {
                width: 320px !important;
            }
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100% !important;
                min-height: auto !important;
                padding: 12px !important;
            }
            .profile-content {
                padding: 20px !important;
            }
            .grid-cols-2 {
                grid-template-columns: 1fr !important;
            }
            .flex.gap-16 {
                gap: 20px !important;
                flex-wrap: wrap;
            }
            .max-w-xl {
                max-width: 100% !important;
            }
            .nav-search {
                display: none !important;
            }
            .nav-links {
                display: none !important;
            }
        }
        @media (max-width: 640px) {
            .sidebar {
                padding: 8px !important;
            }
            .sidebar .text-2xl {
                font-size: 1.1rem !important;
            }
            .sidebar .space-y-10 {
                gap: 12px !important;
            }
            .profile-content {
                padding: 16px !important;
            }
            .profile-content .w-36 {
                width: 100px !important;
                height: 100px !important;
            }
        }
        /* mobile menu toggle */
        .mobile-menu-btn {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: flex !important;
            }
        }
        .sidebar-hidden {
            display: none;
        }
        @media (max-width: 768px) {
            .sidebar-hidden {
                display: block;
            }
            .sidebar-visible {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-[#F7F9FC]">

    <!-- Navbar -->
    <nav class="bg-white border-b">
        <div class="max-w-full px-4 sm:px-6 md:px-8 py-3 md:py-4 flex items-center justify-between flex-wrap gap-2">

            <div class="flex items-center gap-2 md:gap-3">
                <img src="https://placehold.co/40x40/183153/white?text=F" class="h-8 md:h-10" alt="">
                <h1 class="text-2xl md:text-3xl font-bold text-[#183153]">FABRIQ</h1>
            </div>

            <ul class="hidden md:flex gap-6 lg:gap-12 text-[#5A6475] font-medium">
                <li><a href="/">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{ route('vendors') }}">Vendors</a></li>
                <li><a href="{{ route('how-it-works') }}">How We Work</a></li>
            </ul>

            <div class="flex items-center gap-3 md:gap-5">

                <div class="relative nav-search">
                    <input type="text"
                        placeholder="Search"
                        class="w-48 lg:w-72 border rounded-xl py-2 px-4 pr-10 outline-none text-sm">
                    <i class="fa fa-search absolute right-4 top-3 text-gray-400"></i>
                </div>

                <button class="md:hidden mobile-menu-btn w-10 h-10 rounded-full bg-[#D8EBFF] flex items-center justify-center" onclick="toggleSidebar()">
                    <i class="fa-solid fa-bars text-[#183153] text-xl"></i>
                </button>

                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#D8EBFF] flex items-center justify-center">
                    <i class="fa-regular fa-user text-[#183153] text-lg md:text-xl"></i>
                </div>

                <div class="relative">
                    <i class="fa-solid fa-cart-shopping text-2xl md:text-3xl text-[#183153]"></i>
                </div>

            </div>
        </div>
    </nav>

    <!-- Main Section -->
    <section class="flex flex-col md:flex-row" id="mainSection">

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar w-full md:w-[420px] bg-[#EEF2F7] min-h-screen p-3 md:p-4 sidebar-scroll">

            <div class="bg-white rounded-3xl p-4 md:p-5 flex items-center justify-between text-[#6DAAF9] font-semibold text-xl md:text-2xl">
                <div class="flex items-center gap-3 md:gap-4">
                    <i class="fa-regular fa-user text-2xl md:text-3xl"></i>
                    <span>My Profile</span>
                </div>
                <button class="md:hidden" onclick="toggleSidebar()">
                    <i class="fa-solid fa-xmark text-2xl text-[#183153]"></i>
                </button>
                <i class="fa-solid fa-angle-right hidden md:block"></i>
            </div>

            <div class="mt-6 md:mt-8 space-y-6 md:space-y-10 text-xl md:text-2xl">

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-regular fa-box"></i>
                        <span>Orders</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-regular fa-heart"></i>
                        <span>Wishlist</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-regular fa-bell"></i>
                        <span>Notifications</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Saved Addresses</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-regular fa-circle-info"></i>
                        <span>App Info & Support</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>Account Actions</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-[#183153] transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Become a Vendor</span>
                    </div>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <a href="#" class="flex justify-between items-center hover:text-red-600 transition">
                    <div class="flex items-center gap-3 md:gap-5">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </div>
                </a>

            </div>
        </div>

        <!-- Profile Content -->
        <div class="flex-1 bg-white p-4 sm:p-6 md:p-10 profile-content">

            <!-- Profile Image -->
            <div class="flex justify-center mb-8 md:mb-12">

                <div class="relative">

                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300"
                        class="w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full object-cover">

                    <button class="edit-btn absolute bottom-0 right-0 w-8 h-8 sm:w-10 sm:h-10 bg-white rounded-full shadow-md flex items-center justify-center" onclick="alert('Change profile picture')">
                        <i class="fa-solid fa-pen text-[#183153] text-sm sm:text-base"></i>
                    </button>

                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">

                <!-- First Name -->
                <div>
                    <label class="block mb-2 text-[#183153] font-medium">
                        First Name
                    </label>

                    <div class="bg-[#F3F6FB] rounded-xl px-4 md:px-5 py-3 md:py-4 flex justify-between items-center editable-field" id="firstNameField">
                        <span id="firstNameDisplay">Chiranshi</span>
                        <input type="text" id="firstNameInput" value="Chiranshi" class="hidden bg-transparent outline-none w-full" />
                        <i class="fa-solid fa-pen text-[#183153] edit-btn" onclick="enableEdit('firstName')"></i>
                    </div>
                </div>

                <!-- Last Name -->
                <div>
                    <label class="block mb-2 text-[#183153] font-medium">
                        Last Name
                    </label>

                    <div class="bg-[#F3F6FB] rounded-xl px-4 md:px-5 py-3 md:py-4 flex justify-between items-center editable-field" id="lastNameField">
                        <span id="lastNameDisplay">Thummar</span>
                        <input type="text" id="lastNameInput" value="Thummar" class="hidden bg-transparent outline-none w-full" />
                        <i class="fa-solid fa-pen text-[#183153] edit-btn" onclick="enableEdit('lastName')"></i>
                    </div>
                </div>

            </div>

            <!-- Gender -->
            <div class="mt-6 md:mt-10">

                <label class="block mb-3 md:mb-4 text-[#183153] font-medium">
                    Gender
                </label>

                <div class="flex flex-wrap gap-4 md:gap-16">

                    <label class="flex items-center gap-2 md:gap-3 text-sm md:text-base">
                        <input type="radio" name="gender" value="female" checked onchange="updateGender(this)">
                        Female
                    </label>

                    <label class="flex items-center gap-2 md:gap-3 text-sm md:text-base">
                        <input type="radio" name="gender" value="male" onchange="updateGender(this)">
                        Male
                    </label>

                    <label class="flex items-center gap-2 md:gap-3 text-sm md:text-base">
                        <input type="radio" name="gender" value="other" onchange="updateGender(this)">
                        Other
                    </label>

                </div>

            </div>

            <!-- Email -->
            <div class="mt-6 md:mt-10 max-w-full md:max-w-xl">

                <label class="block mb-2 text-[#183153] font-medium">
                    Email Address
                </label>

                <div class="bg-[#F3F6FB] rounded-xl px-4 md:px-5 py-3 md:py-4 flex justify-between items-center editable-field" id="emailField">
                    <span id="emailDisplay">chiranshithummar123@gmail.com</span>
                    <input type="email" id="emailInput" value="chiranshithummar123@gmail.com" class="hidden bg-transparent outline-none w-full" />
                    <i class="fa-solid fa-pen text-[#183153] edit-btn" onclick="enableEdit('email')"></i>
                </div>

            </div>

            <!-- Mobile -->
            <div class="mt-6 md:mt-10 max-w-full md:max-w-xl">

                <label class="block mb-2 text-[#183153] font-medium">
                    Mobile Number
                </label>

                <div class="bg-[#F3F6FB] rounded-xl px-4 md:px-5 py-3 md:py-4 flex justify-between items-center editable-field" id="mobileField">
                    <span id="mobileDisplay">1234567890</span>
                    <input type="tel" id="mobileInput" value="1234567890" class="hidden bg-transparent outline-none w-full" />
                    <i class="fa-solid fa-pen text-[#183153] edit-btn" onclick="enableEdit('mobile')"></i>
                </div>

            </div>

        </div>
    </section>

    <script>
        // ========== SIDEBAR TOGGLE FOR MOBILE ==========
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'none' || sidebar.classList.contains('sidebar-hidden')) {
                sidebar.style.display = 'block';
                sidebar.classList.remove('sidebar-hidden');
                sidebar.classList.add('sidebar-visible');
            } else {
                sidebar.style.display = 'none';
                sidebar.classList.add('sidebar-hidden');
                sidebar.classList.remove('sidebar-visible');
            }
        }

        // On window resize, reset sidebar visibility for desktop
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth >= 768) {
                sidebar.style.display = 'block';
                sidebar.classList.remove('sidebar-hidden');
                sidebar.classList.add('sidebar-visible');
            } else {
                // on mobile, keep it hidden by default unless toggled
                if (!sidebar.classList.contains('sidebar-visible')) {
                    sidebar.style.display = 'none';
                    sidebar.classList.add('sidebar-hidden');
                }
            }
        });

        // ========== EDIT FUNCTIONALITY ==========
        function enableEdit(field) {
            const displayEl = document.getElementById(field + 'Display');
            const inputEl = document.getElementById(field + 'Input');
            const fieldContainer = document.getElementById(field + 'Field');

            if (displayEl.classList.contains('hidden')) {
                // Cancel edit mode - save changes
                displayEl.textContent = inputEl.value;
                displayEl.classList.remove('hidden');
                inputEl.classList.add('hidden');
                fieldContainer.classList.remove('editing');
                // Show success message
                showToast(field + ' updated successfully!');
                return;
            }

            // Enter edit mode
            displayEl.classList.add('hidden');
            inputEl.classList.remove('hidden');
            inputEl.focus();
            inputEl.select();
            fieldContainer.classList.add('editing');

            // Handle Enter key to save
            inputEl.onkeydown = function(e) {
                if (e.key === 'Enter') {
                    displayEl.textContent = inputEl.value;
                    displayEl.classList.remove('hidden');
                    inputEl.classList.add('hidden');
                    fieldContainer.classList.remove('editing');
                    showToast(field + ' updated successfully!');
                }
                if (e.key === 'Escape') {
                    inputEl.value = displayEl.textContent;
                    displayEl.classList.remove('hidden');
                    inputEl.classList.add('hidden');
                    fieldContainer.classList.remove('editing');
                }
            };

            // Handle blur (click outside) to save
            inputEl.onblur = function() {
                if (!inputEl.classList.contains('hidden')) {
                    displayEl.textContent = inputEl.value;
                    displayEl.classList.remove('hidden');
                    inputEl.classList.add('hidden');
                    fieldContainer.classList.remove('editing');
                }
            };
        }

        // ========== GENDER UPDATE ==========
        function updateGender(radio) {
            showToast('Gender updated to: ' + radio.value);
        }

        // ========== TOAST NOTIFICATION ==========
        function showToast(message) {
            // Remove existing toast
            const existingToast = document.querySelector('.custom-toast');
            if (existingToast) existingToast.remove();

            const toast = document.createElement('div');
            toast.className = 'custom-toast fixed bottom-6 left-1/2 -translate-x-1/2 bg-[#183153] text-white px-6 py-3 rounded-xl shadow-lg z-50 transition-all duration-300 text-sm md:text-base';
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(-50%) translateY(20px)';
                setTimeout(() => toast.remove(), 300);
            }, 2000);
        }

        // ========== INITIALIZE - show sidebar on desktop, hide on mobile ==========
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth < 768) {
                sidebar.style.display = 'none';
                sidebar.classList.add('sidebar-hidden');
            } else {
                sidebar.style.display = 'block';
                sidebar.classList.add('sidebar-visible');
            }
        });
    </script>

</body>
</html>
