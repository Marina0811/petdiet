<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mypet;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class MypetController extends Controller
{
    public function add()
    {
        return view('mypet.mypet');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Mypet::$rules);
        $mypet = new Mypet;
        $form = $request->all();
        
        unset($form['_token']);
        
        unset($form['image']);
        
        $mypet->fill($form);
        $mypet->user_id=Auth::id();
        $mypet->save();
     
        return redirect('home');
      
        
    }
    
    public function edit(Request $request)
    {
      
      $mypet = Mypet::find($request->id);
      if (empty($mypet)) {
        abort(404);    
      }
      return view('mypet.edit', ['mypet_form' => $mypet]);
    }
  
  public function update(Request $request)
  {
      
      $this->validate($request, Mypet::$rules);
      
      $mypet = Mypet::find($request->id);
      
      $mypet_form = $request->all();
      unset($mypet_form['_token']);

      $mypet->fill($mypet_form)->save();


      return redirect('mypet.mypet');
      
      $history = new History();
      $history->mypet_id = $mypets->id;
      $history->edited_at = Carbon::now();
      $history->save();

  }
  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Mypet::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Mypet::all();
      }
      return view('mypet.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function delete(Request $request)
  {
      
  }
  
  
  
}

