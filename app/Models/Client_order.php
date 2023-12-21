<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Service;

class Client_order extends Model
{
    use HasFactory;

    protected $table = 'client_orders';

    protected $guarded = false;

    protected $fillable = ['status', 'date_of_order', 'user_id', 'service_id'];

    public $timestamps = false;

    public function c_users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
    
    public function c_services()
    {
        return $this->hasMany(Service::class, 'id', 'service_id');
    }
}
