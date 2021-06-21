<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class MusicController extends Controller
{
    //

    public function getAllSongs(){
		

		return Song::get([
    			'id',
				'artist',
                'songName',
                'durationMins',
                'durationSecs',
                'urlLocation'

    		]);

	}
}
