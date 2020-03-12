<!DOCTYPE html>
<html>
<head>
	<title>Halaman Siswa</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Data Siswa</h3>
                <a href="/add" class="btn btn-success glyphicon-plus"> Add Data</a>
                <br></br>
                <br></br>

				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>TTL</th>
						<th>No Telepon</th>
						<th>Gender</th>
                        <th>Foto</th>
                        <th>Action</th>
					</tr>
					<?php foreach($siswa as $key){?>
					<tr>
						<td><?php echo $key->nama ?></td>
						<td><?php echo $key->email ?></td>
						<td><?php echo $key->ttl ?></td>
						<td><?php echo $key->no_telp ?></td>
						<td><?php echo $key->gender ?></td>
						<td><?php echo $key->foto ?></td>

						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/<?php echo $key->id ?>">Edit</a>
							<a class="btn btn-danger btn-sm" href="/hapus/<?php echo $key->id ?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>                
				</table>
			</div>
		</div>
	</div>
 
 
</body>
</html>