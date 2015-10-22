<?php
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class postController extends Controller
{
    //
    public function index(){
		$data = \App\Post::where('type','post')->take(10)->orderBy('id','DESC')->get();
		return response()->json($data);
    }

    public function show($id){

		$data = \App\Post::where('type','post')->find($id);
		
		return response()->json($data);
    }
}
