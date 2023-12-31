<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/home') }}">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/product-list') }}">
                        <i class="bi bi-circle"></i><span>Product List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/create-product') }}">
                        <i class="bi bi-circle"></i><span>Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/category-list') }}">
                        <i class="bi bi-circle"></i><span>Category List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/create-category') }}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Products Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Footer</span>
            </a>
        </li><!-- End Footer Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/users') }}">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
        </li><!-- End Users -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/setting') }}">
                <i class="bi bi-gear"></i>
                <span>Setting</span>
            </a>
        </li><!-- End Contact Nav -->
</aside><!-- End Sidebar-->
