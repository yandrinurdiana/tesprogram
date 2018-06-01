<?php include 'header.php'; ?>
 <div id="page-wrapper">
            <div class="row">
 
	<form action="" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr> 
				<td>harga jual</td>
				<td><input type="text" name="harga_jual"></td>
			</tr>
			<tr> 
				<td>Harga Beli</td>
				<td><input type="text" name="harga_beli"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	</div>
</div>
<?php
if(isset($_POST['Submit'])) {
		$nama_barang = $_POST['nama_barang'];
		$harga_jual = $_POST['harga_jual'];
		$harga_beli = $_POST['harga_beli'];
		
		// include database connection file
		include ("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO m_barang(nama_barang,harga_jual,harga_beli) VALUES('$nama_barang','$harga_jual','$harga_beli')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}

	?>