<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'refferal_code',
        'user_id',
        'parent_user_id'
    ];


    protected $table = 'network';

}
