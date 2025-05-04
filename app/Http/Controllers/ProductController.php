<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('supplier')->get();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::get();
        $suppliers = Supplier::get();

        return view('pages.product.create',compact('employees','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        
         
        // حساب التكلفة الكلية
        $total_cost = $validated['price_unit'] * $validated['total_quantity'];
    
        // إنشاء المنتج
        Product::create([
            'name'             => $validated['name'],
            'price'            => $validated['total_price'],  // سعر البيع
            'quantity'         => $validated['total_quantity'], // الكمية
            'cost_price'       => $validated['price_unit'],     // سعر الشراء
            'supplier_id'      => $validated['supplier_id'],
            'created_at'       => $validated['date_of_pay'],
            'total_cost'       => $total_cost,
        ]);
    
        // جلب البيانات للعرض
        $employees = Employee::get();
        $suppliers = Supplier::get();
        $products  = Product::get();
        
        return redirect()->route('product.index', compact('employees', 'suppliers', 'products'))
            ->with('success', 'تم إضافة المنتج بنجاح');
    }
    
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('products'); // نتأكد إن الاسم متطابق مع الفورم

        if ($ids && is_array($ids)) {
            Product::whereIn('id', $ids)->delete();
            return redirect()->back()->with('success', 'تم حذف المنتجات المحددة بنجاح');
        }

        return redirect()->back()->with('error', 'لم يتم تحديد منتجات للحذف');
    }
}
