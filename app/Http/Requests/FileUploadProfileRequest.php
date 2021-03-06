<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadProfileRequest extends FormRequest
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
            'file-upload' => 'required|mimes:jpg,png|max:5120',
        ];
    }
}
