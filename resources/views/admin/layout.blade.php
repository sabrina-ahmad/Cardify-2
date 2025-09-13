<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4>Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item"><a href="{{ route('admin.hospitals.waitlist') }}" class="nav-link text-white">Hospital
                        Waitlist</a></li>
            </ul>
        </div>

        <!-- Main -->
        <div class="p-4 w-100">
            @yield('content')
        </div>
    </div>
</body>

</html>
