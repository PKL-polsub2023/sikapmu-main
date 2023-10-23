<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_ketua_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_ketuas')->where('id_ketua', $id)->get();
    }
    public function addData($data)
    {
        DB::table('data_ketuas')->insert($data);
    }
    public function ditData($id, $data)
    {
        DB::table('data_ketuas')->where('id_ketua', $id)->update($data);
    }
}
