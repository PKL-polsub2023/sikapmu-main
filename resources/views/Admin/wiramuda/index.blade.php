<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataWiraMuda"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Wirausaha Muda"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            {{-- Alert --}}
            <div style="display: none" id="alert-success" class="alert alert-success alert-dismissible text-white"
                role="alert">
                <span class="text-sm">Berhasil</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- End Alert --}}
            <div class="row">
                <div class="col-12">

                    <div class="me-3 my-3 text-start">
                        <a onclick="reset()" class="btn bg-0057FF mb-0" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#add" style="background-color: #0057FF;">
                            <i class="text-sm text-white">Tambah Data</i>
                        </a>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <i class="text-sm text-black">Data Wirausaha Muda</i>
                        <div class="table-responsive p-0">
                            <table style="width:100%" id="wiramuda" class="display">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th
                                            class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kelengkapan Data</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wiramuda as $data)
                                        <tr>
                                            <td class="align-middle text-center"></td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">{{ $data->nama }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->email }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($data->status_akun != 'Terverifikasi')
                                                    <span class="text-secondary text-xs font-weight-bold">Belum
                                                        Terverifikasi </span>
                                                @else
                                                    <span class="text-secondary text-xs font-weight-bold">
                                                        Terverifikasi</span>
                                                @endif
                                            </td>
                                            <td class="">
                                                <div class="progress-wrapper w-50 mx-auto text-center">
                                                    <span style="color: #4FD1C5;">60%</span>
                                                    <div class="progress-info text-center">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-4FD1C5 w-60" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="row">
                                                    @if ($data->status_akun != 'Terverifikasi')
                                                        <div class="col-4">
                                                            <div class="me-n2 my-3 text-start">
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#verifikasi{{ $data->id }}"
                                                                    class="btn btn-sm bg-0057FF mb-0 w-100"
                                                                    href="javascript:;"
                                                                    style="background-color: #0057FF;">
                                                                    <i
                                                                        class="text-sm text-white text-center">VERIFIKASI</i>

                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a onclick="reset()"
                                                                class="btn btn-sm bg-warning mb-0 w-100" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#edit{{ $data->id }}"
                                                                style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">UBAH</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="me-n2 my-3 text-start">
                                                            <a class="btn btn-sm bg-danger mb-0 h-25 w-100"
                                                                href="javascript:;" style="background-color: #0057FF;">
                                                                <i class="text-sm text-white">HAPUS</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adddoc">Daftar SiPanda</h5>
                <button type="button" class="btn-close" id="closed" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="error-messages" class="alert alert-primary alert-dismissible text-white" style="display: none">
                </div>
                <form id="validationForm">
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                                    style="border: 2px solid #92929D;" placeholder="Nama Depan">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                                    style="border: 2px solid #92929D;" placeholder="Nama Belakang">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                            style="border: 2px solid #92929D;" placeholder="Email Address">

                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            style="border: 2px solid #92929D;" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="kpassword" name="kpassword"
                            style="border: 2px solid #92929D;" placeholder="Konfirmasi Password">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="kontak" name="kontak"
                            style="border: 2px solid #92929D;" placeholder="Kontak">
                    </div>
                    <a href="#" onclick="Submit()" id="submitForm" class="btn btn-primary w-100"
                        style="background-color: #0057FF;">SIMPAN</a>
                </form>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>


{{-- Modal Edit --}}
@foreach ($wiramuda as $data)
    <input type="text" name="id" id="id_user" value="{{ $data->id }}" hidden>
    <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adddoc">Edit SiPanda</h5>
                    <button type="button" id="closed2" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="error-messages2" class="alert alert-primary alert-dismissible text-white"
                        style="display: none">
                    </div>
                    <form id="validationForm-Update">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                                        style="border: 2px solid #92929D;" placeholder="Nama Depan"
                                        value="{{ $data->namaDepan }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nama_belakang"
                                        name="nama_belakang" style="border: 2px solid #92929D;"
                                        placeholder="Nama Belakang" value="{{ $data->namaBelakang }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                style="border: 2px solid #92929D;" placeholder="Email Address"
                                value="{{ $data->email }}" readonly>

                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                style="border: 2px solid #92929D;" placeholder="Password">
                            <small style="color: #92929D">Inputkan password jika ingin mengubah</small>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="kpassword" name="kpassword"
                                style="border: 2px solid #92929D;" placeholder="Konfirmasi Password">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="kontak" name="kontak"
                                style="border: 2px solid #92929D;" placeholder="Kontak" value="{{ $data->kontak }}">
                        </div>
                        <a href="#" onclick="Update({{ $data->id }})" id="submitForm"
                            class="btn btn-primary w-100" style="background-color: #0057FF;">SIMPAN</a>
                    </form>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- End Modal Edit --}}

{{-- Modal Verifikasi --}}
@foreach ($wiramuda as $data)
    <div class="modal fade" id="verifikasi{{ $data->id }}" tabindex="-1" aria-labelledby="add"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adddoc">Verifikasi {{ $data->nama }}</h5>
                    <button type="button" id="closed2" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body align-middle text-center">
                    <h6>Apakah Anda Yakin?</h6>
                    <a href="{{ route('wiramuda.verifikasi', $data->id) }}" class="btn btn-success">Verifikasi</a>
                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- End Modal Verifikasi --}}

<script src="{{ asset('assets/js/pribadi/wiramuda-admin.js') }}"></script>
