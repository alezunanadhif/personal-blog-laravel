    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="fa-solid fa-book fs-3"><span class="fs-3"> • Blog-Ku</span></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
                @if(!Auth::check())
                <form style="display: none"></form>
                @else
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>
                @endif

                <div class="text-end">
                    @if(!Auth::check())
                    <a href="{{ url('login')}}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ url('register')}}" class="btn btn-outline-light me-2">Register</a>
                    @else
                    <button href="#" class="btn btn-outline-light me-2">{{ Auth::user()->name }}</button>
                    <img src="https://ui-avatars.com/api/?background=000&color=fff&name={{ Auth::user()->name }}" alt="..." class="img-fluid me-1" style="max-width: 14%; height: auto; border-radius: 50%;">
                    <a href="{{ url('logout')}}" type="button" class="btn btn-warning">Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </header>