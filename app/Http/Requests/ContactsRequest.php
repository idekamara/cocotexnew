<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
                /*'firstname'=>'bail|required|between:3, 30|alpha',
            'lastname'=>'bail|required|max:50|min:2|alpha',
            'email' => 'bail|required|email',
            'phone'=>'bail|required|between:9,14|numeric',
            'adresse'=>'bail|alpha_num',
            'description' => 'bail|required|max:1000000'*/
              ];
    }
}
