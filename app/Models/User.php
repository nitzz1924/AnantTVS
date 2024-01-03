<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class User extends Authenticatable
{
    public function checkID()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->parent_id==0){
                return $user->id;
            }else{
                return $user->parent_id;
            }
        }
    }
}
