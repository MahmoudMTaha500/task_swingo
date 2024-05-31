<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerPreferncesRequest extends FormRequest
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
            'customer_id'=> ["required", "integer", "exists:users,id"],
            'notification_settings' => [
                'required',
                'array',
            ],
            'language' => 'required|string',
            'currency' => 'required|string|size:3', // Assuming 3-letter currency codes
        ];
    }
}
