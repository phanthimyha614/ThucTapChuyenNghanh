<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $sanpham = SanPham::orderBy('id', 'desc')->get();
        view()->share(['products' => $sanpham]);
    }

    public function index()
    {
        $sanpham = SanPham::orderBy('id', 'desc')->get();
        return view('admin.sanpham.sanpham-list', compact('sanpham'));
    }

}
