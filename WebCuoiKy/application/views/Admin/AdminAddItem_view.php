<?php include 'Header.php';?>   

<div class="container">
	<div class="text-xs-center">
		<h3 class="display-4">Thêm sản phẩm</h3> 
		<hr>
	</div>
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Admin/addItem">
			<div class="form-group row ">
				<div class="col-sm-offset-2 col-sm-10" >
					<a href="<?php echo base_url()?>index.php/Admin/showListItem" class="btn btn-secondary" style="width: 30%">Trở về</a>
					<button type="submit" class="btn btn-success" style="width: 30%"> Thêm </button>
				</div>
			</div>
			<div class="form-group row">
				<label for="anh" class="col-sm-2 form-control-label">Ảnh :</label>
				<div class="col-sm-10">
					<input name="anh" type="file" class="form-control" id="anh" placeholder="Upload anh">
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<label for="ten" class="col-sm-2 form-control-label">Tên :</label>
				<div class="col-sm-10">
					<input name="ten" type="text" class="form-control" id="ten" placeholder="Tên sản phẩm">
				</div>
			</div>
			<div class="form-group row">
				<label for="mota" class="col-sm-2 form-control-label">Mô tả :</label>
				<div class="col-sm-10">
					<input name="mota" type="text" class="form-control" id="mota" placeholder="Mô tả">
				</div>
			</div>
			<div class="form-group row">
				<label for="gia" class="col-sm-2 form-control-label">Giá (>9999) :</label>
				<div class="col-sm-10">
					<input name="gia" type="text" class="form-control" id="gia" placeholder="Giá">
				</div>
			</div>
			<div class="form-group row">
				<label for="soluong" class="col-sm-2 form-control-label">Số lượng :</label>
				<div class="col-sm-10">
					<input name="soluong" type="text" class="form-control" id="gia" placeholder="Giá" value="1">
				</div>
			</div>

			<div class="form-group row">
	            <label for="loaiao" class="col-sm-2 form-control-label">Loại Áo :</label>
	            <div class="col-sm-10">
	            	<select class="form-control" id="" name="loaiao">
				    	<?php foreach ($arLoaiao as $key => $value): ?>
				    			<option value="<?php echo $value['idloaiao']?>" <?php if($value['idloaiao']==$arao[0]['idloaiao']):?>selected <?php endif ?>>
				    				<?php echo $value['tenloaiao'] ?>
				    			</option>
				    	<?php endforeach ?>
			    	</select>
	            </div>
			</div>

			<div class="form-group row">
	            <label for="loaisizeao" class="col-sm-2 form-control-label">Size Áo :</label>
	            <div class="col-sm-10">
	            	<select class="form-control" id="" name="loaisize">
				      	<?php foreach ($arsize as $key => $value): ?>
 				    			<option value="<?php echo $value['idsizeao']?>" 
				    				<?php if($value['idsizeao']==$arao[0]['idloaisize']): ?>
				    					selected <?php endif ?> > <?php echo $value['tensizeao'] ?>
				    			</option>
				    	<?php endforeach ?>
			    </select>
	            </div>
			    
			</div>
			<div class="form-group row">
	            <label for="loaimauao" class="col-sm-2 form-control-label">Màu Áo :</label>
	            <div class="col-sm-10">
	            	<select class="form-control" id="" name="loaimau">
				      	<?php foreach ($arMau as $key => $value): ?>
				    			<option value="<?php echo $value['idmau']?>"
				    				<?php if($value['idmau']==$arao[0]['idloaimau']): ?>
				    				selected <?php endif ?>
				    				>
				    			 <?php echo $value['tenmau'] ?>
				    			</option>
				    	<?php endforeach ?>
			    </select>
	            </div>
			</div>
		</form>
</div>
	
<!-- end form add san pham-->

<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>