<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_loker extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data_lokers')->get();
    }
    public function detailData($id)
    {
        return DB::table('data_lokers')->where('id_loker', $id)->first();
    }
    public function addData($data)
    {
        DB::table('data_lokers')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('data_lokers')->where('id_loker', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('data_lokers')->where('id_loker', $id)->delete();
    }
}
