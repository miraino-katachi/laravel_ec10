@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
            <h2>会員情報</h2>
            @if (!empty(session('msg')))
                <p class="alert alert-light">{{ session('msg') }}</p>
            @endif
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
    </div>
</div>

@endsection