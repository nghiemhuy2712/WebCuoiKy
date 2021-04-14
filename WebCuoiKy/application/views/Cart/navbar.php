<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
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
	        <a class="nav-link" href="#">LIÊN HỆ</a>
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
<!-- 	    btn search -->
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
	    </form>
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
					<img src=" <?php echo $this->session->userdata('accout')['anh_avt'] ?> " alt="" style="widows: 50px; height: 50px">
					<a href="<?php echo base_url() ?>index.php/User" class="btn btn-info" role="button"><?php echo $this->session->userdata('accout')['tenhienthi'] ?></a>
				<?php endif ?>
			<?php endif ?>
	  </div>
  </div>
</nav>