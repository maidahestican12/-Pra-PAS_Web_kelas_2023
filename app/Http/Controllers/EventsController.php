<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('/event/all', [
            'title' => 'event',
            'events' => Event::all(),
        ]);
        
    }

    public function show(Event $event)
{
    return view('event.detail', ['event' => $event]);
}
}
