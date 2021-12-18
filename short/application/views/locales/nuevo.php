<?php
	/**
	 * @author: Edwin Torres -> Nuevo organo
	 */
	$datos = (object) $_SESSION['ses'];
?>
<h4 class="font-weight-bold py-3 mb-4">
	Registrar local
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
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" value="" autocomplete="off" maxlength="100" class="form-control" required/>
					</div>
				</div>
			</div>
			<div class="panel-footer pull-right">
				<button type="submit" id="grabarLocal" class="btn btn-success">Completar Registro</button>
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
	});
</script>
