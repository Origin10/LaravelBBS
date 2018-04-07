<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '內容需要填寫。',
            'content.min' => '內容至少填寫兩個字元。',
        ];
    }
}
