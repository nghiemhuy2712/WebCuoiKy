<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >

	<title>Quản Lý Trang Web</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.min.css">
</head>
<body>
	<!--Thanh navbar menu  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

	<?php 
		if ($this->session->userdata('accout')==NULL&&$this->session->userdata('accout')['isADmin']!="1"){
			echo "Chưa đăng nhập";
			die();
		}
	?>

	  <a class="navbar-brand" href="<?php echo base_url()?>index.php/Admin">Trang chủ</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    <!--Quản lý sản phẩm-->
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          Quản lý Sản phẩm
	        </a>
	        <div class="dropdown-content">
	        	<a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showListItem">Danh sách sản phẩm</a>
	          	<a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showAddItem">Thêm sản phẩm</a>
	        </div>
	      </li>
	    <!--End Quản lý sản phẩm-->

		<!--Quản lý hóa đơn-->
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          Quản lý Hóa đơn
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showListUncheckedBill">DS Đơn chưa bán</a>
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showListCheckedBill">DS Đơn đã bán</a>
	        </div>
	      </li>
	    <!--End Quản lý hóa đơn-->

	    <!--Quản lý Tài khoản-->
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          Quản lý Tài khoản
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showManaAcc">Danh sách tài khoản</a>
	        </div>
	      </li>
	    <!--End Quản lý hóa đơn-->

	    <!--Quản lý Tài khoản-->
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          Quản lý chi tiết
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showManaC">Quản lý màu</a>
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showManaS">Quản lý size</a>
	          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Admin/showManaT">Quản lý loại</a>
	        </div>
	      </li>
	    <!--End Quản lý hóa đơn-->

	    </ul>
	  </div>
  </div>
</nav>
<!--End menu-->

