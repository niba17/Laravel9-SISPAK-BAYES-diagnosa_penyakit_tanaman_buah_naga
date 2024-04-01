@extends('layouts.master')
@section('title', 'BAYES | Relasi Penyakit & Solusi')
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
                            Relasi Penyakit & Solusi
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
                        <div class="card">
                            <div class="row">
                                <div class="table-responsive px-3 py-4 col-lg-12">
                                    <a href="/relasi" class="btn btn-primary btn-sm mb-3"><i
                                            class="fa-solid fa-caret-left me-1"></i>Kembali</a>
                                    <a href="/penyakit_solusi-add" class="btn btn-primary btn-sm mb-3">Tambah data
                                        relasi</a>
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Penyakit</th>
                                                <th>Solusi</th>
                                                <th style="width:50px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyakit as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <b class="text-primary">
                                                            {{ '(' . $item->kode . ') ' }}
                                                        </b>
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td style="max-width:600px;">
                                                        @foreach ($item->penyakit_solusi as $item2)
                                                            {{ $item2->solusi->solusi }}
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item->penyakit_solusi as $item3)
                                                            <a href="/penyakit_solusi-edit/{{ $item3->id }}"><i
                                                                    class="fa-regular fa-pen-to-square"></i></a>
                                                            <a href="#"
                                                                onclick="hapus('{{ $item3->id }}','penyakit_solusi')"><i
                                                                    class="fa-regular fa-trash-can"></i></a>
                                                            <br>
                                                        @endforeach
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
            </div>
        </div>
    </div>

@endsection
