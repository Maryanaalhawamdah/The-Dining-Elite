
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Restaurantly Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Restaurantly - v3.1.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center justify-content-lg-between">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <a href="main"><img class="logo" src="/images/test1.png"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link scrollto active" href="/main">Home</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="restaurantDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Restaurant </i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="restaurantDropdown">
                            @foreach($resturants as $resturant)
                                <li class="nav-item"> <a class="nav-link" href="{{url('resdetail',$resturant->id)}}">{{ $resturant->name }}</a></li>
                            @endforeach
                            <li class="nav-item"><a class="nav-link" href="/resturants">more restaurant</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#contact">Contact us</a></li>
                </ul>



            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user white-icon"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    @guest
                    <li>
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li>
                        <a href={{url('/user/index')}}><span class="dropdown-item">
                            {{ Auth::user()->name }}
                        </span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                        >
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
</nav>

            <a href="/book" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

        </div>
    </header><!-- End Header -->

    @yield('contentnav')


</body>

</html>
