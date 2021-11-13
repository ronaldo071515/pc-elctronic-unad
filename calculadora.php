<?php include("includes/header.php"); ?>
	<div class="container mt-5">
		<div class="d-flex d-flex justify-content-center">
			<div class="row">
				<div class="col-md-9">
					<div class="card bg-light shadow-lg">
						<div class="card-body">
							<h5 class="card-title mb-2 text-center">Calculadora Tienda</h5>
							<hr>
							<form id="calculadora" name="calculadora" action="#">
								<div class="mb-3">
									<label for="vcompra" class="form-label">Valor de la Compra</label>
									<input type="number" class="form-control" name="vcompra" min="0" id="vcompra">
								</div>
								<div class="mb-3">
									<label for="putilidad" class="form-label">% Utilidad o Ganancia</label>
									<input type="number" class="form-control" name="putilidad" min="0" max="100" id="putilidad">
								</div>
								<div class="mb-3">
									<label for="piva" class="form-label">% IVA</label>
									<input type="number" class="form-control" name="piva" min="0" max="100" id="piva">
								</div>
								<div class="d-grid gap-2">
									<input class="btn btn-outline-success btn-block" type="button" value="Calcular" id="btnCalcular" name="btnCalcular">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="resultados" class="col-md-3">

				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/calculadora-producto.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>