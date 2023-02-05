<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	@include('baru.navbar')

	{{-- <div class="filter" style="display: flex;flex-direction: column;margin:70px 40px 0px 60px ">
	<h4>Filter Jenis Tiket :</h4> 
	<a href="{{Route('filter',['jenist' => 'ekonomi'])}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Ekonomi</button></a>
	<a href="{{Route('filter',['jenist' => 'VIP'])}}"><button style="margin-bottom: 10px;" class="button-34" role="button">VIP</button></a>
	<a href="{{Route('filter',['jenist' => 'VVIP'])}}"><button style="margin-bottom: 10px;" class="button-34" role="button">VVIP</button></a>
	<a href="{{Route('filter',['jenist' => 'deluxe'])}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Deluxe</button></a>
	<a href="{{Route('tiket')}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Back</button></a>
</div> --}}
	<div class="container">

	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>Atas Nama</th>
				<th>Jenis Tiket</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Main</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $item)
				
			
			<tr>
				<td>{{$loop->iteration}}</td>

				<td>{{$item->name}}</td>
				<td>{{$item->jenist}}</td>
				<td>{{$item->jenisk}}</td>
				<td>{{$item->tanggal}}</td>

				<td><a href="{{Route('delet',['id'=>$item->id])}}"><button class="button-33">Hapus</button></a> || <a href="{{Route('perbaruii',['id'=>$item->id])}}"><button class="button-33">Edit</button></a></td>
			</tr>
			@endforeach
		</tbody>
		<a href="{{Route('tambahtiket')}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Tambah</button></a>
		
	</table>

	<a style="ma" href="{{Route('dashboard')}}"><button style="margin-top: 10px;" class="button-34" role="button">kembali</button></a>
</div>
</body>
</html>