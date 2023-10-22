<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('datas')->where('id_user', Auth::users()->id)->get();
    }
    public function addData($data)
    {
        DB::table('datas')->insert($data);
    }
    public function deleteData($id)
    {
        DB::table('datas')->where('id_data', $id)->delete();
    }
}
