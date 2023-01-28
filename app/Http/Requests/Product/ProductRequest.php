<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'thumb' => 'required'
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Product name cannot be empty',
            'thumb.required' => 'Product image cannot be empty',
            'price.min' => 'Price cannot be negative'
        ];
    }
}
