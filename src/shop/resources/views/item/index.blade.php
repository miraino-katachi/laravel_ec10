@extends('layouts.app')

@section('content')

<div class="row m-3">
    @foreach ($items as $item)
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="/images/{{ $item->image }}" class="card-img-top" alt="{{ $item->item_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->item_name }}</h5>
                    <p class="card-text">
                        {{ number_format($item->price) }}円<br>
                        {{ $item->description }}
                    </p>
                    {{-- ここから --}}
                    <a href="{{ route('item.detail', $item) }}" class="btn btn-primary">商品詳細</a>
                    {{-- ここまで --}}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{ $items->links() }}
</div>

@endsection
