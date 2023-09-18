<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'service_id' => ['required', 'integer'],
            'clinic_id' => ['required', 'integer'],
            'city' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
