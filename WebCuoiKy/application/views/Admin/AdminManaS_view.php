<?php include 'Header.php';?>  
<div class="container">
	<div class="text-xs-center">
		<h2 class="display-5">Thêm size</h3>
	</div>
	<form action="addS" method="post">
		<input type="submit" class="btn btn-success" value="Thêm size">
		<input name="tensize" type="text" class="form-control" id="tensize" placeholder="Tên size muốn Thêm" >
	</form>
</div>
<hr>

<div class = "container">
	<div class="text-xs-center">
		<h2 class="display-5">Quản lý size</h3>
	</div>

	<table  >
		<div class="row">
			<tr>
				<td>Mã size</td>
				<td>&nbsp&nbsp</td>
				<td>&nbsp&nbsp</td>
				<td>Tên size</td>
				<td>&nbsp&nbsp</td>
			</tr>
			<?php foreach ($arsize as $key => $value): ?>	
				<form action="updateS" method="post" >
					<tr>
						<td>
 							<input readonly name="idsize" type="text" class="form-control" id="idsize" placeholder="ID size" value="<?php echo $value['idsizeao'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input name="tensize" type="text" class="form-control" id="tensize" placeholder="Tên size" value="<?php echo $value['tensizeao'] ?>">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<input type="submit" class="btn btn-success" value="Cập nhật">
						</td>
						<td>&nbsp&nbsp</td>
						<td>&nbsp&nbsp</td>
						<td>
							<a href="deleteS/<?php echo $value['idsizeao'] ?>" class="btn btn-danger xoa">Xóa</a> 
						</td>
					</tr>
				</form>
					

			<?php endforeach ?>

		</div>
	</table>
</div>


<script src="<?php echo base_url() ?>vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>vendor/js/bootstrap.min.js"></script>