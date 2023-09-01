<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/admin/dashboard">
        <img src="<?php echo e(trans('panel.logo')); ?>" class="navbar-brand-img h-100" alt="main_logo">
       
      </a>
    </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/dashboard') || request()->is('admin/dashboard/*') ? 'active' : ''); ?>" href="/admin/dashboard">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-house text-danger text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/residents') || request()->is('admin/residents/*') ? 'active' : ''); ?>" href="/admin/residents">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list text-danger text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Manage Residents</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/requested_documents') || request()->is('admin/requested_documents/*') ? 'active' : ''); ?>" href="/admin/requested_documents">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list text-danger text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Requested Services</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/finder_resident') || request()->is('admin/finder_resident/*') ? 'active' : ''); ?>" href="/admin/finder_resident">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-magnifying-glass text-danger  text-sm"></i>
          </div>
          <span class="nav-link-text  ms-1">Resident Finder</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/documents') || request()->is('admin/documents/*') ? 'active' : ''); ?>" href="/admin/documents">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list text-danger text-sm"></i>
          </div>
          <span class="nav-link-text  ms-1">Manage Services</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/announcements') || request()->is('admin/announcements/*') ? 'active' : ''); ?>" href="/admin/announcements">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list text-danger text-sm"></i>
          </div>
          <span class="nav-link-text  ms-1">Announcements</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('admin/blotter') || request()->is('admin/blotter/*') ? 'active' : ''); ?>" href="/admin/blotter">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-list text-danger text-sm"></i>
          </div>
          <span class="nav-link-text  ms-1">Blotters</span>
        </a>
      </li>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('admin/admins') ? 'active' : ''); ?>" href="/admin/admins">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Administrator</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('admin/staffs') ? 'active' : ''); ?>" href="/admin/staffs">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Barangay Staffs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request()->is('admin/activity_logs') ? 'active' : ''); ?>" href="/admin/activity_logs">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Activity logs</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>

</aside><?php /**PATH C:\Users\Swaggy\Desktop\brgypembo\resources\views////partials/admin/sidebar.blade.php ENDPATH**/ ?>