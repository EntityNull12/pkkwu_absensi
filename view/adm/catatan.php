<link rel="stylesheet" href="../../lib/font/semibold.css">
<h3 class='page-header'  style="font-family: Poppins-semibold;">Catatan Kegiatan Siswa</h3>
	<div class='table-responsive'>
	<?php 
		if (isset($_GET['id_siswa'])) {
			if ($_GET['id_siswa']!=="") {
				$id_user=$_GET['id_siswa'];
				include './view/note.php';
			} else {
				header("location:catatan");
			}
		} else {
			$sql = "SELECT*FROM detail_user ORDER BY sklh_user ASC";
			if ($conn->query($sql)->num_rows!==0) {
				echo "<table class='table table-striped' style='width:100%'>
					<thead>
						<tr>
							<th style='width: 2%'>No</th>
							<th style='width: 40%'>Nama Siswa</th>
							<th style='width: 40%'>Asal Sekolah</th>
							<th></th>
						</tr>
					</thead>
					<tbody>";
				$query_siswa = $conn->query($sql);
				$no=0;
				while ($get_siswa = $query_siswa->fetch_assoc()) {
					$id_siswa = $get_siswa['id_user'];
					$name = $get_siswa['name_user'];
					$school = $get_siswa['sklh_user'];
					$no++;
					echo "<tr>
							<td>$no</td>
							<td>$name</td>
							<td>$school</td>
							<td><a class='btn btn-primary btn-sm' href='catatan&id_siswa=$id_siswa' title='Catatan $name'>Lihat Catatan</a></td>
						</tr>";
				}
				$conn->close();
				echo "</tbody></table>";
			} else {
				echo "<div class='alert alert-danger'><strong>Tidak ada Siswa untuk ditampilkan</strong></div>";
			}
		}
	 ?>
</div>