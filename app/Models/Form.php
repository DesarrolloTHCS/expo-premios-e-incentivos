<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio', 'name', 'last_name', 'email', 'phone_number', 'company_id', 'company', 'organization_title', 'interest', 'message'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
    }
}
