@extends('layouts.master')
@section('title', 'BAYES | Solusi')
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
                            Solusi
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
                                    <a href="/pakar" class="btn btn-primary btn-sm mb-3"><i
                                            class="fa-solid fa-caret-left me-1"></i>Kembali</a>
                                    <a href="/solusi-add" class="btn btn-primary btn-sm mb-3">Tambah Solusi</a>
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Solusi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($solusi as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td style="max-width: 500px;">{{ $item->solusi }}</td>
                                                    <td>
                                                        <a href="/solusi-edit/{{ $item->id }}"><i
                                                                class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="#" onclick="hapus('{{ $item->id }}','solusi')"><i
                                                                class="fa-regular fa-trash-can"></i></a>
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
