<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Tampilkan daftar banner.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data banner dari database
        $banners = Banner::all();

        return view('view_banner', ['banners' => $banners]);
    }
}
