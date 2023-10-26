<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kakuninRequest extends FormRequest
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
        'lname' => ['required'],
         'fname'=> ['required'], 
         'email' => ['required', 'email'],
         'post'=> ['string', 'max:8'],
         'opinion'=> ['required' ],
        ];
    }
         public function messages()
     {
         return [
             'lname.required' => '名前を入力してください',
             'lname.string' => '名前を文字列で入力してください',
             'fname.required' => '名前を入力してください',
             'fname.string' => '名前を文字列で入力してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'post.string' => '郵便番号はハイフンありの半角で入力してください',
             'post.regex' => '郵便番号はハイフンありの半角で入力してください',
             'post.max'=> '郵便番号は８字以内で入力してください',
             'address.required' => '住所を入力してください',
             'opinion.required'=> 'ご意見を入力してください',
        ];
     }
}

