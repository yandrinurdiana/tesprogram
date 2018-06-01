
<?php include 'header.php'; ?>
 <div id="page-wrapper">
            <div class="row">
 

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
<br/>
<br/>



	
<table class="table table-hover">
	<tr>
		<th class="col-md-2">No</th>
		<th class="col-md-2">Nama Barang</th>
		<th class="col-md-2">Kategori Barang</th>
		<th class="col-md-2">Harga Beli</th>
		<th class="col-md-2">Harga Jual</th>
		<th class="col-md-2">Satuan Barang</th>
		<th class="col-md-2">Stok Barang</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
$query = mysqli_query($mysqli,"SELECT * FROM m_barang");

if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['nama_barang'] ?></td>
			<td><?php echo $data['kategori']  ?></td>
			<td>Rp.<?php echo number_format($data['harga_beli']) ?>,-</td>
			<td>Rp.<?php echo number_format($data['harga_jual']) ?>,-</td>
			<td><?php echo $data['satuan'] ?></td>
			<td><?php echo $data['stok_barang'] ?></td>
			<td>
				<a href="edit_barang.php?kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delet_act.php?kode_barang=<?php echo $data['kode_barang']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>	
			
		<?php 
	}}
	?>
	
</table><!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="insert_act.php" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang ..">
					</div>
					<div class="form-group">
						<label>Kategori Barang</label>
						 <select class="form-control" name="kategori">
    <option>sparepart motor</option>
    <option>sparepart mobil</option>
    
  </select>
					</div>
					<div class="form-group">
						<label>harga Beli</label>
						<input name="harga_beli" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Jual</label>
						<input name="harga_jual" type="text" class="form-control">
					</div>	
					<div class="form-group">
						<label>Satuan Barang</label>
						<select class="form-control" name="satuan">
    <option>pcs</option>
    <option>box</option>
    
  </select>
					</div>	
					<div class="form-group">
						<label>Jumlah stok</label>
						<input name="stok_barang" type="text" class="form-control" >
					</div>																	

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" name="Submit" value="save" />
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>