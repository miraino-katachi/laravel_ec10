<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * トッページ
     */
    public function index()
    {
        $items = Item::paginate(8);
        return view('item.index', compact('items'));
    }

    /**
     * 商品詳細ページ
     */
    public function detail(Item $item)
    {
        return view('item.detail', compact('item'));
    }

}
