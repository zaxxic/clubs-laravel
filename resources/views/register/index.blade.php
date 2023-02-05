<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    

    

<link href="style/sign-in.css" rel="stylesheet">

    <style>
      body{
        background-color: darkgray;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .login->a{
        text-decoration: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    

<main class="form-regitrasi m-auto" style="width: 23%">
  {{-- do somthing in class with  login --}}
  <form action="/register" method="post">
    <img class="mb-4" src="img/ball.png" alt="" width="90" height="90">
    <h1 class="h3 mb-3 fw-normal">Registrasi form</h1>
    @csrf
    <div class="form-floating">
      <input value="{{old('name')}}" required type="text" name="name" class="form-control @error('name') is-invalid  @enderror" id="name" placeholder="Minimal 4 huruf">
      <label for="name">Nama</label>
      <div class="invalid-feedback">
        isikan nama anda dengan benar
      </div>
    </div>

    <div class="form-floating">
      <input value="{{old('email')}}" required type="email" name="email" class="form-control @error('email') is-invalid  @enderror" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
      
      <div class="invalid-feedback">
        isikan email anda dengan benar
      </div>
    </div>
    <div class="form-floating">
      <input value="{{old('password')}}" required type="password" name="password" class="form-control @error('password') is-invalid  @enderror class="form-control" id="password" placeholder="Minimal minimal 4 hururf">
      <label for="password">Password</label>
      <div class="invalid-feedback">
        isikan password anda dengan benar
      </div>
    </div>
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
    
  </form>
  <div class="login">
  udah regitrasi <a href="/login">click disni</a>
  </div>
</main>




    
  </body>
</html>
