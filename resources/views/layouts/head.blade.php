<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name = "csrf-token" content = "{{csrf_token ()}}">

    <!--<base href="http://127.0.0.1:8000/">-->
    <base href="http://192.168.1.6/sistema_eletrica/public/">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>SISTEMA | GARCIA</title>
    
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Custom CSS -->
          <link href="css/style.css" rel="stylesheet">
          <link href="css/custom.css" rel="stylesheet">
</head>

<body class="header-fix fix-sidebar">

    <?php
    // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');


    ?>

    <!-- Main wrapper  -->
    <div id="main-wrapper">

        