<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Weight;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;


class WeightController extends Controller
{
    public function add(Request $request)
    {
        if (empty($request->id)) {
            abort(404);    
        }
        // 指定された日付＋ペットの体重を取得する
        $weight = Weight::where('pet_id', $request->id)
            ->where('date', session()->get('targetDay')->format('Y-m-d'))
            ->first();
        
        return view ('weight.create', ['weight' => $weight]);
        
    }
    
     public function create(Request $request)
    {
        $this->validate($request, Weight::$rules);
        $weight = new Weight;
        $form = $request->all();
        
        unset($form['_token']);
        if (!session()->has('targetDay'))
        {
            session()->put('targetDay', Carbon::today());
            
        }
        $weight->fill($form);
        $weight->date= session()->get('targetDay');
        $weight->pet_id=Auth::user()->mypets[0]->id;
        $weight->save();
     
        return redirect('weight/create');
      
        
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


      return redirect('weight/create');
      
    //   $history = new History();
    //   $history->mypet_id = $weight->id;
    //   $history->edited_at = Carbon::now();
    //   $history->save();

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
