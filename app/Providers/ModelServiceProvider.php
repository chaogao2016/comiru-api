<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ModelServiceProvider extends ServiceProvider
{

    public function register() {
        $this->app->singleton('model_user', User::class);
    }

}