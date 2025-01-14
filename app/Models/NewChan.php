<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewChan extends Model
{
    use HasFactory;


    
        /**
         * The "type" of the auto-incrementing ID.
         *
         * @var string
         */
        protected $keyType = 'integer';
    
        /**
         * @var array
         */
        protected $fillable = ['group', 'gid', 'date', 'time', 'created_at', 'updated_at'];
  

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }
    
        
        public function team()
        {
            return $this->belongsTo(Team::class);
        }
}
