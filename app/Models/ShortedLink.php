<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShortedLink extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shorted_links';

    protected $fillable = [
        'long_url',
        'short_url',
        'counter',
        'last_visit'
    ];
}
