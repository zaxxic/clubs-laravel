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
	


<div class="container">
	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama Lengkap</th>
				<th>Tanggal Lahir</th>
				<th>Nomer punggung</th>
				<th>Nama pungung</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($data2 as $item)
				
			
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$item->name}}</td>
				<td>{{$item->date}}</td>
				<td>{{$item->nopung}}</td>
				<td>{{$item->nickname}}</td>

			</tr>
			@endforeach
		</tbody>
		
	</table>

	<a style="ma" href="{{Route('dashboard')}}"><button style="margin-top: 10px;" class="button-34" role="button">kembali</button></a>
</div>
</body>
</html>