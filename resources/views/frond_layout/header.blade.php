<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route(name: 'service')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route(name: 'pricing')}}" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="{{route('cars')}}" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                @guest
                    <!-- İstifadəçi daxil olmayıbsa bu linklər görünür -->
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endguest
                @auth
                    <!-- İstifadəçi daxil olubsa başqa bir məzmun göstərilə bilər -->
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->