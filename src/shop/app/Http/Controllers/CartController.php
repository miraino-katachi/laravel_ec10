<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\CartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * カート一覧ページ
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        // 合計値の計算
        $sum = 0;
        foreach($carts as $cart) {
            $sum += $cart->item->price * $cart->num;
        }
        return view('cart.index', compact('carts', 'sum'));
    }

    /**
     * カート追加処理
     *
     * @param Request $request
     * @return void
     */
    public function add(CartRequest $request)
    {
        $user_id = Auth::id();
        // 同じIDの商品が既にカートに入っていないか確認
        $count = Cart::where('user_id', $user_id)->where('item_id', $request->item_id)->count();
        if ($count == 0) {
            // カートに同じ商品が入っていない場合は新規登録
            $cart = new Cart();
        } else {
            // カートに既に同じ商品が入っている場合は更新処理
            $cart = Cart::where('user_id', $user_id)->where('item_id', $request->item_id)->first();
        }
        $cart->fill($request->all());
        $cart->user_id = $user_id;
        $cart->save();

        return redirect(route('cart.index'));
    }

    /**
     * カート削除処理
     *
     * @param Request $request
     * @return void
     */
    public function del(Request $request)
    {
        Cart::where('id', $request->id)->where('user_id', Auth()->id())->delete();

        return redirect(route('cart.index'));
    }
}
