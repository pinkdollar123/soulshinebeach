<header>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="/" class="navbar-brand mx-2" style="font-size: 32px; font-family: 'Great Vibes', cursive;">Soul Shine Beach House</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" 
            data-bs-target="#collapse"><span class="navbar-toggler-icon"></span></button> 
        <div class="collapse navbar-collapse" id="collapse">
        <div class="navbar-nav ms-auto mx-4">
        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="true">Home</a>
        <a href="/accommodations" class="nav-item nav-link {{ Request::is('accommodations') ? 'active' : '' }}">Accomodation</a>
        <a href="/daytour" class="nav-item nav-link {{ Request::is('daytour') ? 'active' : '' }}">Day Tour</a>
        <a href="/gallery" class="nav-item nav-link {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
        <a href="/contactus" class="nav-item nav-link {{ Request::is('contactus') ? 'active' : '' }}">Contact Us</a>

            @guest
            <div class="d-flex gap-2">
                <a href="/login" class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}">Login</a>
                {{-- <a style="color:white; text-decoration:none
                ;" href="/login" class="nav-item nav-link">Login</a> --}}
                <a style="color:white; text-decoration:none
                ;" href="/register" class="btn btn-success">Register</a>
            </div>
            @endguest
            @auth
            <div class="ms-2">
                <a  href="/logout" class="btn btn-warning">Logout</a>
                <a  href="/reservation" class="btn btn-primary">Book Now</a>
                <a  href="/reserved" class="btn btn-success">My Reservation</a>
            </div>
            @endauth
            
        </div>
        </div>
        </div>
        </nav>
</header>
