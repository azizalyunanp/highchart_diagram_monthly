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
   			<td>Barang</td>
   			<td>Jml beli</td>
   			<td>Harga</td>
   		</tr>
   	</thead>

   	<tbody>
   	<?php 
   	$no = 1;
   	foreach ($jual as $items) { ?>
   		<tr>	
   			<td><?=$no++;?></td>
   			<td><?=$items->nama_brg;?></td>
   			<td><?=$items->jml_beli;?></td>
   			<td><?=$items->harga;?></td>
   		</tr>
   	<?php } ?>
   	</tbody>
   </table>
<!--END CONTENT-->
</div>
</div>