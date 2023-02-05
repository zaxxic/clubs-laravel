<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>create table (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('/style/style.css')}}">
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	{{-- @include('partials.navbar') --}}
</head>
<body>
	
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('savepemain')}}" method="POST">
		@csrf
		
				<div class="input-group mb-3">
					<input required type="text" class="form-control" placeholder="Nama Lengkap" name="name" aria-label="Masukan username" aria-describedby="basic-addon2">
					<span class="input-group-text" id="basic-addon2">Masuakn Nama lengkap</span>
				  </div>
		
		<div class="input-group mb-3">
		  <input required type="date" name="date" class="form-control" placeholder="Masukan Tanggal lahir" aria-label="Recipient's username" aria-describedby="basic-addon2">
		  <span class="input-group-text" id="basic-addon2">Tanggal Lahir</span>
		</div>

		<select class="form-select" aria-label="Disabled select example"  name="club_id">
			@foreach ($data as $item)
			<option value="{{$item->id}}" >{{$item->name_club}}</option>
			@endforeach
		</select>

		  <div class="input-group mb-3">
			<input required type="number" name="nopung" class="form-control" placeholder="Masukan Nomer Punggung "aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Nomer Punggung</span>
		  </div>

		  <div class="input-group mb-3">
			<input required type="text" name="nickname" class="form-control" placeholder="Nama Punggung" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Nama Punggung</span>
		  </div>



	<button class="button-34" style="margin-left:550px" type="submit">Kirim</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
