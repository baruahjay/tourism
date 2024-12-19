<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OperatorModel extends Model
{
    protected function getOperator(): object|null
    {
        return DB::table('tour_operators')
            ->select(
                'operator_id',
                'place_id',
                'name',
                'rating',
                'contact_number',
            )
            ->orderBy('operator_id', 'asc')
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
