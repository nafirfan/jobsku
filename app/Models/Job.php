<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'category', 'vacancy', 'salary_min', 'salary_max', 'type', 'year_of_experience', 'location', 'expiration_pub', 'educational_req', 'gender', 'description', 'responsibilities', 'user_id', 'companies_id'];
}
