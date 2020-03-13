@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Dashboard Kepala Sekolah</h1></div>
                <div class="card-body">
                <div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Data Guru</h3>
                <a href="/register" class="btn btn-success glyphicon-plus"> Add Data</a>
                <br></br>
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<!-- <th>Password</th> -->
                        <th>Action</th>
					</tr>
					<?php foreach($siswa as $key){?>
					<tr>
						<td><?php echo $key->name ?></td>
						<td><?php echo $key->email ?></td>
						<!-- <td><?php echo $key->password ?></td> -->
						<td>
							<a class="btn btn-danger btn-sm" href="/hapus_guru/<?php echo $key->id ?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>                
				</table>
			</div>
		</div>
	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection