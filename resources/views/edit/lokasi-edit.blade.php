@extends('layouts.master')
@section('title', 'BAYES | Edit Data Lokasi')
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
                            Edit Data Lokasi
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
                        <form class="card" action="/lokasi-update/{{ $kecamatan_kelurahan->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <a href="/lokasi">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="kecamatan_id">Kecamatan</label>
                                    <input type="text" class="form-control @error('kecamatan_id') is-invalid @enderror"
                                        value="{{ $kecamatan_kelurahan->kecamatan->nama }}" id="kecamatan_id" disabled>
                                    <input type="hidden" value="{{ $kecamatan_kelurahan->kecamatan_id }}"
                                        name="kecamatan_id">
                                    @error('kecamatan_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="kelurahan_id">Kelurahan</label>
                                    <div>
                                        <select class="form-select @error('kelurahan_id') is-invalid @enderror"
                                            name="kelurahan_id" id="kelurahan_id">
                                            @foreach ($kelurahan as $item)
                                                @php
                                                    $temp = false;
                                                @endphp
                                                <option value="{{ $item->id }}"
                                                    @foreach ($item->kecamatan_kelurahan as $item2) 
                                                        @if (
                                                            $item2->kecamatan_id == $kecamatan_kelurahan->kecamatan_id &&
                                                                $item2->kelurahan_id == $kecamatan_kelurahan->kelurahan_id)
                                                        selected
                                                        @endif 
                                                        @if (
                                                            $item2->kecamatan_id == $kecamatan_kelurahan->kecamatan_id &&
                                                                $item2->kelurahan_id != $kecamatan_kelurahan->kelurahan_id)
                                                        @php
                                                         $temp=true   
                                                        @endphp
                                                        class="text-danger" disabled
                                                        @endif @endforeach>
                                                    {{ $item->nama }} @if ($temp == true)
                                                        (sudah dipilih!)
                                                    @endif
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
