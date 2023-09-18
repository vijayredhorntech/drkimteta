<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest{
    public function rules(): array
    {
        return [
            'name' => ['required'],
'price' => ['required', 'numeric'],
'discount' => ['required', 'numeric'],
'description' => ['required'],
'ingredients' => ['required'],
'dosage' => ['required'],
'origin' => ['required'],//
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
