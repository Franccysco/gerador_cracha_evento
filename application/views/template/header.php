<!DOCTYPE html>
<html lang="pt-br">

<?php $this->load->view('template/head') ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url('/assets/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
    </div>
    <input type="hidden" name="base_url" id="base_url" value="<?=base_url();?>">
    <?php $this->load->view('template/menu-nav') ?>