<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/s6pidtOQqHSSLA9dmZ5D18YX4WSHi7y4XzY4Lq8z.png';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }
}
