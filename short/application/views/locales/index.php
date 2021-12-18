<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="font-weight-bold py-3 mb-4">Locales</h4>
			</header>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12 adv-table editable-table">
						<div class="row">
							<div class="col-md-3">
								<a class="btn btn-primary" href="<?= base_url('Locales/nuevo'); ?>">
									Nuevo local <i class="fa fa-plus"></i>
								</a>
								<br/>
								<br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<input type="text" placeholder="Local" id="local" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<br/>
								<table id="locales" class="table table-striped table-hover table-bordered">
									<thead>
									<tr>
										<th style="width: 80%">Local</th>
										<th style="max-width: 20%">Detalle</th>
									</tr>
									</thead>
									<tbody>
									<?php
										foreach ($locales as $local) {
											echo "<tr>";
											echo "<td>" . $local->nombre . "</td>";
											echo "<td style='text-center'><a href='".base_url('Locales/detalle/'.$local->id_sede)."' class='btn btn-success btn-xs'>Detalle</td>";
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

		$('#local').keyup(function () {
			oPendi
				.columns(0)
				.search('"' + $(this).val() + '"')
				.draw();
		});
	});

	function loadTable () {
		oPendi = $('#locales').DataTable({
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
		$('#locales_filter').hide();
	};
</script>
