<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    public function toggle()
    {
        if ($this->completed_at) {
            $this->completed_at = null;
        } else {
            $this->completed_at = Carbon::now();
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
