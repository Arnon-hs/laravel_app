<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;
use App\Models\Warehouse;

class ProductController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $products = Product::all();
      return view('product.index', compact('products'));
  }

  public function show($id)
  {
      $product = Product::where('id', $id)->with('BalanceStores', 'BalanceWarehouses')->get()->first()->toArray();

      foreach ($product['balance_stores'] as $key => $value) {
        $product['balance_stores'][$key]['store'] = Store::where(['id'=> $value['store_id']])->get()->first()->toArray();
        $product['balance_stores'][$key]['count'] = $value['count'];
      }

      foreach ($product['balance_warehouses'] as $key => $value) {
        $product['balance_warehouses'][$key]['warehouse'] = Warehouse::where(['id'=> $value['warehouses_id']])->get()->first()->toArray();
        $product['balance_warehouses'][$key]['count'] = $value['count'];
      }
      
      return view('product.show', compact('product'));
  }
}
