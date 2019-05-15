<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    @if(Route::getCurrentRoute()->uri()=='admin')
        <li class="nav-item active">
    @else
        <li class="nav-item">
    @endif 
            <a class="nav-link" href="{{ route('manage.admin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    
    @if(Route::getCurrentRoute()->uri()=='admin/blog_posts')
        <li class="nav-item active">
    @else
        <li class="nav-item">
    @endif
        <a class="nav-link" href="{{ route('manage.admin.blog_posts') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Blog posts</span>
        </a>
    </li>    
</ul>