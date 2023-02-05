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
	<form action="{{Route('savemember')}}" method="POST">
		@if ($errors->any())
			<div class="alert alert-danger mt-4" role="alert">
				<ul>
					@foreach ($errors->all() as $item)
						<li>{{$item}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@csrf
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nama</label>
			<input required type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="masukan nama">
		  </div>

	<div>
		<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Uid</label>
  <input required type="text" class="form-control"  name="uid" id="exampleFormControlInput1" placeholder="Masukan UID">
</div>
<br>
<select class="form-select" aria-label="Disabled select example"  name="club_id">
@foreach ($data1 as $item)
			<option value="{{$item->id}}" >{{$item->name_club}}</option>
@endforeach
</select>

<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">umur</label>
	<input required type="number" class="form-control" name="age" id="exampleFormControlInput1" placeholder="Masukan Umur">
  </div>
{{-- 
  <div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">Team</label>
	<input required type="text" name="team" class="form-control" id="exampleFormControlInput1" placeholder="Team">
  </div> --}}

	

	<button style="margin-left:550px " type="submit" class="button-34">Kirim</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
