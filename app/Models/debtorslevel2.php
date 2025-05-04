<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debtorslevel2 extends Model
{
    use HasFactory;
    protected $table = 'debtordebtorslevel_2';

    protected $fillable = ['name', 'price', 'quantity', 'user', 'employee_id', 'date'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
