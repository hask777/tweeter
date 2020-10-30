<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getAvatarAttribute()
    {
        return '/img/ava.png';
    }


    public function timeline()
    {
    /* Method 1 */
        // return Tweet::where('user_id', $this->id)
        //     ->latest()
        //     ->get();

     /* Method 2 */
        // $ids = $this->follows()->pluck('id');
        // $ids->push($this->id);
     
        // return Tweet::whereIn('user_id', $ids)
        //     ->latest()
        //     ->get();

    /* Method 3 */
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)
            ->latest();
    }

    /* Laravel 6 and older */
    public function getRouteKeyName()
    {
        // return parent::getRouteKeyName();
        return 'name';
    }

    public function url($path)
    {
        return route($path, $this->name);
    }

    public function path($append = '')
    {
        $path = route('profile', $this->name);

        return $append ? "{$path}/{$append}" : $path;
    }
}
