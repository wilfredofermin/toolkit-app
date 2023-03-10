<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use LdapRecord\Laravel\Auth\HasLdapUser;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, AuthenticatesWithLdap, HasLdapUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'cn',
        'name',
        'displayname',
        'sn',
        'initials',
        'givenname',
        'postofficebox',
        'email',
        'userprincipalname',
        'title',
        'description',
        'department',
        'physicaldeliveryofficename',
        'manager',
        'company',
        'telephonenumber',
        'useraccountcontrol',
        'user_template',
        'lockouttime',
        'whencreated',
        'whenchanged',
        'pwdlastset',
        'lastlogontimestamp',
        'lastlogoff',
        'logoncount',
        'badpwdcount',
        'msexcharchivename',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
