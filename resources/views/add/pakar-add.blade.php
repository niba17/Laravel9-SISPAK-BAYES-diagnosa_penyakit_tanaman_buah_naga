@extends('layouts.master')
@section('title', 'BAYES | Tambah Pakar')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        {{-- <div class="page-pretitle">
                        index
                    </div> --}}
                        <h2 class="page-title">
                            Tambah Pakar
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">

                    <div class="col-lg-12">
                        <form class="card" action="/pakar-store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <a href="/pakar">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="..." value="{{ old('nama') }}" name="nama" id="nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="jk">Jenis Kelamin</label>
                                    <div>
                                        <select class="form-select @error('jk') is-invalid @enderror" name="jk"
                                            id="jk">
                                            <option selected disabled>Pilih jenis kelamin ...</option>
                                            <option value="Laki - laki">Laki - laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        placeholder="..." value="{{ old('alamat') }}" name="alamat" id="alamat">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="tmpt_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror"
                                        placeholder="..." value="{{ old('tmpt_lahir') }}" name="tmpt_lahir" id="tmpt_lahir">
                                    @error('tmpt_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label for="datepicker" class="form-label">Tanggal lahir</label>
                                    {{-- <div class="col-sm-4"> --}}
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" name="tgl_lahir">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white">
                                                <i class="fa fa-calendar" style="height: 20px"></i>
                                            </span>
                                        </span>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="no_tlp">No Telepon</label>
                                    <input type="number" class="form-control @error('no_tlp') is-invalid @enderror"
                                        placeholder="..." value="{{ old('no_tlp') }}" name="no_tlp" id="no_tlp">
                                    @error('no_tlp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="foto">Foto</label>
                                    <input type="file" class="form-control @error('scan_cv') is-invalid @enderror"
                                        name="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-start">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
