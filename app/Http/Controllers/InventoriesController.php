<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoriesController extends Controller
{
    public function list() {
        $inventories = Inventory::all();
        //dd($inventories);

        return view('/inventories', [ 'inventories' => $inventories ]);
    }
}