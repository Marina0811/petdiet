<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    

    public function index(Request $request) {
    
    
        return view('calender.calender');
        
    }

public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->input('title');
        $event->start = $request->input('start');
        $event->textColor = $request->input('textColor');
        $task->save();

        return redirect('/event');
    }

}
