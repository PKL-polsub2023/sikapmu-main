<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\user_umum;
use App\Models\data;
use Auth;

class c_data extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->data = new data();
    }

     //data dukung
     public function index()
     {
         $data = ['user' => $this->data->allData()];
         return view('data', $data);
     }
     public function store(Request $request)
     {
       
         $jumlah = $this->data->jumlahData();
         $file  = $request->foto;
         $filename = Auth::user()->id.'_'.$jumlah.'_'.$file->getClientOriginalName();
         $file->move(public_path('data'),$filename);
         $data = ['dokumen' => $filename,
                  'id_user' => Auth::user()->id];
         $this->data->addData($data);
         return redirect()->route('data');
     }
     public function destroy($id)
     {
         $detail = $this->data->detailData($id);
         unlink(public_path('data'). '/' .$detail->dokumen);
         $this->data->deleteData($id);
         return redirect()->route('data');
     }
}
