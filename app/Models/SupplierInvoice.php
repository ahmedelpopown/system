<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierInvoice extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierInvoiceFactory> */
    use HasFactory;
    protected $fillable = ['supplier_id', 'total', 'notes', 'invoice_date'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
