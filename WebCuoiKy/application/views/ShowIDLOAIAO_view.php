<!DOCTYPE html>
<html>
<style>
    .a{
        height:500px;
    }
	.a:hover
	{
		transform: scale(1.08);
        transition: all 0.4s ease-in-out
	}
	.bg-image{
		width: 220px;
		height: 320px;
	} 
	.card-text{
	    font-size:20px;
	    color:red;
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
					<h2>
						<!-- <?php $i =0 ?>
						<?php foreach ($ao as $key => $value): ?>
							<?php $i++ ?>
							<?php foreach ($arLoaiao as $key => $value1): ?>
								<?php if ($value['idloaiao']==$value1['idloaiao']&&$i==1): ?>
									<?php echo "Tất cả sản phẩm thuộc loại ".$value1['tenloaiao'] ?>
								<?php endif ?>
							<?php endforeach ?>
						<?php endforeach ?> -->
					</h2>
				</div>	
			<div class="product-group">
				<div class="row">
					<?php foreach ($arao as  $value): ?>
						<div class="col-md-3 col-sm-6 col-12 ">
							<div class="card card-product mb-3 a">
								<div class="bg-image ">
							  		<img class="card-img-top w-100 img-thumbnail" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
							  	</div>
							<div class="card-body">
							    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
							    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
							    <a href="<?php echo base_url()?>index.php/HomePage/IDLOAI/<?php echo $value['id'] ?>" class="btn btn-primary">Xem thêm</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<?php for ($i=1; $i <= $config['maxPage']  ; $i++) { 
					?>
					<a href="<?php echo base_url()?>index.php/HomePage/IDLOAIAO/<?php echo $config['product_id'].'?page='.$i ?>"><?php echo $i; ?></a>
						<?php
				} ?>
			</div>
		</div>
		<?php endif ?>
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.js"></script>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>