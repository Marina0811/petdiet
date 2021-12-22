<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weight;

use Carbon\Carbon;


class WeightController extends Controller
{
    public function add()
    {
    
        return view ('weight.create');
        
    }
    
     public function create(Request $request)
    {
        $this->validate($request, Weight::$rules);
        $weight = new Weight;
        $form = $request->all();
        
        unset($form['_token']);
        
        unset($form['image']);
        
        $weight->fill($form);
        $weight->user_id=Auth::id();
        $weight->save();
     
        return redirect('weight.create');
      
        
    }
    
     
    public function edit(Request $request)
    {
      
      $weight = Weight::find($request->id);
      if (empty($weight)) {
        abort(404);    
      }
      return view('weight.edit', ['weight_form' => $weight]);
    }
    
    
    public function update(Request $request)
       {
      
      $this->validate($request, Weight::$rules);
      
      $mypet = Mypet::find($request->id);
      
      $mypet_form = $request->all();
      unset($weight_form['_token']);

      $mypet->fill($weight_form)->save();


      return redirect('weight.create');
      
      $history = new History();
      $history->mypet_id = $weight->id;
      $history->edited_at = Carbon::now();
      $history->save();

  }
  
//   public function index(Request $request)
//   {
//       $cond_title = $request->cond_title;
//       if ($cond_title != '') {
//           // 検索されたら検索結果を取得する
//           $posts = Weight::where('title', $cond_title)->get();
//       } else {
//           // それ以外はすべてのニュースを取得する
//           $posts = Mypet::all();
//       }
//       return view('mypet.index', ['posts' => $posts, 'cond_title' => $cond_title]);
//   }
  public function delete(Request $request)
  {
      
  }
  
  
  
}
