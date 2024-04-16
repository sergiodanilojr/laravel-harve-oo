<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
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
    public function rules(): array
    {
        return [
            'title'=>'required',
            'price'=>'required|numeric|min:1',
            'description'=>'nullable'
        ];
    }

    public function messages():array
    {
        return [
            'price.min'=>'Bagual, forneça um valor maior que zero!',
        ];
    }
}
