<?php include 'Header.php';?>   

<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Danh sách đơn chưa xác nhận</h2>
		<div class="product-group">
			<div class="row">
				<?php foreach ($arBill as $key => $value): ?>
					<?php if(count($arBill)<2) : ?>
					<div class="col-md-12 col-sm-12 col-12">
					<?php endif ?>
					<?php if(count($arBill)<=4 && count($arBill)>=2) : ?>
					<div class="col-md-6 col-sm-6 col-12">
					<?php endif ?>
					<?php if(count($arBill)>4) : ?>
					<div class="col-md-3 col-sm-6 col-12">
					<?php endif ?>
						<div class="card card-product mb-3">
					  		<div class="card-body">
					    	<h5 class="card-title">Mã hóa đơn: <?php echo $value['idhd'] ?></h5>
					    	<p class="card-text">Người mua: <?php echo $value['tenuser'] ?></p>
					   		<a href="showDetailBill/<?php echo $value['idhd'] ?>" class="btn btn-success">Chi tiết</a>
					    	<a href="deleteBill/<?php echo $value['idhd'] ?>" class="btn btn-danger">Hủy đơn</a>
					  		</div>
						</div>
					</div>			
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!-- end list product -->
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>