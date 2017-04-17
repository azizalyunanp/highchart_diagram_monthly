<div class="main-content">
<div class="page-content">
	<div class="page-header">
		<h1>
		PENJUALAN
		</h1>
	</div><!-- /.page-header -->
<!--CONTENT-->
	<div class="row">
   <h4> Lihat Penjualan Barang </h4> <br>
   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<td>No</td>
   			<td>Nonota</td>
   			<td>Total</td>
   			<td>View</td>
   		</tr>
   	</thead>

   	<tbody>
   	<?php 
   	$no = 1;
   	foreach ($jual as $items) { ?>
   		<tr>	
   			<td><?=$no++;?></td>
   			<td><?=$items->nonota;?></td>
   			<td><?=$items->total;?></td>
   			<td><a href='<?=base_url("penjualan/det_jual/$items->nonota");?>'>Cek Pemesanan</a></td>
   		</tr>
   	<?php } ?>
   	</tbody>
   </table>
<!--END CONTENT-->
</div>
</div>