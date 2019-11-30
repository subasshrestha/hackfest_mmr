<?php

namespace App\Http\Requests\report;

use Illuminate\Foundation\Http\FormRequest;

class StoreReport extends FormRequest
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
            'title'=>'required|string|max:255',
            'description'=>'string',
            'images' => 'required',
            'images.*'=>'|mimes:jpg,png,jpeg|max:4096',
        ];
    }
}
