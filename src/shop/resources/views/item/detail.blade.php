@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <img src="/images/{{ $item->image }}" class="card-img-top" alt="{{ $item->item_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $item->item_name }}</h5>
                <p class="card-text">
                    {{ number_format($item->price) }}円<br>
                    {{ $item->description }}
                    <form action="{{ route('cart.add') }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <label for="num" class="fs-4">数量：</label>
                        <input type="number" name="num" id="num" style="width:5em; display:inline-block"
                            class="form-control
                            @error('num')
                                is-invalid
                            @enderror
                            " aria-describedby="validateNum">
                        <input type="submit" value="カートに入れる" class="btn btn-primary">
                        @error('num')
                            <div id="validateNum" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection