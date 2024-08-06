<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreWorkshopRequest extends FormRequest
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
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'responsavel' => 'required| string',
            'workshop_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'address' => 'required| string',
            'cep' => 'required',
            'number' => 'required|numeric',
            'complement' => 'nullable',






        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Campo nome é obrigatório!',
            'email.required' => 'Campo e-mail é obrigatório!',
            'phone_number.required' => 'Campo telefone é obrigatório!',
            'address.max' => 'Campo endereço é obrigatório!',
            'cep.required' => 'Campocep é obrigatório!',
            'number.required' => 'Campo numero é obrigatório!',
        ];
    }
}
