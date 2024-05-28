<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function Transaksi()
    {
        return view('admin.pages.transaksi.index');
    }
}
