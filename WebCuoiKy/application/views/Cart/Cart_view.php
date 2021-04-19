<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<hr>
<!-- start form gio hang -->
<div class="container">
	  <h2>Giỏ Hàng </h2>    
	  <hr>      
	  <table class="table table-bordered">
	      <?php if ($arCT): ?>
	      <tr>	
	        <th scope="col">Tên sản phẩm : </th>
	        <th scope="col">Giá : </th>
	        <th scope="col">Hình : </th>
	        <th scope="col">Loại áo : </th>
	        <th scope="col">Màu : </th>
	        <th scope="col">Size : </th>
	        <th scope="col">Số lượng : </th>
	        <th scope="col">Thành tiền : </th>
	      </tr>
	    <tbody>
	      	<?php foreach ($arCT as $key => $value): ?>
	      			<tr>
	      				<td scope="row">
	      					<?php foreach ($arao as $key1 => $value1): ?>
	      						<?php if ($value['idao']==$value1['id']): ?>
	      							<?php echo $value1['ten'] ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
	      				</td>
			        	<td scope="row">
			        		<?php foreach ($arao as $key1 => $value1): ?>
	      						<?php if ($value['idao']==$value1['id']): ?>
	      							<?php echo $value1['gia'] ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
			        	</td>
			        	<td scope="row">
			        		<?php foreach ($arao as $key1 => $value1): ?>
	      						<?php if ($value['idao']==$value1['id']): ?>
	      							<img style="width:100px;height:100px;"class="card-img-top" src="<?php echo $value1['hinh'] ?>" alt="Card image cap">
	      						<?php endif ?>
	      					<?php endforeach ?>
			        	</td>
			        	<td scope="row">
			        		<?php foreach ($arLoaiao as $key1 => $value1): ?>
	      						<?php if ($value['idloaiao']==$value1['idloaiao']): ?>
	      							<?php echo $value1['tenloaiao'] ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
			        	</td>
			        	<td scope="row">
			        		<?php foreach ($arMau as $key1 => $value1): ?>
	      						<?php if ($value['idloaimau']==$value1['idmau']): ?>
	      							<?php echo $value1['tenmau'] ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
			        	</td>
			        	<td scope="row">
			        		<?php foreach ($arsize as $key1 => $value1): ?>
	      						<?php if ($value['idloaisize']==$value1['idsizeao']): ?>
	      							<?php echo $value1['tensizeao'] ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
			        	</td>
				        <td scope="row">
				        	<form action="<?php echo base_url() ?>index.php/CartPage/UpdateSoluong/<?php echo $value['idcthd'] ?>" method="post" >
				        		
				        		<input name="soluong" type="text" class="form-control" id="soluong" placeholder="Số lượng" style="width: 50%;" value="<?php 

				        			echo $value['soluong'];
				        		?>">
				        		<div class="col-sm-offset-2 col-sm-10" >
				        		<input type="submit" name="submitSL" class="btn btn-secondary" value="Update">
				        		</div>
				        	</form>
				        </td>
				       <td scope="row">
				       		<?php foreach ($arao as $key1 => $value1): ?>
	      						<?php if ($value['idao']==$value1['id']): ?>
	      							<?php echo ((($value['soluong'])*$value1['gia'])/1000).",000" ?>
	      						<?php endif ?>
	      					<?php endforeach ?>
				       </td> 
				        <td scope="row">
				        	<div class="col-sm-offset-2 col-sm-10" >
								<a href="<?php echo base_url() ?>index.php/CartPage/XoaItemCTDH/<?php echo $value['idcthd'] ?>" class="btn btn-secondary" role="button"> Xoá </a>
							</div>	
				        </td> 
			    	</tr>

			    	<form action="<?php echo base_url() ?>index.php/CartPage/ThanhToan/<?php echo $value['idhd']?>" method="post" >
	      	<?php endforeach ?>
	    </tbody>
	</table>
	<hr>
			<?php if ($this->session->userdata('accout')&&$this->session->userdata('accout')['tentaikhoan']!="a"): ?>
					<?php if ($this->session->userdata('accout')['diachi']==0||$this->session->userdata('accout')['sodienthoai']==0): ?>
						<h2>Người mua/nhận hàng</h2>
				<hr>
				<form action="<?php echo base_url() ?>index.php/CartPage/ThanhToan/<?php echo $value['idhd']?>" method="post"> 
				<div class="form-group row">
						<label for="ten" class="col-sm-2 form-control-label">Nhập email :</label>
						<div class="col-sm-10">
							<input name="txtEmail" type="text" class="form-control" id="inpdc" placeholder="Email" value="">
						</div>
				</div>	
				<div class="form-group row">
						<label for="ten" class="col-sm-2 form-control-label">Nhập địa chỉ :</label>
						<div class="col-sm-10">
							<input name="txtDiaChi" type="text" class="form-control" id="inpdc" placeholder="Địa chỉ ">
						</div>
				</div>
				<div class="form-group row">
						<label for="ten" class="col-sm-2 form-control-label">Nhập số điện thoại :</label>
						<div class="col-sm-10">
							<input name="txtSDT" type="text" class="form-control" id="inpsdt" placeholder="Số điện thoại">
						</div>
				</div>
					<?php endif ?>
				
			<?php endif ?>
	<hr>
	<h2>Tổng tiền : </h2> <h6><?php echo "đ ".($tongtien/1000).",000" ?></h6>
	<div class="form-group row ">
				<div class="col-sm-offset-2 col-sm-10" >
					<input type="submit" class="btn btn-secondary" value="Thanh Toán "style="width: 50%">
				</div>
	</div>
	</form>
	    <?php endif ?>
	
</div>	
<!-- end form gio hang -->


<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>
</body>

</html>
