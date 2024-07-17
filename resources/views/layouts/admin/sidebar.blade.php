<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">Digital Dimension</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="{{url('/admin')}}">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="{{url('/admin/user')}}">
              <div class="parent-icon"><i class="material-icons-outlined">person</i>
              </div>
              <div class="menu-title">Users Management</div>
            </a>
          </li>
          <li class="menu-label">Tables</li>
          <li>
            <a class="has-arrow" href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">api</i>
              </div>
              <div class="menu-title">Tables</div>
            </a>
            <ul>
              <li><a href="{{url('/admin/kategori')}}"><i class="material-icons-outlined">arrow_right</i>Category</a>
              </li>
              <li><a href="{{url('/admin/product')}}"><i class="material-icons-outlined">arrow_right</i>Product</a>
              </li>
            </ul>
          </li>
         </ul>
        <!--end navigation-->
    </div>
  </aside>
