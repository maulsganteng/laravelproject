<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $table = 'employe';
    protected $fillable =['employeid','fisrtname','lastname','middlename','birthday'];
}
