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
	<form action="{{Route('savetiket')}}" method="POST">
		@csrf

  <div class="input-group mb-3">
    <input name="name" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <span class="input-group-text" id="basic-addon2">Masukan Nama anda</span>
  </div>
  
    <select class="form-select" aria-label="Disabled select example"  name="jenist">
        <option value="ekonomi">ekonomi</option>
        <option value="VIP">VIP</option>
        <option value="VVIP">VVIP</option>
        <option value="deluxe">deluxe</option>
    </select>
    <br>

    <div class="input-group mb-3">
      <input name="tanggal" type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">Masukan Tanggal Nonton</span>
    </div>
    
    
    <div class="form-check">
      <input class="form-check-input" name="jenisk" value="Laki-Laki" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-Laki
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" name="jenisk" value="Perempuan" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Perempuan
      </label>
    </div>
	

	<button class="button-34" style="margin-left: 550px" type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
