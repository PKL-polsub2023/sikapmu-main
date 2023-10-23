<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data_sekretaris_okp extends Model
{
    use HasFactory;

    public function detailData($id)
    {
        return DB::table('data_sekretaris')->where('id_skre', $id)->get();
    }
    public function addData($data)
    {
        DB::table('data_sekretaris')->insert($data);
    }
    public function ditData($id, $data)
    {
        DB::table('data_sekretaris')->where('id_skre', $id)->update($data);
    }
}
