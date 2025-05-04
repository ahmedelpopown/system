<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    // Purchase.php
 // في موديل Employee.php
 public function purchases()
 {
     return $this->hasMany(Purchase::class);
 }
 public function product()
 {
     return $this->hasMany(Product::class);
 }


}
