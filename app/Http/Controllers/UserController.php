<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\keranjang;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function keranjang(Request $request){
        $user = auth()->user();
        $data['product']= product::find($request->id);
        return view('keranjang',compact('user'),$data);
     }
     public function checkout(Request $request){
         $user = auth()->user();
         $data['product']= product::find($request->id);
         return view('checkout',compact('user'),$data);
      }
     public function shop(Request $request){
         $user = auth()->user();
         $data['product'] = product::find( $request->id);
         return view('user-shop',compact('user'),$data);
     }


    public function Auth(Request $request){
        $validate = $request->validate([
            'email' => ['Required','email'],
            'password' => ['Required']
        ]);
        if (Auth::attempt($validate)) {
            return redirect('/user');
        }
        return redirect()->back()->with('pesanLogin','Maaf, login anda gagal!');
    }
    
    public function user(Request $request){
        $data['user'] = User::all();
        $data['product'] = Product::all();
        $data['total_user'] = $data['user']->count();

        return view('user', $data);
    }
    public function chekout(){
        return view('chekout');
    }
    public function berhasil(){
        return view('berhasil');
    }
   
}
