<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductStock;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stock = ProductStock::get();
        return view('stock.index', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $product_stocks = ProductStock::get();
        $product = Product::get();
        return view('stock.create', [
            'product' => $product,
            '$product_stocks' => $product_stocks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $items
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
            if ($request['quantity'] && $request['quantity'] > 0) {
                $new_item = new ProductStock();
                $new_item->product_id = $request->product_id;
                $new_item->status = $request->status_type;
                $new_item->quantity = $request['quantity'];
                $new_item->save();
                $stock_update = ProductStock::where('product_id', $request->product_id)->first();
                if ($request->status_type == ProductStock::STOCK_IN) {
                    //stock in
                    $stock_update->quantity = $stock_update->quantity + $request['quantity'];
                    Toastr::success('Successfully', 'In Stock', ["positionClass" => "toast-top-right"]);
                } else {
                    //stock out
                    $stock_update->quantity = $stock_update->quantity - $request['quantity'];
                    Toastr::success('Successfully','Out Stock', ["positionClass" => "toast-top-right"]);


                }
                $stock_update->save();
                return redirect()->route('stock.create');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $product_stocks = ProductStock::findOrFail($id);
        return view('stock.show', compact('product_stocks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $product_stocks = ProductStock::findOrFail($id);
        return view(
            'stock.edit',
            [
                'product_stocks' => $product_stocks,
                'product' => $product,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $product_stocks = ProductStock::findOrFail($id);
        $product_stocks->update($request->all());
        return redirect(route('stock.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $product_stocks = ProductStock::findOrFail($id);
        $product_stocks->delete();
        return redirect(route('stock.index'));
    }

    public function stock_show()
    {
        $stock = ProductStock::latest()->paginate();
        return view('stock.show_history',compact('stock'));
    }
}
