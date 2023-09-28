<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'amount' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'product_id' => ['required', 'integer','exists:products,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
