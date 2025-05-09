<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    /** @use HasFactory<\Database\Factories\DebtorFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'quantity', 'user', 'employee_id', 'date'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
