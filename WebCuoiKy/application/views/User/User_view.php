<!DOCTYPE html>
<html>
<style>
	img{
		height: 200px;
		widows: 100px;
	}
</style>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<?php include 'slide.php'; ?>
<hr> 
<div class="container">
	<h2 class="text-center">Thông tin tài khoản</h2>
	<form action="User/updateAccout" method="post" enctype="multipart/form-data">
		<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Ảnh đại diện :</label>
		    <img src="<?php echo $this->session->userdata('accout')['anh_avt'] ?>" alt=""> 
		    <p>Bạn có muốn thay đổi ảnh avt không ?</p>
		     <input type="file" name="anh" id="fileToUpload">
	  	</div>
	  	<div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Tên tài khoản :</label>
		    <div class="col-sm-10">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $this->session->userdata('accout')['tentaikhoan'] ?>">
		    </div>
	  	</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Tên hiển thị :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword" placeholder="Tên hiển thị" value="<?php echo $this->session->userdata('accout')['tenhienthi'] ?>" name="txtTenHienThi">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Email :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword" placeholder="Email" value="<?php echo $this->session->userdata('accout')['email'] ?>" name = "txtEmail">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ giao hàng :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword" placeholder="Địa chỉ giao hàng" value="<?php echo $this->session->userdata('accout')['diachi'] ?>" name="txtDC">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Số phone :</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword" placeholder="Phone" value="<?php echo $this->session->userdata('accout')['sodienthoai'] ?>" name="txtPhone">
		    </div>
		</div>
		<button type="submit" class="btn btn-primary mb-2">Thay đổi thông tin</button>
	</form>
	<?php if( $this->session->userdata('accout')['isADmin']==1): ?>
	    	<a href="<?php echo base_url() ?>index.php/Admin" class="btn btn-info" role="button">Vào Trang Admin</a>
	<?php endif ?>
</div>
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>