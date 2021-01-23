<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\EventRequest;

class EventsController extends Controller
{
    public function index()
    {
//        $events = Event::all();
        $events = Event::paginate(10);

        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(EventRequest $request)
    {
//        $request->validate([
//            'name' => 'required|min:10',
//            'description' => 'required',
//            'body' => 'required',
//            'event_at' => 'required'
//        ]);

        $data = $request->all();

        //Active Record: Criação...
//        $event = new Event();
//        $event->name = 'Teste Atualização...';//$data['name']; // $request->name || $request->get('name') || $request->input('name')
//        $event->description = $data['description']; //
//        $event->body = $data['body']; //
//        $event->event_at = $data['event_at']; //
//
//        $event->save();

        //Mass Assignment...
        $event = Event::create($data);

        session()->flash('message', 'Evento criado com sucesso!');

        return redirect()->route('event.index');

    }

    public function show(Event $event)
    {
        //$event = Event::find($id); //recuperar um dado pelo id dele

        return view('events.edit', compact('event'));
    }
}
