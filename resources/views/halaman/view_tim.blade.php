<!-- view_tim.blade.php -->
@extends('index')

@section('title,Tim')
<div class="container">
    <h2 class="my-4">Struktur Member</h2>

    <!-- Cek apakah ada data tim -->
    @if ($teamMembers->isEmpty())
        <p>Belum ada anggota tim yang tersedia.</p>
    @else
        <div class="row">
            @foreach ($teamMembers as $member)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Menampilkan foto anggota tim -->
                        @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" class="card-img-top" alt="{{ $member->name }}">
                        @else
                            <img src="{{ asset('images/default-photo.jpg') }}" class="card-img-top" alt="{{ $member->name }}">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $member->name }}</h5>
                            <p class="card-text"><strong>{{ $member->position }}</strong></p>
                            <p class="card-text">{{ Str::limit($member->bio, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
