<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poll;

class Choice extends Model {
    use HasFactory;

    public function poll() {
        return $this->belongsTo(Poll::class);
    }
}
