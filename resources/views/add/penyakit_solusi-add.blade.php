@extends('layouts.master')
@section('title', 'BAYES | Tambah Relasi')
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
                            Tambah Relasi
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
                        <form class="card" action="/penyakit_solusi-store" method="post">
                            @csrf
                            <div class="card-header">
                                <a href="/penyakit_solusi">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="penyakit_id">Penyakit</label>
                                    <div>
                                        <select class="form-select @error('penyakit_id') is-invalid @enderror"
                                            name="penyakit_id" id="penyakit_solusi_id">
                                            <option selected disabled>Pilih Penyakit ...</option>
                                            @foreach ($penyakit as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ '(' . $item->kode . ') ' . $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('penyakit_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="solusi_id">Solusi</label>
                                    <div>
                                        <select class="form-select @error('solusi_id') is-invalid @enderror"
                                            name="solusi_id" id="solusi_id">
                                            <option selected disabled>Pilih Penyakit terlebih dahulu ...</option>
                                        </select>
                                        @error('solusi_id')
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
