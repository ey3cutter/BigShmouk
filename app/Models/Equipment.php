<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';

    protected $guarded = false;

    protected $fillable = ['equipment_type', 'equipment_brand', 'model', 'price'];

    public $timestamps = false;

    public function e_equipment_order()
    {
        return $this->belongsTo(Equipment_order::class);
    }
}
