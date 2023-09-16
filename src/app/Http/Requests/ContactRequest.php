<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'surname' => 'required',
            'givenname' => 'required',
            'gender' => 'required',
            'email' => ['required', 'email'],
            'postcode' => ['required', 'min:8', 'max:8'],
            'address' => 'required',
            'opinion' => ['required','max:120']
        ];
    }

    public function messages()
    {
        return [
            'surname.required' => '姓を入力してください',
            'givenname.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレス形式ではありません',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.min' => '入力文字数は"-"を含めて半角8文字です',
            'postcode.max' => '入力文字数は"-"を含めて半角8文字です',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見の入力は120文字以内でお願いします'
        ];
    }
}
