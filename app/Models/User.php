<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'wp_users';

    protected $fillable = [
        'ID',
        'user_login',
        'user_pass',
        'user_nicename',
        'user_email',
        'user_url',
        'user_registered',
        'user_activation_key',
        'user_status',
        'display_name'
    ];

    protected $appends = ['role'];

    public function getAuthIdentifier()
    {
        return $this->ID;
    }

    public function getAuthPassword()
    {
        return Hash::make($this->user_pass);
    }

    protected function getRoleAttribute(): string
    {
        $role = DB::query()
            ->select('meta_value')
            ->from('wp_usermeta')
            ->where('meta_key', 'wp_capabilities')
            ->where('user_id', $this->ID)
            ->first();

        $role = $role ? str_replace('"', '', substr(substr($role->meta_value, 0, -7), 10)) : '';

        return $role;
    }
}
