<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request
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
            //
            'name'=> 'min:4|max:60|required',
            'email' => 'min:6|max:100|required|unique:customers',
            'phone' => 'min:10|max:10|required',
            'cell_phone' => 'min:6|max:10|required',
            'city' => 'min:6|max:80|required',
            'address' => 'min:6|max:250|required'
        ];
    }
}
