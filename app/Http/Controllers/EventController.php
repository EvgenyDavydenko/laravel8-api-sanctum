<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function create(Request $request){
        // validation
        $request->validate([
            "title" => "required",
            "descr" => "required"
        ]);

        // user id + create data
        $u_id = auth()->user()->id;

        $p = new Event();

        $p->user_id = $u_id;
        $p->title = $request->title;
        $p->descr = $request->descr;

        $p->save();


        // send response
        return response()->json([
            "status" => true,
            "message" => "Event has been created"
        ]);
    }

    public function list(){

    }

    public function single($id){

    }

    public function delete($id){

    }
}
