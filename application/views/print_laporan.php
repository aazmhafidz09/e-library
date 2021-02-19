<html>
<head>
	<title>MEMBUAT CETAK PRINT LAPORAN DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
<table border = >
		<thead>
			<tr>
				<th>No</th>
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
				
				
				<td><?php echo $m->kode_mobil ?></td>
				<td><?php echo $m->tgl_rental ?></td>
				<td><?php echo $m->tgl_kembali ?></td>
				<td><?php echo $m->harga_sewa ?></td>
				<td><?php echo $m->status_peminjaman ?></td>
				<td><?php echo $m->status_pengembalian ?></td>
				
			   
			</tr>
			<?php } ?>
		</tbody>
	</table>
                    

    <script type ="text/javascript">
    window.print();
    </script>
</body>
</html>