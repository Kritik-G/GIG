<div class="sidebar d-flex flex-column p-3">
    <!-- User Info -->
    <div class="text-center mb-4">
        <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="User">
        <h5>{{ auth()->user()->name ?? 'Admin' }}</h5>
        <small>{{ auth()->user()->role ?? 'Administrator' }}</small>
    </div>

    <!-- Navigation -->
    <nav class="nav flex-column">
        <a href="{{ route('admin.dashboard') }}"
            class="side-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠
            Dashboard</a>
        <a href="#">👥 Users</a>
        <a href="#">📊
            Reports</a>
        <a href="#">⚙️
            Settings</a>
    </nav>

    <hr class="border-gray-600 my-3">

    <h6 class="text-gray-400 px-3">Quick Actions</h6>
    <nav class="nav flex-column mb-3">
        <a href="#" class="side-link">➕ Add User</a>
        <a href="#" class="side-link">📤 Upload File</a>
        <a href="#" class="side-link">🕒 Recent Activity</a>
    </nav>
</div>
