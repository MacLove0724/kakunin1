<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Http\Requests\kakuninRequest;
use Illuminate\Support\Facades\DB;
class kakuninController extends Controller
{
    public function a()
  {
    return view('a');
  }
   public function b(kakuninRequest $request)
  {
    $data= $request->only(['lname','fname','sex', 'email', 'post', 'address','building','opinion']);
    return view('b', ['data' => $data]);
  }
   public function store(kakuninRequest $request)
   {
      $data = $request->only(['lname','fname','sex', 'email', 'post', 'address','building','opinion']);
      Data::create($data);
      return view('c');
   }
   public function back()
  {
    return view('a');
  }
   public function kanri(){
   $data = new data;
   $value = $data->find(26);
   $arr = ['lname','fname','sex', 'email', 'post', 'address','building','opinion'];
   return view('d', compact('value', 'arr')); 
  }
  
}
