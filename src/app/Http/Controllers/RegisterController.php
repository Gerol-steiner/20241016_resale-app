<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;  // フォームリクエスト読込み
use App\Actions\Fortify\CreateNewUser; // ユーザー作成アクションをインポート

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // バリデーションが通った後、CreateNewUserを呼び出す(-> CreateNewUser.php)
        $user = (new CreateNewUser())->create($request->validated());

        // ユーザー登録後の処理（ログイン、リダイレクトなど）
        return redirect()->route('/')->with('success', 'ユーザー登録が完了しました。');
    }
}

