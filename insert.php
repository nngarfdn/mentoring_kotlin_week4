<?php

	include_once('koneksi.php');

	if (!empty($_POST['mahasiswa_nama']) && !empty($_POST['mahasiswa_nohp']) && !empty($_POST['Mahasiswa_alamat'])) {

		$mahasiswa_nama = $_POST['mahasiswa_nama'] ;
		$mahasiswa_nohp = $_POST['mahasiswa_nohp'] ;
		$Mahasiswa_alamat = $_POST['Mahasiswa_alamat'] ;

		$query = "INSERT INTO mahasiswa(mahasiswa_nama, mahasiswa_nohp, Mahasiswa_alamat) VALUES ('$mahasiswa_nama','$mahasiswa_nohp','$Mahasiswa_alamat')" ;
		
		$insert = mysqli_query($connect, $query);

		if ($insert) {
			set_response(true, "Success insert data");
			# code...
		} else {
			set_response(false, "Failed insert data");

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