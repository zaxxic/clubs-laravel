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
  <form action="{{Route('updatemember')}}" method="POST">
    @method('put')
		@csrf

		@if ($errors->any())
		<div class="alert alert-danger mt-4" role="alert">
			<ul>
				@foreach ($errors->all() as $item)
					<li>{{$item}}</li>
				@endforeach
			</ul>
		</div>
	@endif
    
  <input type="hidden" name="id" value="{{$data->id}}">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nama</label>
			<input type="text" value="{{$data->name}}" class="form-control" required name="name" id="exampleFormControlInput1" placeholder="masukan nama">
		  </div>

		  
<select class="form-select" aria-label="Disabled select example"  name="club_id">
	@foreach ($data1 as $item)
				<option value="{{$item->id}}" {{($item->id==$data->club_id)? "selected" : ""}} >{{$item->name_club}}</option>
	@endforeach
	</select>

	<div>
		<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Uid</label>
  <input type="text" class="form-control" value="{{$data->uid}}" required name="uid"  id="exampleFormControlInput1" placeholder="Masukan UID">
</div>
<br>

<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">umur</label>
	<input type="number" class="form-control" value="{{$data->age}}" name="age" id="exampleFormControlInput1" placeholder="Masukan Umur">
  </div>
{{-- 
  <div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">Team</label>
	<input type="text" name="team" value="{{$data->team}}" class="form-control" id="exampleFormControlInput1" placeholder="Team">
  </div> --}}

	

	<button style="margin-left:550px " type="submit" class="button-34">Kirim</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>


