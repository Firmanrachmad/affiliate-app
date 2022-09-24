<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Marketing Admin</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admins/dist/assets/css/bootstrap.css') }}">
    
<link rel="stylesheet" href="{{ asset('admins/dist/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('admins/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('admins/dist/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('admins/dist/assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-title">Users</li>
            
            <li
                class="sidebar-item  ">
                <a href="manageuser" class='sidebar-link'>
                    <i class="bi bi-person-fill"></i>
                    <span>Users Management</span>
                </a>
            </li>

            <li
                class="sidebar-item  ">
                <a href="detailuser" class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Users Detail</span>
                </a>
            </li>
            
            <li class="sidebar-title">Manage Content</li>

            <li
                class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-card-list"></i>
                    <span>Content Category</span>
                </a>
            </li>

            <li
                class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-card-text"></i>
                    <span>Content Articles</span>
                </a>
            </li>
            
            <li class="sidebar-title">Authentication</li>

            <li
                class="sidebar-item  ">
                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class='sidebar-link'>
                    <i class="bi bi-power"></i>
                    <span>Logout</span>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form> 
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

@yield('content')
        </div>
    </div>
    <script src="{{ asset('admins/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admins/dist/assets/js/bootstrap.bundle.min.js') }}"></script>
    
<script src="{{ asset('admins/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('admins/dist/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('admins/dist/assets/js/mazer.js') }}"></script>
</body>

</html>
