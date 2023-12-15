<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    
    public function attributes(): array
{
    return [


        'title' => 'title yozish kerak',
        'short_content' => 'short_content yozish kerak',
        'content' => 'content yozish kerak',
    ];
}

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'title'=>'required | max:225',
            'short_content'=> 'required',
            'content'=> 'required',
            // 'photo'=>'nullable|image'
        ];
    }
}
