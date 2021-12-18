<?php
	if($general) {
		$nombre = $general['nombres'];
		$correo = $general['correo_electronico'];
		$tipoDocumento = $general['tipo_documento'];
		$numeroDocumento = $general['documento'];
	}
	if($proveedor) {
		$nombre = $proveedor['nombre'];
		$correo = $proveedor['correo'];
	}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?= base_url("template/assets/img/minedu.png") ?>" alt="" style="width:250px;height: 60px;">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Solicitud de Pase Laboral MINEDU</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<select class="form-select" id="semana">
				<option value="10">10 al 16 de agosto</option>
				<option value="17">17 al 23 de agosto</option>
				<option value="24">24 al 30 de agosto</option>
			</select>
		</div>
		<div class="col-md-4">
			<h5>Nombre: <?= $nombre; ?></h5>
			<h5><?= $tipoDocumento; ?>: <?= $numeroDocumento; ?></h5>
			<h5>Correo: <?= $correo; ?></h5>
		</div>
		<div class="col-md-4"></div>
	</div>
	<?php echo form_open(null, ["class" => "", "id" => "frm_doc", "name" => "frm_doc"]); ?>
	<?php if ($this->session->flashdata("success") != "") { ?>
		<div class="col-md-12 alert alert-success alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">
				×
			</button>
			<a class="alert-link" href="#">
				<?= $this->session->flashdata("success"); ?>
			</a>
		</div>
	<?php } ?>
	<div id="div_warning" class="col-md-12 alert alert-warning alert-dismissable" style="display:none;">
		<button id="b_warning" aria-hidden="true" class="close" type="button">
			×
		</button>
		<a id="a_warning" class="alert-link" href="#">
		</a>
	</div>
	<?php if ($this->session->flashdata("warning") != "") { ?>
		<div class="col-md-12 alert alert-warning alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">
				×
			</button>
			<a class="alert-link" href="#">
				<?= $this->session->flashdata("warning"); ?>
			</a>
		</div>
	<?php } ?>
	<div id="div_danger" class="col-md-12 alert alert-warning alert-dismissable" style="display:none;">
		<button id="b_danger" aria-hidden="true" class="close" type="button">
			×
		</button>
		<a id="a_danger" class="alert-link" href="#">
		</a>
	</div>
	<?php if ($this->session->flashdata("danger") != "") { ?>
		<div class="col-md-12 alert alert-danger alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">
				×
			</button>
			<p>
				<a class="alert-link" href="#">
					<?= $this->session->flashdata("danger"); ?>
				</a>
			</p>
		</div>
	<?php } ?>
	<div id="div_info" class="col-md-12 alert alert-warning alert-dismissable" style="display:none;">
		<button id="b_info" aria-hidden="true" class="close" type="button">
			×
		</button>
		<a id="a_info" class="alert-link" href="#">
		</a>
	</div>
	<?php if ($this->session->flashdata("info") != "") { ?>
		<div class="col-md-12 alert alert-info alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">
				×
			</button>
			<a class="alert-link" href="#">
				<?= $this->session->flashdata("info"); ?>
			</a>
		</div>
	<?php } ?>
	<div class="row">
		<div class="col-md-12">
			<label style="font-weight: bold">Selecciona la Oficina/Dirección a la que pertenece:</label>
		</div>
		<div class="col-md-4">
			<select class="form-control" id="dependenciaN1">
				<option value="" selected>Dependencia Nivel 1</option>
			</select>
		</div>
		<div class="col-md-4">
			<select class="form-control" id="dependenciaN2">
				<option value="" selected>Dependencia Nivel 2</option>
			</select>
		</div>
		<div class="col-md-4">
			<select class="form-control" id="dependenciaN3">
				<option value="" selected>Dependencia Nivel 3</option>
			</select>
		</div>
	</div>
	<div id="contenedorSedes">
	<div class="row" style="margin-top: 50px;">
		<div class="col-md-6" id="columnaSelects">
			<div class="row" style="margin-top: 60px;">
				<div class="col-md-4">
					<select class="form-select sede" id="sede1" name="sede1" required>
						<option value="" selected>Elegir Sede</option>
						<?php
							foreach ($sedes as $sede) {
								?>
								<option value="<?= $sede->id_sede?>"><?= $sede->nombre; ?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="col-md-4">
					<select class="form-select piso" id="piso1" name="piso1" required>
						<option value="" selected>Elegir Piso/Pabellon</option>
					</select>
				</div>
				<div class="col-md-4">
					<select class="form-select area" id="area1" name="area1" required>
						<option value="" selected>Elegir Área</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-6 text-center mt-3">
			<table class="table table-bordered">
				<thead class="bg-light">
				<tr>
					<th scope="col">Lunes</th>
					<th scope="col">Martes</th>
					<th scope="col">Miercoles</th>
					<th scope="col">Jueves</th>
					<th scope="col">viernes</th>
					<th scope="col">Sabado</th>
					<th scope="col">Domingo</th>
				</tr>
				</thead>
				<tbody class="" id="bodyDias">
				<tr>
					<td >
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check1-1" value="1">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check2-1" value="2">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check3-1" value="3">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check4-1" value="4">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check5-1" value="5">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check6-1" value="6">
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dias1[]" id="check7-1" value="7">
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	</div>
	<div class="row mt-5">
		<p class="fw-bold">Si va a necesitar ingresar a más de una sede haga click <span class="text-primary" id="otra_sede" style="cursor: pointer;">aquí.</span> </p>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="row">
			<div class="col-md-12 text-center">
				<button type="submit" class="btn btn-lg btn-primary">Solicitar Pase</button>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
<script>
 let actual = 1;

 $('#sede1').on('change',function (){
 	let etiqueta = $(this).attr('id');
	let numSede = etiqueta.substr(-1);
 	let valor = $(this).val();
	 if(valor) {
		 $('#piso1').empty().append('<option value="">Elegir Piso/Pabellon</option>');
		 if(this.value) {
			 $.ajax({
				 url:         base_url + 'Auth/getPisos/' + valor,
				 type:        'POST',
				 cache:       false,
				 contentType: 'json',
				 processData: false,
				 success:     function (data) {
					 if(data.error === 0 || data.error === '0') {
						 data['datos'].forEach(function(datos) {
							 $('#piso1').append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
						 });
					 } else {
						 alert(data.mensaje);
					 }
				 },
				 error:       function () {
					 alert('No se puede obtener datos del servidor');
				 }
			 });
		 }
	 }
 });

 $('#piso1').on('change',function (){
	 let etiqueta = $(this).attr('id');
	 let numSede = etiqueta.substr(-1);
	 let valor = $(this).val();
	 if(valor) {
		 $('#area1').empty().append('<option value="">Elegir Área</option>');
		 if(this.value) {
			 $.ajax({
				 url:         base_url + 'Auth/getAreas/' + valor,
				 type:        'POST',
				 cache:       false,
				 contentType: 'json',
				 processData: false,
				 success:     function (data) {
					 if(data.error === 0 || data.error === '0') {
						 data['datos'].forEach(function(datos) {
							 $('#area1').append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
						 });
					 } else {
						 alert(data.mensaje);
					 }
				 },
				 error:       function () {
					 alert('No se puede obtener datos del servidor');
				 }
			 });
		 }
	 }
 });

 $('#otra_sede').on('click',function (){
 	agregar_sede();
 });

 function agregar_sede() {
 	if(actual < 3) {
		actual++;
		let nuevaFila = document.createElement('div');
		nuevaFila.id = 'fila'+actual;
		nuevaFila.className = 'row';
		let primeraColumna = document.createElement('div');
		primeraColumna.className = 'col-md-6';
		let rowPrimeraColumna = document.createElement('div');
		rowPrimeraColumna.className = 'row';
		rowPrimeraColumna.style = 'margin-top: 3px;';
		let colSede = document.createElement('div');
		colSede.className = 'col-md-4';
		let selectSedeOr = document.getElementById('sede1');
		let	selectSede = selectSedeOr.cloneNode(true);
		selectSede.id = 'sede'+actual;
		selectSede.name = 'sede'+actual;
		selectSede.required = true;
		selectSede.className = 'form-select sede';
		colSede.appendChild(selectSede);
		let colPiso = document.createElement('div');
		colPiso.className = 'col-md-4';
		let selectPiso = document.createElement('select');
		selectPiso.id = 'piso'+actual;
		selectPiso.name = 'piso'+actual;
		selectPiso.required = true;
		selectPiso.className = 'form-select piso';
		let optionPiso = document.createElement('option');
		optionPiso.text = 'Elegir Piso/Pabellón';
		optionPiso.value = '';
		selectPiso.appendChild(optionPiso);
		colPiso.appendChild(selectPiso);
		let colArea = document.createElement('div');
		colArea.className = 'col-md-4';
		let selectArea = document.createElement('select');
		selectArea.id = 'area'+actual;
		selectArea.name = 'area'+actual;
		selectArea.required = true;
		selectArea.className = 'form-select area';
		let optionArea = document.createElement('option');
		optionArea.text = 'Elegir Área';
		optionArea.value = '';
		selectArea.appendChild(optionArea);
		colArea.appendChild(selectArea);
		rowPrimeraColumna.appendChild(colSede);
		rowPrimeraColumna.appendChild(colPiso);
		rowPrimeraColumna.appendChild(colArea);
		let contenedorSelects = document.getElementById('columnaSelects');
		contenedorSelects.appendChild(rowPrimeraColumna);
		let segundaColumna = document.createElement('div');
		segundaColumna.className = 'col-md-6 text-center mt-3';
		let tableDias = document.createElement('table');
		tableDias.className = 'table table-bordered';
		let bodyDias = document.getElementById('bodyDias');
		let trDias = document.createElement('tr');
		for (let i = 0; i < 7; i++) {
			let dia = i + 1;
			let tdDia = document.createElement('td');
			let checkDia =  document.createElement('input');
			checkDia.id = 'check'+ dia +'-'+actual;
			checkDia.name = 'dias' + actual + '[]';
			checkDia.type = 'checkbox';
			checkDia.required = true;
			checkDia.value = dia + '';
			checkDia.className = 'form-check-input';
			tdDia.appendChild(checkDia);
			trDias.appendChild(tdDia);
		}
		bodyDias.appendChild(trDias);
		nuevaFila.appendChild(segundaColumna);
		let contenedorBase = document.getElementById('contenedorSedes');
		contenedorBase.appendChild(nuevaFila);

		$('#sede'+actual).on('change',function (){
			let etiqueta = $(this).attr('id');
			let numSede = etiqueta.substr(-1);
			let valor = $(this).val();
			console.log(etiqueta);
			console.log(valor);
		});

		$('#sede'+actual).on('change',function (){
			let etiqueta = $(this).attr('id');
			let numSede = etiqueta.substr(-1);
			let valor = $(this).val();
			if(valor) {
				$('#piso'+actual).empty().append('<option value="">Elegir Piso/Pabellon</option>');
				if(this.value) {
					$.ajax({
						url:         base_url + 'Auth/getPisos/' + valor,
						type:        'POST',
						cache:       false,
						contentType: 'json',
						processData: false,
						success:     function (data) {
							if(data.error === 0 || data.error === '0') {
								data['datos'].forEach(function(datos) {
									$('#piso'+actual).append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
								});
							} else {
								alert(data.mensaje);
							}
						},
						error:       function () {
							alert('No se puede obtener datos del servidor');
						}
					});
				}
			}
		});

		$('#piso'+actual).on('change',function (){
			let etiqueta = $(this).attr('id');
			let numSede = etiqueta.substr(-1);
			let valor = $(this).val();
			if(valor) {
				$('#area'+actual).empty().append('<option value="">Elegir Área</option>');
				if(this.value) {
					$.ajax({
						url:         base_url + 'Auth/getAreas/' + valor,
						type:        'POST',
						cache:       false,
						contentType: 'json',
						processData: false,
						success:     function (data) {
							if(data.error === 0 || data.error === '0') {
								data['datos'].forEach(function(datos) {
									$('#area'+actual).append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
								});
							} else {
								alert(data.mensaje);
							}
						},
						error:       function () {
							alert('No se puede obtener datos del servidor');
						}
					});
				}
			}
		});
	} else {
 		alert('Máximo 3 sedes');
	}
 }

</script>
