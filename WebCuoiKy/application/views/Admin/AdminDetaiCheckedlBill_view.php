<?php include 'Header.php';?>   
<div class="container">
	<div class="text-xs-center">
		<h3 class="display-4">Chi tiết hóa đơn</h3> 
		<hr>
	</div>
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Admin/checkedBill/<?php echo $arBill[0]['idhd'] ?>">
			<div class="form-group row ">
				<div class="col-sm-offset-2 col-sm-10" >
					<a href="<?php echo base_url()?>index.php/Admin/showListCheckedBill" class="btn btn-secondary" style="width: 30%">Trở về</a>
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<label for="id" readonly class="col-sm-2 form-control-label">Mã hóa đơn : </label>
				<div class="col-sm-10">
					<input name="id" type="text" class="form-control" readonly id="ten" value="<?php echo $arBill[0]['idhd'] ?>">
				</div>
			</div>
			<?php foreach ($arDetail as $key => $value):?>
			<hr>
			<div class="form-group row">
				<label  class="col-sm-2 form-control-label">ID Sản phẩm :</label>
				<div class="col-sm-10">
					<p><?php echo $value['idao'] ?></p>
				</div>
				<label class="col-sm-2 form-control-label">Số lượng :</label>
				<div class="col-sm-10">
					<p><?php echo $value['soluong'] ?></p>
				</div>
			</div>
			<?php endforeach ?>
		</form>
</div>
	
<!-- end form add san pham-->

<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>