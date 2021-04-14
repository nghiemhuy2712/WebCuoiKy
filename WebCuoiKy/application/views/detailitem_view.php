<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.min.css">
</head>
<style>
	
	html, body {
		  height: 100%;
		  width: 100%;
		  margin: 0;
		  font-family: 'Roboto', sans-serif;
		}
		  
		.container {
		
		  padding: 15px;
		  display: flex;
		}
		/* Columns */
		.left-column {
		  width: 65%;
		  position: relative;
		}
		  
		.right-column {
		  width: 35%;
		  margin-top: 60px;
		}
		/* Left Column */
		.left-column img {
		  width: 100%;
		  position: absolute;
		  left: 0;
		  top: 0;
		}
		  
		.left-column img.active {
		  opacity: 1;
		}
		/* Product Description */
		.product-description {
		  border-bottom: 1px solid #E1E8EE;
		  margin-bottom: 20px;
		}
		.product-description span {
		  font-size: 12px;
		  color: #358ED7;
		  letter-spacing: 1px;
		  text-transform: uppercase;
		  text-decoration: none;
		}
		.product-description h1 {
		  font-weight: 300;
		  font-size: 52px;
		  color: #43484D;
		  letter-spacing: -2px;
		}
		.product-description p {
		  font-size: 16px;
		  font-weight: 300;
		  color: #86939E;
		  line-height: 24px;
		}
		
		/* Cable Configuration */
		.cable-choose {
		  margin-bottom: 20px;
		}
		  
		.cable-choose button {
		  border: 2px solid #E1E8EE;
		  border-radius: 6px;
		  padding: 13px 20px;
		  font-size: 14px;
		  color: #5E6977;
		  background-color: #fff;
		  cursor: pointer;
		  transition: all .5s;
		}
		.cable-config {
		  border-bottom: 1px solid #E1E8EE;
		  margin-bottom: 20px;
		}
		  
		.cable-config a {
		  color: #358ED7;
		  text-decoration: none;
		  font-size: 12px;
		  position: relative;
		  margin: 10px 0;
		  display: inline-block;
		}
		.cable-config a:before {
		  content: "?";
		  height: 15px;
		  width: 15px;
		  border-radius: 50%;
		  border: 2px solid rgba(53, 142, 215, 0.5);
		  display: inline-block;
		  text-align: center;
		  line-height: 16px;
		  opacity: 0.5;
		  margin-right: 5px;
		}
		@media (max-width: 940px) {
		  .container {
		    flex-direction: column;
		    margin-top: 60px;
		  }
		  
		  .left-column,
		  .right-column {
		    width: 100%;
		  }
		  
		  .left-column img {
		    width: 300px;
		    right: 0;
		    top: -65px;
		    left: initial;
		  }
		}
		  
		@media (max-width: 535px) {
		  .left-column img {
		    width: 220px;
		    top: -85px;
		  }
		}*/*/*/*/*/*/*/*/*/*/*/
</style>
<body>
<!-- menu -->
<nav  class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">GGWP SHOP</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo base_url() ?>">TRANG CHU <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">LIEN HE</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" >
	          SAN PHAM
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">AO THUN</a>
	          <a class="dropdown-item" href="#">AO KHOAC</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">AO SO MI</a>
	        </div>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">TIM KIEM</button>
	    </form>
	  </div>
</nav>
<!-- end menu -->
<!-- list product -->
<div style="margin-left: 100px; margin-top: 20px;">THÔNG TIN SẢN PHẨM</div>
<main class="container" >
<?php foreach ($arid as $key1 => $value1): ?>
  <div>
     <img class="left-column" class="card-img-top"  src="<?php echo $value1['hinh'] ?>" alt="Card image cap">
  </div>
  
  <?php endforeach ?>
  <!-- Right Column -->
  <div style="margin-left: 20px;" class="col-sm-5" class="right-column">
  
    <!-- Product Description -->
    <div class="product-description">
     
      <h1 style="font-weight: bold; text-transform: uppercase; " class="card-title"><?php echo $value1['ten'] ?></h1>
      <p class="card-text">Mô Tả:<?php echo $value1['mota'] ?></p>
    </div>
  
    <!-- Product Configuration -->
    <div class="product-configuration">
  
      <!-- Product Color -->
      
  
      <!-- Cable Configuration --> 
     <p><input type="text" name="id" value="<?php echo $value1['id'] ?>" readonly hidden class="form-control" ></p>
    </div>

    <div style="margin-left: 18px;" class="product-description">
	    <div class="nav-item dropdown form-group row" >
	    	<form method="post" action="<?php echo base_url() ?>index.php/CartPage/TaoDonHang/<?php echo $value1['id'] ?>">
	    		<!--product-description loai ao-->
		        <label for="loaiao">Loại Áo :</label>
				<select class="form-control" id="" name="loaiao">
				    <?php foreach ($arLoaiao as $key => $value): ?>
				    	<option value="<?php echo $value['idloaiao']?>"> <?php echo $value['tenloaiao'] ?></option>
				    <?php endforeach ?>
				</select>
	 			<!--product-description loai size-->
	            <label for="loaisizeao">Size Áo :</label>
			    <select class="form-control" id="" name="loaisize">
			      <?php foreach ($arsize as $key => $value): ?>
			    			<option value="<?php echo $value['idsizeao']?>"> <?php echo $value['tensizeao'] ?></option>
			    	<?php endforeach ?>
			    </select>
				<!--product-description loai mau-->
    			</h1>
	            <label for="loaimauao">Màu Áo :</label>
			    <select class="form-control" id="" name="loaimau">
			      <?php foreach ($arMau as $key => $value): ?>
			    			<option value="<?php echo $value['idmau']?>"> <?php echo $value['tenmau'] ?></option>
			    	<?php endforeach ?>
			    </select>
				<div class="product-price">
			        <p class="card-text">Giá: <?php echo $value1['gia'] ?></p>
			    	<button type="submit" class="btn btn-success">Mua Ngay</button>
			    </div>
			</form>
	  	</div>
	</div>
	
     
  
    <!-- Product Pricing -->
    
  </div>
</main>
<!-- end form add san pham-->
<!-- Load jquery trước khi load bootstrap js -->
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>
</body>

</html>