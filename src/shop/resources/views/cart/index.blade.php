@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 bg-light p-3">
        <h2>カート一覧</h2>
        @if (count($carts) == 0)
            <p class="alert alert-light">カートは空です。</p>
        @else
            @foreach ($carts as $cart)
                <hr>
                <div class="row align-middle mb-3">
                <div class="col-md-2">
                    <a href="{{ route('item.detail', $cart->item) }}">
                        <img src="/images/{{ $cart->item->image }}"
                            alt="{{ $cart->item->item_name }}" style="width: 100px;">
                    </a>
                    </div>
                    <div class="col-md-2">{{ $cart->item->item_name }}</div>
                    <div class="col-md-2 text-end">単価：{{ number_format($cart->item->price) }}円</div>
                    <div class="col-md-2 text-end">数量：{{ $cart->num }} </div>
                    <div class="col-md-2 text-end">小計：{{ number_format($cart->item->price * $cart->num) }}円</div>
                    <div class="col-md-2">
                        <a href="{{ route('item.detail', $cart->item) }}" class="btn btn-primary">数量変更</a>
                        <a class="btn btn-danger"onclick="event.preventDefault();
                            document.getElementById('del-form{{ $loop->index }}').submit();">削除</a>
                        <form id="del-form{{ $loop->index }}" action="{{ route('cart.del') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $cart->id }}">
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="col-md-10 text-end fs-5">合計金額：{{ number_format($sum) }}円</div>

            <hr>

            <div class="col-md-12 text-center mb-3">
                <a href="{{ route('order.index') }}" class="btn btn-danger fs-3">注文する</a>
            </div>

        @endif
    </div>
</div>
@endsection