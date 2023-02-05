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
    
    

<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <img class="mb-4" src="/img/ball.png" alt="" width="90" height="90">
    <h1 class="h3 mb-3 fw-normal">Please login</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control " id="name" placeholder="masukan username" autofocus required>
      <label for="name">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>

      {{-- @if ($errors->any())
			<div class="alert alert-danger mt-4" role="alert">
				<ul>
					@foreach ($errors->all() as $item)
						{{$item}}
					@endforeach
				</ul>
			</div>
		@endif --}}

    </div>
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
  </form>
  <div class="login">
  Belum registtasi <a href="/register">click disni</a>
  </div>
</main>




    
  </body>
</html>
