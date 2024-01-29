<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EleveSaveRequest extends FormRequest
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
            'nom' => 'required|string|max:40',
            'prenom' => 'required|string|max:60',
            'tuteur' => 'required|string',
            'sexe' => 'required|string',
            'age' => 'required|integer',
            'adresse' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ "Nom" est obligatoire.',
            'prenom.required' => 'Le champ "Prénom" est obligatoire.',
            'tuteur.required' => 'Le champ "Tuteur" est obligatoire.',
            'sexe.required' => 'Le champ "Sexe" est obligatoire.',
            'age.required' => 'Le champ "Âge" est obligatoire.',
            'adresse.required' => 'Le champ "Adresse" est obligatoire.'
        ];
    }
}
