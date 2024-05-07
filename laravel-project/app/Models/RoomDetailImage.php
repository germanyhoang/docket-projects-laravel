<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomDetailImage extends Model
{
    use HasFactory;

    protected $fillable = ['id','link_imaes','created_at','update_at','room_id'];

    public function room(): BelongsTo{
        return $this->belongsTo(Room::class);
    }
}
