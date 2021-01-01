<?php

namespace App\Repositories;

class UserRepository
{

    // 获取当前登录用户id
    public function getCurrentUserId() {
        return app('model_user')->limit(3)->get();
    }

}
