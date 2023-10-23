<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_ads extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data_ads')->get();
    }
    public function detailData($id)
    {
        return DB::table('data_ads')->where('id_ads', $id)->first();
    }
    public function addData($data)
    {
        DB::table('data_ads')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('data_ads')->where('id_ads', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('data_ads')->where('id_ads', $id)->delete();
    }
}
