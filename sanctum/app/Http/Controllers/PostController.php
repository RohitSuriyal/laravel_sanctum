<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     public function indeX(){

        return response()->json([


            "status"=>"success",
        ]);

     }
}
