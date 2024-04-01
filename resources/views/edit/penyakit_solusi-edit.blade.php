@extends('layouts.master')
@section('title', 'BAYES | Edit Data Relasi')
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
                            Edit Data Relasi
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
                        <form class="card" action="/penyakit_solusi-update/{{ $penyakit_solusi->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <a href="/penyakit_solusi">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="penyakit_id">Penyakit</label>
                                    <input type="text" class="form-control @error('penyakit_id') is-invalid @enderror"
                                        value="{{ $penyakit_solusi->penyakit->nama }}" id="penyakit_id" disabled>
                                    <input type="hidden" value="{{ $penyakit_solusi->penyakit_id }}" name="penyakit_id">
                                    @error('penyakit_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 p-1">
                                    <label class="form-label" for="solusi_id">Solusi</label>
                                    <div>
                                        <select class="form-select @error('solusi_id') is-invalid @enderror"
                                            name="solusi_id" id="solusi_id">
                                            @foreach ($solusi as $item)
                                                @php
                                                    $temp = false;
                                                @endphp
                                                <option value="{{ $item->id }}"
                                                    @foreach ($item->penyakit_solusi as $item2) 
                                                        @if ($item2->penyakit_id == $penyakit_solusi->penyakit_id && $item2->solusi_id == $penyakit_solusi->solusi_id)
                                                        selected
                                                        @endif 
                                                        @if ($item2->penyakit_id == $penyakit_solusi->penyakit_id && $item2->solusi_id != $penyakit_solusi->solusi_id)
                                                        @php
                                                         $temp=true   
                                                        @endphp
                                                        class="text-danger" disabled
                                                        @endif @endforeach>
                                                    {{ substr($item->solusi, 0, 35) . '  ...  ' . substr($item->solusi, -20, 20) }}
                                                    @if ($temp == true)
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
