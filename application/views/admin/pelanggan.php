<div class="page-header">
	<h3>Data Pelanggan</h3>
</div>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
			<?php
				
				foreach($pelanggan as $m){
			?>
			<tr>
				<td><?php echo $m->no_pelanggan ?></td>
				<td><?php echo $m->nama ?></td>
				<td><?php echo $m->gender ?></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>