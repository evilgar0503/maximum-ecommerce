<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['string', 'max:255'],
            'apellidos' =>['string', 'max:255'],
            'dni' => ['string', 'max:255', 'regex:/^[0-9]{8}[A-Za-z]{1}$/'],
            'fecha_nacimiento' => ['date'],
            'telefono' => ['numeric', 'digits:9'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
