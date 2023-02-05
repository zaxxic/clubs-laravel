
@auth
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Zaxic Club</title>
        {{-- <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('baru.navbar')
        <!-- Header-->
        <header class="py-5"  style="background-image: url(/bg/stadion.jpg);" >
            <div class="container px-lg-5">
                <div class="transparent p-4 p-lg-5 rounded-3 text-center">
                    <div class="m-4 m-lg-5" >
                        <h1 style="margin-bottom:100px;text-transform: uppercase" class="display-5 fw-bold">Haii {{auth()->user()->name}} soccers</h1>
                        <a class="btn btn-primary btn-lg"  href="/dashboard">Goo</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4" style="margin-top: 100px">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-suit-club-fill" viewBox="0 0 16 16">
                                        <path d="M11.5 12.5a3.493 3.493 0 0 1-2.684-1.254 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907 3.5 3.5 0 1 1-2.538-5.743 3.5 3.5 0 1 1 6.708 0A3.5 3.5 0 1 1 11.5 12.5z"/>
                                      </svg>
                                </div>
                                <a style="text-decoration: none" href="/clubs"><h2 class="fs-4 fw-bold">Clubs</h2></a>
                                <p class="mb-0">        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque
                                    nobis doloremque consequatur ut commodi, quibusdam repellendus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                                        <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                                        <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                                      </svg>
                                </div>
                                <a style="text-decoration: none" href="/pemain"><h2 class="fs-4 fw-bold">Pemain</h2></a>
                                <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque nobis doloremque consequatur ut commodi, quibusdam repellendus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
                                        <path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z"/>
                                      </svg>
                                </div>
                                <a style="text-decoration: none" href="/stadions"><h2 class="fs-4 fw-bold">Stadion</h2></a>
                                <p class="mb-0">        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque
                                    nobis doloremque consequatur ut commodi, quibusdam repellendus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-play-fill" viewBox="0 0 16 16">
                                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6 5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V5.884z"/>
                                      </svg>
                                </div>
                               <a style="text-decoration: none"  href="/tiket"><h2 class="fs-4 fw-bold">Tiket</h2></a> 
                                <p class="mb-0">        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque
                                    nobis doloremque consequatur ut commodi, quibusdam repellendus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                                      </svg>
                                </div>
                                 <a style="text-decoration: none" href="adst"><h2 class="fs-4 fw-bold">Sponsor</h2></a>
                                <p class="mb-0">        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque
                                    nobis doloremque consequatur ut commodi, quibusdam repellendus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                      </svg>
                                </div>
                                <a style="text-decoration: none" href="/membert"><h2 class="fs-4 fw-bold">Member</h2></a>
                                <p class="mb-0">        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta cumque
                                    nobis doloremque consequatur ut commodi, quibusdam repellendus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>











{{-- <h1>wellcome, {{auth()->user()->name}} jabingan</h1>
<br>
<form action="/logout" method="post">
    @csrf
    <button type="submit">keluar</button>
</form> --}}
    @else
    <h1>sykabliad</h1>
@endauth