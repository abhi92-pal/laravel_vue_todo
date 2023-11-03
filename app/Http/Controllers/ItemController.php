<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Item::latest('created_at')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = Item::create([
            'name' => $request->name
        ]);

        return $item;
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($item = Item::find($id)){
            $item->completed = $request->completed ? true : false;
            $item->completed_at = $request->completed ? Carbon::now() : NULL;
            $item->update();

            return $item;
        }

        return 'Item not found';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($item = Item::find($id)){
            $item->delete();

            return 'Item deleted successfully';
        }

        return "Item not found";
    }
}
