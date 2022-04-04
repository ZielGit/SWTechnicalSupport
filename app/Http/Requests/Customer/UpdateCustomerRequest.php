<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'nullable|string|email|unique:customers,email,'.$this->route('customer')->id,
            'document_type' => 'required|in:DNI,RUC',
            'document_number' => 'required|unique:customers,document_number,'.$this->route('customer')->id,
            'phone' => 'nullable|string|unique:customers,phone,'.$this->route('customer')->id,
            'address' => 'nullable|string'
        ];
    }
}
