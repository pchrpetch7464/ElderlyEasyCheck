<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;

    protected $fillable = [
        'Talk_id',
        'Question_id',
        'Message_id',

    ];
}
