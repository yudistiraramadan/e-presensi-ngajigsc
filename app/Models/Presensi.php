<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = "presensis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'user_id', 'name', 'tanggal', 'jammasuk', 'jamkeluar', 'jamngaji'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
