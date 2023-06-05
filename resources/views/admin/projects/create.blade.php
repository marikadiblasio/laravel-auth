@extends('layouts.admin')

@section('content')
    <div class="text-white container">
        <h1>Create Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Project image url</label>
                <input type="url" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="github-url" class="form-label">Project github-url url</label>
                <input type="url" class="form-control" id="github-url" name="github-url">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Project description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
@endsection
