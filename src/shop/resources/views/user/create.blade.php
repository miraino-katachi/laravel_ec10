@extends('layouts.app');

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
            @if (!is_null(session('msg')))
                <p class="alert alert-light">{{ session('msg') }}</p>
            @endif
            <h2>会員情報登録</h2>
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="full_name" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 氏名</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="未来　太郎" class="form-control
                            @error('full_name')
                                is-invalid
                            @enderror
                            " id="full_name" name="full_name" value="{{ old('full_name') }}"
                            aria-describedby="validateFullName">
                        @error('full_name')
                            <div id="validateFullName" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tel" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 電話番号</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="090-0000-0000" class="form-control
                            @error('tel')
                                is-invalid
                            @enderror
                            " id="tel" name="tel" value="{{ old('tel') }}"
                            aria-describedby="validateTel">
                        @error('tel')
                            <div id="validateTel" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="postal_code" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 郵便番号</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="550-0011" class="form-control
                            @error('postal_code')
                                is-invalid
                            @enderror
                            " id="postal_code" name="postal_code" value="{{ old('postal_code') }}"
                            aria-describedby="validatePostalCode">
                        @error('postal_code')
                            <div id="validatePostalCode" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pref" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 都道府県</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="大阪府" class="form-control
                            @error('pref')
                                is-invalid
                            @enderror
                            " id="pref" name="pref" value="{{ old('pref') }}"
                            aria-describedby="validatePref">
                        @error('pref')
                            <div id="validatePref" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="city" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 市区町村</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="大阪市西区" class="form-control
                            @error('city')
                                is-invalid
                            @enderror
                            " id="city" name="city" value="{{ old('city') }}"
                            aria-describedby="validateCity">
                        @error('city')
                            <div id="validateCity" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="town" class="col-sm-3 col-form-label">
                        <span class="badge text-bg-danger">必須</span> 町名番地等</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="阿波座1-13-16" class="form-control
                            @error('town')
                                is-invalid
                            @enderror
                            " id="town" name="town" value="{{ old('town') }}"
                            aria-describedby="validateTown">
                        @error('town')
                            <div id="validateTown" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="building" class="col-sm-3 col-form-label">建物等</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="松本フォレストビル501" class="form-control
                            @error('building')
                                is-invalid
                            @enderror
                            " id="building" name="building" value="{{ old('building') }}"
                            aria-describedby="validateBuilding">
                        @error('building')
                            <div id="validateBuilding" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-end">
                        <input type="submit" value="登録" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection