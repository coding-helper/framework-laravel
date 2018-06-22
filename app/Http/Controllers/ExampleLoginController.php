<?php

namespace App\Http\Controllers;

use App\Lib\TokenHelper;
use App\Traits\ResHelper;
use App\User;
use Illuminate\Http\Request;

class ExampleLoginController extends Controller
{

    use ResHelper;

    /**
     * @func 登录示例
     */
    public function exampleLogin(Request $request)
    {
        $user = User::find(1);
        $type = $request->input('tokenType');
        return $this->success([
            'token' => TokenHelper::genToken($user, $type)
        ]);
    }

    /**
     * @func 登出示例
     */
    public function exampleLogout(Request $request)
    {
        $user = $request->input('user');
        $type = $request->input('tokenType');
        TokenHelper::delToken($user, $type);
        return $this->success();
    }

}
