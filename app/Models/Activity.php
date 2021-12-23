<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount', 'village', 'activity_type', 'volume', 'founding', 'start', 'attachment'];

    public function getActivityTypeColorAttribute() {
        return [
            'Jalan' => 'green',
            'Jembatan' => 'red',
            'Bangunan' => 'purple',
            'Saluran Air' => 'blue',
        ][$this->activity_type] ?? 'gray';
    }
}
