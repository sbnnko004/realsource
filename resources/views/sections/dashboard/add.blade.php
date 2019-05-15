<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Add Blog Posts
    </div>
    <div class="card-body">
        <div class="form-responsive">
                {!! Form::open(['action' => 'BlogPostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'Headline')}}
                    {{Form::text('headline','', ['class' => 'form-control', 'placeholder' => 'Headline'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>