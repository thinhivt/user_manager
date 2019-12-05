<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'address', 'birthday', 'sex', 'phone', 'avatar', 'user_id'
    ];

    /**
     * Get user record associated with the user profile.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
