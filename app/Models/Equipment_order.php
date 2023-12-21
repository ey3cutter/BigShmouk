<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Equipment;

class Equipment_order extends Model
{
    use HasFactory;

    protected $table = 'equipment_orders';

    protected $guarded = false;

    protected $fillable = ['user_id', 'equipment_id', 'date_of_order'];

    public $timestamps = false;

    public function e_users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function e_equipment()
    {
        return $this->hasMany(Equipment::class, 'id', 'equipment_id');
    }
}
