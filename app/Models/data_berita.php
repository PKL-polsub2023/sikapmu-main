<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_berita extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('data_berita')->get();
    }
    public function detailData($id)
    {
        return DB::table('data_berita')->where('id_beritas', $id)->first();
    }
    public function addData($data)
    {
        DB::table('data_berita')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('data_berita')->where('id_beritas', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('data_berita')->where('id_beritas', $id)->delete();
    }
}
