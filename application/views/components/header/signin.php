<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login | LOGOL V4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Logistic Online" name="Logol" />
    <meta name="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/preloader.min.css?v=<?= rand(); ?>" type="text/css" /> -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css?v=<?= rand(); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/icons.min.css?v=<?= rand(); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/app.min.css?v=<?= rand(); ?>" id="app-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/customs.min.css?v=<?= rand(); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/kalibaru.min.css?v=<?= rand(); ?>" rel="stylesheet" type="text/css" />
    <script src="<?= base_url(); ?>assets/libs/jquery/jquery.min.js?v=<?= rand(); ?>"></script>
    <script src="<?= base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js?v=<?= rand(); ?>"></script>

</head>