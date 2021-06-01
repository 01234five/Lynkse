<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Room;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//WEBHOOK
Route::post('lynkse/webhook', function (Request $request) {
    
    $body = $request->post();
   


    foreach ($body['events'] as $event) {
        error_log($event['channel']);

       
        if (strpos($event['channel'], 'presence-chat') !== false) {
            if ($event['name'] == 'channel_vacated') {
                //error_log("INININ VACATED VACATED");
                $split = explode(".",$event['channel']);//get the id from the event string
                //error_log($split[1]);
                $id=$split[1];
                $thisroom=Room::find($id);
                if($thisroom->videoType!="default"){
                    Room::where('id', $id)->delete();
                }else {
                    Room::where('id', $id)->update(['active' => '0']);
                }
            }  
        }

    
        if ($event['name'] == 'channel_vacated') {
            
            }
        }
        http_response_code(200);
    });