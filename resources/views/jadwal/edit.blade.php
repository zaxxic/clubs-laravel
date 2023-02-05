<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS Table Highlight (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">
  

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('updatej')}}" method="POST">
        @method('put')
		@csrf
	<input type="text" name="team1" value="{{$data->team1}}" placeholder="Masukan Nama team 1">
    <input type="hidden" name="id" value="{{$data->id}}">

  <input type="date" name="date" value="{{$data->date}}" placeholder="Masukan tempat Stadion">

    <input type="time" name="jam" value="{{$data->jam}}" placeholder="Masukan ukuran Dalam bentuk luas persegi">
 
	<input type="text" value="{{$data->team2}}" name="team2" placeholder="Masukan Tanggal di buat" >


	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
