<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weight;

class EventController extends Controller
{
    

    public function index(Request $request) {
        
        // 1. DBから体重等の情報を取得する
        $weights = Weight::all();
        
        // 2. 取得したデータをFullCalendarで表示できるデータ形式へ変換
        $events = [];
        foreach($weights as $weight) {
            $date = $weight->date;
            $events[] = array('title' => $weight->weight, 'start' => $date, 'end' => $date);
        }
        return view('calender.calender',compact('events'));
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
