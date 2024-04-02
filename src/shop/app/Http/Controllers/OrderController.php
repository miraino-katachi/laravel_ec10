<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * 注文内容確認ページ
     */
    public function index()
    {
        $user_id = Auth::id();
        // 会員情報
        $user_info = UserInfo::where('user_id', $user_id)->first();
        // 会員情報がnullだったら、会員情報登録ページへリダイレクト
        if (is_null($user_info)) {
            $msg = '先に会員情報を登録してください';
            return redirect(route('user.create'))->with('msg', $msg);
        }
        // カート情報
        $carts = Cart::where('user_id', $user_id)->get();
        // 合計金額
        $sum = $this->sumPrice($carts);

        return view('order.index', compact('carts', 'user_info', 'sum'));
    }

    /**
     * 注文完了処理
     */
    public function complete()
    {
        $user_id = Auth::id();
        // カート情報を取得
        $carts = Cart::where('user_id', $user_id)->get();
        // 合計金額を取得
        $sum_price = $this->sumPrice($carts);
        // 注文テーブルにデータをインサート
        $order = new Order();
        $order->user_id = $user_id;
        $order->order_date = date('Y-m-d');
        $order->sum_price = $sum_price;
        $order->save();

        // 注文詳細テーブルにデータをインサート
        foreach($carts as $cart) {
            $detail = new OrderDetail();
            $detail->order_id = $order->id;    // 注文テーブルに最後にインサートされたID
            $detail->item_id = $cart->item->id;
            $detail->num = $cart->num;
            $detail->save();
            // カートを削除する
            $cart->delete();
        }

        return redirect(route('order.thanks'));
    }

    /**
     * 注文完了ページ
     */
    public function thanks()
    {
        return view('order.thanks');
    }

    /**
     * 注文履歴ページ
     */
    public function history()
    {
        $user_id = Auth::id();
        $orders = Order::where('user_id', $user_id)->orderBy('id', 'desc')->paginate(3);

        return view('order.history', compact('orders'));
    }

    /**
     * カートの合計金額を取得します。
     * @return integer
     */
    private function sumPrice($carts)
    {
        $sum_price = 0;
        foreach ($carts as $cart) {
            $sum_price += $cart->item->price * $cart->num;
        }
        return $sum_price;
    }
}
