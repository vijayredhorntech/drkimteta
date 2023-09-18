<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductMediaRequest extends FormRequest{
    public function rules(): array
    {
        return [
            'media' => ['required'],
'type' => ['required'],//
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
