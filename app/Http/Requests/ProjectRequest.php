<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'client_name' => 'required',
            'summary' => 'required|min:3',
            'cover_image'=>'min:3'
        ];
    }

    public function messages()
    {
        return[

        'name.required' => 'Il nome del progetto è obbligatorio',
        'name.min' => 'Il numero minimo di caratteri nel titolo è 3',
        'client_name.required' => 'Il nome del cliente è obbligatorio',
        'summary.required' => 'La descrizzione è obbligatoria',
        'summary.required' => 'Il numero minimo dei caratteri nella descrizzione è 3',
        'cover_image.min' => 'Il numero minimo di caratteri nel immagine è 3'

    ];
    }

}