<?php

namespace App\Http\Controllers;

use VideoPlatformsParser;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function store() 
    {
		$info = VideoPlatformsParser::get('https://www.youtube.com/watch?v=vcw7FD7e6qE');
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
