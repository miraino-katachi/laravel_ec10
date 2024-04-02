@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 bg-light p-3">
        <h2>注文内容確認</h2>
        @if (count($carts) == 0)
            <p class="alert alert-light">カートは空です。</p>
        @else
            <p>ご注文内容をご確認ください</p>
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
                        <a href="{{ route('item.detail', $cart->item) }}" class="btn btn-primary">数量変更</a>                                <a class="btn btn-danger"onclick="event.preventDefault();
                            document.getElementById('del-form').submit();">削除</a>
                        <form id="del-form" action="{{ route('cart.del') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $cart->id }}">
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="col-md-10 text-end fs-5">合計金額：{{ number_format($sum) }}円</div>

            <hr>

            <h2>商品配送先</h2>
            <table class="table">
                <tr>
                    <th class="text-end">氏名</th>
                    <td>{{ $user_info->full_name }}</td>
                </tr>
                <tr>
                    <th class="text-end">電話番号</th>
                    <td>{{ $user_info->tel }}</td>
                </tr>
                <tr>
                    <th class="text-end">郵便番号</th>
                    <td>〒{{ $user_info->postal_code }}</td>
                </tr>
                <tr>
                    <th class="text-end">住所</th>
                    <td>
                        {{ $user_info->pref }} {{ $user_info->city }}<br>
                        {{ $user_info->town }} {{ $user_info->building }}
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <a href="{{ route('user.edit', $user_info) }}" class="btn btn-primary">会員情報修正</a>
                    </td>
                </tr>
            </table>
            <div class="text-center mb-3">
                <form action="{{ route('order.complete') }}" method="post">
                    @csrf
                    <input type="submit" value="注文確定する" class="btn btn-danger fs-3"
                        onclick="return confirm('注文を確定していいですか？');">
                </form>
            </div>
        @endif
    </div>
</div>

@endsection