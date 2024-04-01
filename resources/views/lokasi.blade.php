@extends('layouts.master')
@section('title', 'BAYES | Lokasi')
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
                            Lokasi
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
                                <div class="card-header">
                                    <h3 class="card-title">Kecamatan & Kelurahan</h3>
                                </div>
                                <div class="table-responsive px-3 py-4 col-lg-6">
                                    <a href="/kecamatan-add" class="btn btn-primary btn-sm mb-3">Tambah Kecamatan</a>
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                {{-- <th>Kelurahan</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kecamatan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    {{-- <td>
                                                        @if (isset($item->kecamatan_kelurahan) && count($item->kecamatan_kelurahan) > 0)
                                                            @foreach ($item->kecamatan_kelurahan as $item2)
                                                                @if ($item2->kelurahan !== null)
                                                                    <li>{{ $item2->kelurahan->nama }}</li>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <span class="badge bg-pink">Kelurahan belum dipilih</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        <a href="/kecamatan-edit/{{ $item->id }}"><i
                                                                class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="#"
                                                            onclick="hapus('{{ $item->id }}','kecamatan')"><i
                                                                class="fa-regular fa-trash-can"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive px-3 py-4 col-lg-6">
                                    <a href="/kelurahan-add" class="btn btn-primary btn-sm mb-3">Tambah Kelurahan</a>
                                    <table class="table table-vcenter card-table" id="myTable2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                {{-- <th>Kecamatan</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelurahan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    {{-- <td>
                                                        @if (isset($item->kecamatan))
                                                            <li>{{ $item2->nama }}</li>
                                                        @else
                                                            <span class="badge bg-pink">Kecamatan belum dipilih</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        <a href="/kelurahan-edit/{{ $item->id }}"><i
                                                                class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="#"
                                                            onclick="hapus('{{ $item->id }}','kelurahan')"><i
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
                <div class="row row-cards">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kelurahan dalam Kecamatan</h3>
                            </div>
                            <div class="row">
                                <div class="table-responsive px-3 py-4">
                                    <a href="/lokasi-add" class="btn btn-primary btn-sm mb-3">Tambah Kelurahan
                                        dalam
                                        Kecamatan</a>
                                    <table class="table table-vcenter card-table" id="myTable3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kecamatan</th>
                                                <th>Kelurahan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kecamatan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td>
                                                        @if (isset($item->kecamatan_kelurahan) && count($item->kecamatan_kelurahan) > 0)
                                                            @foreach ($item->kecamatan_kelurahan as $item2)
                                                                @if ($item2->kelurahan !== null)
                                                                    <li>{{ $item2->kelurahan->nama }}</li>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <span class="badge bg-pink">Kelurahan belum dipilih</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (isset($item->kecamatan_kelurahan) && count($item->kecamatan_kelurahan) > 0)
                                                            @foreach ($item->kecamatan_kelurahan as $item3)
                                                                <a href="/lokasi-edit/{{ $item3->id }}"><i
                                                                        class="fa-regular fa-pen-to-square"></i></a>
                                                                <a href="#"
                                                                    onclick="hapus('{{ $item3->id }}','lokasi')"><i
                                                                        class="fa-regular fa-trash-can"></i></a><br>
                                                            @endforeach
                                                        @endif
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
