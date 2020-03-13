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
				<h1>Update Siswa</h1>
			</div>
			@foreach($data as $key)
			<form class="form-horizontal" action="/edit/{{$key->id}}" method="post" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<div class="field col-sm-8 offset-sm-2">
			    <div class="form-group">
			        <label class="col-lg-12 control-label">Nama</label>
			        <div class="col-lg-12">
			            <input type="text" name="nama" id="nama" class="form-control" value="{{$key->nama}}">
			        </div>
			    </div>
			    <div class="form-group">
			    	<label class="col-lg-12 control-label">Email</label>
			        <div class="col-lg-12">
			            <input type="email" name="email" id="email" class="form-control" value="{{$key->email}}">
			        </div>
			    </div>
                <div class="form-group">
			    	<label class="col-lg-12 control-label">Tempat, Tanggal Lahir</label>
			        <div class="col-lg-12">
			            <input type="date" name="ttl" id="ttl" class="form-control" value="{{$key->ttl}}">
			        </div>
			    </div>
	  			<div class="form-group">
			        <label class="col-lg-12 control-label">No Telepon </label>
			        <div class="col-lg-12">
			            <input type="number" name="no" id="no" class="form-control" value="{{$key->no_telp}}">
			        </div>
			    </div>
                <div class="form-group">
			    	<label class="col-lg-2 control-label">Gender</label>
					
			        <div class="col-lg-5">
						<?php if($key->gender=="laki-laki"){?>	
							<input type="radio" name="gender" id="laki" value="laki-laki" checked="true"> Laki - Laki   
			            	<input type="radio" name="gender" id="perempuan" value="perempuan"> Perempuan
						<?php }else {?>
							<input type="radio" name="gender" id="laki" value="laki-laki"> Laki - Laki   
			            	<input type="radio" name="gender" id="perempuan" value="perempuan" checked="true"> Perempuan
						<?php } ?>
			        </div>
					
			    </div>
                <div class="form-group">
			        <label class="col-lg-12 control-label">Foto Siswa</label>
			        <div class="col-lg-12">
                        <img src="<?php echo asset('img/'.$key->foto)?>" class="img-responsive" style="margin-left: auto;margin-right: auto; margin-top: auto;margin-bottom: auto; width:150px; height:100px;" alt="user">
			            <input type="file" name="foto" id="foto" class="form-control">
			        </div>
			    </div>
            <button class="btn btn-primary" type="submit" onChange="validate()"><i class="glyphicon glyphicon-hdd"></i> Daftar</button>
			 </div>
             @endforeach             
            
			</form>	            	
			
			</div>
		</section>
@endsection

