<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_user;
use App\Models\okp;
use App\Models\pemuda_pelopor;
use App\Models\user_umum;
use App\Models\wirausaha;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->okp = new okp();
        $this->pp = new pemuda_pelopor();
        $this->uu = new user_umum();
        $this->wirausaha = new wirausaha();
    }

    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:5|max:255',
        ]);
        $data = ['nama' => $request->name,
                 'username' => $request->username,
                 'password' => Hash::make($request->password),
                 'email' => $request->email,
                 'kontak' => $request->kontak,
                 'role' => $request->role,];
        $log = $this->user->addData($data);
        $id = $this->user->id($request->email);

        $data = ['id_user' => $id->id];
        switch ($request->role) {
            case 'okp':
                $this->okp->addData($data);
                break;
            case 'wm':
                $this->wirausaha->addData($data);
                break;
            case 'pp':
                $this->pp->addData($data);
                break;
            case 'u':
                $this->uu->addData($data);
                break;
        }
        
        return redirect('/');
    } 
}
