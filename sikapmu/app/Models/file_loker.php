<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class file_loker extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('file_lokers')->get();
    }
    public function allDataLoker($id)
    {
        return DB::table('file_lokers')->where('id_loker', $id)->get();
    }
    public function allDataUser()
    {
        return DB::table('file_lokers')->where('id_user', Auth::users()->id)->get();
    }
    public function detailData($id)
    {
        return DB::table('file_lokers')->where('file_lokers.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('file_lokers')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('file_lokers')->where('id_file_loker', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('file_lokers')->where('id_file_loker', $id)->delete();
    }
}
