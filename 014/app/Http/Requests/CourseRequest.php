<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required',
            'tutor' => 'required|min:3',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Mistakes happen, please enter the course name.',
            'tutor.min' => "Oh, are you sure? The Tutor's name must have more than 2 characters, please re-enter.",
            'email.email' => 'Wait! You entered a wrong mail address, please enter again.'
        ];
    }
}
