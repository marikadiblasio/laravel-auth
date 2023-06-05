@extends('layouts.admin')

@section('content')
    <div class="text-white container">
        <h1>Edit Project</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Project image url</label>
                <input type="url" class="form-control" id="image" name="image" value="{{$project->image}}">
            </div>
            <div class="mb-3">
                <label for="github-url" class="form-label">Project github-url url</label>
                <input type="url" class="form-control" id="github-url" name="github-url" value="{{$project->url}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Project description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$project->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
