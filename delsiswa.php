<?php
// Update 9 Dec 09:44
//by Septiyansujatmiko


	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$id = $_GET['a'];
	
	if(!is_numeric($id)){
		exit('Access Forbiden');
	}
	
	$siswa= new Siswa();
	$data=$siswa->deleteSiswa($id);

	if (empty($data)) {
		echo "data sukses dihapus";
	}

?>

<br />

 <a href="siswa.php">Kembali</a>