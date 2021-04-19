<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<?php include 'slide.php'; ?>
<hr>
<div class="container">
	<div class="row mt-5">
	<!-- <?php echo $config['product_keyword'] ?> -->
				<div class="list-product-subtitle" >
					<h2>
						<?php echo "Kết quả tìm kiếm của '".$config['product_keyword']."' là :" ?>
					</h2>
				</div>
	</div>
	<div class="product-group">
		<div class="row">
					<?php foreach ($arao as  $value): ?>
						<div class="col-md-3 col-sm-6 col-12">
							<div class="card card-product mb-3">
							  <img class="card-img-top" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
							    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
							    <a href="<?php echo base_url()?>index.php/HomePage/IDLOAI/<?php echo $value['id'] ?>" class="btn btn-primary">Xem thêm</a>
							 </div>
						</div>
					</div>
					<?php endforeach ?>
					<?php for ($i=1; $i <= $config['maxPage']  ; $i++) { 
					?>
					<a href="<?php echo base_url()?>index.php/HomePage/search_keyword<?php echo '?keyword='.$config['product_keyword'].'&'.'page='.$i ?>"><?php echo $i; ?></a>
						<?php
					} ?>
		</div>
	</div>
</div>


<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>
