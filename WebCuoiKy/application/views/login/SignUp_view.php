<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="container">
    <form action="<?php echo base_url() ?>index.php/SignInPage/InsertUser" method="post">
      <span style="font-size: 25px; font-weight: bold; text-transform: uppercase; ;">
            Đăng Ký
                    </span>
          <div style="margin-top: 5px;" data-validate = "Enter username">
            <input  type="text" name="txtUserName" placeholder=" Nhập tên hiển thị">
          
          </div>
          <div style="margin-top: 5px;" data-validate = "Enter username">
            <input  type="text" name="txtNameTK" placeholder=" Nhập tên tài khoản">
          
          </div>
          <div style="margin-top: 5px;" data-validate="Enter password">
            <input class="input100" type="password" name="txtPassDK1" placeholder="Nhập password ">
          </div>
          <div style="margin-top: 5px;" data-validate="Repeat password">
            <input  type="password" name="txtPassDK2" placeholder="Nhập lại password">
          </div>
          <div>
            <button class="#">
              Sign Up
            </button>
          </div>
    </form>
					
	</div>

</body>
</html>