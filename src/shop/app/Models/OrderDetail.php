<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    /** @var 値を反映したくないフィールド */
    protected $guarded = [
        'id',
        'user_id',
        'item_id',
    ];

    /**
     * リレーション（他対1）
     */
    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }
}
