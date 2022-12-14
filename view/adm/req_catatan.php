<link rel="stylesheet" href="../../lib/font/semibold.css">
<h3 class="page-header" style="font-family: Poppins-semibold;">Konfirmasi Catatan Kegiatan Siswa</h3>
<?php
  $sql = "SELECT*FROM catatan NATURAL LEFT JOIN bulan NATURAL JOIN hari NATURAL JOIN tanggal NATURAL JOIN detail_user WHERE status_cat='Menunggu'";
  $query = $conn->query($sql);
  // Notifikasi Absen
  	if (isset($_GET['ab'])) {
  		if ($_GET['ab']==1) {
  			echo "<div class='alert alert-warning'><strong>Catatan telah dikonfirmasi.</strong></div>";
  		} elseif($_GET['ab']==2) {
  			echo "<div class='alert alert-danger'><strong>Gagal, Silahkan Coba Kembali!</strong></div>";
  		} elseif($_GET['ab']==3) {
        echo "<div class='alert alert-warning'><strong>Catatan berhasil ditolak.</strong></div>";
      } 
  	} 

    if ($query->num_rows!==0) {
          echo "<div class='table-responsive'>
                 <table class='table table-striped'>
                  <thead>
                     <tr>
                      <th>No</th>
                      <th></th>
                      <th>Nama Siswa</th>
                      <th>Hari, Tanggal</th>
                      <th width='40%'>Kegiatan</th>
                     </tr>
                  </thead>
                  <tbody>";
          $no=0;
          while ($get_note=$query->fetch_assoc()) {
            $id_note = $get_note['id_cat'];
            $id_user = $get_note['id_user'];
            $name = $get_note['name_user'];
            $note = nl2br(htmlentities($get_note['isi_cat']));
            $date = "$get_note[nama_hri], $get_note[nama_tgl] $get_note[nama_bln] ".date("Y");
           
            $no++; 
              echo  "<tr>
                  <td>$no</td>
                  <td>
                  <div class='d-flex flex-column'>
                  <button type='button' class='btn btn-primary btn-sm mb-1' onclick=\"window.location.href='./model/proses.php?acc_note=$id_note';\">Konfirmasi</button>
                  <button type='button' class='btn btn-danger btn-sm' onclick=\"window.location.href='./model/proses.php?dec_note=$id_note';\">Tolak</button>
                  </div>
                  </td>
                  <td>$name</td>  
                  <td>$date</td>
                  <td>$note</td>
                  </tr>";
          }
          echo "</tbody></table></div>";
          $conn->close();
    } else {
        echo "<div class='alert alert-danger'><strong>Tidak ada permintaan Catatan.</strong></div>";
    }
?>