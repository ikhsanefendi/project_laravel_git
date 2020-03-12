<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penambahan Siswa</title>
</head>
<body>
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
    <h1>Hello World :)</h1>
    <section class="login-maintop">
    		<div class="login-main">
			<div class="col-lg-12">
				<h1>Form Tambah Siswa</h1>
			</div>
			<form class="form-horizontal" action="/simpan" method="post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<div class="field">
			    <div class="form-group">
			        <label class="col-lg-2 control-label">Nama</label>
			        <div class="col-lg-5">
			            <input type="text" name="nama" id="nama" class="form-control">
			        </div>
			    </div>
			    <div class="form-group">
			    	<label class="col-lg-2 control-label">Email</label>
			        <div class="col-lg-5">
			            <input type="text" name="email" id="email" class="form-control">
			        </div>
			    </div>
                <div class="form-group">
			    	<label class="col-lg-2 control-label">Tempat, Tanggal Lahir</label>
			        <div class="col-lg-5">
			            <input type="date" name="ttl" id="ttl" class="form-control">
			        </div>
			    </div>
	  			<div class="form-group">
			        <label class="col-lg-2 control-label">No Telepon </label>
			        <div class="col-lg-5">
			            <input type="number" name="no" id="no" class="form-control">
			        </div>
			    <!-- </div>
                <div class="form-group">
			    	<label class="col-lg-2 control-label">Gender</label>
			        <div class="col-lg-5">
			            <input type="text" name="alamat" id="alamat" class="form-control">
			        </div>
			    </div> -->
			    <div class="form-group">
			        <label class="col-lg-2 control-label">Foto Siswa</label>
			        <div class="col-lg-5">
			            <input type="file" name="foto" id="foto" class="form-control">
			        </div>
			    </div>
			 </div>

	      		  <button class="btn btn-primary" type="submit" onChange="validate()"><i class="glyphicon glyphicon-hdd"></i> Daftar</button>
			</form>	            	
			
			</div>
		</section>
</body>
</html>