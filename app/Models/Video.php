<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['publish_id', 'platform', 'thumbnail', 'tags', 'duration'])]
#[Table('video')]
class Video extends Model
{
}
