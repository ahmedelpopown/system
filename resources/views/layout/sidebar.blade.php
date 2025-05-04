<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
             
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
 
          </li>
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                الصفحه الرئيسيه
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                المنتجات
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('employee.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                الجنود
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
 
          <li class="nav-item">
            <a href="{{ route('supplier.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                المورد
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <!-- seales -->
          <!-- <li class="nav-item">
            <a href="{{ route('min_product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
            اقل المنتجات
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{ route('sales.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
            المبيعات
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
 
           
        </ul>
      </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

 