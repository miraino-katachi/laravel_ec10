<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    /** @var 値を反映したくないフィールド */
    protected $guarded = [
        'id',
        'user_id',
    ];
}
