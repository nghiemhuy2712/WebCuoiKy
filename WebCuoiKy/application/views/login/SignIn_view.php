<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.min.css">
	<title>Document</title>
  </head>
  <style>
  	body{
  		text-align: center;
  		margin-top: 10%;
  	padding: 0;
  	font-family: 'Poppins', sans-serif;

  	}
  	input{
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
   button {
          display: inline-block;
          background-color: #7b38d8;
          border-radius: 10px;
          border: 4px double #cccccc;
          color: #eeeeee;
          text-align: center;
          width: 100px;
          height: 50px;
          -webkit-transition: all 0.5s;
          -moz-transition: all 0.5s;
          -o-transition: all 0.5s;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
        }

  </style>
<body>
	<div class="container" >
    <form action="<?php echo base_url() ?>index.php/SignInPage/LoginUser" method="post">	
          <span style="font-size: 25px; font-weight: bold; text-transform: uppercase;">
            Đăng nhập
           </span>
          <div class="form-group" style="margin-top: 5px;" data-validate = "Enter username">
            <input  type="text" name="txtName" placeholder="Username" minlength="1" required>
              <div class="help-block with-errors"></div>
          </div>

          <div style="margin-top: 5px;" data-validate="Enter password">
            <input class="form-group" class="input100" type="password" name="txtPW" placeholder="Password">
          </div>
          <div class="form-group">
           
            <button type="submit" class="#">
              Sign In
            </button>
    </form>
           	 
          </div>
  </div>
          <div>
            <a class="txt1" href="<?php echo base_url()?>index.php/SignUpPage">
              Đăng Ký
            </a>
          </div>

         
  </div>
</body>
</html>
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>