<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:254'],
            'phone' => ['required', 'max:15'],
            'email' => ['required', 'email', 'max:254'],
            'service_id' => ['required', 'integer','exists:services,id'],
            'city' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
