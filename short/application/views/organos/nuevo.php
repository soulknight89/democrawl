<?php
	/**
	 * @author: Edwin Torres -> Nuevo organo
	 */
	$datos = (object) $_SESSION['ses'];
?>
<h4 class="font-weight-bold py-3 mb-4">
	Registrar órgano
</h4>
<div class="row">
	<div class="col-lg-12">
		<section class="panel panel-primary">
			<header class="panel-heading">
			</header>
			<?php echo form_open(null, ["class" => "", "id" => "frm_doc", "name" => "frm_doc"]); ?>
			<div class="panel-body">
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
					<input id="usuario" name="usuario" type="hidden" value="<?= $datos->usu_id; ?>"/>
					<div class="col-md-3">
						<label for="nivel">Seleccione el nivel</label>
						<select name="nivel" id="nivel" autocomplete="off" class="form-control" required>
							<option value="">Seleccione</option>
							<option value="1">Primer</option>
							<option value="2">Segundo</option>
							<option value="3">Tercer</option>
							<option value="4">Cuarto</option>
						</select>
					</div>
					<div class="col-md-3 nivel_1">
						<label for="nivel_1">Órgano nivel 1</label>
						<select name="nivel_1" id="nivel_1" autocomplete="off" class="form-control">
							<option value="">Seleccione</option>
							<?php
								foreach ($nivel_1 as $n1) {
									echo "<option value='$n1->id'>" . $n1->nombre . "</option>";
								} ?>
						</select>
					</div>
					<div class="col-md-3 nivel_2">
						<label for="nivel_2">Órgano nivel 2</label>
						<select name="nivel_2" id="nivel_2" autocomplete="off" class="form-control">
							<option value="">Seleccione</option>
						</select>
					</div>
					<div class="col-md-3 nivel_3">
						<label for="nivel_3">Órgano nivel 3</label>
						<select name="nivel_3" id="nivel_3" autocomplete="off" class="form-control">
							<option value="">Seleccione</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" value="" autocomplete="off" maxlength="100" class="form-control" required/>
					</div>
					<div class="col-md-3">
						<label for="codigo">Código</label>
						<input type="text" name="codigo" id="codigo" value="" autocomplete="off" maxlength="100" class="form-control" />
					</div>
				</div>
			</div>
			<div class="panel-footer pull-right">
				<button type="submit" id="grabarOrgano" class="btn btn-success">Completar Registro</button>
			</div>
			<?php echo form_close(); ?>
		</section>
	</div>
</div>

<script>
	let colegiatura = $('#nombre');
	let primerNombreTxt = $('#nombre');
	let segundoNombreTxt = $('#codigo');

	$(document).ready(function () {
		$('.nivel_1').css('display','none');
		$('.nivel_2').css('display','none');
		$('.nivel_3').css('display','none');
		$('#nivel_1').removeAttr('required');
		$('#nivel_2').removeAttr('required');
		$('#nivel_3').removeAttr('required');
		// primerNombreTxt.on('keyup', function () {
		// 	this.value = onlyAlphabet(this.value);
		// });
		// segundoNombreTxt.on('keyup', function () {
		// 	this.value = onlyAlphabet(this.value);
		// });

		$('#nivel').on('change',function () {
			let nivel = this.value;
			$('#nivel_1').val('');
			$('#nivel_2').empty().append('<option value="">Seleccione</option>');
			$('#nivel_3').empty().append('<option value="">Seleccione</option>');
			if(nivel === '1') {
				$('.nivel_1').css('display','none');
				$('.nivel_2').css('display','none');
				$('.nivel_3').css('display','none');
				$('#nivel_1').removeAttr('required');
				$('#nivel_2').removeAttr('required');
				$('#nivel_3').removeAttr('required');
			}
			if(nivel === '2') {
				$('.nivel_1').css('display','');
				$('.nivel_2').css('display','none');
				$('.nivel_3').css('display','none');
				$('#nivel_1').attr('required','true');
				$('#nivel_2').removeAttr('required');
				$('#nivel_3').removeAttr('required');
			}
			if(nivel === '3') {
				$('.nivel_1').css('display','');
				$('.nivel_2').css('display','');
				$('.nivel_3').css('display','none');
				$('#nivel_1').attr('required','true');
				$('#nivel_2').attr('required','true');
				$('#nivel_3').removeAttr('required');
			}
			if(nivel === '4') {
				$('.nivel_1').css('display','');
				$('.nivel_2').css('display','');
				$('.nivel_3').css('display','');
				$('#nivel_1').attr('required','true');
				$('#nivel_2').attr('required','true');
				$('#nivel_3').attr('required','true');
			}
		});

		$('#nivel_1').on('change',function () {
			let nivel = $('#nivel').val();
			if(nivel === '3' || nivel === '4') {
				let id = this.value;
				$('#nivel_2').empty().append('<option value="">Seleccione</option>');
				$('#nivel_3').empty().append('<option value="">Seleccione</option>');
				if(this.value) {
					$.ajax({
						url:         base_url + 'Organos/getNivel2/' + id,
						type:        'POST',
						cache:       false,
						contentType: 'json',
						processData: false,
						success:     function (data) {
							if(data.error === 0 || data.error === '0') {
								data['datos'].forEach(function(datos) {
									$('#nivel_2').append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
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

		$('#nivel_2').on('change',function () {
			let nivel = $('#nivel').val();
			let id = this.value;
			if(nivel === '4') {
				$('#nivel_3').empty().append('<option value="">Seleccione</option>');
				if(this.value) {
					$.ajax({
						url:         base_url + 'Organos/getNivel3/' + id,
						type:        'POST',
						cache:       false,
						contentType: 'json',
						processData: false,
						success:     function (data) {
							if(data.error === 0 || data.error === '0') {
								data['datos'].forEach(function(datos) {
									$('#nivel_3').append('<option value="'+datos.id+'">'+datos.nombre +'</option>');
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
	});
</script>
