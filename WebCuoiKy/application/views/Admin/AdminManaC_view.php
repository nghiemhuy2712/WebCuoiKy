<?php include 'Header.php';?>  
<div class="container">
	<div class="text-xs-center">
		<h2 class="display-5">Thêm màu</h3>
	</div>
	<form action="addC" method="post">
		<input type="submit" class="btn btn-success" value="Thêm màu">
		<input name="tenmau" type="text" class="form-control" id="tenmau" placeholder="Tên màu muốn Thêm" >
	</form>
</div>
<hr>

<div class = "container">
	<div class="text-xs-center">
		<h2 class="display-5">Quản lý màu</h3>
	</div>

	<table  >
		<div class="row">
			<tr>
				<td>Mã màu</td>
				<td>&nbsp&nbsp</td>
				<td>&nbsp&nbsp</td>
				<td>Tên màu</td>
				<td>&nbsp&nbsp</td>
			</tr>
			<?php foreach ($arMau as $key => $value): ?>	
				<form action="updateC" method="post" >
					<tr>
						<td>
							<input readonly name="idmau" type="text" class="form-control" id="idmau" placeholder="ID màu" value="<?php echo $value['idmau'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input name="tenmau" type="text" class="form-control" id="tenmau" placeholder="Tên màu" value="<?php echo $value['tenmau'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input type="submit" class="btn btn-success" value="Cập nhật">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<a href="deleteC/<?php echo $value['idmau'] ?>" class="btn btn-danger xoa">Xóa</a>
						</td>
					</tr>
				</form>
					

			<?php endforeach ?>

		</div>
	</table>
</div>


<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>