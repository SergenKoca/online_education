<?php

namespace App\Models\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // user'ın sahip olduğu kursları getirir.
    public function courses(){
      return $this->hasMany('App\Models\Purchase\Purchase','to_who_id','id');
    }

    // user'ın satın aldığı kursları getirir.(Kendisine veya başkasına aldığı)
    public function purchases(){
      return $this->hasMany('App\Models\Purchase\Purchase','by_who_id','id');
    }

    // many to many ilişki var.
    public function roles(){
      return $this->belongsToMany('App\Models\Auth\Role','user_role','user_id','role_id');
    }
}
