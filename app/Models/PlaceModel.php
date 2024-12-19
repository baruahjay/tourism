<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PlaceModel extends Model
{
    protected function getPlace(): object|null
    {
        return DB::table('places')
            ->select(
                'place_id',
                'name',
                'location',
                'popular_sites',
                'created_at',
                'updated_at',
                'state',
                'district',
            )
            ->orderBy('place_id', 'asc')
            ->get();
    }

    protected function addPlace(
        $name,
        $location,
        $popular_sites,
        $state,
        $district,
        $place_category,
        $created_at,
        $updated_at,
    ): bool {
        return DB::table('places')
            ->insert(
                [
                    'name' => $name,
                    'location' => $location,
                    'popular_sites' => $popular_sites,
                    'state' => $state,
                    'district' => $district,
                    'place_category' => $place_category,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]
            );
    }

    protected function updatePlace(
        $place_id,
        $name,
        $location,
        $popular_sites,
        $state,
        $district,
        $place_category,
    ): bool {
        return DB::table('places')
            ->where('place_id', $place_id)
            ->update([
                'name' => $name,
                'location' => $location,
                'popular_sites' => $popular_sites,
                'state' => $state,
                'district' => $district,
                'place_category' => $place_category,
            ]);
    }

    protected function removePlace(
        $place_id
    ): bool {
        return DB::table('places')
            ->where(['place_id' => $place_id])
            ->delete();
    }
}
