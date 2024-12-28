<?php

namespace App\Http\Requests\ticket;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'value' => ['required', 'string', 'min:0'],
            'end_date' => ['required', 'date', 'after:today'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'value.required' => __('The value field is required.'),
            'value.min' => __('The value field must be at least 0.'),
            'end_date.required' => __('The end date field is required.'),
            'end_date.date' => __('The end date field must be a date.'),
            'end_date.after' => __('The date field must be a date after today.'),
        ];
    }
}
