<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <title>Find the best Halal Food Near You!</title>
</head>

<body>
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="{{ route ('/') }}" class="nav_logo">Halal Food Findr</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="{{ route ('/') }}" class="nav_link active-link">Home</a></li>
                    <li class="nav_item"><a href="{{ route ('restaurant') }}" class="nav_link">Restaurant</a></li>
                    <li class="nav_item"><a href="{{ route ('menu') }}" class="nav_link">Menu</a></li>
                    </li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav_item"><a href="{{ route('login') }}" class="nav_link">Login</a></li>
                    @endif

                    @if (Route::has('register'))

                    <li class="nav_item"><a href="{{ route('register') }}" class="nav_link">Register</a></li>
                    @endif
                    @else
                    <li class="nav_item"><a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="nav_link">
                            {{ Auth::user()->name }}</a></li>


                    <li class="nav_item"><a href="{{ route('logout') }}" class="nav_link"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <div class="home_container bd-container bd-grid">
        <div class="home_data">
            <h1 class="home_title">Halal-Food Findr</h1>
            <h2 class="home_subtitle">Discover the Finest<br> Halal Food</h2>
            <a href="{{ route('menu') }}" class="button">View Menu</a>
            <a href="{{ route('restaurant') }}" class="button">Restaurants</a>
            <a href="{{ route('admin') }}" class="button">Admin</a>
        </div>
        <img src="{{ asset('images/home.png') }}" alt="" class="home_img">
    </div>

    <footer class="footer section bd-container">
        <div class="footer_container bd-grid">
            <div class="footer_content">
                <a href="#" class="footer_logo">Halal Food</a>
                <span class="footer_description">Web App</span>
                <div>
                    <a href="#" class="footer_social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer_social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer_social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Services</h3>
                <ul>
                    <li><a href="#" class="footer_link">Delivery</a></li>
                    <li><a href="#" class="footer_link">Pricing</a></li>
                    <li><a href="#" class="footer_link">Fast food</a></li>
                    <li><a href="#" class="footer_link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Information</h3>
                <ul>
                    <li><a href="#" class="footer_link">Event</a></li>
                    <li><a href="#" class="footer_link">Contact us</a></li>
                    <li><a href="#" class="footer_link">Privacy policy</a></li>
                    <li><a href="#" class="footer_link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Adress</h3>
                <ul>
                    <li>123 Main Street</li>
                    <li>Cityville, Province X1Y 2Z3</li>
                    <li>+1 (555) 123-4567</li>
                    <li>info@halalfoods.com</li>
                </ul>
            </div>
        </div>

        <p class="footer_copy">&#169; 2023 Halal Findr. All right reserved</p>
    </footer>

</body>

</html>