<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Goshop</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">GS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin Mode</li>
            <li class="nav-item active">
                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" href="{{ route('product.index') }}" data-toggle="dropdown"><i
                        class="fab fa-product-hunt"></i>
                    <span>Products</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('product.index') }}"><span>Products Index</span></a></li>
                    <li><a class="nav-link" href="{{ route('product.create') }}"><span>Create Products</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" href="{{ route('category.index') }}" data-toggle="dropdown"><i
                        class="fas fa-th-large"></i>
                    <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}"><span>Category Index</span></a></li>
                    <li><a class="nav-link" href="{{ route('category.create') }}"><span>Create Category</span></a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>