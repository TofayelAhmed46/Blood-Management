<div class="navber">
    <nav class="navbar navbar-expand-lg bg-body-tertiary  ">
        <div class="container-fluid bgcolor ">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('ui/frontend') }}/assets/image/logo.png" width="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item black">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('donarview')}}">Donar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signup')}}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
