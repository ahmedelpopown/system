<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    /** @use HasFactory<\Database\Factories\DebtorFactory> */
    use HasFactory;
    protected $fillable = ['name', 'phone', 'amount', 'notes', 'due_date'];

}
