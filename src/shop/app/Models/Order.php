<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /** @var 値を反映したくないフィールド */
    protected $guarded = [
        'id',
        'user_id',
    ];

    /** @var 値をキャストするプロパティ */
    protected $casts = [
        'order_date' => 'date',
    ];

    /**
     * リレーション（1対多）
     */
    public function orderDetails()
    {
        return $this->hasMany(\App\Models\OrderDetail::class);
    }
}
