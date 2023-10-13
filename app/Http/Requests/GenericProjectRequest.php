<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenericProjectRequest extends FormRequest
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
            "title"=>"required|string",
            "link"=>"required|string",
            "description"=>"required|string",
            "thumb"=>"nullable|image|max:5120",
            "release"=>"required|date",
            "type_id"=>"exists:types,id",
            "technologies"=> "nullable"

        ];
    }

    public function messages(): array
{
    return [
        "title.required" => "Il Titolo è obbligatorio",           
        "link.required" => "Il link di GitHub è obbligatorio",
        "description.required" => "La descrizione è obbligatoria",
        "thunb.max" => "Ops! L'immagine è troppo grande",
        "release.required" => "La data è obbligatoria"
    ];
}
}
