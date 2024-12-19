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

    protected function addUser(
        $name,
        $mobile,
        $gender
    ): bool {
        return DB::table('users')
            ->insert(
                [
                    'name' => $name,
                    'mobile' => $mobile,
                    'gender' => $gender
                ]
            );
    }

    protected function updateUser(
        $user_id,
        $name,
        $mobile,
        $gender
    ): bool {
        return DB::table('users')
            ->where('user_id', $user_id)
            ->update([
                'name' => $name,
                'mobile' => $mobile,
                'gender' => $gender
            ]);
    }

    protected function removeUser(
        $user_id
    ): bool {
        return DB::table('users')
            ->where(['user_id' => $user_id])
            ->delete();
    }
}
