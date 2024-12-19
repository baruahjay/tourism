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

    protected function addOperator(
        $place_id,
        $name,
        $rating,
        $contact_number
    ): bool {
        return DB::table('tour_operators')
            ->insert(
                [
                    'place_id' => $place_id,
                    'name' => $name,
                    'rating' => $rating,
                    'contact_number' => $contact_number,
                ]
            );
    }

    protected function updateOperator(
        $operator_id,
        $place_id,
        $name,
        $rating,
        $contact_number
    ): bool {
        return DB::table('tour_operators')
            ->where('operator_id', $operator_id)
            ->update([
                'place_id' => $place_id,
                'name' => $name,
                'rating' => $rating,
                'contact_number' => $contact_number,
            ]);
    }

    protected function removeOperator(
        $operator_id
    ): bool {
        return DB::table('tour_operators')
            ->where(['operator_id' => $operator_id])
            ->delete();
    }
}
