@extends('layouts.master')
@section('title', 'BAYES | Pakar')
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
                            Pakar
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::user()->role == 1 || Auth::user()->role == 2)
            <div class="page-body">
                <div class="container-xl">

                    <div class="row row-deck row-cards">

                        <div class="col-12">
                            <div class="row row-cards">

                                <a href="/gejala" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-triangle-exclamation"
                                                            style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Gejala
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        {{ count($gejala) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/penyakit" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-skull-crossbones" style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Penyakit
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        {{ count($penyakit) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/solusi" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-prescription-bottle-medical"
                                                            style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Solusi
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        {{ count($solusi) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/relasi" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-link" style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Relasi
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="table-responsive px-3 py-4 col-lg-12">
                                    @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                        <a href="/pakar-add" class="btn btn-primary btn-sm mb-3">Tambah Pakar</a>
                                    @endif
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No Telepon</th>
                                                <th>Foto</th>
                                                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                                    <th>Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pakar as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->jk }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->tmpt_lahir }}</td>
                                                    <td>{{ $item->tgl_lahir }}</td>
                                                    <td>
                                                        @if ($item->no_tlp)
                                                            {{ $item->no_tlp }}
                                                        @else
                                                            <span class="text-danger">No Telepon belum diisi!</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->foto)
                                                            <img src="{{ asset('storage') }}/images/{{ $item->foto }}"
                                                                alt="{{ $item->foto }}" width="150px">
                                                        @else
                                                            <span class="text-danger">Gambar belum dipilih!</span>
                                                        @endif
                                                    </td>
                                                    @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                                        <td>
                                                            <a href="/pakar-edit/{{ $item->id }}"><i
                                                                    class="fa-regular fa-pen-to-square"></i></a>
                                                            <a href="#"
                                                                onclick="hapus('{{ $item->id }}','pakar')"><i
                                                                    class="fa-regular fa-trash-can"></i></a>
                                                        </td>
                                                    @endif
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
