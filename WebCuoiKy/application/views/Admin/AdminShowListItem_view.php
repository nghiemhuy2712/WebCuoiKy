<?php include 'Header.php';?>

<!-- list product -->
<div class="container">
	<form action="<?php echo site_url('Admin/search_keyword');?>" method = "post" align="center" >
		<input type="text" name = "keyword" />
		<input type="submit" value = "Search" />
	</form>
	<div class="row mt-5">
		<h2 class="list-product-title">Danh sách sản phẩm</h2>
		<div class="product-group">
			<div class="row">
				<?php foreach ($arao as $key => $value): ?>
					<?php if(count($arao)<2) : ?>
					<div class="col-md-12 col-sm-12 col-12">
					<?php endif ?>
					<?php if(count($arao)<=4 && count($arao)>=2) : ?>
					<div class="col-md-4 col-sm-6 col-12">
					<?php endif ?>
					<?php if(count($arao)>4) : ?>
					<div class="col-md-3 col-sm-6 col-12">
					<?php endif ?>
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="<?php echo $value['hinh'] ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $value['ten'] ?></h5>
					    <p class="card-text">ID :<?php echo $value['id'] ?></p>
					    <p class="card-text">Giá :<?php echo $value['gia'] ?></p>
					    <p class="card-text">Số lượng: <?php echo $value['soluong'] ?> </p>
						<p class="card-text">Loại :<?php foreach ($arLoaiao as $key2 => $value2): ?>
					    	<?php if($value2['idloaiao'] == $value['idloaiao']) echo $value2['tenloaiao']?> 
					    <?php endforeach ?></p>
					    <p class="card-text">Kích thước :<?php foreach ($arsize as $key2 => $value2): ?>
					    	<!-- idsizeao -->
					    	<?php if($value2['idsizeao'] == $value['idloaisize']) echo $value2['tensizeao']?> 
					    <?php endforeach ?></p>
					    <p class="card-text">Màu :<?php foreach ($arMau as $key2 => $value2): ?>
					    	<?php if($value2['idmau'] == $value['idloaimau']) echo $value2['tenmau']?> 
					    <?php endforeach ?></p>
					    <a href="showEditP/<?php echo $value['id'] ?>" class="btn btn-success">Sửa</a>
					    <a href="deleteP/<?php echo $value['id'] ?>" class="btn btn-danger">Xóa</a>
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