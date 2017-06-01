<h3>Create Post</h3>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<br>

{!! Form::model($post, ['action' => 'PostController@store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contents', 'Contents') !!}
    {!! Form::text('contents', '', ['class' => 'form-control']) !!}
</div>

<button class="btn btn-success" type="submit">Add the Post!</button>

{!! Form::close() !!}