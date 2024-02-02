<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table='companies';
    protected $fillable = ['company_name','company_role','address'] ;
    public function CompanyAnnoucement(){
        return $this->hasMany(Annoucment::class,'company_id');
    }
}
