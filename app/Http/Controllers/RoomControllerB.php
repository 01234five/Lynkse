<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Roommessage;
use Illuminate\Http\Request;
use App\Events\NewChatMessageEvent;
use App\Events\VideoAction;
use DB;
use Vimeo\Laravel\Facades\Vimeo;


class RoomControllerB extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ChatRoomShowB',['rooms'=> Room::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

 

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room) {
        error_log($room);
        $roommessages = Roommessage::where('room_id', $room->id)
            ->with('user')
            ->oldest()
            ->get();
        return view('ChatRoomShowB', [
            'room' => $room,
            'messages' => $roommessages,
        ]);
    }



    public function event(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()));
    }


    public function seekVimeo(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','vimeoSeekValue']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()));
    }

    public function eventSeek(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','currentVideoTime']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()))->toOthers();
        
    }


    public function eventSeekSyncVimeo(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','currentVideoTime']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()));
        
    }

    public function getVimeoVideos(Request $request){
        $searchKey= $request->keyword;
        return Vimeo::request('/videos',['per_page' => 5,'query'=>$searchKey], 'GET');
        
        // We're done here - how easy was that, it just works!

        
    }



}










