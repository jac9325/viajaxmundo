<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    static public function myRules(){
        return [         
            //rules validation
            "name"=>"required",
            "surname"=>"required",
            "email"=>"required",
            "country"=>"required",
            "date"=>"required",
            "phone"=>"required",
            "user"=>"required|unique:users",
            "password"=>"required|min:6",
            "status"=>"required|integer",
            "profile_id"=>"required|integer",
        ];
    }

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return $this->myRules();
    }
}
