<?php
	/**
	 * @author: Edwin Torres -> Nuevos pedidos;
	 * @var mixed $pisos
	 * @var mixed $areas
	 * @var object $usuario
	 * @var string $nombre
	 * @var integer $aforo
	 *
	 */
?>
<div class="row">
	<div class="col-lg-12">
		<section class="panel panel-primary">
			<header class="panel-heading">
				<h4 class="font-weight-bold py-3 mb-4">Detalle sede: <?= $nombre; ?><span class="text-success">&nbsp;&nbsp;(aforo: <?= $aforo; ?>)</span></h4>
			</header>
			<?php echo form_open(null, ["class" => "", "id" => "frm_doc_upd", "name" => "frm_doc_upd"]); ?>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<a class="btn btn-primary" href="<?= base_url('Locales/nuevo_piso'); ?>">
							Nuevo piso <i class="fa fa-plus"></i>
						</a>
						<br/>
						<br/>
					</div>
					<div class="col-md-3">
						<a class="btn btn-primary" href="<?= base_url('Locales/nuevo_area'); ?>">
							Nuevo área <i class="fa fa-plus"></i>
						</a>
						<br/>
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<br/>
						<table id="pisos" class="table table-striped table-hover table-bordered">
							<thead>
							<tr>
								<th>Piso</th>
								<th>Aforo</th>
								<th>Editar</th>
							</tr>
							</thead>
							<tbody>
							<?php
								foreach ($pisos as $piso) {
									echo "<tr>";
									echo "<td>" . $piso->nombre . "</td>";
									echo "<td>" . $piso->aforo . "</td>";
									echo "<td>" . $piso->id_piso . "</td>";
									echo "</tr>";
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<br/>
						<table id="areas" class="table table-striped table-hover table-bordered">
							<thead>
							<tr>
								<th>Área</th>
								<th>Piso</th>
								<th>Órgano</th>
								<th>Aforo</th>
								<th>Editar</th>
							</tr>
							</thead>
							<tbody>
							<?php
								foreach ($areas as $area) {
									echo "<tr>";
									echo "<td>" . $area->nombre . "</td>";
									echo "<td>" . $area->nombrePiso . "</td>";
									echo "<td>" . $area->nombreOrgano . "</td>";
									echo "<td>" . $area->aforo . "</td>";
									echo "<td>" . $area->id_area . "</td>";
									echo "</tr>";
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="panel-footer pull-right">
				<input type="button" class="btn btn-warning" value="Volver"
				       onclick="location.href = base_url+'Locales';"/>
			</div>
			<?php echo form_close(); ?>
		</section>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#nombres').on('keyup', function () {
			this.value = onlyAlphabet(this.value);
		});

		$('#apellidos').on('keyup', function () {
			this.value = onlyAlphabet(this.value);
		});

		$('#colegiatura').on('keyup', function () {
			this.value = onlyAlphaNumericNonSpace(this.value);
		});
	});
</script>
