<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $fillable = ['title', 'name', 'email', 'email', 'subject', 'policyno', 'phonenumber', 'nic', 'contactmethod', 'solutiontype', 'message'];
}
