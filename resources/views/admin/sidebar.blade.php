<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link"  
                href="{{ route('part1') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="bi bi-wordpress"></i>
                  </span>
                  <span class="hide-menu">Dading</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link"  
                href="{{ route('part1') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                  <span class="hide-menu">Ikwan</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link"  
                href="{{ route('part1') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-atom"></i>
                  </span>
                  <span class="hide-menu">Ondi</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link"  
                href="{{ route('part2') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                  <span class="hide-menu">Tahir</span>
                </div>
              </a>
            </li>
          </ul>
        </nav>