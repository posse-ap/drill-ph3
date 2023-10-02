<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'sample' => ['required', 'max:255'],
        ];
    }

    public function attributes()
    {
        return [
            'sample' => 'サンプル'
        ];
    }

    public function messages()
    {
        return [
            'sample.required'  => 'サンプルは必須項目です',
        ];
    }
}
