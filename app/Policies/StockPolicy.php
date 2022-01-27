<?php

namespace App\Policies;

use App\Models\ProductStock;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StockPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProductStock $productStock)
    {
        return $user->role === 'Super Admin' || $user->id ===$productStock->user_id;
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductStock $productStock)
    {
        return $user->role === 'Super Admin' || $user->id ===$productStock->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductStock $productStock)
    {
        return $user->role === 'Super Admin' || $user->id ===$productStock->user_id;
    }

}
