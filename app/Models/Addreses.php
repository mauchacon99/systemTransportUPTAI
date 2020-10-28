<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{States, Municipalities, Parishes, Stops};

class Addreses extends Model
{   
        public function States()
        {
            return $this->belongsTo(States::class);
        }
        
        public function Municipalities()
        {
            return $this->belongsTo(Municipalities::class);
        }

        public function Parishes()
        {
            return $this->belongsTo(Parishes::class);
        }

        public function Stops()
        {
            return $this->hasMany(Stops::class);
        }
}
