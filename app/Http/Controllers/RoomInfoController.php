<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class RoomInfoController extends Controller
{
    public function getRooms(Request $request){
       
        $rooms = Room::where('category', $request->category)->orderBy('active')->oldest()->get();
        //error_log($roommessages);

        return $rooms;
    }

    public function getAllRooms(Request $request){
       
       
        //error_log($roommessages);

        return Room::orderBy('active')->oldest()->get();
    }

    public function searchRooms(Request $request){
        $name= $request->name ;
        
        return Room::where('name','like','%' . $name. '%') -> get();
    }

    public function createRoom(Request $request){
       
        //error_log($request);
		$room = new Room;

		$room->name = $request->name;
		$room->slug = Str::of($request->name)->slug('-');
		$room->category = $request->category;
        $room->videoType = $request->videoType;
        $room->userThumb =$request->userThumbSend;
        $room->userBanner =$request->userBannerSend;
        $room->userBanner_effect =$request->userBannerEffectSend;
        $room->active = $request->active;
        
		$room->save();

        $roomID = $room->id;
        $room->slug = $roomID.'-'.Str::slug($room->name, '-');
        $room->save();

        return $room;
    }


    public function deleteRoom(Request $request){
        error_log("hello");
        $id=$request->id;
        
        Room::where('id', $id)->delete();
        return "Success";
    }

    public function updateRoomCount(Request $request){
       
        $room = Room::find($request->id);
        $room->active=$request->active;
        $room->save();
        error_log($room);
        

        
    }

    public function getRoomCount(Request $request){
        $room = Room::find($request->id);
       
        error_log($room->active);
        return $room->active;
    }

}
