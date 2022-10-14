<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            "name" => "required|max:36",
            "text" => "required"
        ];
    }

    public function attributes()
    {
        return [
            'name' => '投稿者名',
            'text' => '本文'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attributeを入力してください。',
            'name.max' => ':attributeは36文字以下で入力してください。',
            'text.required' => ':attributeを入力してください。'
        ];
    }


}
