<div class="main-container" id="main-container">
<div id="sidebar" class="sidebar responsive">
	<ul class="nav nav-list">
		<li>
			<a href="<?=base_url('diagram');?>">
				<i class="menu-icon fa fa-pencil orange"></i>
					LAPORAN
				<b class="arrow fa fa-angle-right"></b>
			</a>
			<b class="arrow"></b>
		</li>

		<li>
			<a href="<?=base_url('penjualan');?>">
				<i class="menu-icon fa fa-pencil orange"></i>
					PENJUALAN
				<b class="arrow fa fa-angle-right"></b>
			</a>
			<b class="arrow"></b>
		</li>

		<li>
			<a href="<?=base_url('penjualan/cek_jual');?>">
				<i class="menu-icon fa fa-pencil orange"></i>
					CEK PENJUALAN
				<b class="arrow fa fa-angle-right"></b>
			</a>
			<b class="arrow"></b>
		</li>
	</ul>
</li>
	</ul>
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>