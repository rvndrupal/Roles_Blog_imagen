<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ route('admin.page') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
    @can('users.index')
    <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
    @endcan

    <li><a href="{{ route('blog') }}" target="_blanck"><i class="fa fa-users"></i> <span>Blog</span></a></li>

    @can('roles.index')
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-lock"></i> <span>Roles</span></a></li>
    @endcan
    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Admin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        @can('products.index')
        <li><a href="{{ route('products.index') }}"><i class="fa fa-eye"></i>Productos</a></li>
        @endcan
        @can('tags.index')
        <li><a href="{{ route('tags.index') }}"><i class="fa fa-eye"></i>Tags</a></li>
        @endcan
        <li><a href="#">Link in level 2</a></li>
        </ul>
    </li>
</ul>
