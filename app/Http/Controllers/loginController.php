<?php
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class loginController extends Controller
{
    //
    public function index(Request $request){

        if( ! \Auth::attempt($request->input())) { 
            return response()->json(['status'=>'failed'],200);
         }else{

            return response()->json(['status'=>'succeed','token'=>csrf_token()],200);
         }
    }

 
}
