<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest
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
            'name' => [
                'required',
                'between:2,25',
                'regex:/(^[a-z\d\-\_]+$|^[\x{4e00}-\x{9fa5}]+$)/ui',
                'unique:users,name,' . Auth::id(),
            ],
            'email' => 'required|email',
            'introduction' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=200,min_height=200',
        ];
    }

    public function messages()
    {
        return [
            'avatar.mimes' =>'頭像必須是 jpeg, bmp, png, gif 類型的文件。',
            'avatar.dimensions' => '圖片的清晰度不足，寬和高需要在 200px 以上。',
            'name.required' => '用戶名不能為空。',
            'name.between' => '用戶名需要介於 2 - 25 個字符之間。',
            'name.regex' => '用戶名格式不正確。',
            'name.unique' => '用戶名已存在。',
        ];
    }
}
