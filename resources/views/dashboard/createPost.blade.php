@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Create New Post</h3>
                </div>

                <div class="card-body">
                    <form action="/dashboard/posts/create" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter post title">
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('title')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid  @enderror" id="slug" name="slug" placeholder="Enter post slug" >
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('slug')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control @error('content') is-invalid  @enderror" id="content" name="content" rows="5" placeholder="Enter post content" ></textarea>
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('content')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('image')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="published_at" class="form-label">Publish At</label>
                            <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at">
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('published_at')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input @error('is_published') is-invalid  @enderror" id="is_published" name="is_published">
                            <label class="form-check-label" for="is_published">Publish Now</label>
                            <div class="invalid-feedback p-1 rounded col-lg-4">
                                @error('is_published')
                                   <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection