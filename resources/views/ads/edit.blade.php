<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS Table Highlight (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('updateads')}}" method="POST" enctype="multipart/form-data">
        @method('put')
		@csrf
	<input type="file" name="gambar" >
  <input type="hidden" name="default" value="{{$data->gambar}}">


    <input type="hidden" name="id" value="{{$data->id}}">

	<input type="text" value="{{$data->name}}" name="name" placeholder="Masukan nama tim" >

	<input type="text" value="{{$data->harga}}" name="asal" placeholder="Masukan Asal Club">

	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
