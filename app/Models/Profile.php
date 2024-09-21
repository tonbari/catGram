<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [0];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/ULXNhOj3R1QwSHf8xkCGH5Js5sTSHkgnxLfwJzhU.png';
        return ('/storage/' . $imagePath);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
