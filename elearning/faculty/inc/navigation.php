<?php
// Define the $page variable based on the current page
$page = '';
if(isset($_GET['page'])) {
    $page = $_GET['page'];
}
?>

<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2" alt="User Image" style="height: 2rem;object-fit: cover">
                  </div>
                  <div class="info">
                    <a href="<?php echo base_url ?>faculty/?page=user" class="d-block"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></a>
                  </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown <?php echo ($page === 'home') ? 'menu-open' : ''; ?>">
                      <a href="./" class="nav-link <?php echo ($page === 'home') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li> 
                    <li class="nav-item dropdown <?php echo ($page === 'class') ? 'menu-open' : ''; ?>">
                      <a href="<?php echo base_url ?>faculty/?page=class" class="nav-link <?php echo ($page === 'class') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                          Classes
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown <?php echo ($page === 'lesson') ? 'menu-open' : ''; ?>">
                      <a href="<?php echo base_url ?>faculty/index.php?page=lesson" class="nav-link <?php echo ($page === 'lesson') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                          Books, Videos & Quizzes
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown <?php echo ($page === 'lesson/assignment') ? 'menu-open' : ''; ?>">
                      <a href="<?php echo base_url ?>faculty/?page=lesson/assignment" class="nav-link <?php echo ($page === 'lesson/assignment') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                          Assignment & Paper
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown <?php echo ($page === 'lesson/allassign') ? 'menu-open' : ''; ?>">
                      <a href="<?php echo base_url ?>faculty/?page=lesson/allassign" class="nav-link <?php echo ($page === 'lesson/allassign') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                          View Submitted Assignment
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>