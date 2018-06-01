<?php


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
		$harga_jual = $_POST['harga_jual'];
		$harga_beli = $_POST['harga_beli'];
		$satuan = $_POST['satuan'];
		$kategori = $_POST['kategori'];
		$stok_barang = $_POST['stok_barang'];	
	
	include ("koneksi.php");
	// update user data
	$result = mysqli_query($mysqli, "UPDATE m_barang SET nama_barang='$nama_barang',harga_jual='$harga_jual',harga_beli='$harga_beli',satuan='$satuan',kategori='$kategori',stok_barang='$stok_barang' WHERE kode_barang='$kode_barang'");
	
	// Redirect to homepage to display updated user in list
	header("Location: stokbarang.php");
}
?>
