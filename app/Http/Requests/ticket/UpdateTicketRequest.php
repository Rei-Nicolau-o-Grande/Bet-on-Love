<?php

namespace App\Http\Requests\ticket;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
