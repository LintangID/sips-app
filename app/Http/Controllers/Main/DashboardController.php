<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Incoming;
use App\Models\Outgoing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $masuk = Incoming::whereYear('created_at', date('Y'))->count();
        $keluar = Outgoing::whereYear('created_at', date('Y'))->count();
        return view('pages.main.dashboard',[
            'masuk' => $masuk,
            'keluar' => $keluar
        ]);
    }
}
