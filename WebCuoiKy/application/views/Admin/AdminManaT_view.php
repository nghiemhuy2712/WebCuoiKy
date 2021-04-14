<?php include 'Header.php';?>  
<div class="container">
	<div class="text-xs-center">
		<h2 class="display-5">Thêm loại</h3>
	</div>
	<form action="addT" method="post">
		<input type="submit" class="btn btn-success" value="Thêm loại">
		<input name="tenloai" type="text" class="form-control" id="tenloai" placeholder="Tên loại muốn Thêm" >
	</form>
</div>
<hr>

<div class = "container">
	<div class="text-xs-center">
		<h2 class="display-5">Quản lý loại</h3>
	</div>

	<table  >
		<div class="row">
			<tr>
				<td>Mã loại</td>
				<td>&nbsp&nbsp</td>
				<td>&nbsp&nbsp</td>
				<td>Tên loại</td>
				<td>&nbsp&nbsp</td>
			</tr>
			<?php foreach ($arLoaiao as $key => $value): ?>	
				<form action="updateT" method="post" >
					<tr>
						<td>
							<input readonly name="idloai" type="text" class="form-control" id="idloai" placeholder="ID loại" value="<?php echo $value['idloaiao'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input name="tenloai" type="text" class="form-control" id="tenloai" placeholder="Tên loại" value="<?php echo $value['tenloaiao'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input type="submit" class="btn btn-success" value="Cập nhật">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<a href="deleteT/<?php echo $value['idloaiao'] ?>" class="btn btn-danger xoa">Xóa</a>
						</td>
					</tr>
				</form>
					

			<?php endforeach ?>

		</div>
	</table>
</div>


<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>