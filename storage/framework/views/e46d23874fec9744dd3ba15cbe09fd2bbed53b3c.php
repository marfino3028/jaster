<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand sidebar-gone-show"><a href="index.html">Stisla</a></div>
<ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a href="<?php echo e(route('dashboard')); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
            <li class="menu-header">Management</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i> <span>Progress</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listProgress')); ?>">List Progress</a></li>
                <li><a class="nav-link" href="#">Active Progress (soon)</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Orders</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listOrder')); ?>">List Order</a></li>
                <li><a class="nav-link" href="<?php echo e(url('orders/add-order')); ?>">Add Order</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i> <span>Progress Point</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listCategories')); ?>">List Point</a></li>
                <li><a class="nav-link" href="<?php echo e(route('addCategory')); ?>">Add Point</a></li>
              </ul>
            </li>
            <li><a href="<?php echo e(route('listHosting')); ?>" class="nav-link"><i class="fas fa-server"></i><span>Hosting</span></a></li>
            <li><a href="<?php echo e(route('listDomain')); ?>" class="nav-link"><i class="fas fa-globe-americas"></i><span>Domain</span></a></li>
            <li class="menu-header">Adwords</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fab fa-google"></i> <span>Ringkasan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listCampaign')); ?>">Ringkasan Campaign</a></li>
                <li><a class="nav-link" href="<?php echo e(route('addCampaign')); ?>">Tambah Campaign</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-wallet"></i> <span>Antri TF</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listTransfer')); ?>">List Antrian</a></li>
                <li><a class="nav-link" href="<?php echo e(route('addTransfer')); ?>">Tambah Antrian</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Akun Adwords</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">List Akun</a></li>
                <li><a class="nav-link" href="#">Tambah Akun</a></li>
              </ul>
            </li>
            <li class="menu-header">Data</li>
            <li><a href="<?php echo e(route('addUserNotes')); ?>" class="nav-link"><i class="far fa-sticky-note"></i><span>Tasks</span></a></li>
            <li><a href="<?php echo e(route('deadline')); ?>" class="nav-link"><i class="fas fa-calendar"></i><span>Deadline</span></a></li>
          </ul>
        </aside>
      </div><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/items/sidebar.blade.php ENDPATH**/ ?>