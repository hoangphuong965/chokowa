<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nurse extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'graduation_date' => 'datetime:Y-m-d',
        'date_of_birth' => 'datetime:Y-m-d',
    ];

    protected $fillable = [
        'nickname',
        'fullname',
        'fullname_kana',
        'phone',
        'zipcode',
        'mst_prefecture_id',
        'municipality',
        'after_address',
        'nearest_station',
        'introduction',
        'occupation',
        'qualifications',
        'job_method',
        'desired_hourly_wage',
        'desired_holiday_hourly_wage',
        'home_visit_hourly_wage',
        'graduation_school',
        'graduation_date',
        'date_of_birth',
        'other_information',
        'financial_organization',
        'branch_name',
        'deposit_type',
        'account_number',
        'account_name_kana',
        'created_user',
        'updated_user',
    ];

    /**
     * Get the user that has the nurse info.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the prefecture that belongs to the nurse.
     */
    public function mstPrefecture()
    {
        return $this->belongsTo(MstPrefecture::class);
    }

    /**
     * Get the schedules of the nurse.
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Get the applied shifts that belong to the nurse.
     */
    public function appliedShifts()
    {
        return $this->belongsToMany(Shift::class, 'apply_shifts', 'nurse_id', 'shift_id');
    }

    /**
     * Get the favourite jobs of the nurse.
     */
    public function favouriteJobs()
    {
        return $this->belongsToMany(Job::class, 'nurse_favorites', 'nurse_id', 'job_id');
    }

    /**
     * Get the stations that favour the nurse.
     */
    public function favouredStations()
    {
        return $this->belongsToMany(Station::class, 'station_favorites', 'nurse_id', 'station_id');
    }
}
