<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= base_url(); ?>" class="brand-link">
    <img src="<?= base_url('assets/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
        <li class="nav-header">MENU OPÇÕES</li>
        <li class="nav-item">
          <a href="<?=base_url()?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p> Dashboard - Home </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('equipes')?>" class="nav-link">
            <i class="nav-icon fas fa-th "></i>
            <p> Equipes </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('participantes')?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Participantes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('modelos-cracha')?>" class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p> Modelos de crachá </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('importar-dados')?>" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
            <p> Importar dados </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>