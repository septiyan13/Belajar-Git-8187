<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$age='';
$siswa = new Siswa();
$hitungAge = new Age($age);
$data = $siswa->readAllSiswa();

?>
<table border="1px">
	<tr>
		<th>NO</th>
		<th>NIK</th>
		<th>Full Name</th>
		<th>Date OF Birth</th>
		<th>Age</th>
		<th>Nationality</th>
		<th>Detail</th>
	</tr>
	<?php
	$n = 1;
	foreach ($data as $d) : ?>
	<tr>
	<td><?php echo $n++ ?></td>
	<td><?php echo $d['nis']; ?></td>
	<td><?php echo $d['full_name']; ?></td>
	<td><?php echo $d['date_ob']?></td>
	<td><?php  
			$tgl = $d['date_ob'];
			if($tgl=="0000-00-00"){
				echo '<p style="color:red;">Data lahir tidak valid</p>';
			}
			elseif(!empty ($tgl)){
			$exec = $hitungAge->age($tgl);
			echo $exec->y."tahun ".$exec->m."bulan ".$exec->d."hari";
			}else{
				echo '<p style="color:red;">Data lahir tidak valid</p>';
			}
			
		?>
	</td>
	<td><?php echo $d['nationality']; ?></td>
	<td>
		<a href = "dsiswa.php?a=<?php echo $d['nis']?>">
		Detail
		</a>
	</td>
	</tr>
	<?php endforeach ?>
</table>