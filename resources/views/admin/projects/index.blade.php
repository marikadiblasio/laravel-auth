@extends('layouts.admin')

@section('content')

<div class="text-end">
    <a href="{{route('admin.projects.create')}}">Add Project</a>
</div>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<h1 class="text-white">Index Project</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Created</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $projects as $project)
            <tr>
                <th scope="row">{{ $project->id}}</th>
                <td>{{ $project->name}}</td>
                <td><img src="{{ $project->image}}" alt="{{ $project->name}}"></td>
                <td>{{ $project->created_at}}</td>
                <td>
                    <a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-eye me-1"></i></a>
                    <a href=""><i class="fa-solid fa-pencil me-1"></i></a>
                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="delete-button" data-item-title="{{ $project->name }}"> <i
                                class="fa-solid fa-trash text-danger me-1"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  @include('partials.delete_modal')
@endsection
