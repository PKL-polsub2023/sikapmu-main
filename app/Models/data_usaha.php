<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_usaha extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('usahas')->where('id_usaha', $id)->get();
    }
    public function addData($data)
    {
        DB::table('usahas')->insert($data);
    }
    public function ditData($id, $data)
    {
        DB::table('usahas')->where('id_usaha', $id)->update($data);
    }
}
