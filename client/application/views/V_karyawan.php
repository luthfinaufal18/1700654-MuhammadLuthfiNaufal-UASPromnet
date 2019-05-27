<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD - Quiz Promnet</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
		background: #fff;
		padding: 20px 25px;
		margin: 30px 0;
		border-radius: 3px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.table-title {
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
	}
	.table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
	table.table tr th, table.table tr td {
		border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
	}
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
	table.table-striped tbody tr:nth-of-type(odd) {
		background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
	table.table th i {
		font-size: 13px;
		margin: 0 5px;
		cursor: pointer;
	}
	table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
		margin: 0 5px;
	}
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
		color: #FFC107;
	}
	table.table td a.delete {
		color: #F44336;
	}
	table.table td i {
		font-size: 19px;
	}
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.pagination {
		float: right;
		margin: 0 0 5px;
	}
	.pagination li a {
		border: none;
		font-size: 13px;
		min-width: 30px;
		min-height: 30px;
		color: #999;
		margin: 0 2px;
		line-height: 30px;
		border-radius: 2px !important;
		text-align: center;
		padding: 0 6px;
	}
	.pagination li a:hover {
		color: #666;
	}
	.pagination li.active a, .pagination li.active a.page-link {
		background: #03A9F4;
	}
	.pagination li.active a:hover {
		background: #0397d6;
	}
	.pagination li.disabled i {
		color: #ccc;
	}
	.pagination li i {
		font-size: 16px;
		padding-top: 6px
	}
	.hint-text {
		float: left;
		margin-top: 10px;
		font-size: 13px;
	}
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
	.modal .modal-title {
		display: inline-block;
	}
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}
	.modal form label {
		font-weight: normal;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">CVkuuu</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<a href="#addEmployeeModal" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal"> <span>Tambah Data</span></a>
				</form>
			</div>
		</nav>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							No.
						</th>
						<th>
							ID
						</th>
						<th>ID Motor</th>
						<th>ID Cicil</th>
						<th>ID Uang Muka</th>
						<th>Cicilan Pokok</th>
						<th>Cicilan Bunga</th>
						<th>Total Cicilan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$i=1;
						foreach ($jual->data as $key) {
							?>
							<td>
								<?php echo $i; ?>
							</td>
							<td>
								<?php echo $key->id_motor ?>
							</td>
							<td><?php echo $key->id_cicil; ?></td>
							<td><?php echo $key->id_uangmuka; ?></td>
							<td><?php echo $key->cicilan_pokok; ?></td>
							<td><?php echo $key->cicilan_bunga; ?></td>
							<td><?php echo $key->cicilan_total; ?></td>
							<td>
								<a href="#updateEmployeeModal<?php echo $key->id;?>" class="update" data-toggle="modal">Update</a>
								<a href="#deleteEmployeeModal<?php echo $key->id;?>" class="delete" data-toggle="modal">Delete</a>

							</td>
						</tr>
						<?php
						$i++;

					}
					?>
				</tbody>
			</table>

		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo site_url('C_karyawa/add'); ?>" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Add Penjualan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Motor</label>
              <select name="motor">
								<?php
                foreach ($motor->data as $key) {
									?>
									<option value="<?php echo $key->id_motor; ?>"><?php echo $key->tipe_motor; ?></option>
									<?php
								} ?>
							</select>
						</div>
						<div class="form-group">
							<label>Lama Cicilan</label>
              <select name="cicilan">
								<?php foreach ($cicilan->data as $key) {
									?>
									<option value="<?php echo $key->id_cicil; ?>"><?php echo $key->tenor; ?></option>
									<?php
								} ?>
							</select>
						</div>
						<div class="form-group">
							<label>Uang Muka</label>
              <select name="uangmuka">
								<?php foreach ($uang_muka->data as $key) {
									?>
									<option value="<?php echo $key->id_uang_muka; ?>"><?php echo $key->uang_muka; ?></option>
									<?php
								} ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input id="tombol" type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	foreach($karyawan as $key){

		?>
		<div id="updateEmployeeModal<?php echo $key->id;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url('C_karyawan/update/'.$key->id); ?>" method="post">
						<div class="modal-header">
							<h4 class="modal-title">Update Employee</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Nomor KTP</label>
								<input type="text" name="nomor_ktp" class="form-control" value="<?php echo $key->nomor_ktp; ?>" required>
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $key->name; ?>" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" value="<?php echo $key->email; ?>" required>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" name="address" required><?php echo $key->address; ?></textarea>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" name="phone" class="form-control" value="<?php echo $key->phone; ?>" required>
							</div>
							<fieldset class="form-group">
	              <label>Jenis Kelamin</label>
	              <?php
	              if($key->jenis_kelamin == "Laki-laki"){
	                ?>
	                <div class="form-check">
	                  <label class="form-check-label">
	                    <input type="radio" class="form-check-input" name="jenis_kelamin" checked ='' value="Laki-laki">
	                    Laki-laki
	                  </label>
	                </div>
	                <div class="form-check">
	                  <label class="form-check-label">
	                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">
	                    Perempuan
	                  </label>
	                </div>
	                <?php
	              }
	              else {
	                // code...
	                ?>
	                <div class="form-check">
	                  <label class="form-check-label">
	                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">
	                    Laki-laki
	                  </label>
	                </div>
	                <div class="form-check">
	                  <label class="form-check-label">
	                    <input type="radio" class="form-check-input" name="jenis_kelamin" checked ='' value="Perempuan">
	                    Perempuan
	                  </label>
	                </div>
	                <?php
	              }
	               ?>
	            </fieldset>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Temmpat Lahir" value="<?php echo $key->tempat_lahir ?>" required>
							</div>
							<div class="form-group">
	              <label>Tanggal Lahir</label>
	              <input type="date" name="tanggal_lahir"  class="form-control" value="<?php echo $key->tanggal_lahir ?>" required>
	              <script>
	              $('#datepicker').datepicker({
	                uiLibrary: 'bootstrap4'
	              });
	              </script>
	            </div>
							<div class="form-group">
	              <label>NPWP</label>
	              <input type="text" class="form-control" name="npwp" placeholder="Masukkan NPWP" value="<?php echo $key->npwp ?>" required>
	            </div>
							<div class="form-group">
								<label>Agama</label>
								<select name="agama" value="<?php echo $key->agama ?>">
									<option value="islam" <?php if ($key->agama == "islam") {
										echo "selected='selected'";
									} ?>>Islam</option>
									<option value="kristen" <?php if ($key->agama == "kristen") {
										echo "selected='selected'";
									} ?>>Kristen</option>
									<option value="hindu" <?php if ($key->agama == "hindu") {
										echo "selected='selected'";
									} ?>>Hindu</option>
									<option value="budha" <?php if ($key->agama == "budha") {
										echo "selected='selected'";
									} ?>>Budha</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input id="tombol" type="submit" class="btn btn-success" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php } ?>


	<!-- Delete Modal HTML -->
	<?php
	foreach($karyawan as $key){

		?>
		<div id="deleteEmployeeModal<?php echo $key->id;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url('C_karyawan/delete/'.$key->id); ?>" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php } ?>


</body>
</html>
