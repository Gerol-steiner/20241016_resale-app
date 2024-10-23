<?php

namespace App\Http\Controllers;

use App\Models\Item; // Itemモデルのインポート
use Illuminate\Support\Facades\Auth;  // 認証済みかどうか確認用
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // 認証済みユーザーかどうかを確認
        if (Auth::check()) {
            // 認証済みユーザーの場合、自分が出品した商品を除外
            $items = Item::where('user_id', '!=', Auth::id())->get();
        } else {
            // 未認証ユーザーの場合、全ての商品を表示
            $items = Item::all();
        }

        return view('items.index', compact('items'));
    }
}
