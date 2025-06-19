<div class="d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('assets/images/admin.jpg') }}" alt="..."
                    class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Atmin Sangar</h1>
            </div>
        </div>
        <span class="heading"></span>
        <ul class="list-unstyled">
            <li class=""><a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i>Dashboard</a></li>
            <li><a href="{{ url('user') }}"> <i class="fa fa-user"></i>Data User</a></li>
            <li><a href="{{ url('view_order') }}"> <i class="fa fa-shopping-cart"></i>Data Order</a></li>
            <li><a href="{{ url('view_product') }}"> <i class="fa fa-tags"></i>Category</a></li>
            <li><a href="{{ url('view_produk') }}"> <i class="fa fa-picture-o"></i>Artwork</a></li>
            <ul class="list-unstyled">
    </nav>