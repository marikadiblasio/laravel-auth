@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-between align-items-center">
        <div>
        <h1 class="text-white text-uppercase py-3">{{ $project->name }}</h1>
        <div>
            <img src="{{ $project->image }}" alt="{{ $project->name }}">
        </div>
        <a href="{{ $project->url }}">View GitHub</a>
        <p class="text-white">{{ $project->description }}</p>
    </div>
        <div>
            <a href=""><i class="fa-solid fa-pencil me-1"></i></a>
            <a class="text-danger" href=""><i class="fa-solid fa-trash me-1"></i></a>
        </div>
    </div>
@endsection
