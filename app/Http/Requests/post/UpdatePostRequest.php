<?php

namespace App\Http\Requests\post;

use App\Models\Post;
use App\Traits\FormatOdd;
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'status_post' => ['required', 'string', 'in:Published,Pending,Denied,Draft'],
            'finish_date' => ['nullable', 'date'],
            'odd' => ['required', 'numeric'],
        ];
    }
}
