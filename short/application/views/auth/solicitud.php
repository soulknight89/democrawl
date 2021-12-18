<?php

?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<img src="<?= base_url("template/assets/img/minedu.png") ?>" alt="" style="width:250px;height: 60px;">
		</div>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="col-md-12 text-center">
			<h3 class="fw-bold mt-3">Solicitud Pase Laboral MINEDU</h3>
		</div>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="col-md-12">
			<p>
				Si requieres ingresar a cualquiera de las sedes institucionales del Ministerio de Educación durante la
				semana, es necesario presentar tu Pase Laboral Minedu con tu código QR al ingreso de nuestras
				instalaciones.(Se considera que la semana inicia el lunes y culmina el domingo).
			</p>
			<p>
				El Pase Laboral Minedu te autoriza a ingresar en los días y a las sedes que hayas especificado en la
				solicitud, durante la semana, siempre que cuentes con tu cuestionario de salud COVID-19 vigente y sin
				observaciones, y además, no se superen los aforos máximos autorizados por la entidad.
			</p>
			<p>
				Si por algún motivo específico, durante la semana debes asistir a alguna sede adicional o en algún día
				no solicitado previamente, deberás solicitar la <b style="color: #0d6efd">Renovación de Pase Laboral
					Minedu</b>.
			</p>
		</div>
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
		<div class="row" style="margin-top: 25px;">
			<div class="col-md-12">
				<label>Seleccione</label><br/>
				<label for="radioPropio">
					<input type="radio" id="radioPropio" name="tipoPersonal" value="propio" required <?= (!$general) ? 'disabled' : '' ?>>
					Personal Propio (vínculo laboral y órdenes de servicio)
				</label><br/>
				<label for="radioExterno">
					<input type="radio" id="radioExterno" name="tipoPersonal" value="externo" <?= (!$proveedor) ? 'disabled' : '' ?>>
					Personal Externo (Proveedores, contratistas y visitantes)
				</label>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-12">
				<p style="font-weight: bold">
					* Recuerda que si no has completado tu cuestionario de salud deberás hacerlo antes de solicitar tu pase
					laboral Minedu ingresando al siguiente enlace:
				</p>
				<ul>
					<li>
						Personal Propio: <a href="https://ogrh-salud.minedu.gob.pe/">https://ogrh-salud.minedu.gob.pe/</a>
					</li>
					<li>
						Personal Externo: <a href="https://autorizacionsst-salud.minedu.gob.pe/">https://autorizacionsst-salud.minedu.gob.pe/</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="row">
				<div class="col-md-12 text-center">
					<button type="submit" id="grabarPiso" class="btn btn-lg btn-primary">Continuar</button>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>
