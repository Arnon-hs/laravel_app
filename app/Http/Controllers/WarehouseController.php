<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Product;
use App\Models\BalanceWarehouses;

class WarehouseController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $warehouses = Warehouse::all()->toArray();
      foreach ($warehouses as $key => &$value) {
        $warehouses[$key]['type'] = "warehouse";
      }
      return view('warehouse.index', compact('warehouses'));
  }


  public function show($id)
  {
      $products = [];
      $balance = BalanceWarehouses::where([
        'warehouses_id' => $id
      ])->with('product')->get()->toArray();

      foreach ($balance as $key => $value) {
        $products[$key] = $value['product'];
        $products[$key]['count'] = $value['count'];
      }

      return view('product.index', compact('products'));
  }
}
