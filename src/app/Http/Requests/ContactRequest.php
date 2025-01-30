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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required|in:男性,女性,その他',
            'email' => 'required|email',
            'tel_first' => 'required|numeric',
            'tel_second' => 'required|numeric',
            'tel_third' => 'required|numeric',
            'address' => 'required',
            'detail' => 'required|not_in:',
            'content' => 'required|max:120',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'gender.in' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel_first.required' => '電話番号を入力してください',
            'tel_first.numeric' => '電話番号は数字で入力してください',
            'tel_second.required' => '電話番号を入力してください',
            'tel_second.numeric' => '電話番号は数字で入力してください',
            'tel_third.required' => '電話番号を入力してください',
            'tel_third.numeric' => '電話番号は数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'detail.not_in' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
