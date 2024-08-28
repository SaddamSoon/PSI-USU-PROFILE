<!-- view_visimisi.blade.php -->
@extends('index')

@section('title,visimisi')
@section('isihalaman')

<div class="container">
    <h2 class="my-4">Visi dan Misi</h2>

    @if ($visionMission)
        <div class="mb-5">
            <h3>Visi Kami</h3>
            <p>{{ $visionMission->vision }}</p>
        </div>

        <div>
            <h3>Misi Kami</h3>
            <ul>
                @foreach (explode("\n", $visionMission->mission) as $mission)
                    <li>{{ $mission }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p>Data visi dan misi belum tersedia.</p>
    @endif
</div>
@endsection
