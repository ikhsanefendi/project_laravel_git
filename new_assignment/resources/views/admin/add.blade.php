@extends('layouts.app')

@section('content')

<?php if ($errors->any()){?>
  <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  <ul>
    <?php foreach ($errors->all() as $error){?>
        <li><?php echo $error ?></li>
	<?php } ?>                

 </ul>
</em>
</div>
<?php } ?>
    <section class="login-maintop">
    		<div class="login-main">
			<div class="col-sm-8 offset-sm-2">
				<h1>Form Tambah Siswa</h1>
			</div>
			<form class="form-horizontal" action="/simpan" method="post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<div class="field col-sm-8 offset-sm-2">
			    <div class="form-group">
			        <label class="col-lg-12 control-label">Nama</label>
			        <div class="col-lg-12">
			            <input type="text" name="nama" id="nama" class="form-control">
			        </div>
			    </div>
			    <div class="form-group">
			    	<label class="col-lg-12 control-label">Email</label>
			        <div class="col-lg-12">
			            <input type="email" name="email" id="email" class="form-control">
			        </div>
			    </div>
                <div class="form-group">
			    	<label class="col-lg-12 control-label">Tempat, Tanggal Lahir</label>
			        <div class="col-lg-12">
			            <input type="date" name="ttl" id="ttl" class="form-control">
			        </div>
			    </div>
	  			<div class="form-group">
			        <label class="col-lg-12 control-label">No Telepon </label>
			        <div class="col-lg-12">
			            <input type="number" name="no" id="no" class="form-control">
			        </div>
			    </div>
                <div class="form-group">
			    	<label class="col-lg-12 control-label">Gender</label>
			        <div class="col-lg-12">
						
			            <input type="radio" name="gender" id="gender" value="laki-laki"> Laki - Laki   
			            <input type="radio" name="gender" id="gender" value="perempuan"> Perempuan

			        </div>
			    </div>
			    <div class="form-group">
			        <label class="col-lg-12 control-label">Foto Siswa</label>
			        <div class="col-lg-12">
			            <input type="file" name="foto" id="foto" class="form-control">
			        </div>
			    </div>
				<button class="btn btn-primary" type="submit" onChange="validate()"><i class="glyphicon glyphicon-hdd"></i> Daftar</button>
				<a class="btn btn-primary" href="/home"> Tambah </a>
			 </div>

			</form>	            	
			
			</div>
		</section>
@endsection

