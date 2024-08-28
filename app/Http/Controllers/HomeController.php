<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselItem;

class HomeController extends Controller
{
    public function index()
    {
        $carouselItems = CarouselItem::all();
        return view('halaman.home', compact('carouselItems'));
    }

    public function fakultas()
    {
        return view('fakultas');
    }

    public function programStudi()
    {
        return view('program_studi');
    }
}

