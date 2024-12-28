<?php

namespace App\Http\Requests\post;

use App\Enum\StatusPost;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        if ($this->finish_date) {
            $this->merge([
                'status_post' => StatusPost::Finished->value,
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'status_post' => ['required', 'string', 'in:Published,Pending,Denied,Draft,Finished'],
            'finish_date' => ['nullable', 'date'],
        ];
    }
}
