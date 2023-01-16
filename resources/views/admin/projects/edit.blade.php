@extends('layouts.admin')

@section('content')

<h1>Edit the Project</h1>
@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('admin.projects.update', $project->slug)}} " method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHelper" value="{{old('title', $project->title)}}">
        <small id="titleHelper" class="text-muted">must be unique, max 100 charecters</small>
    </div>

    <div class="mb-3 d-flex gap-4">
        <img width="140" src="{{asset('storage/' .$project->cover_image)}}" alt="">
        <div>
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="" aria-describedby="coverImageHelper">
            <small id="coverImageHelper" class="text-muted">Add your cover image</small>
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{old('description', $project->description)}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection