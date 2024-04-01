@extends('layouts.master')
@section('title', 'BAYES | Edit Pakar')
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
                            Edit Pakar
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
                        <form class="card" action="/pakar-update/{{ $pakar->id }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <a href="/pakar">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ $pakar->nama }}" name="nama" id="nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="jk">Jenis Kelamin</label>
                                    <select class="form-select @error('jk') is-invalid @enderror" name="jk"
                                        id="jk">
                                        @php
                                            $jk = ['Laki - laki', 'Perempuan'];
                                        @endphp
                                        @foreach ($jk as $item)
                                            <option value="{{ $item }}">{{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('jk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ $pakar->alamat }}" name="alamat" id="alamat">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="tmpt_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror"
                                        value="{{ $pakar->tmpt_lahir }}" name="tmpt_lahir" id="tmpt_lahir">
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
                                        <input type="text" class="form-control" name="tgl_lahir"
                                            value="{{ $pakar->tgl_lahir }}">
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
                                        placeholder="..." value="{{ $pakar->no_tlp }}" name="no_tlp" id="no_tlp">
                                    @error('no_tlp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="foto">Foto ( {{ $pakar->foto }} )</label>
                                    <img class="mb-2" src="{{ asset('storage') }}/images/{{ $pakar->foto }} "
                                        alt="{{ $pakar->foto }} " width="150px">
                                    <input type="file" class="form-control @error('scan_cv') is-invalid @enderror"
                                        name="foto" placeholder="...">
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
