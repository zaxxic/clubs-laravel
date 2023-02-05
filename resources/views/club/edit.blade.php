<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>create table (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('update')}}" method="POST" enctype="multipart/form-data">
    @csrf
		@method('put')
<input type="hidden" name="id" value="{{$data->id}}">
<input type="hidden" name="default" value="{{$data->logo}}">

<img src="{{asset('./img/'.$data->logo)}}" width="200px" height="200px" alt="">

		<div class="input-group mb-3">
			<input type="file" class="form-control" name="logo" value="{{$data->logo}}" id="inputGroupFile02">
			<label class="input-group-text" for="inputGroupFile02">Upload</label>
		  </div>


		  <div class="input-group mb-3">
			<input value="{{$data->name_club}}" type="text" class="form-control"  placeholder="Recipient's username" name="name" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Nama team</span>
		  </div>

		  <div class="input-group mb-3">
			<input value="{{$data->asal_club}}" type="text" class="form-control" name="asal"   placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan asal Club</span>
		  </div>
	<button class="button-34" style="margin-left: 550px" type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>

