<div class="my-0 p-0 bg-body rounded shadow-sm">
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary p-2" style="--bs-bg-opacity: .6">
            <div class="container-fluid">
              <a class="navbar-brand" a href="{{url('dashboard')}}"> Zaxic <span style="color: red">Club</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Table
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" a href="/clubs">Clubs</a></li>
                      <li><a class="dropdown-item" a href="/stadions">Stadiom</a></li>
                      <li><a class="dropdown-item" a href="/tiket">Tiket</a></li>
                      <li><a class="dropdown-item" a href="/pemain">Pemain</a></li>
                      <li><a class="dropdown-item" a href="/adst">Ads</a></li>
                      <li><a class="dropdown-item" a href="/membert">Member</a></li>
                    </ul>
                  </li>
                  <ul class="navbar-nav ms-auto"  >
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="text-transform: capitalize" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Selamat Datang {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                        </ul>
                      </li>
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}
                        "><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                    @endauth
                </ul>
                </ul>
              </div>
            </div>
          </nav>