@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Description</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>

                        <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST"
                            class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
