<?php require_once("../Templete/header.php"); ?>
<body>
	<main class="container">
		<div class="row justify-content-center">
				<div class="col-6 mt-5 p-5">
				<form class="shadow p-3 mb-5 bg-white rounded-bottom" method="post"
					action="" id="frmRestro" >
					<div class="text-center mt-2">
						<h1>Actualizar Usuario</h1>
					</div>
					<div class="mb-3">
						<label for="txtNombre" class="form-label">Nombre(s):</label>
						<input type="text" class="form-control" id="txtNombre" name="txtNombre">
					</div>
					<div class="mb-3">
						<label for="txtApellido" class="form-label">Apellidos:</label>
						<input type="text" class="form-control" id="txtApellido" name="txtApellido">
					</div>
					<div class="mb-3">
						<label for="numTelefono" class="form-label">Numero Telefonico:</label>
						<input type="number" class="form-control" id="numTelefono"
						name="numTelefono">
					</div>
					<div class="mb-3">
						<label for="txtEmail" class="form-label">Correo Electronico:</label>
						<input type="email" class="form-control" id="txtEmail" name="txtEmail">
					</div>
					<button type="submit" class="btn btn-success">Registrar <i class="fas fa-save"></i></button>
				</form>
			</div>
		</div>
</main>
</body>
<?php require_once("../Templete/footer.php"); ?>

