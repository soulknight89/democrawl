<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ThemeBucket">
	<link rel="shortcut icon" href="images/favicon.html">
	<title>Autorización de ingreso</title>
	<!--Core CSS -->
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/fonts/fontawesome.css") ?>">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/fonts/ionicons.css") ?>">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/fonts/linearicons.css") ?>">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/fonts/open-iconic.css") ?>">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/fonts/pe-icon-7-stroke.css") ?>">
	<!-- Core stylesheets -->
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/rtl/bootstrap.css") ?>" class="theme-settings-bootstrap-css">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/rtl/appwork.css") ?>" class="theme-settings-appwork-css">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/rtl/theme-corporate.css") ?>" class="theme-settings-theme-css">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/rtl/colors.css") ?>" class="theme-settings-colors-css">
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/rtl/uikit.css") ?>">
	<link rel="stylesheet" href="<?= base_url("template/assets/css/demo.css") ?>">
	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!-- Load polyfills -->
	<script src="<?= base_url("template/assets/vendor/js/polyfills.js")?>"></script>
	<script>document['documentMode']===10&&document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

	<script src="<?= base_url("template/assets/vendor/js/material-ripple.js")?>"></script>
	<script src="<?= base_url("template/assets/vendor/js/layout-helpers.js")?>"></script>

	<!-- Theme settings -->
	<!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->
	<script src="<?= base_url("template/assets/vendor/js/theme-settings.js")?>"></script>
	<script>
		window.themeSettings = new ThemeSettings({
			cssPath: '<?= base_url("template/assets/vendor/css/rtl/")?>',
			themesPath: '<?= base_url("template/assets/vendor/css/rtl/")?>'
		});
	</script>

	<!-- Core scripts -->
	<script src="<?= base_url("template/assets/vendor/js/pace.js")?>"></script>
	<script src="<?= base_url("template/js/jquery/jquery.min.js")?>"></script>
	<script type="text/javascript" src="<?= base_url("template/js/jcryption/jquery.jcryption.3.1.0.js")?>"></script>

	<!-- Libs -->
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")?>">
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url("template/assets/vendor/css/pages/authentication.css")?>">
</head>
<body>
<div class="page-loader">
	<div class="bg-primary"></div>
</div>
<div class="authentication-wrapper authentication-4 px-4">
	<div class="authentication-inner py-5">
		<?= $content_for_layout; ?>
	</div>
</div>
<!-- Core scripts -->
<script src="<?= base_url("template/assets/vendor/libs/popper/popper.js") ?>"></script>
<script src="<?= base_url("template/assets/vendor/js/bootstrap.js") ?>"></script>
<script src="<?= base_url("template/assets/vendor/js/sidenav.js") ?>"></script>

<!-- Libs -->
<script src="<?= base_url("template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") ?>"></script>

<!-- Demo -->
<script src="<?= base_url("template/assets/js/demo.js") ?>"></script>
</body>
</html>
