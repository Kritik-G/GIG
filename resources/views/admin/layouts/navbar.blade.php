<style>
    /* Navbar base style */
    .navbar-custom {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.85);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        padding: 0.75rem 1rem;
    }

    /* Nav links */
    .navbar-custom .nav-link {
        font-weight: 600;
        color: #1e293b;
        position: relative;
        transition: color 0.3s ease, transform 0.2s ease;
        margin-right: 1rem;
    }

    .navbar-custom .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0%;
        height: 2px;
        background: linear-gradient(90deg, #1e3a8a, #2563eb, #3b82f6);
        transition: width 0.3s ease;
    }

    .navbar-custom .nav-link:hover {
        color: #2563eb;
        transform: translateY(-2px);
    }

    .navbar-custom .nav-link:hover::after,
    .navbar-custom .nav-link.active::after {
        width: 100%;
    }

    /* CTA / Admin button */
    .navbar-custom .cta-btn,
    .navbar-custom .grd {
        padding: 0.5rem 1.2rem;
        border-radius: 25px;
        font-weight: 600;
        color: #fff;
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        text-decoration: none;
    }

    .navbar-custom .cta-btn:hover,
    .navbar-custom .grd:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
    }

    /* Brand gradient styles */
    .brand-gig {
        font-size: 1.25rem;
        /* text-xl */
        background: linear-gradient(to bottom, #4DA6FF, #2D3DFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    .brand-innovation {
        font-size: 1rem;
        /* text-l */
        color: #00CFCF;
        font-weight: bold;
    }

    .brand-consultancy {
        font-size: 1rem;
        /* text-l */
        background: linear-gradient(to bottom, #FF9966, #FF4D33);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    /* Adjust dropdown alignment */
    .dropdown-menu-end {
        right: 0;
        left: auto;
    }

    /* Responsive tweaks */
    @media (max-width: 991.98px) {
        .navbar-custom .nav-link {
            margin-right: 0;
            margin-bottom: 0.5rem;
        }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">
        <!-- Sidebar toggle for mobile -->
        <button class="btn btn-dark d-lg-none me-2" id="sidebarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <span class="brand-gig">GIG</span>
            <span class="brand-innovation"> Innovation</span>
            <span class="brand-consultancy"> & Consultancy</span>
        </a>

        <!-- Navbar toggle for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <!-- Search form -->
            <form class="d-flex me-3 my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search">
            </form>

            <!-- Nav links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">🔔 Notifications</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        {{ auth()->user()->name ?? 'User' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
