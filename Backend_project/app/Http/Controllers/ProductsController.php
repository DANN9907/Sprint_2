<?php

namespace App\Http\Controllers;


use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $users=Product::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Product();
        $user->name =$request->name;
        $user->description =$request->description;
        $user->PurchasePrice =$request->PurchasePrice;
        $user->SalePrice =$request->SalePrice;
        $user->save();

        return response()->json("El Producto ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Product::find($id);
        $user=new Product();
        $user->name =$request->name;
        $user->description =$request->description;
        $user->PurchasePrice =$request->PurchasePrice;
        $user->SalePrice =$request->SalePrice;
        $user->save();

        return response()->json("El producto se ha actualizado exitosamente",201);

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Product::find($id);
        $user->delete();
        return response()->json("El Producto se ha eliminado exitosamente",201);
    }

}
