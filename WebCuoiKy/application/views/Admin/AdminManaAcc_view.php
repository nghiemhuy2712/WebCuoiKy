<?php include 'Header.php';?>  
<div class="container">
	<div class="text-xs-center">
		<h2 class="display-5">Quản lý tài khoản</h2>
	</div>
	<p>*Set password để trả pass về mặc định là P12345678</p>
</div>
<hr> 

<div class = "container">
	<table  >
		<div class="row">
			<tr>
				<td>ID</td>
				<td>&nbsp&nbsp</td>
				<td>Tên tài khoản</td>
				<td>&nbsp&nbsp</td>
				<td>Tên hiển thị</td>
				<td>&nbsp&nbsp</td>
				<td>Số điện thoại</td>
				<td>&nbsp&nbsp</td>
				<td>Địa chỉ</td>
				<td>&nbsp&nbsp</td>
			</tr>
			<?php foreach ($arAcc as $key => $value): ?>	
				<form action="updateAcc" method="post" >
					<tr>
						<td>
							<input readonly size="1" name="id" type="text" class="form-control" id="id" value="<?php echo $value['iduser'] ?>" >
						</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input readonly size="20" name="tentk" type="text" class="form-control" id="tentk" value="<?php echo $value['tentaikhoan'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input readonly size="23" name="tenht" type="text" class="form-control" id="tenht" value="<?php echo $value['tenhienthi'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input readonly size="13" name="sdt" itype="text" class="form-control" id="sdt" value="<?php echo $value['sodienthoai'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input readonly size="80" name="dc" type="text" class="form-control" id="dc" value="<?php echo $value['diachi'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>
 							<a href="setAcc/<?php echo $value['iduser'] ?>" class="btn btn-warning set">Set PW</a>
						</td>
						<td>&nbsp&nbsp</td>
						<td>
 							<a href="deleteAcc/<?php echo $value['iduser'] ?>" class="btn btn-danger xoa">Xóa</a>
						</td>
					</tr>
				</form>
			<?php endforeach ?>
		</div>
	</table>
</div>
<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>