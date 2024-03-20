<?php

namespace App\Http\Controllers;

use App\Models\Purchase;

use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index(Request $request)
    {
        $users=Purchase::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Purchase();
        $user->users_id =$request->users_id;
        $user->product_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->PurchasePrice =$request->PurchasePrice;
        $user->save();

        return response()->json("La Compra ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Purchase::find($id);
        $user->users_id =$request->users_id;
        $user->product_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->PurchasePrice =$request->PurchasePrice;
        $user->save();

        return response()->json("La Compra se ha actualizado exitosamente",201);

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Purchase::find($id);
        $user->delete();
        return response()->json("La Compra se ha eliminado exitosamente",201);
    }

}
