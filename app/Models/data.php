<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class data extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data')->where('id_user', Auth::user()->id)->get();
    }
    public function detailData($id)
    {
        return DB::table('data')->where('id_data', $id)->first();
    }
    public function jumlahData()
    {
        return DB::table('data')->where('id_user', Auth::user()->id)->count();
    }
    public function addData($data)
    {
        DB::table('data')->insert($data);
    }
    public function deleteData($id)
    {
        DB::table('data')->where('id_data', $id)->delete();
    }
}
