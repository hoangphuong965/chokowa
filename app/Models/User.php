<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'mst_role_id',
        'created_user',
        'updated_user',
        'deleted_user',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the station that belongs to the user.
     */
    public function station()
    {
        return $this->hasOne(Station::class);
    }

    /**
     * Get the nurse that belongs to the user.
     */
    public function nurse()
    {
        return $this->hasOne(Nurse::class);
    }

    /**
     * Get the role that belongs to the user.
     */
    public function role()
    {
        return $this->belongsTo(MstRole::class, 'mst_role_id');
    }

    /**
     * Get the images of the user.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Determine if the user has a certain role.
     *
     * @return bool
     */
    public function hasRole($roleName)
    {
        return $this->role->name === $roleName;
    }

    /**
     * Determine if the user has a certain permission.
     *
     * @return bool
     */
    public function hasPermission($permissionName)
    {
        if (optional($this->role->permissions)->pluck('name')->contains($permissionName)) {
            return true;
        }
            
        return false;
    }
}
