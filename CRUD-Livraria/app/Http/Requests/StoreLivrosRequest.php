<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLivrosRequest extends FormRequest
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
            'titulo' => 'required|max:60',
            'autor' => 'required|max:40',
            'dataLancamento' => 'required|date|before:tomorrow',
            'genero' => 'required|max:25',
            'numeroPaginas' => 'required|integer|min:1|max:999',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo "título" é obrigatório',
            'titulo.max' => 'O título informado é maior que o permitido',
            'autor.required' => 'O campo "autor" é obrigatório',
            'autor.max' => 'O campo "autor" tem um limite de 40 caracteres',
            'dataLancamento.required' => 'A data de lançamento é obrigatória',
            'dataLancamento.before' => 'A data deve ser inferior a atual', 
            'genero.required' => 'O campo "genero" é obrigatório',
            'genero.max' => 'O genero informado é muito grande',
            'numeroPaginas.required' => 'O campo "páginas" é obrigatório',
            'numeroPaginas.integer' => 'O campo "páginas" deve ser um número',
            'numeroPaginas.min' => "O número de páginas deve ser maior que 0",
            'numeroPaginas.max' => "Número de páginas maior que o permitido",
        ];
    }
}