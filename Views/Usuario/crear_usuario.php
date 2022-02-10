<?php require_once("../Templete/header.php"); ?>
<body>
	<main class="container">
		<div class="row shadow-none p-3 mb-5 bg-light rounded justify-content-center">	
			<div class="col-sm-25">
				<a href="listar_usuarios.php" class="btn btn-info"> Listar Usuarios</a>
			</div>
			<div class="col-md-9">
				<?= isset($alert) ? $alert : ''; ?>
				<div class="card form shadow p-3 mb-5 bg-white rounded">
					<div class="card-header text-center">
						<strong>Crear</strong> Usuario
					</div>
					<div class="card-body card-block">
						<form action="" method="post" class="">
							<div class="form-group">
								<label for="txtnombre" class="form-control-label">Nombre(s):</label>
								<input type="text" id="txtnombre" name="txtnombre" placeholder="Nombre" class="form-control col-md-7">
							</div>
							<div class="form-group">
								<label for="txtapellido" class="form-control-label">Apellidos:</label>
								<input type="text" id="txtapellido" name="txtapellido" placeholder="Apellidos" class="form-control col-md-7">
							</div>
							<div class="form-group">
								<label for="txttelefono" class="form-control-label">Telefono:</label>
								<input type="number" id="txttelefono" name="txttelefono" placeholder="Telefono" class="form-control col-md-5">
							</div>
							<div class="form-group">
								<label class="control-label col-md-5" for="txtemail">
								Correo Electronico:</label>
								<input class="form-control col-md-7" type="email" placeholder="Correo Electronico"
								name="txtemail" id="txtemail">
							</div>
							<div class="text-center align-items-center justify-content-center">
								<div class="col-auto">
									<input type="submit" class="btn btn-success" value="Guardar Usuario">
								</div>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
	</main>
</body>

<?php require_once("../Templete/footer.php"); ?>

