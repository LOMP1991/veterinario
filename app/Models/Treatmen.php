<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Treatmen extends Model
{
    public function patient(): BelongsTo 
    {
      return $this->belongsTo(Patient::class);  
    }
}
