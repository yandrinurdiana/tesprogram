<?php include 'header.php'; 

// Display selected user data based on kode_barang
// Getting kode_barang from url
$kode_barang = $_GET['kode_barang'];
 
// Fetech user data based on kode_barang
$result = mysqli_query($mysqli, "SELECT * FROM m_barang WHERE kode_barang=$kode_barang");
 
while($user_data = mysqli_fetch_array($result))
{

?>

 <div id="page-wrapper">
            <div class="row">
	
	<form name="update_user" method="post" action="edit_act.php">
		<table class="table">
			<tr>
				
				<td><input type="hidden" name="kode_barang" value="<?php echo $user_data['kode_barang'] ?>"></td>

			</tr>
			<tr> 
				<td>Nama Barang</td>
				<td><input type="text" class="form-control"  name="nama_barang" value="<?php echo $user_data['nama_barang']?>"></td>
			</tr>
			<tr> 
				<td>Harga Jual</td>
				<td><input type="text" class="form-control"  name="harga_jual" value="<?php echo $user_data['harga_jual']?>"></td>
			</tr>
			<tr> 
				<td>Harga beli</td>
				<td><input type="text" class="form-control"  name="harga_beli" value="<?php echo $user_data['harga_beli']?>"></td>
			</tr>
			<tr> 
				<td>Satuan</td>
				<td><input type="text" class="form-control"  name="satuan" value="<?php echo $user_data['satuan']?>"></td>
			</tr>
			<tr> 
				<td>Kategori</td>
				<td><input type="text" class="form-control"  name="kategori" value="<?php echo $user_data['kategori']?>"></td>
			</tr>
			<tr> 
				<td>Stok Barang</td>
				<td><input type="text" class="form-control"  name="stok_barang" value="<?php echo $user_data['stok_barang']?>"></td>
			</tr>
			<tr>
				
				<td><input type="submit"  name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php
}
?>