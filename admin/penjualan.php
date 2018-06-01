<?php include 'header.php'; ?>
 <div id="page-wrapper">
            <div class="row">


<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Penjualan</h3>
<br/>
<br/>

 
            	<table class="table table-hover">
	<tr>
		<th class="col-md-2">No</th>
		<th class="col-md-2">Nama Pembeli</th>
		<th class="col-md-2">Kode Barang</th>
		<th class="col-md-2">No faktur</th>
		<th class="col-md-2">Tanggal Faktur</th>
		<th class="col-md-2">Jumlah Barang</th>
		<th class="col-md-2">Harga Satuan</th>
<th class="col-md-2">Total Harga</th>
		<th class="col-md-2">Opsi</th>
	</tr>
	<?php 
$query = mysqli_query($mysqli,"SELECT * FROM m_penjualan");

if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['nama_pembeli'] ?></td>
			<td><?php echo $data['kode_barang']  ?></td>
			<td><?php echo $data['no_faktur'] ?></td>
			<td><?php echo $data['tgl_faktur'] ?></td>
			<td><?php echo $data['jumlah_barang'] ?></td>
			<td>Rp.<?php echo number_format($data['harga_satuan']) ?>,-</td>
			<td>Rp.<?php echo number_format($data['total_harga']) ?>,-</td>
			<td>
					<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='delet_act.php?kode_barang=<?php echo $data['kode_barang']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>	
			
		<?php 
	}}
	?>
	
</table>