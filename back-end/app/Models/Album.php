<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    protected $table = 'albums';

    protected $fillable = [
        'id', 'user_id', 'title', 'description', 'img', 'updated_at', 'featured'
    ];

}
