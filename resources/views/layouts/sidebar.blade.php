<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Goshop</a>

            <a href="index.html">GOShop</a>
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

            <li class="nav-item">
                <a href="{{ url('/discount') }}" class="nav-link "><i class="fas fa-tags"></i><span>Discount</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/order') }}" class="nav-link "><i class="fas fa-archive"></i><span>Order</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/transaksi') }}" class="nav-link "><i class="fas fa-money-bill"></i><span>Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/penjualan') }}" class="nav-link "><i class="fas fa-shopping-bag"></i><span>Penjualan</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('pembelian.index') }}" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i>
                <span>Pembelian</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('pembelian.index') }}"><span>Data Pembelian</span></a></li>
                    <li><a class="nav-link" href="{{ route('pembelian.create') }}"><span>Tambah Data Pembelian</span></a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link "><i class="fas fa-book"></i><span>Laporan</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}" class="nav-link has-dropdown"><i class="fas fa-users"></i>
                <span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}"><span>List User</span></a></li>
                    <li><a class="nav-link" href="{{ route('user.create') }}"><span>Add User</span></a></li>
                </ul>
            </li>
           
        </ul>
    </aside>
</div>