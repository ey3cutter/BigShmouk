<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = false;

    protected $fillable = ['email', 'password', 'phone', 'name_surname', 'role'];

    public $timestamps = false;

    public function u_client_order()
    {
        return $this->belongsTo(Client_order::class);
    }

    public function u_equipment_order()
    {
        return $this->belongsTo(Equipment_order::class);
    }
}
