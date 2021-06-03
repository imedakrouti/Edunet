<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            /* 'title'         =>['required', Rule::unique('subjects')->ignore($this->subject)], */
            'title'         =>'required|string|unique:subjects,title,'.$this->subject->id,
            'description'   =>'required|string|min:7',
            'image'         =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           /*  'file'          => 'required|mimes:pdf,xlx,csv,zip' */
        ];
    }
}
