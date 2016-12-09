<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$age='';
$siswa = new Siswa();
$hitungAge = new Age($age);
$data = $siswa->readAllSiswa();

?>
<h3 style ="font-weight:bold;"><a href = "tsiswa.php">
		Tambah siswa
		</a></h3><br />
<table border="1px">
	<tr>
		<th>NO</th>
		<th>NIS</th>
		<th>Full Name</th>
		<th>Email</th>
		<th>Nationality</th>
		<th>Detail</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php
	$n = 1;
	foreach ($data as $d) : ?>
	<tr>
	<td><?php echo $n++ ?></td>
	<td><?php echo $d['id_siswa']; ?></td>
	<td><?php echo $d['full_name']; ?></td>
	<td><?php echo $d['email']?></td>
	<td><?php echo $d['nationality']; ?></td>
	<td>
		<a href = "dsiswa.php?a=<?php echo $d['id_siswa']?>">
		Detail
		</a>
	</td>
	<td>
		<a href = "usiswa.php?a=<?php echo $d['id_siswa']?>">
		Edit
		</a>
	</td>
	<td>
		<a href = "delsiswa.php?a=<?php echo $d['id_siswa']?>">
		Delete
		</a>
	</td>
	</tr>
	<?php endforeach ?>
</table>