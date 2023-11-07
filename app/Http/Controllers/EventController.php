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

        $event = new Event();

        $event->user_id = $u_id;
        $event->title = $request->title;
        $event->descr = $request->descr;

        $event->save();


        // send response
        return response()->json([
            "status" => true,
            "message" => "Event has been created"
        ]);
    }

    public function list(){
        $u_id = auth()->user()->id;

        $event = Event::where("user_id", $u_id)->get();

        return response()->json([
            "status" => true,
            "message" => "Events list",
            "data" => $event
        ]);
    }

    public function single($id){

    }

    public function delete($id){

    }
}
