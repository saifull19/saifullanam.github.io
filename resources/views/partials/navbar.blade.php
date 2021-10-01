<div class="container">
    

<nav class="navbar bg-primary navbar-expand-lg navbar-dark justify-content-center">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/img/favicon.png" alt="" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                
            </ul>

            
            <ul class="navbar-nav ms-auto">

                @auth
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                        <li><hr class="dropdown-divider"></li>
                        <li>
                           <form action="/logout" method="post">
                            @csrf
                             <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Log Out></button>
                            </form>
                           
                        </li>
                    </ul>
                    </li>
                    
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
                @endauth
            </ul>

            
            </div>
        </div>
    </nav>

    
</div>