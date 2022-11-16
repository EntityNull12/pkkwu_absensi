<div class="navbar-header">
<button type="button" class="navbar-toggler collapsed navbar-collapsed border-0" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar">          <span class="navbar-toggler-icon"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
  <a class="navbar-brand text-white" href="home">ABSENSI</a>
  </div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right d-lg-none">
<li id="output_m" class=""></li>
<?php
	if (isset($_SESSION['pb'])) {
   			$link=array("","add_siswa","siswa","absen","absensi","req_catatan","catatan", "katasandi&id=$_SESSION[id]","keluar");
			$name=array("","Tambah Siswa","Daftar Siswa","Absen","Lihat Absensi","Catatan","Lihat Catatan","Ubah Katasandi","Keluar");

			for ($i=1; $i <= count($link)-1 ; $i++) {
				echo "<li><a href='$link[$i]' class='nav-link'>$name[$i]</a></li>";
			}
   		} elseif (isset($_SESSION['sw'])) {
			$link=array("","absen","absensi","tambah_catatan","catatan","keluar");
			$name=array("","Absen","Absensiku","Tambah Catatan","Catatan","Keluar");
			
			for ($i=1; $i <= count($link)-1 ; $i++) {
				
				echo "<li><a class='nav-link' href='$link[$i]'>$name[$i]</a></li>";
			}
   		}
 ?>
</ul>
</div>