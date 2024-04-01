@extends('layouts.master')
@section('title', 'BAYES | Tambah Data Kelurahan dalam Kecamatan')
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
                            Tambah Data Kelurahan dalam Kecamatan
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
                        <form class="card" action="/lokasi-store" method="post">
                            @csrf
                            <div class="card-header">
                                <a href="/lokasi">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="kelurahan_id">Kelurahan</label>
                                    <div>
                                        <select class="form-select @error('kelurahan_id') is-invalid @enderror"
                                            name="kelurahan_id" id="kecamatan_kelurahan_id">
                                            <option selected disabled>Pilih Kelurahan</option>
                                            @foreach ($kelurahan as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kelurahan_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="kecamatan_id">Kecamatan</label>
                                    <div>
                                        <select class="form-select @error('kecamatan_id') is-invalid @enderror"
                                            name="kecamatan_id" id="kecamatan_id">
                                            <option selected disabled>Pilih Kecamatan terlebih dahulu ...</option>
                                        </select>
                                        @error('kecamatan_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
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
