@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Posts List</h3>
                    <a href="/dashboard/posts/create" class="btn btn-light">Create New Post</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($posts->isEmpty())
                        <p class="text-center">No posts available.</p>
                    @else
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Published</th>
                                    <th>Published At</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td>
                                            @if($post->image)
                                                <img src="{{ Storage::url($post->image) }}" alt="Image" width="80" class="img-thumbnail">
                                            @else
                                                <span class="badge bg-secondary">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($post->is_published)
                                                <span class="badge bg-success">Yes</span>
                                            @else
                                                <span class="badge bg-secondary">No</span>
                                            @endif
                                        </td>
                                        <td>{{ $post->published_at ? $post->published_at : '-' }}</td>
                                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="/dashboard/posts/show" class="btn btn-info btn-sm">View</a>
                                            <a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="/dashboard/posts/{{ $post->id }}/delete" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection