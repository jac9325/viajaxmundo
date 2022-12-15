<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    static public function myRules(){
        return [
            //rules validation
            "name"=>"required",
            "surname"=>"required",
            "email"=>"required",
            "country"=>"required",
            "phone"=>"required", 
            "password"=>"required|min:6",
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
