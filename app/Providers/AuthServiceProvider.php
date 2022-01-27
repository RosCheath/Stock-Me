<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Policies\EmployeePolicy;
use App\Policies\ProductPolicy;
use App\Policies\StockPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
      Product::class => ProductPolicy::class,
        ProductStock::class => StockPolicy::class,
        Employee::class => EmployeePolicy::class,
        Category::class => CategoryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('super-admin-feature', static function(User $user){
            return $user->role === 'Super Admin';
        });

        Gate::define('super-admin-user-id', static function(User $user, Product $product){
            return $user->id === $product->user_id;
        });
    }
}
