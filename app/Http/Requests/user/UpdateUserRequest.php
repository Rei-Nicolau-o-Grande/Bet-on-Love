<?php

namespace App\Http\Requests\user;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();
        $userBeingUpdated = $this->route('user'); // Assumindo que o 'user' na rota é o objeto User

        // Verifica se o usuário é admin ou se está atualizando seus próprios dados
        return $user->isAdmin() || $user->id === $userBeingUpdated->id;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        if (!$this->has('role_id')) {
            $playerRole = Role::where('name', 'Player')->first();
            $this->merge([
                'role_id' => $playerRole->id,
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
