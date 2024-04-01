@extends('layouts.master')
@section('title', 'BAYES | Kampung Daun Baumata')
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
                            Informasi
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">

                <div class="row row-deck row-cards">

                    <div class="col-12">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card card-md">
                                    <div class="card-stamp card-stamp-lg">
                                        <div class="card-stamp-icon bg-primary">
                                            <i class="fa-solid fa-circle-info" style="font-size: 100px;"></i>
                                            {{-- <i class="fa-solid fa-circle-info"></i> --}}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-10">

                                                <h3 class="h1">Kampung Daun Baumata</h3>
                                                <div class="markdown text-muted">Pembentukan Kelompok Tanikampung Daun
                                                    Baumata Di Desa Baumata Kecamatan Taebenu Kabupaten Kupang berasal dari
                                                    pembinaan para petani di sekitar desa baumata malalui program bagi
                                                    kewirausahaan (PBK) oleh dosen Universitas Nusa Cendana dan Politeknik
                                                    Pertanian Negri Kupang.
                                                    Pada tahun 2004 di bentuklah kelompok tani yang beranggotakan 12 orang
                                                    dengan lahan sawah seluas 1,2 Ha dikelola sampai dengan sekarang Bentuk
                                                    dan sistem pengelolaan adalah berbagai macam jenis komoditi yang
                                                    ekonomis antara lain tanaman umur panjang dan tanaman umur pendek dengan
                                                    sistem tumpang seri.
                                                </div>

                                                {{-- <div class="mt-3">
                                                        <a href="https://tabler-icons.io" class="btn btn-primary"
                                                            target="_blank" rel="noopener">Download icons</a>
                                                    </div> --}}
                                            </div>
                                            <img src="{{ asset('template') }}/dist/img/info/k_d_b.jpeg" width="100%"
                                                alt="" class="mt-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
