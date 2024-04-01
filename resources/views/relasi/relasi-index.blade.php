@extends('layouts.master')
@section('title', 'BAYES | Relasi')
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
                            Relasi
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
                            <a href="/gejala_penyakit" class="col-lg-6" style="text-decoration:none;">
                                <div class="card card-sm card-home">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-primary text-white avatar">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                    <i class="fa-solid fa-shield-virus" style="font-size: 20px"></i>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="fw-bold text-dark">
                                                    Gejala & Penyakit
                                                </div>
                                                <div class="text-muted text-primary">
                                                    {{ count($gejala_penyakit) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/penyakit_solusi" class="col-lg-6" style="text-decoration:none;">
                                <div class="card card-sm card-home">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-primary text-white avatar">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                    <i class="fa-solid fa-shield-heart" style="font-size: 20px"></i>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="fw-bold text-dark">
                                                    Penyakit & Solusi
                                                </div>
                                                <div class="text-muted text-primary">
                                                    {{ count($penyakit_solusi) }}
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
    </div>

@endsection
