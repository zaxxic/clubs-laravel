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
	<form action="{{Route('savejadwal')}}" method="POST">
		@csrf
		
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="team 1" name="team1" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Nama Club</span>
		  </div>

		  <div class="input-group mb-3">
			<input type="date" class="form-control" placeholder="Sponsor" name="date" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Tanggal Main</span>
		  </div>

		  <div class="input-group mb-3">
			<input type="time" class="form-control" placeholder="Sponsor" name="jam" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Jam Main</span>
		  </div>

		  <div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Sponsor" name="team2" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Team 2</span>
		  </div>





	<button class="button-34" style="margin-left: 550px" type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
