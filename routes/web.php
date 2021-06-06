<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\RoomController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return redirect(url('/'));
    });


    Route::get('/privacyPolicy', function () {
        return view('privacyPolicy');
    });    


Route::post('/lynkse/webHook',[App\Http\Controllers\WebHookController::class, 'webHook'])->name('webHook');


Route::get('/video', 'App\Http\Controllers\VideoController@index');
Auth::routes();

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');




Route::get('/chat/{conversationId}', 'App\Http\Controllers\ChatController@index');
Route::get('/profile', 'App\Http\Controllers\ProfileController@edit');
Route::post('/profile', 'App\Http\Controllers\ProfileController@update');



Route::get('/api/conversations', 'App\Http\Controllers\ConversationController@index');
Route::post('/create/conversations', 'App\Http\Controllers\ConversationController@create');

Route::get('/api/conversations/{contactid}', 'App\Http\Controllers\ConversationController@getConversation');
Route::get('/api/messages', 'App\Http\Controllers\MessageController@index');
Route::post('/api/messages', 'App\Http\Controllers\MessageController@store');


Route::prefix('/rooms')->name('chat-rooms.')->group(function() {
    Route::get('', [RoomController::class, 'index'])->name('index');
    Route::get('/{room:slug}', [RoomController::class, 'show'])->name('show');
    Route::post('/{room:slug}/messages', [RoomController::class, 'store'])->name('store');
});

//Route::get('/roomstest/{room:slug}', [RoomController::class, 'show'])->name('show');

Route::get('/api/roommessages/{room:slug}', [RoomController::class, 'dbmessages'])->name('dbmessages');
Route::post('/api/roommessages', [RoomController::class, 'store'])->name('store');

Route::post('/videoaction', [RoomController::class, 'event'])->name('event');

Route::post('/videoactionSeek', [RoomController::class, 'eventSeek'])->name('eventSeek');
Route::post('/videoactionSync', [RoomController::class, 'eventSeekSync'])->name('eventSeekSync');
Route::post('/videoactionQueue', [RoomController::class, 'eventQueue'])->name('eventQueue');
Route::post('/videoactionInitialQueue', [RoomController::class, 'eventInitialQueue'])->name('eventInitialQueue');

Route::post('/videoactionSendVideo', [RoomController::class, 'insertVideo'])->name('insertVideo');



Route::post('/test123', [RoomController::class, 'getsearchvideo'])->name('getsearchvideo');

Route::post('/videoactionPlayerReady', [RoomController::class, 'eventPlayerReady'])->name('eventPlayerReady');
Route::post('/videoactionPlayerNotReady', [RoomController::class, 'eventPlayerNotReady'])->name('eventPlayerNotReady');


Route::get('/community', 'App\Http\Controllers\CommunityController@index');
Route::post('/testfriend',[App\Http\Controllers\CommunityController::class, 'test'])->name('test');
Route::post('/communityMembers/sendFriendRequest',[App\Http\Controllers\CommunityController::class, 'sendFriendRequest'])->name('sendFriendRequest');
Route::post('/communityMembers/sendnotification',[App\Http\Controllers\CommunityController::class, 'sendnotification'])->name('sendnotification');
Route::get('/communityMembers/{name}', [App\Http\Controllers\CommunityController::class, 'getMembers'])->name('getMembers');
Route::get('/communityMembers/searchUser/{id}', [App\Http\Controllers\CommunityController::class, 'getUser'])->name('getUser');
Route::get('/communityMembers/friendship/{id}', [App\Http\Controllers\CommunityController::class, 'checkFriendship'])->name('checkFriendship');
Route::get('/communityMembers/addFriend/{id}', [App\Http\Controllers\CommunityController::class, 'addFriend'])->name('addFriend');
Route::get('/communityMembers/acceptFriendRequest/{id}', [App\Http\Controllers\CommunityController::class, 'acceptFrinedRequest'])->name('acceptFrinedRequest');


Route::get('/communityMembers/pendingCount/{get}', [App\Http\Controllers\CommunityController::class, 'getPendingrequests'])->name('getPendingrequests');
Route::get('/communityMembers/pendingNames/{get}', [App\Http\Controllers\CommunityController::class, 'getPendingrequestsNames'])->name('getPendingrequestsNames');

Route::get('/communityMembers/friendList/{get}', [App\Http\Controllers\CommunityController::class, 'getFriendList'])->name('getFriendList');
Route::get('/communityMembers/Auth/{get}', [App\Http\Controllers\CommunityController::class, 'getAuthUser'])->name('getAuthUser');

Route::post('/communityMembers/chat/newFriend', [App\Http\Controllers\CommunityController::class,'newFriendChat'])->name('newFriendChat');

Route::post('/communityMembers/editProfileAvatar', [App\Http\Controllers\CommunityController::class, 'editProfileAvatar'])->name('editProfileAvatar');
Route::post('/communityMembers/editProfile', [App\Http\Controllers\CommunityController::class, 'editProfile'])->name('editProfile');


Route::get('/roomInfo/{category}', [App\Http\Controllers\RoomInfoController::class, 'getRooms'])->name('getRooms');
Route::get('/roomInfo/getAll/{all}', [App\Http\Controllers\RoomInfoController::class, 'getAllRooms'])->name('getAllRooms');
Route::post('/roomInfo/Create', [App\Http\Controllers\RoomInfoController::class, 'createRoom'])->name('createRoom');
Route::post('/roomInfo/UpdateCount', [App\Http\Controllers\RoomInfoController::class, 'updateRoomCount'])->name('updateRoomCount');
Route::get('/roomInfo/getCount/{id}', [App\Http\Controllers\RoomInfoController::class, 'getRoomCount'])->name('getRoomCount');
Route::get('/roomInfo/searchRooms/{name}', [App\Http\Controllers\RoomInfoController::class, 'searchRooms'])->name('searchRooms');




Route::post('/roomInfo/DeleteRoom', [App\Http\Controllers\RoomInfoController::class, 'deleteRoom'])->name('deleteRoom');





Route::prefix('/roomsB')->name('chat-roomsB.')->group(function() {
    Route::get('', [App\Http\Controllers\RoomControllerB::class, 'index'])->name('index');
    Route::get('/B/{room:slug}', [App\Http\Controllers\RoomControllerB::class, 'show'])->name('show');

});

Route::post('/videoactionVimeo', [App\Http\Controllers\RoomControllerB::class, 'event'])->name('event');
Route::post('/seekVimeo', [App\Http\Controllers\RoomControllerB::class, 'seekVimeo'])->name('seekVimeo');
Route::post('/videoactionSeekVimeo', [App\Http\Controllers\RoomControllerB::class, 'eventSeek'])->name('eventSeek');
Route::post('/videoactionSyncVimeo', [App\Http\Controllers\RoomControllerB::class, 'eventSeekSyncVimeo'])->name('eventSeekSyncVimeo');
Route::get('/vimeo/{keyword}', [App\Http\Controllers\RoomControllerB::class, 'getVimeoVideos'])->name('getVimeoVideos');
