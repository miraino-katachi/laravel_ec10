<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'num' => 'required|integer|between:1,10',
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
            'num.required' => '数量は必ず入力してください。',
            'num.integer' => '数量は整数で入力してください。',
            'num.between' => '数量は1から10の間で入力してください。'
        ];
    }

}
