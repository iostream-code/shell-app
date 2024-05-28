<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'code',
        'address',
        'open_hours',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
