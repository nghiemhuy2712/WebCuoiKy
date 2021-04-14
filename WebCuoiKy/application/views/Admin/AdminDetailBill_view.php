<?php include 'Header.php';?>   
<div class="container">
	<div class="text-xs-center">
		<h3 class="display-4">Chi tiết hóa đơn</h3> 
		<hr>
	</div>
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Admin/checkBill/">
			<div class="form-group row ">
				<div class="col-sm-offset-2 col-sm-10" >
					<a href="<?php echo base_url()?>index.php/Admin/showListUncheckedBill" class="btn btn-secondary" style="width: 30%">Trở về</a>
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<label for="id" readonly class="col-sm-2 form-control-label">Mã hóa đơn : </label>
				<div class="col-sm-10">
					<input name="id" type="text" class="form-control" readonly id="ten" value="<?php echo $arBill[0]['idhd'] ?>">
				</div>
			</div>
			<?php $ttTong="Có thể xác nhận";?>
			<?php $dem = '0';?> 
			<?php foreach ($arDetail as $key => $value):?>
			<hr>
			<div class="form-group row">
				<label  class="col-sm-2 form-control-label">ID Sản phẩm :</label>
					<div class="col-sm-10">
						<input name="idao[]" type="text" class="form-control" readonly id="ten" value="<?php echo$value['idao']?>" style="width: 30%">
					</div>
				<label class="col-sm-2 form-control-label">Số lượng :</label>
					<div class="col-sm-10">
						<input name="slao[]" type="text" class="form-control" readonly id="ten" value="<?php echo$value['soluong']?>" style="width: 30%">
						<p></p>
					</div>
 				<label class="col-sm-3 form-control-label" >Tình trạng: 
 					<b 	<?php if($checkStatus[$dem]['tt']=="Còn đủ hàng"): ?> style="color: green;"
 							
 						<?php endif ?>

						<?php if($checkStatus[$dem]['tt']=="Không đủ hàng"): ?> style="color: red;" 
							<?php $ttTong="Không thể xác nhận";?> 
						<?php endif ?>
 					>
 						<?php echo($checkStatus[$dem]['tt']); $dem = $dem +1; ?>
 					</b>
 				</label>
				
			</div>
			<?php endforeach ?>
			<hr>
			<?php if($ttTong=="Có thể xác nhận") :?>
				<button type="submit" class="btn btn-success" style="width: 30%"> Xác nhận </button>
			<?php endif ?>
			<?php if($ttTong=="Không thể xác nhận") :?>
				<button  disabled class="btn btn-dark" style="width: 30%">Không thể xác nhận </button>
			<?php endif ?>
		</form>
</div>
	
<!-- end form add san pham-->

<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>