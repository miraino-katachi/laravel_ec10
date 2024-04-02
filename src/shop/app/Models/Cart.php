<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    /** @var 値を反映したくないフィールド */
    protected $guarded = [
        'id',
        'user_id',
    ];

    /**
     * リレーション（多対１）
     */
    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }
}
