<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'vat_number',
        'phone',
        'legal_address_street',
        'legal_address_number',
        'legal_address_postal',
        'legal_address_city',
        'operating_address_street',
        'operating_address_number',
        'operating_address_postal',
        'operating_address_city',
    ];

    /**
     * Get the users for the company.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
