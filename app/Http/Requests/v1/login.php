<?php

namespace App\Http\Requests\v1;

use App\Traits\ApiResponser;
use Illuminate\Foundation\Http\FormRequest;

class login extends FormRequest
{
    use ValidatorHelper;
    use ApiResponser;
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
    public function rules(){
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }
}
