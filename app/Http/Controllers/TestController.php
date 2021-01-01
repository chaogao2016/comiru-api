<?php

namespace App\Http\Controllers;

use App\Http\Response\Response;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test(Request $request) {

        $list = app('repo_user')->test();

        return Response::sendData($list);
    }

}
