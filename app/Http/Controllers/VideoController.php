<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use VideoPlatformsParser;

class VideoController extends Controller
{
    public function store() 
    {
		$info = VideoPlatformsParser::get('https://www.youtube.com/watch?v=oifMmvP6VdA');
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
