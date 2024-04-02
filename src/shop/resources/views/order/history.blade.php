@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 bg-light p-3">
        <h2>注文履歴</h2>

        @foreach ($orders as $order)
            <div class="row">
                <div class="col-md">
                    <hr>
                    <p class="fs-4">{{ $order->order_date->format('Y年m月d日') }}</p>
                    @foreach ($order->orderDetails as $order_detail)
                        <div class="row align-middle mb-3">
                            <div class="col-md-2">
                                <a href="{{ route('item.detail', $order_detail->item) }}">
                                    <img src="/images/{{ $order_detail->item->image }}" alt="{{ $order_detail->item->item_name }}"
                                        style="width: 100px;">
                                </a>
                            </div>
                            <div class="col-md-3">{{ $order_detail->item->item_name }}</div>
                            <div class="col-md-3 text-end">単価：{{ number_format($order_detail->item->price) }}円</div>
                            <div class="col-md-2 text-end">数量：{{ $order_detail->num }} </div>
                            <div class="col-md-2 text-end">小計：{{ number_format($order_detail->item->price * $order_detail->num) }}円</div>
                        </div>
                    @endforeach
                    <div class="col-md-12 text-end fs-5">合計金額：{{ number_format($order->sum_price) }}円</div>
                </div>
            </div>
        @endforeach

        <hr>

        <div class="d-flex justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
</div>

@endsection