<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;
use App\Models\PlaceModel;
use App\Models\OperatorModel;
use App\Models\UserModel;
use Carbon\Carbon;
use Exception;

class DemoController extends Controller
{
    # hotel ###############################################

    public function getHotel(Request $request)
    {
        $data = HotelModel::getHotel();
        return $data;
    }

    function addHotel($place_id, $hotel_name, $latitude, $longitude, $rating, $area)
    {
        $dateTimeObject = Carbon::now();

        try {
            HotelModel::addHotel(
                $place_id,
                $hotel_name,
                $latitude,
                $longitude,
                $rating,
                $area,
                $dateTimeObject->toDateTimeString(),
                $dateTimeObject->toDateTimeString(),
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function updateHotel($hotel_id, $place_id, $hotel_name, $latitude, $longitude, $rating, $area)
    {
        try {
            HotelModel::updateHotel(
                $hotel_id,
                $place_id,
                $hotel_name,
                $latitude,
                $longitude,
                $rating,
                $area
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function removeHotel($hotel_id)
    {
        try {
            HotelModel::removeHotel($hotel_id);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    # place ###############################################

    public function getPlace(Request $request)
    {
        $data = PlaceModel::getPlace();
        return $data;
    }

    function addPlace($name, $location, $popular_sites, $state, $district, $place_category)
    {
        $dateTimeObject = Carbon::now();

        try {
            PlaceModel::addPlace(
                $name,
                $location,
                $popular_sites,
                $state,
                $district,
                $place_category,
                $dateTimeObject->toDateTimeString(),
                $dateTimeObject->toDateTimeString(),
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function updatePlace($place_id, $name, $location, $popular_sites, $state, $district, $place_category)
    {
        try {
            PlaceModel::updatePlace(
                $place_id,
                $name,
                $location,
                $popular_sites,
                $state,
                $district,
                $place_category
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function removePlace($place_id)
    {
        try {
            PlaceModel::removePlace($place_id);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    # operator ###############################################

    public function getOperator(Request $request)
    {
        $data = OperatorModel::getOperator();
        return $data;
    }

    function addOperator($place_id, $name, $rating, $contact_number)
    {
        try {
            OperatorModel::addOperator(
                $place_id,
                $name,
                $rating,
                $contact_number
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function updateOperator($operator_id, $place_id, $name, $rating, $contact_number)
    {
        try {
            OperatorModel::updateOperator(
                $operator_id,
                $place_id,
                $name,
                $rating,
                $contact_number
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function removeOperator($operator_id)
    {
        try {
            OperatorModel::removeOperator($operator_id);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    # user ###############################################

    # get user
    public function getUser(Request $request)
    {
        $data = UserModel::getUser();
        return $data;
    }

    function addUser($name, $mobile, $gender)
    {
        try {
            UserModel::addUser(
                $name,
                $mobile,
                $gender
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function updateUser($user_id, $name, $mobile, $gender)
    {
        try {
            UserModel::updateUser(
                $user_id,
                $name,
                $mobile,
                $gender
            );

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function removeUser($user_id)
    {
        try {
            UserModel::removeUser($user_id);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}
