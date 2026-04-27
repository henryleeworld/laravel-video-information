<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use VideoPlatformsParser;

class VideoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store() 
    {
		$info = VideoPlatformsParser::get('https://www.youtube.com/watch?v=19GkjFMJ-_g');
        $video = Video::firstOrCreate([
            'publish_id' => $info['id'],
            'platform'   => $info['platform'],
            'thumbnail'  => $info['thumbnail'],
            'tags'       => json_encode($info['tags']),
            'duration'   => $info['duration']
        ]);
        dd($video);
    }
}
