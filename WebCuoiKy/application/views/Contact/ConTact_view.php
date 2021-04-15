<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.min.css">
	<style>
		
	</style>
</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">GGWP SHOP</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo base_url() ?>">TRANG CHỦ <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url() ?>index.php/ConTactPage">LIÊN HỆ</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          SẢN PHẨM
	        </a>
	        <div class="dropdown-content">
	          <?php foreach ($arLoaiao as $key => $value): ?>
	          	 <a class="dropdown-item" href="<?php echo base_url()?>index.php/HomePage/IDLOAIAO/<?php echo $value['idloaiao'] ?>"><?php echo $value['tenloaiao'] ?></a>
	          <?php endforeach ?>
	        </div>
	      </li>
	    </ul>
	    <!-- btn Gio Hang -->
		<a href="<?php echo base_url() ?>index.php/CartPage" class="btn btn-info" role="button">Giỏ Hàng
			<span class="badge badge-light">
				<?php if ($this->session->userdata('accout')): ?>

					<?php 
					$data=$this->session->all_userdata();
					if(isset($data['soluongsanpham']))
					{
						echo $data['soluongsanpham'];
					}
					else
					{
						echo 0;
					}
					?>
			<?php endif ?>
			</span>
		</a>
<!-- 		btnLOGIN -->
		<?php if ($this->session->userdata('accout')&&$this->session->userdata('accout')['tentaikhoan']=="a"): ?>
			<a href="<?php echo base_url() ?>index.php/SignInPage" class="btn btn-info" role="button">Đăng Nhập</a>

		<?php endif ?>
		<?php if ($this->session->userdata('accout')): ?>
				<?php if ($this->session->userdata('accout')['tentaikhoan']!="a"): ?>
					<a href="<?php echo base_url() ?>index.php/HomePage/LogOut" class="btn btn-info" role="button">Đăng Xuất</a>
					<span>Hi, <?php echo $this->session->userdata('accout')['tenhienthi'] ?>
					</span>
				<?php endif ?>
			<?php endif ?>
	  </div>
</nav>
<!-- end menu -->
<div>
	<li style="font-size: 50px;" class="nav-item dropdown">
	        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100018500263793" id="navbarDropdown" >
	          Thái Thanh Sơn (Nhóm Trưởng)
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Đẹp Trai</a>
	          <a class="dropdown-item" href="#">Nhà Giàu</a>
	          <a class="dropdown-item" href="#">Học Giỏi</a>
	           <a class="dropdown-item" href="#">SĐT: 0797955614</a>
	        </div>
	      </li>
</div>
<div>
	<li style="font-size: 50px;" class="nav-item dropdown">
	        <a class="nav-link" href="https://www.facebook.com/ninpuhurri" id="navbarDropdown" >
	          Võ Thành Đạt(Nhóm phó)
	        </a>
	        <div class="dropdown-content"> 
	          <a class="dropdown-item" href="#">Da Đen</a>
	          <a class="dropdown-item" href="#">Chơi YUGIO</a>
	          <a class="dropdown-item" href="#">Học Giỏi</a>
	          <a class="dropdown-item" href="#">SĐT: 0396514342</a>
	        </div>
	      </li>
</div>
<div>
	<li style="font-size: 50px;" class="nav-item dropdown">
	        <a class="nav-link" href="https://www.facebook.com/lehuy.nghiem.9" id="navbarDropdown" >
	          Nghiêm Lê Huy
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Con Ông Cháu Cha</a>
	          <a class="dropdown-item" href="#">Học Giỏi</a>
	          <a class="dropdown-item" href="#">SĐT: 0832714543</a>
	        </div>
	      </li>
</div>
<div>
	<li style="font-size: 50px;" class="nav-item dropdown">
	        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100006294734788" id="navbarDropdown" >
	          Bùi Phạm Minh Trung
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">SĐT: 0832714543</a>
	        </div>
	      </li>
</div>



<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
</body>

</html>
