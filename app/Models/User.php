<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $menu = [
        "ADMIN"=>[
            ["nombre"=>"Home","url"=>"/home","icono"=>"fas fa-users"],
            ["nombre"=>"Usuario","url"=>"/users","icono"=>"fas fa-users"],
            ["nombre"=>"Cliente","url"=>"customers","icono"=>"fas fa-users"],
          
        ],

        "USER"=>[
            ["nombre"=>"Home","url"=>"/home","icono"=>"fas fa-users"],
            ["nombre"=>"Cliente","url"=>"customers","icono"=>"fas fa-users"],
          
        ]
        ];

        public static $permisos =[
            "ADMIN"=>[
                ["url"=>"/home","method"=>"GET","identica"=>true],
                ["url"=>"/users","method"=>"GET","identica"=>true],
                ["url"=>"/users/create","method"=>"GET","identica"=>true],
                ["url"=>"/users","method"=>"POST","identica"=>true],
                ["url"=>"/users/edit","method"=>"GET","identica"=>false],
                ["url"=>"customers","identica"=>true],
              
            ],

            "USER"=>[
                ["url"=>"/home","method"=>"GET","identica"=>true],
                ["url"=>"customers","identica"=>true],
              
            ],
        ];


        
        }