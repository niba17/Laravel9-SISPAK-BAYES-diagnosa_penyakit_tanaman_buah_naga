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
                        <form class="card" action="/gejala_penyakit-update/{{ $gejala_penyakit->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <a href="/gejala_penyakit">
                                    <i class="fa-solid fa-left-long" style="font-size: 20px;"></i>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="penyakit_id">Penyakit</label>
                                    <input type="text" class="form-control @error('penyakit_id') is-invalid @enderror"
                                        value="{{ $gejala_penyakit->penyakit->nama }}" id="penyakit_id" disabled>
                                    <input type="hidden" value="{{ $gejala_penyakit->penyakit_id }}" name="penyakit_id">
                                    @error('penyakit_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="gejala_id">Gejala</label>
                                    <div>
                                        <select class="form-select @error('gejala_id') is-invalid @enderror"
                                            name="gejala_id" id="gejala_id">
                                            @foreach ($gejala as $item)
                                                @php
                                                    $temp = false;
                                                @endphp
                                                <option value="{{ $item->id }}"
                                                    @foreach ($item->gejala_penyakit as $item2) 
                                                        @if ($item2->penyakit_id == $gejala_penyakit->penyakit_id && $item2->gejala_id == $gejala_penyakit->gejala_id)
                                                        selected
                                                        @endif 
                                                        @if ($item2->penyakit_id == $gejala_penyakit->penyakit_id && $item2->gejala_id != $gejala_penyakit->gejala_id)
                                                        @php
                                                         $temp=true   
                                                        @endphp
                                                        class="text-danger" disabled
                                                        @endif @endforeach>
                                                    {{ '(' . $item->kode . ') ' . $item->nama }} @if ($temp == true)
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
                                <div class="col-lg-4 p-1">
                                    <label class="form-label" for="bobot">Bobot</label>
                                    <input type="number" class="form-control @error('bobot') is-invalid @enderror"
                                        value="{{ $gejala_penyakit->bobot }}" name="bobot" id="bobot" min=”0.1″
                                        step="any">
                                    <small class="form-hint">min bobot adalah 0.1 dan max bobot adalah 1</small>
                                    @error('bobot')
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
