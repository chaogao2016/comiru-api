<?php

namespace App\Repositories;

class UserRepository
{

    public function test() {
        return app('model_user')->limit(3)->get();
    }

}
