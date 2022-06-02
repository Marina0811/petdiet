<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weight;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    

    public function index(Request $request) {
        
        // 1. DBから体重等の情報を取得する
        $weights = Weight::all();
        
        // 2. 取得したデータをFullCalendarで表示できるデータ形式へ変換
        $events = [];
        foreach($weights as $weight) {
            $date = $weight->date;
            $events[] = array('title' => $weight->weight, 'start' => $date, 'end' => $date, 'backgroundColor' => '#ffffff','textColor' => '#ffc0cb','borderColor' => '#ffffff' );
        }
        return view('calender.calender',compact('events'));
    }
    
    
    public function changeDate($date)
    {
        $pet_id = Auth::user()->mypets[0]->id;
        // セッションの日付を変更する
        session()->put('targetDay', $date);
        // 体重登録画面へリダイレクト
        return redirect()->route('weight.create', ['id' => $pet_id]);
    }
    
}
