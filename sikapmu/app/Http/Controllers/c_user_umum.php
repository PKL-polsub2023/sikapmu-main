<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\user_umum;
use App\Models\data;
use Auth;

class c_user_umum extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->uu = new user_umum();
        $this->data = new data();
    }

    //masuk menu updaet bio
    public function bio()
    {
        $data = ['user' => $this->uu->detailData(Auth::users()->id)];
        return view('umum/bio', $data);
    }

    //mengubah bio
    public function updatebio(Request $request)
    {
        $id = Auth::users()->id;
        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'kontak' => $request->kontak,
        ];
        $this->user->editData($id, $data);
        $data = [
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'pendidikan_akhir' => $request->pendidikan_akhir,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'status_nikah' => $request->status_nikah,
        ];
        $this->uu->editData($id, $data);
        if ($request->foto <> null) {
            $file  = $foto;
            $filename = 'umum_'.$id.'.'.$file->extension();
            $file->move(public_path('foto/umum'),$filename);
            $data = ['foto' => $filename];
            $this->uu->editData($id, $data);
        }
        //return Route umum
    }

    //data dukung
    public function data()
    {
        $data = ['user' => $this->data->allData(Auth::users()->id)];
        return view('umum/data', $data);
    }
    public function tambahdata()
    {
        $jumlah = $this->data->jumlahData(Auth::users()->id);
        $file  = $data;
        $filename = 'umum_'.$id.'_'.$jumlah.'.'.$file->extension();
        $file->move(public_path('data'),$filename);
        $data = ['foto' => $filename,
                 'id_user' => Auth::users()->id];
        $this->addData($data);
        return view('umum/data', $data);
    }
    public function hapusdata($id)
    {
        $detail = $this->data->detailData($id);
        unlink(public_path('data'). '/' .$detail->data);
        $this->deleteData($id);
        return view('umum/data', $data);
    }
}
