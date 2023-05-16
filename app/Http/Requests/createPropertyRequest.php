<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | string',
            'title' => 'required | string ',
            'status' => 'required | string',
            'type' => 'required|string',
            'location'=>'required|string',
            'price'=>'required|integer',
            'currency'=>'required|string',
        
        ];
    }
}
