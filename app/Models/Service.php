<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $guarded = false;

    protected $fillable = ['name', 'price'];

    public $timestamps = false;

    public function s_client_order()
    {
        return $this->belongsTo(Client_order::class);
    }
}
