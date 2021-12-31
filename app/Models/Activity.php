<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount', 'village_id', 'activity_type_id', 'volume', 'founding', 'start', 'lat', 'lng', 'attachment'];

    public function getActivityTypeColorAttribute() {
        return [
            '0' => 'blue',
            '1' => 'green',
            '2' => 'red',
            '3' => 'purple',
        ][$this->activity_type_id] ?? 'gray';
    }

    public function activity_type()
    {
        return $this->belongsTo(ActivityType::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
