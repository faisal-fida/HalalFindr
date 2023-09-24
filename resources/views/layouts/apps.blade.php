<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection("header")
    @yield("header")
    @else
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-form.css') }}">
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Find the best Halal Food Near You!</title>
    @endif
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
                    <li class="nav_item"><a href="{{ route('/') }}" class="nav_link"><i class="fas fa-search"></i></a>
                    </li>
                    @if(Request::is('/') || Request::is('login') || Request::is('register'))
                    <li class="nav_item"><a href="{{ route('login') }}" class="nav_link">Login</a></li>
                    <li class="nav_item"><a href="{{ route('register') }}" class="nav_link">Register</a></li>
                    @else

                    @hasSection('cart')
                    @yield('cart')
                    @else
                    <li class="nav_item"><a href="{{ route('/') }}" class="nav_link"><i
                                class="fas fa-shopping-cart"></i></a></li>
                    @endif
                    <li class="nav_item"><a href="{{ route('profile', ['id' => 1]) }}" class="nav_link">Lucifer</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

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

    <script>
    $(document).ready(function() {
        $('#data-table').DataTable();
    });


    $(document).ready(function() {
        $('#data-table1').DataTable();
    });

    $(document).ready(function() {
        $('#data-table2').DataTable();
    });

    $(document).ready(function() {
        $('#data-table3').DataTable();
    });

    $(document).ready(function() {
        $('#data-table4').DataTable();
    });
    </script>

</body>

</html>