<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\ProductStock;
use App\Models\Product;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home',);
    }
    public function home_dashboard()
    {
        $products = Product::latest()->paginate(5);
        $employees = Employee::latest()->paginate(5);
        // Count for user
        $data = User::latest()->paginate(5);
        $productCount = Product::where('user_id','=',Auth::user()->id)->count();
        $employeeCount = DB::table('employees')->count();
        $categoryCount = DB::table('categories')->count();
        $allstockCount = DB::table('product_stocks')->count();
        $stockCountIN = ProductStock::where('status','=','in')->count();
        $stockCountOUT = ProductStock::where('status','=','out')->count();

        // Count for admin
        $productAdminCount = DB::table('products')->count();
        $employeeAdminCount = DB::table('employees')->count();
        $categoryAdminCount = DB::table('categories')->count();
        $allstockAdminCount = DB::table('product_stocks')->count();
        $stockAdminCountIN = ProductStock::where('status','=','in')->count();
        $stockAdminCountOUT = ProductStock::where('status','=','out')->count();

        return view('dashboard.dashboard_home',compact(('data'),
            'products',
            'employees',
            'productCount',
            'employeeCount',
            'categoryCount',
            'stockCountIN',
            'stockCountOUT',
            'allstockCount',
        // Count Admin
            'productAdminCount',
            'employeeAdminCount',
            'categoryAdminCount',
            'allstockAdminCount',
            'stockAdminCountIN',
            'stockAdminCountOUT'
        ));
    }
}
