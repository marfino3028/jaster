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
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i> <span>Tasks</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('listCategories')); ?>">List Tasks</a></li>
                <li><a class="nav-link" href="<?php echo e(route('addCategory')); ?>">Add Task</a></li>
              </ul>
            </li>
            <li class="menu-header">Data</li>
            <li><a href="#" class="nav-link"><i class="fas fa-address-book"></i><span>Web Accounts (soon)</span></a></li>
            <li><a href="<?php echo e(route('deadline')); ?>" class="nav-link"><i class="fas fa-calendar"></i><span>Deadline (soon)</span></a></li>
          </ul>
        </aside>
      </div><?php /**PATH C:\xampp\htdocs\jasterman\resources\views/backend/items/sidebar.blade.php ENDPATH**/ ?>