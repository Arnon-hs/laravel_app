<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;
use App\Models\BalanceStores;

class StoreController extends Controller
{
  public function index()
  {
      $stores = Store::all()->toArray();
      foreach ($stores as $key => &$value) {
        $stores[$key]['type'] = "store";
      }
      return view('store.index', compact('stores'));
  }


  public function show($id)
  {
      $products = [];
      $balance = BalanceStores::where([
        'store_id' => $id
      ])->with('product')->get()->toArray();

      foreach ($balance as $key => $value) {
        $products[$key] = $value['product'];
        $products[$key]['count'] = $value['count'];
      }

      return view('product.index', compact('products'));
  }
}
