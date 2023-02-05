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
	<table>
		<thead>
			<tr>
				<th>no</th>
				<th>Logo</th>
				<th>Nama Club</th>
				<th>Asal Club</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $item)
				
			
			<tr>
				<td>{{$loop->iteration}}</td>
				<td><img width="150px" height="150px" src="img/{{$item->logo}}" alt=""> </td>
				<td>{{$item->name_club}}</td>
				<td>{{$item->asal_club}}</td>
				<td><a href="{{Route('deletec',['id'=>$item->id])}}"><button class="button-33">Hapus</button></a> || <a href="{{Route('edit',['id'=>$item->id])}}"><button class="button-33">Edit</button></a> </td>
			</tr>
			@endforeach
		</tbody>
		<a href="{{Route('create')}}"><button style="margin-bottom: 10px;" class="button-34" role="button">Tambah</button></a>
		@if ($errors->any())
		<div class="alert alert-danger mt-4" role="alert">
			<ul>
				@foreach ($errors->all() as $item)
					{{$item}}
				@endforeach
			</ul>
		</div>
	@endif
	</table>

	<a style="ma" href="{{Route('dashboard')}}"><button style="margin-top: 10px;" class="button-34" role="button">kembali</button></a>
</div>
</body>
</html>