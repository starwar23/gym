<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class MainSlider extends Model
{
    use AsSource;

    public $timestamps = false;

    public $fillable = [
        'name',
        'text',
        'link',
        'img',
    ];
}
