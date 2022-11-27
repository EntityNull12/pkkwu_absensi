<h3 class="page-header">Konfirmasi Absensi</h3>
<?php
  $sql = "SELECT*FROM data_absen NATURAL LEFT JOIN bulan NATURAL JOIN hari NATURAL JOIN tanggal NATURAL JOIN detail_user WHERE st_jam_msk='Menunggu' OR st_jam_klr='Menunggu'";
  $query = $conn->query($sql);
  // Notifikasi Absen
  	if (isset($_GET['ab'])) {
  		if ($_GET['ab']==1) {
  			echo "<div class='alert alert-warning'><strong>Absen telah dikonfirmasi.</strong></div>";
  		} elseif($_GET['ab']==2) {
  			echo "<div class='alert alert-danger'><strong>Gagal, Silahkan Coba Kembali!</strong></div>";
  		} elseif($_GET['ab']==3) {
        echo "<div class='alert alert-warning'><strong>Absen berhasil ditolak.</strong></div>";
      } 
  	} 

    if ($query->num_rows!==0) {
          echo "<form method='post' action='./model/proses.php'>";
          echo "<tr><th colspan='6'>Yang ditandai :
          <button type='submit' class='btn btn-primary btn-sm' name='acc_absen2'>Konfirmasi</button>&nbsp;
                  <button type='submit' class='btn btn-danger btn-sm' name='dec_absen2'/>Tolak</button>
           </th></tr>";
          echo "<div class='table-responsive'>
                 <table class='table table-striped'>
                  <thead>
                     <tr>
                     <th></th>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th></th>
                      <th>Keterangan</th>
                      <th>Hari, Tanggal</th>
                      <th>Pukul</th>
                      
                     </tr>
                  </thead>
                  <tbody>";
          $no=0;
          while ($get_absen=$query->fetch_assoc()) {
            $id_absen = $get_absen['id_absen'];
            $id_user = $get_absen['id_user'];
            $name = $get_absen['name_user'];
            $date = "$get_absen[nama_hri], $get_absen[nama_tgl] $get_absen[nama_bln] ".date("Y");
            if ($get_absen['st_jam_msk']==="Menunggu") {
              $type = "in";
              $status = "Absen masuk";
              $time = $get_absen['jam_msk'];
            }elseif ($get_absen['st_jam_klr']==="Menunggu") {
              $type = "out";
              $status = "Absen keluar";
              $time = $get_absen['jam_klr'];
            }
            $no++; 

              echo  "<tr>
                  <td>
                    <input type='checkbox' name='id_absen[]' value='$id_absen,$type'/>
                  </td>
                  <td><b>$no</b></td>
                  <td>$name</td>
                  <td>
                  <div class='d-flex flex-column'>
                  <a type='button' class='btn btn-primary btn-sm mb-1' onclick=\"window.location.href='./model/proses.php?acc_absen=$id_absen&type=$type';\">Konfirmasi</a>
                  <a type='button' class='btn btn-danger btn-sm' onclick=\"window.location.href='./model/proses.php?dec_absen=$id_absen&type=$type';\">Tolak</a></div>
                  </td>
                  <td><strong><div>$status</div></strong></td>
                  <td>$date</td>
                  <td>$time</td>
                  
                  </tr>";
          }
          
          echo "</form></tbody></table></div>";
          $conn->close();
    } else {
        echo "<div class='alert alert-danger'><strong>Tidak ada permintaan Absen.</strong></div>";
    }
?>