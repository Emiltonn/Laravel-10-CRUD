<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateCustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'cpf' => 'required|unique:customers|min:11|max:15',
            'name' => 'required|min:2|max:100',
            'birth_date' => 'required|date',
            'gender' => ['required', Rule::in(['F', 'M'])],
        ];

        if ($this->method() === 'PATCH') {
            $rules['cpf'] = [
                'required',
                Rule::unique('customers')->ignore($this->id),
                'min:11',
                'max:15'
            ];
        }

        return $rules;
    }
}
