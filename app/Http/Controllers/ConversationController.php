<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index()
    {
    	return Conversation::where('user_id', auth()->id())
    		->get([
    			'id',
				'contact_id',
				'has_blocked',
				'listen_notifications',
				'last_message',
				'last_time'
    		]);
		
		// contact_name
    	// contact_image
    }

	public function getConversation(Request $request){
		$contact_Id=$request->contactid;

		return Conversation::where('user_id', auth()->id())
		->where('contact_id', $contact_Id)
    		->get([
    			'id',
				'contact_id',
				'has_blocked',
				'listen_notifications',
				'last_message',
				'last_time'
    		]);

	}


	public function create(Request $request){
		error_log($request);
		$conversation = new conversation;

		$conversation->user_id = $request->user_id;
		$conversation->contact_id = $request->contact_id;
		$conversation->last_message = $request->last_message;
		if($request->last_time=== null){
			$conversation->last_time = NULL;
		}else{
			$conversation->last_time = now();
		}
		$conversation->save();

		$conversationTheirs = new conversation;
		$conversationTheirs->user_id = $request->contact_id;
		$conversationTheirs->contact_id = $request->user_id;
		$conversationTheirs->last_message = $request->last_message;
		if($request->last_time=== null){
			$conversation->last_time = NULL;
		}else{
			$conversation->last_time = now();
		}
		$conversationTheirs->save();
	}

}
