<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    protected function getHotel(): object|null
    {
        return DB::table('hotels')
            ->select(
                'hotel_id',
                'place_id',
                'hotel_name',
                'latitude',
                'longitude',
                'rating',
                'area',
            )
            ->orderBy('hotel_id', 'asc')
            ->get();
    }

    protected function addHotel(
        $place_id,
        $hotel_name,
        $latitude,
        $longitude,
        $rating,
        $area,
        $created_at,
        $updated_at,
    ): bool {
        return DB::table('hotels')
            ->insert(
                [
                    'place_id' => $place_id,
                    'hotel_name' => $hotel_name,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'rating' => $rating,
                    'area' => $area,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]
            );
    }

    protected function updateHotel(
        $hotel_id,
        $place_id,
        $hotel_name,
        $latitude,
        $longitude,
        $rating,
        $area,
    ): bool {
        return DB::table('hotels')
            ->where('hotel_id', $hotel_id)
            ->update([
                'place_id' => $place_id,
                'hotel_name' => $hotel_name,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'rating' => $rating,
                'area' => $area,
            ]);
    }

    protected function removeHotel(
        $hotel_id
    ): bool {
        return DB::table('hotels')
            ->where(['hotel_id' => $hotel_id])
            ->delete();
    }
}
