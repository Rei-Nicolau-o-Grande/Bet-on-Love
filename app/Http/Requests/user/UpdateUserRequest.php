<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();
        $userIdBeingUpdated = $this->route('user'); // Assumindo que o ID do usuário está na rota

        // Verifica se o usuário é admin ou se está atualizando seus próprios dados
        return $user->isAdmin() || $user->id === (int) $userIdBeingUpdated;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $userId = $this->route('user') ? $this->route('user')->id : 'null';

        return [
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $userId],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $userId],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['nullable', 'string', 'required_with:password', 'same:password'],
            'role_id' => ['required', 'integer', 'exists:roles,id'],
        ];
    }
}
