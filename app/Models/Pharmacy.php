<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;
<<<<<<< HEAD

        protected $fillable = [
            'priority',
            'owner_user_id',
            'area_id',
            'name'
        ];


    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

=======
>>>>>>> e89560f (edit order details table)
}