<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'student_code' => 'required | numeric',
            'password' => 'same:password_confirmation',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sinh viên không được để trống!',
            'student_code.required' => 'Mã sinh viên không được để trống!',
            'student_code.numeric' => 'Mã sinh viên không hợp lệ!',
            'password.same' => 'Mật khẩu không khớp!',
            'email.required' => 'Email sinh viên không được để trống!'
        ];
    }
}
