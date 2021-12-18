<?php $ses = $this->session->userdata("ses"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Solicitud Pase Laboral - MINEDU
	</title>
	<link href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url("template/assets/vendor/fonts/fontawesome.css") ?>" rel="stylesheet"/>
	<?= $this->layout->css; ?>
	<script>let base_url = "<?= base_url() ?>";</script>
	<!-- Mainly scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?= base_url("template/assets/vendor/js/bootstrap.js") ?>"></script>
	<!-- Custom and plugin javascript -->
	<?= $this->layout->js; ?>
</head>
<body>
	<?= $content_for_layout; ?>
</body>
</html>
