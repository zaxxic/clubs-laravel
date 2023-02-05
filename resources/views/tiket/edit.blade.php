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
    <form action="{{Route('updatet')}}" method="POST" enctype="multipart/form-data">
      @method('put')
      @csrf
      
      
      <input type="hidden" name="id" value="{{$data->id}}">
  <div class="input-group mb-3">
    <input name="name" type="text" value="{{$data->name}}" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <span class="input-group-text" id="basic-addon2">Masukan Nama anda</span>
  </div>
  
    <select class="form-select" aria-label="Disabled select example"  name="jenist">
        <option {{ ($data->jenist=="ekonomi")? "selected" : "" }} value="ekonomi">ekonomi</option>
        <option {{ ($data->jenist=="VIP")? "selected" : "" }} value="VIP">VIP</option>
        <option {{ ($data->jenist=="VVIP")? "selected" : "" }} value="VVIP">VVIP</option>
        <option {{ ($data->jenist=="deluxe")? "selected" : "" }} value="deluxe">deluxe</option>
    </select>
    <br>

    <div class="input-group mb-3">
      <input name="tanggal" value="{{$data->tanggal}}" type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">Masukan Tanggal Nonton</span>
    </div>
    
    
    <div class="form-check">
      <input {{($data->jenisk=="Laki-Laki")? "checked" : ""}} class="form-check-input" name="jenisk" value="Laki-Laki" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Laki-Laki
      </label>
    </div>
    <div class="form-check">
      <input {{($data->jenisk=="Perempuan")? "checked" : ""}} class="form-check-input" name="jenisk" value="Perempuan" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Perempuan
      </label>
    </div>






{{-- 
	<input type="text" name="name" value="{{$data->name}}" placeholder="Masukan Nama Stadion">

	<select name="jenist">
        <option value="ekonomi" {{ ($data->jenist=="ekonomi")? "selected" : "" }}>ekonomi</option>
        <option value="VIP" {{ ($data->jenist=="VIP")? "selected" : "" }}>VIP</option>
        <option value="VVIP" {{ ($data->jenist=="VVIP")? "selected" : "" }}>VVIP</option>
        <option value="deluxe" {{ ($data->jenist=="deluxe")? "selected" : "" }}>deluxe</option>
    </select>

	<input type="date" value="{{$data->tanggal}}" name="tanggal">

	<input type="radio" name="jenisk" {{($data->jenisk=="Laki-Laki")? "checked" : ""}} value="Laki-laki">Laki-laki <br>
	<input type="radio" name="jenisk" {{($data->jenisk=="Perempuan")? "checked" : ""}} value="Perempuan">Perempuan --}}

	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
