<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo ":attribute" é obrigatório.',
            'min' => 'O ":attribute" deve ter no mínimo 3 caracteres.',
            'max' => 'O ":attribute" deve ter no máximo 255 caracteres.'
        ];
        //return [
        //    'nome.required' => 'O campo "Nome" é obrigatório.',
        //    'nome.min' => 'O Nome deve ter no mínimo 3 caracteres.',
        //    'nome.max' => 'O Nome deve ter no máximo 255 caracteres.'
        //];
    }
}
