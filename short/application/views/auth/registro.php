<div class="container">
	<div class="row" style="margin-top: 10vh;">
		<div class="col-md-4 text-center">
			<img src="<?= base_url("template/assets/img/minedu.png") ?>" alt="" style="width:250px;height: 60px;">
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
			<p class="font- fw-bold">INGRESA TUS DATOS PARA INICIAR TU SOLICITUD:</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label for="tipDoc">Típo de documento</label>
				<select class="form-select" id="tipDoc" name="tipDoc" autocomplete="off">
					<option value="">Seleccione</option>
					<option value="DNI">DNI</option>
					<option value="CE">CE</option>
				</select>
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="col-md-4">
				<label for="numDoc">Número de documento</label>
				<input class="form-control" type="text" id="numDoc" name="numDoc" autocomplete="off" maxlength="12" minlength="8"/>
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="col-md-4">
				<label for="fechaDoc">Fecha de nacimiento</label>
				<input class="form-control" type="date" id="fechaDoc" name="fechaDoc" pattern="dd/mm/yyyy" placeholder="DD/MM/AAAA" autocomplete="off"/>
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="col-md-4">
				<label for="celular">Celular de contacto:</label>
				<input class="form-control" type="number" id="celular" name="celular" max="999999999" min="900000000" autocomplete="off"/>
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="col-md-4">
				<button type="button" id="refreshCaptcha" class="btn btn-xs btn-warning" onclick="recargarCodigo()">Recargar código</button><br>
				<img src="<?= base_url().'/Auth/generarCaptcha'; ?>" alt="CAPTCHA" class="captcha-image">
				<input type="text" id="captcha_code" class="form-control" name="ctpc" pattern="[A-Za-z]{6}" maxlength="6">
			</div>
		</div>
		<div class="row" style="margin-top: 25px;">
			<div class="row">
				<div class="col-md-4 text-center">
					<button type="submit" id="grabarPiso" class="btn btn-lg btn-primary">Continuar</button>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
	<div class="row">
		<div class="col-md-12">
			<br>
			<br>
		</div>
	</div>
	<script>
		function recargarCodigo(){
			document.querySelector(".captcha-image").src = '<?= base_url().'/Auth/generarCaptcha?'; ?>' + Date.now();
		}
	</script>
