<?php

use Illuminate\Support\Facades\DB;
if (!function_exists('get_province_for_form')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_province_for_form()
    {
        $data = DB::table('tinhthanhpho')->select('*')->get();

        return $data;
    }
}
if (!function_exists('get_agencies_by_province_id')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_agencies_by_province_id($city_id)
    {
        $data = DB::table('agencies')->select('*')
        ->where('city_id', $city_id)->get();

        return $data;
    }
}
if (!function_exists('get_district_by_province_id')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_district_by_province_id($city_id)
    {
        $data = DB::table('quanhuyen')->select('*')
        ->where('matp', $city_id)->get();

        return $data;
    }
}
if (!function_exists('get_ward_by_district_id')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_ward_by_district_id($district_id)
    {
        $data = DB::table('xaphuongthitran')->select('*')
        ->where('maqh', $district_id)->get();

        return $data;
    }
}