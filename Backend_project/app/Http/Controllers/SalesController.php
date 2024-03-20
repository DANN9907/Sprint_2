<?php

namespace App\Http\Controllers;

use App\Models\Sale;



use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $users=Sale::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Sale();
        $user->users_id =$request->users_id;
        $user->product_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->SalePrice =$request->SalePrice;
        $user->save();

        return response()->json("La venta ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Sale::find($id);
        $user->users_id =$request->users_id;
        $user->product_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->SalePrice =$request->SalePrice;
        $user->save();
        return response()->json("La venta se ha actualizado exitosamente",201);

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Sale::find($id);
        $user->delete();
        return response()->json("El venta se ha eliminado exitosamente",201);
    }


}
