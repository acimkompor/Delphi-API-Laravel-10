<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataPegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['agama'];

    public function agama() : BelongsTo {
        return $this->belongsTo(Agama::class);
    }
}
