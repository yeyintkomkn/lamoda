<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class feedbackValidate extends FormRequest
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
    public function rules() {
        return [
          'photo' => 'image|max:2000',
        ];
    }

    public function messages()
    {
        return [            
          'photo.image' => 'Photo file must be image',
          'photo.max' => 'Maximum file size to photo is 2000kb',
        ];
    }
}
