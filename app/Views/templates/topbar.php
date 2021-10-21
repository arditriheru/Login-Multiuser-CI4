 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block mt-2">
             <a href="https://arditriheru.github.io" class="badge badge-success">ONLINE</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="https://arditriheru.github.io" class="nav-link"></a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar alert -->
         <li class="nav-item">

         </li>
         <!-- login as -->
         <li class="nav-item">
             <a class="nav-link" href="https://arditriheru.github.io" target="_blank">
                 Login as : Admin
             </a>
         </li>
         <!-- expand fullscreen -->
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <!-- Bilingual Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <img src="<?= base_url(); ?>/dist/img/in_lang.png" alt="Swith Language" width="25px" class="brand-image">
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <div class="dropdown-divider"></div>
                 <a class="nav-link" href="<?= base_url(); ?>/switchLanguage/index/magang_bahasa/in">
                     <img src="<?= base_url(); ?>/dist/img/in_lang.png" alt="Swith Language" width="25px" class="brand-image">
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="nav-link" href="<?= base_url(); ?>/switchLanguage/index/magang_bahasa/en">
                     <img src="<?= base_url(); ?>/dist/img/en_lang.png" alt="Swith Language" width="25px" class="brand-image">
                 </a>
             </div>
         </li>
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="fas fa-chevron-down"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <ul><a class="nav-link" href="<?= base_url(); ?>magang/login/logout">
                         <i class="far fa-circle nav-icon"></i> Logout
                     </a></ul>
             </div>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->