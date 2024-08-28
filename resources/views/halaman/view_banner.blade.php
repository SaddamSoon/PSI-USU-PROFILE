<!-- view_banner.blade.php -->
@extends('index')

@section('title,banner')
@section('isihalaman')
<div class="container">
    <h2 class="my-4">Banner</h2>

    @if ($banners->isEmpty())
        <p>Belum ada banner yang tersedia.</p>
    @else
        <div class="row">
            @foreach ($banners as $banner)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <!-- Menampilkan gambar banner -->
                        @if($banner->image)
                            <img src="{{ asset('storage/' . $banner->image) }}" class="card-img-top" alt="{{ $banner->title }}">
                        @else
                            <img src="{{ asset('images/default-banner.jpg') }}" class="card-img-top" alt="{{ $banner->title }}">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $banner->title }}</h5>
                            <p class="card-text">{{ $banner->description }}</p>
                            @if($banner->link)
                                <a href="{{ $banner->link }}" class="btn btn-primary">Learn More</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
