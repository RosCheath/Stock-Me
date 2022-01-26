<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::with(['product_history','category_history'])->orderBy('created_at','DESC')->get();
        return view('history.index',compact('history'));
    }

    public function create()
    {
        $categories = Category::get();
        $products = Product::get();
        return view('history.create', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function store(Request $request)
    {
        History::create($request->all()) ;

        return redirect(route('history.index'));
    }

    public function show(History $history)
    {
        return view('product.show',
            [
                'history' => $history
            ]);
    }
    public function edit(history $history)
    {

        return view('products.edit',
            [
                'history' => $history,

            ]);
    }
    public function update(Request $request ,history $history)
    {
        $history->update($request->all());
        return redirect(route('history.index'));
    }

    public function destroy(history $history)
    {

        $history->delete();
        return redirect(route('history.index'));
    }
}
