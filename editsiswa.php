<?php
// update dari server 
//oleh septiyan sujatmiko
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST['kirim'])){
	exit('Acces Forbiden');
}

$siswa= new siswa();

if($_FILES['in_foto']['error']==0){
if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload file');
}
}

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto'] = "img/".$_POST['in_nis'].'.png';
$data = $siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data Berhasil Diupdate <br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>";
?>
