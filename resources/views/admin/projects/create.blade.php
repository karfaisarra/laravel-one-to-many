@extends('layouts.admin')

@section('content')

<h1>Add a new Project</h1>
<form action="{{route('admin.projects.store')}} " method="post" enctype="multipart/form-data">
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">must be unique, max 100 charecters</small>
    </div>
    <div class="mb-3">
        <label for="cover_image" class="form-label">Cover Image</label>
        <input type="file" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="" aria-describedby="coverImageHelper">
        <small id="coverImageHelper" class="text-muted">Add your cover image</small>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label @error('description') is-invalid @enderror">description</label>
        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

</form>

@endsection