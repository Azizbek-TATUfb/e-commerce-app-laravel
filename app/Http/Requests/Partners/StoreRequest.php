<?php

namespace App\Http\Requests\Partners;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name_uz' => 'nullable',
            'name_ru' => 'nullable',
            'name_en' => 'nullable',
            'key' => 'nullable',
            'link' => 'nullable',
            'status' => 'nullable',
            'photo' => 'nullable',
        ];
    }

}
