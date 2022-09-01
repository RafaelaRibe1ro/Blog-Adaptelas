<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'string|min:10|max:50|required',
            'description'=>'string|min:10|max:100|nullable',
            'author'=>'string|min:2|max:50|required',
            'text'=>'string|min:10|max:50|required'
        ];
    }
}
