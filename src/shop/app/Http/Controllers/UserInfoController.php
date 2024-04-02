<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use App\Http\Requests\UserInfoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    /**
     * 会員情報ページ
     */
    public function index()
    {
        $user_info = Auth::user()->userInfo()->first();
        // ユーザー情報の登録がない場合、登録ページへリダイレクト
        if (is_null($user_info)) {
            return redirect(route('user.create'));
        }
        return view('user.index', compact('user_info'));
    }

    /**
     * 会員情報登録ページ
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * 会員情報登録処理
     *
     * @param UserInfoRequest $request
     */
    public function store(UserInfoRequest $request)
    {
        // 既に登録されていたら登録しない
        $count = UserInfo::where('user_id', Auth::id())->count();
        $msg = '';
        if ($count == 0) {
            $user_info = new UserInfo();
            $user_info->fill($request->all());
            $user_info->user_id = Auth::id();
            $user_info->save();
        } else {
            $msg = '既に登録済みです';
        }

        return redirect(route('user.index'))->with('msg', $msg);
    }

    /**
     * 会員情報修正ページ
     */
    public function edit(UserInfo $user_info)
    {
        $this->checkUserId($user_info);
        return view('user.edit', compact('user_info'));
    }

    /**
     * 会員情報更新処理
     *
     * @param Request $request
     * @param UserInfo $user_info
     */
    public function update(UserInfoRequest $request, UserInfo $user_info)
    {
        $this->checkUserId($user_info);
        $user_info->fill($request->all());
        $user_info->update();

        return redirect(route('user.index'));
    }

    /**
     * ユーザーIDのチェックを行います
     *
     * @param UserInfo $user_info
     * @return void
     * @throws HttpException
     */
    private function checkUserId(UserInfo $user_info)
    {
        if (Auth::id() != $user_info->user_id) {
            abort(404);
        }
    }
}
