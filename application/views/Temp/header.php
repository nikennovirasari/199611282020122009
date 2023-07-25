<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo.png">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- JqueryUI CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <style>
        .data-perkara {
            display: none;
        }

        .tidak-valid {
            display: none;
            text-align: center;
        }

        #text-center {
            text-align: center;
        }

        /* centered columns styles */
        .row-centered {
            text-align: center;
        }

        .col-centered {
            display: inline-block;
            float: none;
            /* reset the text-align */
            text-align: left;
            /* inline-block space fix */
            margin-right: -4px;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav" style="background-color: #87ceeb !important;">
    <div class="wrapper">
        <!-- /.Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color:#e56717; opacity:0.8;">
        <div class="container-fluid">
            <img src="<?php echo base_url() ?>assets/img/logopa.png">
        </div>
        </nav>
        <!-- /.navbar -->