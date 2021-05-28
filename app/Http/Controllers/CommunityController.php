<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
Use DB;
use App\Events\NotificationEvent;


class CommunityController extends Controller
{
    public function index()
    {
        //
        return view('community',['rooms'=> Room::get()]);
    }


    public function test(Request $request)
    {

$user1 = User::find(Auth::id());
$user2 = User::find($request->message);

$user1->befriend($user2);
//$user2->acceptFriendRequest($user1);
    }



    public function sendFriendRequest(Request $request)
    {

$user1 = User::find(Auth::id());
$user2 = User::find($request->message);

$user1->befriend($user2);
//$user2->acceptFriendRequest($user1);
    }

    public function addFriend(Request $request){
        $user1 = User::find(Auth::id());
        $id = $request->id ;
        $user2 = User::find($id);

        $user1->befriend($user2);
    }


    public function checkFriendship(Request $request){
        $array=array();
        $id = $request->id ;
        $friend=User::find($id);
        $userId=Auth::id();
        $user=User::find($userId);

        if($request->id==Auth::id()){
            return "ME";
    }else{
        $isFriendResponse=$user->isFriendWith($friend);
        $sentRequest=$user->hasSentFriendRequestTo($friend);
        $incomingRequest=$user->hasFriendRequestFrom($friend);
        $array = array_add($array,'isFriends',$isFriendResponse);
        $arrayfirstvalue=array_first($array, function ($value, $key) {
            return $value;
        });
        if($arrayfirstvalue==false){
            $array = array_add($array,'friendRequest',$sentRequest);
            $array = array_add($array,'incomingRequest',$incomingRequest);
        }
        
        return $array;
    }

    }


    public function getMembers(Request $request){
        $name= $request->name ;
        
        return User::where('name','like','%' . $name. '%') -> get();
    }




    public function getPendingrequests(){
        //error_log('This is some useful information.');
        $user = User::find(Auth::id());
        $user->getFriendRequests();
        $pendingCounts =$user->getFriendRequests();
        
        $count = count($pendingCounts);

        return $count;
    }

    public function getPendingrequestsNames(){
        //error_log('This is some useful information.');
        $user = User::find(Auth::id());
        $user->getFriendRequests();
        $pending =$user->getFriendRequests();

        return $pending;
    }

    public function getUser(Request $request){
        $nameid= $request->id ;
        error_log($nameid);
        $name=User::find( $nameid);
        error_log($name);
        return $name;
    }


    public function acceptFrinedRequest(Request $request){
        $user = User::find(Auth::id());
        $sender= User::find($request->id) ;
        $user->acceptFriendRequest($sender);
    }


    public function sendnotification(Request $request){
        $data = $request->only(['message', 'to_id']);
        broadcast(new NotificationEvent($data,auth()->user()));
    }

    public function newFriendChat(Request $request){
        $data = $request->only(['message', 'to_id', 'myIdis','thumb','name']);
        broadcast(new NotificationEvent($data,auth()->user()));
    }

    public function getFriendList(Request $request){
        
        $user = User::find(Auth::id());
        $friendlist=$user->getFriends();
        //error_log($friendlist);
        return $friendlist; 
    }

    public function getAuthUser(){
        $me=Auth::user();
        return $me;
    }


    public function editProfileAvatar(Request $request){

		
		$user = auth()->user();
        
        if($request->file('avatarEdit')){
            $image = $request->file('avatarEdit');
            $new_name = $user->id."-".rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('users'), $new_name);
            $user->image = $new_name;
            $user->save();

            return response()->json([
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
                'class_name'  => 'alert-success'
               ]);
        }
        
	}

    public function editProfile(Request $request){
        $user = auth()->user();
        //----------------------------------------------------------
        if($request->message=="banner"){
            $bannerExtension="";
            if($request->content=="Miss You"){
            $bannerExtension="missyou.png";
            $user->banner = $bannerExtension;
            $user->save();
            }
            if($request->content=="Default"){
                $bannerExtension="defaultBanner.jpg";
                $user->banner = $bannerExtension;
                $user->save();
            }
            if($request->content=="Warrior"){
                $bannerExtension="Warrior.jpg";
                $user->banner = $bannerExtension;
                $user->save();
            }
            if($request->content=="AlexDjayk"){
                $bannerExtension="AlexDjayk.png";
                $user->banner = $bannerExtension;
                $user->save();
            }
            if($request->content=="2020"){
                $bannerExtension="2020.png";
                $user->banner = $bannerExtension;
                $user->save();
            }
            if($request->content=="Smiley"){
                $bannerExtension="smiley.jpg";
                $user->banner = $bannerExtension;
                $user->save();
            }
            
        }
        //-----------------------------------------------------------
        if($request->message=="effect"){
            $user->banner_effect = $request->content;
                $user->save();
        }
        //-----------------------------------------------------------
        if($request->message=="username"){
            $user->name = $request->content;
            $user->save();
        }
        //-----------------------------------------------------------
        if ($request->message=="password"){
        $user->password = bcrypt($request->content);
        $user->save();
        }
        
    }

}
