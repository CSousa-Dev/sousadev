<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^\(\d{2}\)\s\d{4,5}\-\d{4}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:2000', 
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'phone.required' => 'O telefone é obrigatório.',
            'phone.regex' => 'O telefone deve estar no formato (XX) XXXXX-XXXX.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Insira um endereço de e-mail válido.',
            'message.required' => 'A mensagem é obrigatória.',
            'message.min' => 'A mensagem deve conter no mínimo 10 caracteres.',
            'message.max' => 'A mensagem deve conter no máximo 2000 caracteres.',
        ];
    }
}
