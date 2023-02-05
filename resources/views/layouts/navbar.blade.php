<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2" style="--bs-bg-opacity: .6">
    <div class="container px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>

                    <form action="/logout" method="post">
                        @csrf
                        <button type="logout" style="margin:4px 30px 0 0" class="btn btn-primary text-dark btn-sm" style="--bs-bg-opacity: .6>logout</button>
                    </form>
                </li>
                <li class="nav-item "><a class="nav-link active" aria-current="page" href="/dashboard">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/clubs">Clubs</a></li>
                <li class="nav-item"><a class="nav-link" href="/stadions"> Stadiom</a></li>
                <li class="nav-item"><a class="nav-link" href="/tiket">tiket</a></li>
                <li class="nav-item"><a class="nav-link" href="/pemain ">   Pemain</a></li>
                <li class="nav-item"><a class="nav-link" href="/adst"> Administrasi</a></li>
                <li class="nav-item"><a class="nav-link" href="/membert">  Member</a></li>
            </ul>
        </div>
    </div>
</nav>