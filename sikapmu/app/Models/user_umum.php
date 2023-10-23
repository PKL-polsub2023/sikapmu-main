<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_umum extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('users')->join('user_umums', 'users.id', '=', 'user_umums.id_user')->get();
    }
    public function detailData($id)
    {
        return DB::table('users')->join('user_umums', 'users.id', '=', 'user_umums.id_user')->where('users.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('user_umums')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('user_umums')->where('id_user', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('user_umums')->where('id_user', $id)->delete();
    }
}
