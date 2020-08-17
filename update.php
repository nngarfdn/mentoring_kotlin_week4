<?php

	include_once('koneksi.php');

	if (!empty($_POST['id_mahasiswa']) && !empty($_POST['mahasiswa_nama']) && !empty($_POST['mahasiswa_nohp']) && !empty($_POST['Mahasiswa_alamat'])) {

		$id_mahasiswa = $_POST['id_mahasiswa'] ;
		$mahasiswa_nama = $_POST['mahasiswa_nama'] ;
		$mahasiswa_nohp = $_POST['mahasiswa_nohp'] ;
		$Mahasiswa_alamat = $_POST['Mahasiswa_alamat'] ;

		$query = "UPDATE mahasiswa set mahasiswa_nama = '$mahasiswa_nama' , mahasiswa_nohp = '$mahasiswa_nohp', Mahasiswa_alamat = '$Mahasiswa_alamat' WHERE id_mahasiswa = '$id_mahasiswa' " ;
		
		$update = mysqli_query($connect, $query);

		if ($update) {
			set_response(true, "Success update data");
			# code...
		} else {
			set_response(false, "Failed update data");

		}
		# code...
	}else {
		set_response(false, "Nama, Nomor HP, dan alamat harus diisi");
	}

	function set_response($isSuccess, $message) {
		$result = array(
					'isSuccess' => $isSuccess,
					'message' => $message );

		echo json_encode($result);
	}