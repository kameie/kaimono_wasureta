<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'days' => 'required|integer|max:999',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.max' => '名前は30文字以内で入力してください。',
            'days.required' => '日数は必須です。',
            'days.integer' => '日数は整数で入力してください。',
            'days.max' => '日数は999日以内で入力してください。',
        ];
    }
}
