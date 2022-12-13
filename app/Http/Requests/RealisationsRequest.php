<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealisationsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titre' => 'required|between:3,50',
            'description' => 'max:250',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut|before:tomorrow',
            'photo' => 'required|image|mimes:jpg,png'
        ];
    }
}
