<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"id8008057_crud1",
				"fajar",
				"id8008057_crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
