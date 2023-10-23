<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class wirausaha extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('users')->join('wirausahas', 'users.id', '=', 'wirausahas.id_user')->get();
    }
    public function detailData($id)
    {
        return DB::table('users')->join('wirausahas', 'users.id', '=', 'wirausahas.id_user')->where('users.id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('wirausahas')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('wirausahas')->where('id_user', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('wirausahas')->where('id_user', $id)->delete();
    }
}
