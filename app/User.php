<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailFn;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
class User extends Authenticatable implements MustVerifyEmail 
{
    use Notifiable , MustVerifyEmailFn;
    protected $connection = 'mongo_main';
    protected $collection = 't_user';  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','permission',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // public function hasVerifiedEmail()
    // {
    //     return ! is_null($this->email_verified_at);
    // }

    // public function markEmailAsVerified()
    // {
    //     return $this->forceFill([
    //         'email_verified_at' => $this->freshTimestamp(),
    //     ])->save();
    // }

    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new Notifications\VerifyEmail);
    // }

}
