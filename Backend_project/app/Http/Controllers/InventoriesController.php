<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    public function index(Request $request)
    {
        $users=Inventory::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user=new Inventory();
        $user->products_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->DateTime =$request->DateTime;
        $user->save();

        return response()->json("El Inventario ha sido creado exitosamente",201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Inventory::find($id);
        $user->products_id =$request->product_id;
        $user->quantity =$request->quantity;
        $user->DateTime =$request->DateTime;
        $user->save();

        return response()->json("El Inventario se ha actualizado exitosamente",201);

    }

    /**
     * Display the specified resource.
     */
    public function destroy(string $id)
    {
        $user=Inventory::find($id);
        $user->delete();
        return response()->json("El Inventario se ha eliminado exitosamente",201);
    }

}
