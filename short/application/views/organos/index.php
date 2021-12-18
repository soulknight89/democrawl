<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="font-weight-bold py-3 mb-4">Órganos</h4>
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12 adv-table editable-table">
						<div class="row">
							<div class="col-md-3">
								<a class="btn btn-primary" href="<?= base_url('Organos/nuevo'); ?>">
									Nuevo órgano <i class="fa fa-plus"></i>
								</a>
								<br/>
								<br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<input type="text" placeholder="Código" id="codigo" class="form-control">
							</div>
							<div class="col-md-3">
								<input type="text" placeholder="Órgano" id="organo" class="form-control">
							</div>
							<div class="col-md-3">
								<input type="text" placeholder="Nivel" id="nivel" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<br/>
								<table id="doctores" class="table table-striped table-hover table-bordered">
									<thead>
									<tr>
										<th>Órgano</th>
										<th>Código</th>
										<th>Nivel</th>
										<th>Editar</th>
									</tr>
									</thead>
									<tbody>
									<?php
										foreach ($organos as $organo) {
											echo "<tr>";
											echo "<td>" . $organo->nombre . "</td>";
											echo "<td>" . $organo->codigo . "</td>";
											echo "<td>" . $organo->nivel . "</td>";
											echo "<td>" . $organo->id . "</td>";
											echo "</tr>";
										}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<script>
	var oPendi;

	$(document).ready(function () {

		loadTable();

		$('#organo').keyup(function () {
			oPendi
				.columns(0)
				.search('"' + $(this).val() + '"')
				.draw();
		});

		$('#codigo').keyup(function () {
			var buscar = '"' + $(this).val() + '"';
			oPendi
				.columns(1)
				.search(buscar)
				.draw();
		});

		$('#nivel').keyup(function () {
			var buscar = '"' + $(this).val() + '"';
			oPendi
				.columns(2)
				.search(buscar)
				.draw();
		});
	});

	function loadTable () {
		oPendi = $('#doctores').DataTable({
			responsive:      true,
			'order':         [[0, 'desc']],
			'aLengthMenu':   [[10, 50, -1], [10, 50, 'Todo']],
			'bLengthChange': false,
			'oLanguage':     {
				'sProcessing':     'Procesando...',
				'sLengthMenu':     'Mostrar _MENU_ registros',
				'sZeroRecords':    'No se encontraron resultados',
				'sEmptyTable':     'Ningún dato disponible en esta tabla',
				'sInfo':           'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
				'sInfoEmpty':      'Mostrando registros del 0 al 0 de un total de 0 registros',
				'sInfoFiltered':   '(filtrado de un total de _MAX_ registros)',
				'sInfoPostFix':    '',
				//'sSearch':         'Buscar',
				'sUrl':            '',
				'sInfoThousands':  ',',
				'sLoadingRecords': 'Cargando...',
				'oPaginate':       {
					sFirst:    'Primero',
					sLast:     'Último',
					sNext:     'Siguiente',
					sPrevious: 'Anterior'
				}
			}
		});
		$('#doctores_filter').hide();
	};
</script>
