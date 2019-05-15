<!-- Breadcrumbs-->
<ol class="breadcrumb">
    @if(Route::getCurrentRoute()->uri()=='admin')
        <li class="breadcrumb-item active">
            Dashboard
        </li>
    @else
        <li class="breadcrumb-item">
            <a href="{{ route('manage.admin.index') }}">Dashboard</a>
        </li>
        @if(Route::getCurrentRoute()->uri()=='admin/blog_posts')
            <li class="breadcrumb-item active">
                Blog posts
            </li>
        @elseif(Route::getCurrentRoute()->uri()=='admin/blog_posts/edit')
            <li class="breadcrumb-item">
                <a href="{{ route('manage.admin.blog_posts') }}">Blog posts</a>
            </li>
            <li class="breadcrumb-item active">
                Edit Post
            </li>
        @elseif(Route::getCurrentRoute()->uri()=='admin/blog_posts/add')
            <li class="breadcrumb-item">
                <a href="{{ route('admin/blog_posts') }}">Blog posts</a>
            </li>
            <li class="breadcrumb-item active">
                Add Post
            </li>
        @endif
    @endif
</ol>