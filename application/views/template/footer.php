<footer class="main-footer">
  <div class="float-right d-none d-sm-inline">
    1.0
  </div>
  <strong>Copyright &copy; 2022 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

</div>

<script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<script src="<?= base_url('/assets/js/adminlte.min.js') ?>"></script>
<script>
  var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  var currentTheme = localStorage.getItem('theme');
  var mainHeader = document.querySelector('.main-header');

  if (currentTheme) {
    if (currentTheme === 'dark') {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      toggleSwitch.checked = true;
    }
  }

  function switchTheme(e) {
    if (e.target.checked) {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      localStorage.setItem('theme', 'dark');
    } else {
      if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-dark')) {
        mainHeader.classList.add('navbar-light');
        mainHeader.classList.remove('navbar-dark');
      }
      localStorage.setItem('theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
</script>

</body>

</html>