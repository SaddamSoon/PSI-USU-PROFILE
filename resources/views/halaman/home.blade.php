@extends('layouts.main')

@section('title', 'Home')

@section('style')
<style>
    /* Atur tinggi maksimum carousel agar tidak melebihi ukuran yang diinginkan */
    .carousel-size {
        height: 500px;
        /* Anda bisa menyesuaikan tinggi ini sesuai kebutuhan */
        overflow: hidden;
        /* Pastikan konten yang melebihi batas akan tersembunyi */
    }

    /* Pastikan gambar dalam carousel tetap proporsional dan tidak melebihi ukuran container */
    .carousel-size img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Atur gambar di bawah carousel agar tidak menimpa konten lain */
    .image {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Styling untuk row berita */
    .news-row {
        position: relative;
    }

    .news-row img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 10px;
    }

    .news-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        display: flex;
        align-items: end;
        justify-content: start;
        background: rgb(166,165,176);
        background: linear-gradient(90deg, rgba(166,165,176,0.4543942577030813) 0%, rgba(27,110,25,0.6392682072829132) 6%, rgba(20,115,17,0.1966911764705882) 50%, rgba(13,121,9,0.6308648459383753) 98%);
        /* Efek overlay gelap */
        color: white;
        padding: 20px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .news-caption h2 {
        margin: 0;
        font-size: 1.5rem;
    }
</style>
@endsection

@section('content')
<br>
<div id="kampusCarousel" class="carousel slide mt-5 carousel-size" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($carouselItems as $key => $item)
        <button type="button" data-bs-target="#kampusCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($carouselItems as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/images/'.$item->image) }}" class="d-block w-100" alt="{{ $item->title }}">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h5>{{ $item->title }}</h5>
                <p>{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#kampusCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#kampusCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
    </button>
</div>

<div class="container mt-5">
    <div class="row g-4">
        <!-- Row untuk Visi -->
        <div class="col-md-6">
            <h2>Visi</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt dolorem similique ullam, itaque eius amet, sit libero nobis quas neque cupiditate, maxime voluptatum atque. Corrupti, aut. Provident quas delectus consectetur?</p>
            <!-- Ganti dengan variabel yang sesuai -->
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/images/image1.jpg') }}" class="image img-fluid" alt="Visi Image">
        </div>
    </div>

    <div class="row g-4 mt-4">
        <!-- Row untuk Misi -->
        <div class="col-md-6">
            <img src="{{ asset('storage/images/image2.jpg') }}" class="image img-fluid" alt="Misi Image">
        </div>
        <div class="col-md-6">
            <h2>Misi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sunt praesentium sequi molestias cumque natus, ipsa rem provident recusandae. Corporis velit cum non libero eius dignissimos dicta sapiente deleniti. Quos.</p>
            <!-- Ganti dengan variabel yang sesuai -->
        </div>
    </div>

    <div class="row g-4 mt-4 news-row">
        <!-- Row untuk Berita -->
        <div class="col-md-6">
            <div class="position-relative">
                <img src="{{ asset('storage/images/image1.jpg') }}" class="image img-fluid" alt="Berita Image">
                <div class="news-caption">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aperiam quae sint similique nulla rem architecto repudiandae facilis corporis obcaecati iste, laboriosam veniam necessitatibus excepturi soluta, quisquam dignissimos eos ab.</p>
            <!-- Ganti dengan variabel atau konten yang sesuai -->
        </div>
    </div>
</div>
@endsection
