<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller


// お問い合わせ入力フォーム
{
    public function index()
    {
        return view('index');
    }

    // バリデーション
    public function create(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }

    // 入力内容確認画面
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'categories', 'detail']);
        return view('confirm', compact('contact'));
    }

    // データの保存と確認画面へ遷移
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'categories', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
