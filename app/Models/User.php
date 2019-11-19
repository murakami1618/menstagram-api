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
        'user_id', 'screen_name', 'email', 'password', 'access_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'access_token',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];

    public function Posts(){
        return $this->hasMany('App\Model\Post');
    }

    public function follows()
    {
        return $this->belongsToMany(self::class, 'follows', 'user_id', 'target_user_id')
            ->using(Follow::class);
    }
    public function followers()
    {
        return $this->belongsToMany(self::class, 'follows', 'target_user_id', 'user_id')
            ->using(Follow::class);
    }
    public function test(){
        return 'aaaa';
    }
}
