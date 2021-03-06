<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:255',
            'description' => 'max:1000',
            'color' => 'max:255',
            'material' => 'max:255',
            'price' => 'required|numeric',
            'category_id' => [
                'required',
                Rule::in(Category::pluck('id')),
            ],
            'image' => [
                'image',
            ],
        ];

        if ($this->method() == 'POST') {
            array_push($rules['image'], 'required');
        }

        return $rules;
    }
}
