<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h6>Data Pendukung</h6>
            <div class="row">
                <div class="col col-md-6">
                    <div class="card">
                        Data Lampiran @if (Auth::user()->role == 'pp') Pemuda Pelopor @elseif (Auth::user()->role == 'u') Pengguna Umum @elseif (Auth::user()->role == 'wm') Wirausaha Muda @else Organisasi Kepemudaan @endif
                        <br>
                        <br>
                        <table style="width:100%" id="wiramuda" class="display">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($user as $item)
                                    @php
                                        $data = explode("_", $item->dokumen);
                                        $nama = $data[2];
                                    @endphp
                                        <tr>
                                            <td>
                                                {{ $nama }}
                                            </td>
                                            <td>
                                                <a href="{{ route('data.destroy', $item->id_data) }}" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                       
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col col-md-6">
                <div class="card">
                    <form enctype="multipart/form-data" action="{{ route('data.store') }}" method="POST">
                        @csrf
                        <label class="form-label">Data Pendukung</label>
                        <input type="file" name="foto" class="form-control border border-2 p-2"
                            value='{{ old('foto') }}'>
                            <br>
                        <button class="btn btn-sm btn-danger">Tambah</button>
                    </form>
                </div>
                </div>
            </div>
           
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>

</x-layout>
