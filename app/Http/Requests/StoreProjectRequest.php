<?php

namespace App\Http\Requests;

use App\Http\Requests\v1\ValidatorHelper;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    use ValidatorHelper;
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
        return [
            'title' => 'required',
            'about' => 'required',
            'client' => 'required',
            'url' => 'required',
            'start_date' => 'required',
            'tags' => 'required'
        ];
    }
}
