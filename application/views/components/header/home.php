<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | LOGOL V.4</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <meta name="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>">
    <link href="<?= base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/preloader.min.css" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="<?= base_url(); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.css?v=<?= rand(); ?>" id="app-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/customs.min.css?v=<?= rand(); ?>"rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/kalibaru.min.css?v=<?= rand(); ?>"rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/bes.css?v=<?= rand(); ?>"rel="stylesheet" type="text/css" />
	<script>let site_url = '<?php echo site_url(); ?>'; let base_url = '<?php echo base_url(); ?>';</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB34M9Upe8AtZtwSogFYuy31rzUhjHXb3Q&libraries=places"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.js?v=<?= rand(); ?>"></script>
    <script src="<?= base_url(); ?>assets/libs/metismenu/metisMenu.min.js"></script>
</head>