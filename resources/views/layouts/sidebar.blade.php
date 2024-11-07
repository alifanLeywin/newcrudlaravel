<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="transition: all 0.3s ease;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="padding: 15px;">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink" style="color: #f1c40f; animation: spin 4s infinite linear;"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-light" style="font-weight: bold;">Sisfo Pegawai</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}" style="transition: all 0.3s ease;">
            <i class="fas fa-fw fa-tachometer-alt" style="color: #fff; transition: color 0.3s ease;"></i>
            <span style="color: #fff; transition: color 0.3s ease;">Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Data Departemen -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('departemen.index') }}" style="transition: all 0.3s ease;">
            <i class="fas fa-fw fa-table" style="color: #fff; transition: color 0.3s ease;"></i>
            <span style="color: #fff; transition: color 0.3s ease;">Data Departemen</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Optional Animations -->
    <style>
        .nav-item a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #f1c40f; /* Kuning cerah saat hover */
            border-radius: 8px;
        }

        .nav-item a:hover i {
            color: #f1c40f; /* Warna ikon saat hover */
        }

        .nav-item a:hover span {
            color: #f1c40f; /* Warna teks saat hover */
        }

        /* Icon Rotation Animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Sidebar Brand Text Hover Effect */
        .sidebar-brand:hover .sidebar-brand-text {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Sidebar background gradient */
        .navbar-nav {
            background: linear-gradient(45deg, #00bcd4 0%, #004080 100%); /* Gradasi cyan ke biru tua */
            transition: background 0.5s ease;
        }

        .navbar-nav:hover {
            background: linear-gradient(45deg, #004080 0%, #00bcd4 100%); /* Efek hover yang menarik */
        }
    </style>
</ul>
