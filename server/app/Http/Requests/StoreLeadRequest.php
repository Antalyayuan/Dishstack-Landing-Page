<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
            'full_name' => ['required', 'string', 'max:255'],
            'email_address' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'regex:/^\\+?[0-9]+$/', 'max:32'],
            'restaurant_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:100'],
            'other_countries' => ['nullable', 'string', 'max:255'],
            'feature' => ['required', 'string', 'max:100'],
            'other_feature' => ['nullable', 'string', 'max:255'],
            'demo_date' => ['nullable', 'date'],
        ];
    }

    /**
     * Trim incoming string values to avoid saving leading/trailing spaces.
     */
    protected function prepareForValidation(): void
    {
        $trimFields = [
            'full_name',
            'email_address',
            'phone_number',
            'restaurant_name',
            'country',
            'other_countries',
            'feature',
            'other_feature',
        ];

        $prepared = [];
        foreach ($trimFields as $field) {
            if ($this->filled($field) && is_string($this->input($field))) {
                $prepared[$field] = trim($this->input($field));
            }
        }

        if (!empty($prepared)) {
            $this->merge($prepared);
        }
    }
}
