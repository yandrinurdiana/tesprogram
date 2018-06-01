<?php 


if(isset($_POST['Submit'])) {

		$nama_barang = $_POST['nama_barang'];
		$harga_jual = $_POST['harga_jual'];
		$harga_beli = $_POST['harga_beli'];
		$satuan = $_POST['satuan'];
		$kategori = $_POST['kategori'];
		$stok_barang = $_POST['stok_barang'];
		
		// include database connection file
		include ("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO m_barang(nama_barang,kategori,harga_jual,harga_beli,satuan,stok_barang) VALUES('$nama_barang','$kategori','$harga_jual','$harga_beli','$satuan','$stok_barang')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}

header("location:stokbarang.php");
	?>

?>
