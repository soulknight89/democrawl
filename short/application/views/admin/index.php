<script type="text/javascript">
</script>
<div class="card">
	<div class="row no-gutters row-bordered">
		<!-- Login -->
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
		<div class="col-md-12">
			<h5 class="text-center text-muted font-weight-normal py-4 px-4 px-sm-5 m-0">Iniciar Sesión</h5>
			<hr class="border-light m-0">
			<div class="px-4 px-sm-5 pt-4 pb-5 pb-sm-5">
				<!-- Login form -->
				<form id="inicio-sesion" action="<?= base_url('Admin/login');?>" method="post" class="form-signin">
					<div class="form-group">
						<label class="form-label">Correo Electronico</label>
						<input type="text" id="usuario" name="usuario" class="form-control" autocomplete="off" autofocus>
					</div>
					<div class="form-group">
						<label class="form-label d-flex justify-content-between align-items-end">
							<div>Clave</div>
							<a href="javascript:void(0)" class="d-block small">Olvidaste tu contraseña?</a>
						</label>
						<input type="password" id="clave" name="clave" class="form-control">
					</div>
					<div class="d-flex justify-content-between align-items-center m-0">
						<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
					</div>
				</form>
				<!-- / Login form -->
			</div>
		</div>
		<!-- / Login -->
	</div>
</div>
