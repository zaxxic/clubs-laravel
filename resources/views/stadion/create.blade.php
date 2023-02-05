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
	<form action="{{Route('saves')}}" method="POST">
		@csrf

		<div class="input-group mb-3">
			<input required type="text" class="form-control" placeholder="Recipient's username" name="name" aria-label="Masukan username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masuakn Nama Stadion</span>
		  </div>

		  <div class="input-group mb-3">
			<input required type="text" name="tempat" class="form-control" placeholder="Masukab letak Stadion "aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masukan Daerah Stadion</span>
		  </div>

		  <div class="input-group mb-3">
			<input required type="text" name="ukuran" class="form-control" placeholder="dalam bentuk persegi (m²)" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Masuakn Ukuran Stadion</span>
		  </div>

		  
		  <div class="input-group mb-3">
			<input required type="date" name="date" class="form-control" placeholder="Masukan Tanggal Jadinya Stadion" aria-label="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-text" id="basic-addon2">Tanggal Jadi Stadion</span>
		  </div>

		  <div style="margin-left: 20px">
		  <span>Lolos Ujian Atau Tidak</span>
		  <div class="form-check">
			<input class="form-check-input" value="Iya" type="radio" name="udin" id="flexRadioDefault1">
			<label class="form-check-label" for="flexRadioDefault1">
			  Iya
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" value="Tidak" type="radio" name="udin" id="flexRadioDefault2" checked>
			<label class="form-check-label" for="flexRadioDefault2">
			  Tidak
			</label>
		  </div>
		</div>

	

<button style="margin-left:550px" class="button-34"type="submit">Kirim</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
