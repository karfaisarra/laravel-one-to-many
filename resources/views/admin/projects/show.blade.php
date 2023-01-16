@extends('layouts.admin')
@section('content')

<div class="container py-5 d-flex gap-4">
    @if($project->cover_image)
    <img width="200" src="{{asset('storage/' .$project->cover_image)}}" alt="">
    @else
    <img width="200" src="https://picsum.photos/200/300" alt="">
    @endif
    <div class="details">
        <h2>{{$project->title}}</h2>
        <h5 class="pt-3">{{$project->slug}}</h5>
        <strong>Type:</strong>
        {{ $project->type ? $project->type->name : 'Untyped'}}
        <p class="w-50 pt-3">{{$project->description}}</p>
    </div>
</div>


@endsection