<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_event extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('data_events')->get();
    }
    public function detailData($id)
    {
        return DB::table('data_events')->where('id_event', $id)->first();
    }
    public function addData($data)
    {
        DB::table('data_events')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('data_events')->where('id_event', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('data_events')->where('id_event', $id)->delete();
    }
}
