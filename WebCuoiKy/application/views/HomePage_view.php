<!DOCTYPE html>
<html>
<style>
	.a:hover
	{
		transform: scale(1.08);
        transition: all 0.4s ease-in-out
	} 
	
	.bg-image{
		width: 220px;
		height: 300px;
	} 
	.bg-image:hover
	{
	    
	}
</style>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<?php include 'slide.php'; ?>
<hr> 
<div class="container" >
	<?php if ($arao): ?>
		<div class="row mt-5">
		<div class="list-product-subtitle" >
			<h2>ÁO THUN
				<a href="<?php base_url()?>index.php/HomePage/IDLOAIAO/2" class="float-right" style="font-size: 25px">Xem thêm</a>
			</h2>
		</div>
		<div class="product-group">
			<div class="row">
				<?php $i=0; ?>
				<?php foreach ($arAoThun as $key => $value): ?>
				<?php if ($i<8): ?>
					<?php $i++ ?>
					<div class="col-md-3 col-sm-6 col-12">
						<div class="card card-product mb-3 a" >
						  <img class="card-img-top" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
						    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
						    <a href="<?php echo base_url()?>index.php/HomePage/IDLOAI/<?php echo $value['id'] ?>" class="btn btn-primary">Xem thêm</a>
						 </div>
					</div>
				</div>
						<?php endif ?>		
				<?php endforeach ?>
			</div>
		</div>
		<div class="list-product-subtitle">
			<h2>ÁO KHOÁC
				<a href="<?php base_url()?>index.php/HomePage/IDLOAIAO/1" class="float-right" style="font-size: 25px">Xem thêm</a>
			</h2>
		</div>
		<div class="product-group">
			<div class="row">
				<?php $i=0; ?>
				<?php foreach ($arAoKhoac as $key => $value): ?>
					<?php if ($i<8): ?>
						<?php $i++ ?>
						<div class="col-md-3 col-sm-6 col-12">
							<div class="card card-product mb-3 a">
							  <img class="card-img-top" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
							    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
							    <a href="#" class="btn btn-primary">Xem thêm</a>
							  </div>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
		</div>
		<div class="list-product-subtitle">
			<h2>ÁO SƠ MI
				<a href="<?php base_url()?>index.php/HomePage/IDLOAIAO/5" class="float-right" style="font-size: 25px">Xem thêm</a>
			</h2>
		</div>
		<div class="product-group">
			<div class="row">
				<?php $i=0; ?>
				<?php foreach ($arAoSoMi as $key => $value): ?>
					<?php if ($i<8): ?>
						<?php $i++ ?>
					<div class="col-md-3 col-sm-6 col-12">
						<div class="card card-product mb-3 a">
						  <img class="card-img-top" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
						    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
						    <a href="#" class="btn btn-primary">Xem thêm</a>
						  </div>
						</div>
					</div>	
					<?php endif ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php endif ?>
	
</div>
<!-- end list product -->
<!-- form add san pham-->
<!-- end form add san pham-->
<!-- Load jquery trước khi load bootstrap js -->
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>