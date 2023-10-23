<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pemuda_pelopor extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('users')->join('user_pemuda_peloporsumums', 'users.id', '=', 'pemuda_pelopors.id_user')->get();
    }
    public function detailData($id)
    {
        return DB::table('users')->join('pemuda_pelopors', 'users.id', '=', 'pemuda_pelopors.id_user')->where('users.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('pemuda_pelopors')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('pemuda_pelopors')->where('id_user', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('pemuda_pelopors')->where('id_user', $id)->delete();
    }
}
