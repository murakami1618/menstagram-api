<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * 一般ユーザー
 *
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_name', 'email', 'password', 'avatar', 'access_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'access_token', 'access_token_deadline_at',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];

    /**
     * @param $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return config('app.url') . $value;
    }
}
