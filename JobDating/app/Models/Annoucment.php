<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annoucment extends Model
{
    use HasFactory;
    protected $table='annoucments';

    protected $fillable=['title','content','company_id'];

    public function company() {
        // relation one to many
        return $this->belongsTo(Company::class, 'company_id');
    }
}
