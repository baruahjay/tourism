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

    # get operator
    public function getOperator(Request $request)
    {
        $data = OperatorModel::getOperator();
        return $data;
    }

    # user ###############################################

    # get user
    public function getUser(Request $request)
    {
        $data = UserModel::getUser();
        return $data;
    }


}