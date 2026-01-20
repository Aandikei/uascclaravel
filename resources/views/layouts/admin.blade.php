<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark px-4">
        <span class="navbar-brand fw-semibold">Admin Panel</span>

        <ul class="navbar-nav ms-auto align-items-center">

            {{-- PROFILE DROPDOWN --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button"
                    data-bs-toggle="dropdown">
                    <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center"
                        style="width:32px;height:32px;">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <span>{{ auth()->user()->name }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            Profile
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item text-danger">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            <div class="col-md-2 bg-light vh-100 p-0">
                @include('profile.partials.sidebar')
            </div>

            {{-- Content --}}
            <div class="col-md-10 p-4">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
