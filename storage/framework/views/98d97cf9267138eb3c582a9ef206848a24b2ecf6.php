<header id="header" class="fixed-top <?php echo e(request()->is('/') || request()->is('/*') ? '' :'header-inner-pages'); ?>">
    <div class="container d-flex align-items-center">
     <a href="/" class="me-auto"><img  src="<?php echo e(trans('panel.logo_white')); ?>" alt="logo" height="55" ></a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto <?php echo e(request()->is('/#hero') ? 'active' : ''); ?>" href="/">Home</a></li>
          <?php if(Auth::user()): ?>
            <li><a class="nav-link scrollto  <?php echo e(request()->is('resident/request_document') || request()->is('resident/request_document/*') ? 'active' : ''); ?>" href="/resident/request_document">Services</a></li>
            <li><a class="nav-link scrollto  <?php echo e(request()->is('resident/requested_document') || request()->is('resident/requested_document/*') ? 'active' : ''); ?>" href="/resident/requested_document">Tracker</a></li>
          <?php else: ?>
            
            <li><a class="nav-link scrollto" href="/#about">About</a></li>
            <li><a class="nav-link scrollto" href="/#announcement">Announcements</a></li>
            <li><a class="nav-link scrollto" href="/#services">Services</a></li>
            <li><a class="nav-link scrollto" href="/#officials">Officials</a></li>
            <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <?php endif; ?>
        
          <li class="dropdown"><a href="#" class="<?php echo e(request()->is('login') || request()->is('register') ? 'active' : ''); ?>"><span>Accounts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <?php if(Auth::user()): ?>
                <li><a href="/resident/account">Edit Account</a></li>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form> 
                <?php else: ?>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <?php endif; ?>
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views////partials/resident/navbar.blade.php ENDPATH**/ ?>