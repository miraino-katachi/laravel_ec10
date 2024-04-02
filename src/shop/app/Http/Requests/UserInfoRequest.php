<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|max:100',
            'tel' => 'required|max:20',
            'postal_code' => 'required|max:8',
            'pref' => 'required|max:10',
            'city' => 'required|max:100',
            'town' => 'required|max:100',
            'building' => 'max:100',
        ];
    }

    /**
     * エラーメッセージのカスタマイズ
     *
     * @return array
     */
    public function messages()
    {
        return [
            'full_name.required' => '氏名は必ず入力してください。',
            'full_name.max' => '氏名は100文字以内で入力してください。',
            'tel.required' => '電話番号は必ず入力してください。',
            'tel.max' => '電話番号は20文字以内で入力してください。',
            'postal_code.required' => '郵便番号は必ず入力してください。',
            'postal_code.max' => '郵便番号は8文字以内で入力してください。',
            'pref.required' => '都道府県は必ず入力してください。',
            'pref.max' => '都道府県は10文字以内で入力してください。',
            'city.required' => '市区町村は必ず入力してください。',
            'city.max' => '市区町村は100文字以内で入力してください。',
            'town.required' => '市区町村は必ず入力してください。',
            'town.max' => '市区町村は100文字以内で入力してください。',
            'building.max' => '建物等は100文字以内で入力してください。',
        ];
    }
}
