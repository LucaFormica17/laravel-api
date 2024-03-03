<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Project;
use Illuminate\Validation\Rule;

class ProjectUpdateRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|min:30',
            'end_date' => 'required|date'
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Massimo 50 caratteri',
            'description.required' => 'La descrixione è obbligatoria',
            'description.min' => 'Minimo 30 caratteri',
            'end_date.required' => 'La data è obbligatoria',
            'end_date' => 'Inserisci una data valida'
        ];
    }
}
