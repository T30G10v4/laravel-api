@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Modify Project</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                {{-- @include('partials.errors') --}}
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $project->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="10" class="form-control">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
