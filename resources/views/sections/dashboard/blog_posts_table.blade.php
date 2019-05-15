<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Blog Posts Table
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table table_name="BlogPosts" class="table table-bordered display" id="blog_posts" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Headline</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Edit/Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Headline</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Edit/Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if(count($posts) > 0)
                    @foreach($posts as $post)
                    <tr class="post-data" row_id="{{$post->id}}">
                        <td><div class="row_data editable">{{$post->title}}</td>
                        <td><div class="row_data editable">{{$post->headline}}</td>
                        <td><div class="row_data">{{$post->user->name}}</td>
                        <td><div class="row_data">{{$post->updated_at}}</td>
                        <td>
                            <button onclick="window.location.href = '{{ route('manage.admin.blog_posts.editBlogPost', ['post' => $post->id]) }}';" class="btn_edit blue">Edit</button>
                            <button class="btn_delete red">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="add_row post-data">
            <button class=" blue" onclick="window.location.href = '{{ route('manage.admin.blog_posts.createBlogPost') }}';">Create New Post</button>
            </div>
        </div>
    </div>
    @if(count($posts) > 0)
    <div class="card-footer small text-muted">Updated {{(new DateTime($post->updated_at))->format('l, d F Y')}} at {{(new DateTime($post->updated_at))->format('g:i a')}}</div>
    @else
    <div class="card-footer small text-muted">No Posts!</div>
    @endif
</div>