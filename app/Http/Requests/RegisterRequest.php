<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'fname' => ['required', 'string', 'max:50'],
            'lname' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'password' => ['required', 'string', Password::min(8)->letters()->symbols()->numbers() , 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser texto válido.',
            'name.max' => 'El nombre no debe tener más de 50 caracteres.',

            'fname.required' => 'El apellido paterno es obligatorio.',
            'fname.string' => 'El apellido paterno debe ser texto válido.',
            'fname.max' => 'El apellido paterno no debe tener más de 50 caracteres.',

            'lname.required' => 'El apellido materno es obligatorio.',
            'lname.string' => 'El apellido materno debe ser texto válido.',
            'lname.max' => 'El apellido materno no debe tener más de 50 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debes ingresar un correo electrónico válido.',
            'email.max' => 'El correo electrónico no debe tener más de 100 caracteres.',
            'email.unique' => 'Este correo ya está registrado.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres, una letra, un número y un símbolo.',
            'password.letters' => 'La contraseña debe tener al menos 8 caracteres, una letra, un número y un símbolo.',
            'password.numbers' => 'La contraseña debe tener al menos 8 caracteres, una letra, un número y un símbolo.',
            'password.symbols' => 'La contraseña debe tener al menos 8 caracteres, una letra, un número y un símbolo.',
        ];
    }
}
