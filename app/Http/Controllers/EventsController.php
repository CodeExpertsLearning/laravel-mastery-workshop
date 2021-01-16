<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        //$event = Event::find($id); //recuperar um dado pelo id dele

        return view('events.edit', compact('event'));
    }
}
