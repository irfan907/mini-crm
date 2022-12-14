<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
                'name'=>'required',
                'email'=>'nullable',
                'website'=>'nullable',
                'logo'=>request()->isMethod('put') ? 'nullable|image|dimensions:min_width=100,min_height=100' : 'required|image|dimensions:min_width=100,min_height=100',
        ];
    }
}
