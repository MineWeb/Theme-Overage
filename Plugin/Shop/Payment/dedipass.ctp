<section id="boutique">
	<div class="shop-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
		<div class="container">
			<div class="row">
				<div class="box-center">
					<div class="title">
					<?= $Lang->get('SHOP__DEDIPASS_PAYMENT') ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
	  <div class="row">
		<div class="col-md-12">
		  <div class="panel panel-default">
			<div class="panel-body">
			  <div data-dedipass="<?= $dedipassPublicKey ?>">
				<div class="alert alert-info"><?= $Lang->get('GLOBAL__LOADING') ?>...</div>
			  </div>
			  <script src="//api.dedipass.com/v1/pay.js"></script>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</section>