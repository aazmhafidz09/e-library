<div class="page-header">
	<h3>Treansaksi Peminjaman</h3>
</div>


<br>
<br>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				
				<th>No Pelanggan</th>
				<th>kode Mobil</th>
				<th>Tanggal Kembali</th>
				<th>Tanggal Rental</th>
				<th>Harga Sewa</th>
				<th>Status Peminjaman</th>
				<th>Status Pengembalian</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($rental as $m){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				
				<td><?php echo $m->no_pelanggan ?></td>
				<td><?php echo $m->kode_mobil ?></td>
				<td><?php echo $m->tgl_rental ?></td>
				<td><?php echo $m->tgl_kembali ?></td>
				<td><?php echo $m->harga_sewa ?></td>
				<td><?php echo $m->status_peminjaman ?></td>
				<td><?php echo $m->status_pengembalian ?></td>
				
			   <!-- 	<td><?php if($m->status_mobil == "1"){
								echo "Tersedia";
					}else if($m->status_mobil == "0"){
								echo "Sedang Di Pinjam";
					}
					?></td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_mobil/'.$m->kode_mobil;?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_mobil/'.$m->kode_mobil;?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				-->
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>