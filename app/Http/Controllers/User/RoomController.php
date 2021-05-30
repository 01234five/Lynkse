<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Roommessage;
use Illuminate\Http\Request;
use App\Events\NewChatMessageEvent;
use App\Events\VideoAction;
use DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ChatRoomsIndex',['rooms'=> Room::get()]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Room $room)
    {
        $message = new Roommessage();
        $message->room_id = $request->room_id;
        $message->body= $request->body;
        
        $message->user_id = auth()->id();
        $saved = $message->save();

        $data= [];
        $data['success'] = $saved;
        $data['message'] = $message;
        broadcast(new NewChatMessageEvent($message,auth()->user()))->toOthers();
        return $data;
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
        return view('ChatRoomShow', [
            'room' => $room,
            'messages' => $roommessages,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }

    public function event(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()))->toOthers();
    }

    


    public function eventSeek(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','currentVideoTime']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()))->toOthers();
        
    }
    public function eventSeekSync(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','currentVideoTime','playerToSend']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()));
        
    }

    public function insertVideo(Request $request){
        if($request->videoIdTosend == NULL){}else{
        $data = $request->only(['message', 'room','videoIdTosend','videoCurrentTime','playerToSend']);
        broadcast(new VideoAction($data,auth()->user()))->toOthers();
        }
    }

    public function eventQueue(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','id','img','desc','title','youtubeOrVimeoArticle']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()));
        
    }


    public function eventInitialQueue(Request $request){
        //error_log('message here.');
        //echo 'hello';
        $data = $request->only(['message', 'room','arrayQ']);
        //$user=auth()->user();
        
        broadcast(new VideoAction($data,auth()->user()))->toOthers();
        
    }


    public function dbmessages(Room $room){
            $userId = auth()->id();
            return Roommessage::where('room_id', $room->id)->select('id','body','user_id','created_at',DB::raw("IF(`user_id`=$userId, TRUE, FALSE) as written_by_me"))
            ->with(['user'=> function($query){$query->select('name','id','image');}])
            ->oldest()
            ->get();
    }



}
