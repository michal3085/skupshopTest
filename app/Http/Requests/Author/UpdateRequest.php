<?php

namespace App\Http\Requests\Author;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required',
            'birth_date' => "required",
            'dead_date' => "nullable",
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Imię i nazwisko',
            'birth_date' => "Data urodzenia",
            'dead_date' => "Data śmierci",
        ];
    }
}
