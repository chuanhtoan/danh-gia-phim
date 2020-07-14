<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{
    public function getLogin(){
        return view('admin.login');
   }

   public function postLogin(Request $request){
      $arr = [
         'username' => $request->username,
         'password' => $request->password
      ];

      $user = DB::table('User')->where('username',$request->username)->first();

      if(Auth::guard('admin')->attempt($arr) && $user->loai == 'admin'){
         return \redirect('/admin');
      }else{
         return view('admin.login')->with(['error'=>true]);
      }
   }

   public function getLogout(){
      Auth::guard('admin')->logout();
      return \redirect('/admin/login');
   }

}
