<?php

namespace App\Http\Controllers;
use App\Models\Workshops;

use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        return view('/workshops/all', [
            'title' => 'workshops',
            'workshopss' => Workshops::all(),
        ]);
        
    }

    public function show(Workshops $workshops)
{
    return view('workshops.detail', ['workshops' => $workshops]);
}
}
