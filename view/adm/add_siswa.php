<h3 class="page-header">Tambah Siswa Baru</h3>
<?php 
	if (isset($_GET['st'])) {
		if ($_GET['st']==1) {
			echo "<div class='alert alert-warning'><strong>Berhasil Ditambahkan.</strong></div>";
		} elseif ($_GET['st']==2) {
			echo "<div class='alert alert-danger'><strong>Gagal Menambahkan.</strong></div>";
		} elseif ($_GET['st']==3) {
			echo "<div class='alert alert-danger'><strong>Maaf Email sudah digunakan.</strong></div>";
		} elseif ($_GET['st']==4) {
      echo "<div class='alert alert-danger'><strong>Semua kolom wajib di isi.</strong></div>";
    } elseif ($_GET['st']==5) {
      echo "<div class='alert alert-danger'><strong>Katasandi tidak cocok!</strong></div>";
    } elseif ($_GET['st']==6) {
      echo "<div class='alert alert-danger'><strong>NIS sudah terdaftar!</strong></div>";
    }
	}

 ?>
<form class="form-horizontal" role="form" style="width:80%" onSubmit="return validasi()" name="formulir" method="post" action="./model/proses.php" autocomplete="off">
  <div class="form-group my-2">
    <label class="control-label col-sm-2" for="name">NIS:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="nis" placeholder="Masukan NIS" required>
    </div>
  </div>
  
  <div class="form-group my-2">
    <label class="control-label col-sm-2" for="name">Nama Lengkap:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group my-2">
    <label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
    <div class="col-sm-10">
    	<label class="radio-inline my-2"><input type="radio" name="jk" id="jk" value="L" class="mx-2">Laki-laki</label>
		<label class="radio-inline"><input type="radio" name="jk" id="jk" value="P" class="mx-2">Perempuan</label>
    </div>
  </div>
  <div class="form-group my-2">
    <label class="control-label col-sm-2" for="sekolah">Nama Sekolah:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sklh" placeholder="Masukan Nama Sekolah" required>
    </div>
  </div>
  <div class="form-group my-2">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Masukan username" required>
    </div>
  </div>
  <div class="form-group">
  <fieldset>
    <label class="control-label col-sm-2">Katasandi:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pwd" placeholder="Masukan katasandi" id="password" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"></label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="pwd_cek" placeholder="Ulangi katasandi"  id="confirm_password" required>
    </div>
    </fieldset>
  </div>
  <div class="form-group my-3"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="add_siswa">Simpan</button>
      <button type="reset" class="btn btn-danger ms-2" name="add_siswa">Reset</button>
    </div>
  </div>
</form>
