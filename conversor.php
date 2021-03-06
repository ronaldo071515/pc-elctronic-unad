<?php include("includes/header.php"); ?>
	<div class="container mt-5">
		<div class="d-flex d-flex justify-content-center">

			<div class="card bg-light shadow-lg">
				<div class="card-body">
					<h5 class="card-title mb-2 text-center">Conversor</h5>
					<hr>
					<form id="convertidorForm">
						<div class="row">
							<div class="col-6">
								<div class="mb-3">
									<label for="valor" class="form-label">Ingresa Valor</label>
									<input type="number" class="form-control" name="valor" value="" id="valor" required>
								</div>
							</div>
							<div class="col-6">
								<div class="mb-3">
									<label for="tipo" class="form-label">Elije el tipo</label>
									<select class="form-select" name="tipo" id="tipo" aria-label="Default select example">
										<option selected>Selecciona</option>
										<option value="b">Byte</option>
										<option value="k">KiloByte</option>
										<option value="m">MegaByte</option>
										<option value="g">GigaByte</option>
										<option value="t">TeraByte</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<div class="mb-3">
									<label for="convertir" class="form-label">Convertir a: </label>
									<select class="form-select" name="convertir" id="convertir" aria-label="Default select example">
										<option selected>Selecciona</option>
										<option value="b">Byte</option>
										<option value="k">KiloByte</option>
										<option value="m">MegaByte</option>
										<option value="g">GigaByte</option>
										<option value="t">TeraByte</option>
									</select>
								</div>
							</div>
						</div>
						<div class="d-grid gap-2">
							<input class="btn btn-outline-success btn-block" type="button" value="Convertir" id="btnConvertir" name="btnConvertir">
						</div>
						<div  class="mt-5" role="alert" id="resultado">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/convertidor.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>