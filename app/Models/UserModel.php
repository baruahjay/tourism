<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    # list user
    protected function getUser(): object|null
    {
        return DB::table('users')
            ->select(
                'user_id',
                'name',
                'mobile',
                'gender',
                'created_at',
                'updated_at',
            )
            ->orderBy('user_id', 'asc')
            ->get();
    }

    // protected function addPlace(
    //     $name,
    //     $location,
    //     $popular_sites,
    //     $state,
    //     $district,
    //     $place_category,
    //     $created_at,
    //     $updated_at,
    // ): bool {
    //     return DB::table('places')
    //         ->insert(
    //             [
    //                 'name' => $name,
    //                 'location' => $location,
    //                 'popular_sites' => $popular_sites,
    //                 'state' => $state,
    //                 'district' => $district,
    //                 'place_category' => $place_category,
    //                 'created_at' => $created_at,
    //                 'updated_at' => $updated_at,
    //             ]
    //         );
    // }

    // protected function updatePlace(
    //     $place_id,
    //     $name,
    //     $location,
    //     $popular_sites,
    //     $state,
    //     $district,
    //     $place_category,
    // ): bool {
    //     return DB::table('places')
    //         ->where('place_id', $place_id)
    //         ->update([
    //             'name' => $name,
    //             'location' => $location,
    //             'popular_sites' => $popular_sites,
    //             'state' => $state,
    //             'district' => $district,
    //             'place_category' => $place_category,
    //         ]);
    // }

    // protected function removePlace(
    //     $place_id
    // ): bool {
    //     return DB::table('places')
    //         ->where(['place_id' => $place_id])
    //         ->delete();
    // }
}
