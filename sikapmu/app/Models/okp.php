<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class okp extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('users')->join('okps', 'users.id', '=', 'okps.id_user')->get();
    }
    public function detailData($id)
    {
        return DB::table('users')->join('okps', 'users.id', '=', 'okps.id_user')->where('users.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('okps')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('okps')->where('id_user', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('okps')->where('id_user', $id)->delete();
    }
}
