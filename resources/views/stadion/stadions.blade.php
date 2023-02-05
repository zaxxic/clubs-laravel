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


<div class="container">
	
	<a href="{{Route('creates')}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Tambah</button></a>
	<table>
		<thead>
			<tr>
				<th>no</th>
				<th>Nama Stadion</th>
				<th>Tempat</th>
				<th>Ukuran Stadion</th>
				<th>Tanggal</th>
                <th>Lolos Uji Coba</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $item)
				
			
			<tr>
				<td>{{$loop->iteration}}</td>
				
				<td>{{$item->name}}</td>
				<td>{{$item->tempat}}</td>
				<td>{{$item->ukuran}} m²</td>
				<td>{{$item->tanggal}}</td>
				<td>{{$item->lolos}}</td>
				<td><a href="{{Route('delete',['id'=>$item->id])}}"><button class="button-33">Hapus</button></a> ||<a href="{{Route('edits',['id'=>$item->id])}}"><button class="button-33">Edit</button></a></td>
			</tr>
			@endforeach
		</tbody>
		
		
	</table>
	<a href="{{Route('dashboard')}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Kembali</button></a>
</div>
</body>
</html>