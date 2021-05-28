<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebHookController extends Controller
{
    public function webHook(Request $request){

        error_log("test");
        $body = $request->post();
        foreach ($body['events'] as $event) {
            if ($event['name'] == 'channel_vacated') {
                
                }
            }
            http_response_code(200);
    }

}
