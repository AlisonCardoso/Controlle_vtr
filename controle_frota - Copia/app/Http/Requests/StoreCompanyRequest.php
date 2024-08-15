<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name' => 'required|string',
            'pelotao' => 'nullable|string',
            'slug' => 'nullable|string',
            'sub_command' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return[
            'name.required' => 'Campo nome é obrigatório!',
            






        ];

    }
}
