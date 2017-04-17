<div class="main-content">
<div class="page-content">
	<div class="page-header">
		<h1>
		PENJUALAN
		</h1>
	</div><!-- /.page-header -->
<!--CONTENT-->
	<div class="row">
   <h4> Penjualan Barang </h4> <br>

   <form method="post" action="<?=base_url('penjualan/add_cart');?>" class="form-horizontal">
      <div class="form-group">
         <div class="col-sm-5">
            <label class="col-sm-2">Kode Barang</label>
            <select class="col-sm-4" name="kode_brg" id="k_brg">
               <option>Kode Barang</option>
               <?php 
                  foreach ($barang as $b) {
               ?>
               <option data-nama="<?=$b->nama_brg;?>" data-harga="<?=$b->harga;?>"><?=$b->id;?></option>
               <?php } ?>
            </select>
   	  </div>
     </div>

     	<div class="form-group">
        <div class="col-sm-5">
            <label class="col-sm-2">Nama Barang</label>
            <input class="col-sm-4" name="nm_brg" type="text" id="nm_brg">
        </div>
     	</div>

     	<div class="form-group">
        <div class="col-sm-5">
            <label class="col-sm-2">Harga</label>
            <input class="col-sm-4" name="harga" type="number" id="harga" readonly="true">
        </div>
     </div>

     	<div class="form-group">
        <div class="col-sm-5">
            <label class="col-sm-2">Jumlah</label>
            <input class="col-sm-4" name="jumlah" type="number">
        </div>
     </div>

     <div class="form-group">
     		<div class="col-sm-5">
     			<button type="submit" class="btn btn-primary">TAMBAH</button>
     			<a href="<?=base_url('penjualan/save_cart');?>" class="btn btn-danger">SIMPAN</a>
     		</div>
     	</div>
   </form>

   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<td>No</td>
   			<td>Nama Barang</td>
   			<td>Harga</td>
   			<td>Jumlah</td>
   			<td>Subtotal</td>
   		</tr>
   	</thead>

   	<tbody>
   	<?php 
   	$no     = 1;
    $total  = 0;
   	foreach ($this->cart->contents() as $items) { 
    $total += $items['price'] * $items['qty'];
    ?>
   		<tr>	
   			<td><?=$no++;?></td>
   			<td><?=$items['name'];?></td>
   			<td><?=$items['price'];?></td>
   			<td><?=$items['qty'];?></td>
   			<td><?=$items['price'] * $items['qty'];?></td>
   		</tr>
   	<?php } ?>
   	</tbody>
   </table>
   <div class="pull-right">
      Total : <?=$total;?> 
    </div>
<!--END CONTENT-->
</div>
</div>