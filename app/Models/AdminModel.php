<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;
    public static function GetData($table)
    {
        return DB::table($table)->get();
    }
    public static function CreateData($table, $data)
    {
        return DB::table($table)->insert($data);
    }
    public static function updateData($table, $key, $value, $data)
    {
        return DB::table($table)->where($key, $value)->update($data);
    }
    public static function GetDataById($table, $key, $value)
    {
        return DB::table($table)->where($key, $value)->first();
    }
    public static function getNamaBarangById($table, $data, $id, $columnName)
    {
        return DB::table($table)->where($data, $id)->value($columnName);
    }
    public static function GetDataByColumn($table, $column, $value)
    {
        return DB::table($table)->where($column, $value)->first();
    }

}
