<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $connection = 'mysql';

    protected $table = 'api_user';

    protected $primaryKey = 'id';

    protected $fillable = [
        "id",
        "nickname",
        "password",
        "email",
        "last_login_time",
        "is_delete",
        "created_at",
        "update_at",
    ];

}