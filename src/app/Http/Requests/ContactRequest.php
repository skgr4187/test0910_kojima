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
            'first_name' => ['required', 'string','max:255',],
            'last_name' =>['required', 'string', 'max:255',],
            'gender' => ['required', 'string',],
            'email' => ['required', 'string', 'email', 'max:255',],
            'tell' => ['integer', 'numeric', 'digits_between:1,5', 'max:255',],
            'address' => ['required', 'string', 'max:255',],
            'categories' => ['required', 'string',],
            'detail' =>['required', 'string','max:120'],
        ];
    }
    public function messages()
    {
        return [
            // キー名 . ルール => メッセージ
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell.required' => '電話番号を入力してください',
            'tell.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'categories.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
