	<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
				<span class="blue bolder">Project Diagram</span>
			</div>
		</div>
	</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>
		<!--DT PICKER-->
		<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<!-- ace scripts -->
		<script src="<?=base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?=base_url();?>assets/js/ace.min.js"></script>
		<!--REPOSITORY-->
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.maskMoney.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.dynatable.js"></script>
		
		<script type="text/javascript">
			$('#k_brg').change(function(){
				var nama 	= $('#k_brg option:selected').attr('data-nama');
				var harga 	= $('#k_brg option:selected').attr('data-harga');
				$('#nm_brg').val(nama);
				$('#harga').val(harga);
			})
		</script>
</body>