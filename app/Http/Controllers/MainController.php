<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show($id)
    {
        return view('homes.index', [
            'homes' => Homes::findOrFail($id)
        ]);
    }
}
