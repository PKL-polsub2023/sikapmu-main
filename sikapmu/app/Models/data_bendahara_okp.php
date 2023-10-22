<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_bendahara_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_bendahara')->where('id_bend', $id)->get();
    }
    public function addData($data)
    {
        DB::table('data_bendahara')->insert($data);
    }
    public function ditData($id, $data)
    {
        DB::table('data_bendahara')->where('id_bend', $id)->update($data);
    }
}
