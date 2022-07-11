<?php

namespace App\Http\Controllers;

use App\Models\Scanlog;
use Illuminate\Http\Request;

class ScanlogController extends Controller
{
    public function index()
    {
        $scanlog = Scanlog::limit(10)->get();
        return view('scanlog.index', compact('scanlog'));
    }
}
