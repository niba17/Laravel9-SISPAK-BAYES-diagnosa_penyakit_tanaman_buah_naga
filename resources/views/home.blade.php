@extends('layouts.master')
@section('title', 'BAYES | Home')
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
                            Home
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                    <div class="row row-deck row-cards">

                        <div class="col-12">
                            <div class="row row-cards">
                                <a href="/akun" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-user-shield" style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Akun
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        @if (Auth::user()->role == 1)
                                                            {{ count($akun) }}
                                                        @else
                                                            1
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/pakar" class="col-lg-6" style="text-decoration:none;">
                                    <div class="card card-sm card-home">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <span class="bg-primary text-white avatar">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                        <i class="fa-solid fa-user-doctor" style="font-size: 20px"></i>
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <div class="fw-bold text-dark">
                                                        Pakar
                                                    </div>
                                                    <div class="text-muted text-primary">
                                                        {{ count($pakar) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @elseif(Auth::user()->role == 3)
                    <div class="row row-deck row-cards">

                        <div class="col-12">
                            <div class="row row-cards">
                                <div class="col-12">
                                    <div class="card card-md">
                                        <div class="card-stamp card-stamp-lg">
                                            <div class="card-stamp-icon bg-primary">
                                                <i class="fa-regular fa-hand mt-3" style="font-size: 100px;"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-10">
                                                    <h3 class="h1">Selamat Datang {{ Auth::user()->nama }}</h3>
                                                    <div class="markdown text-muted">Untuk mendapatkan hasil perhitungan,
                                                        tentukan tingkat keyakinan terhadap gejala yang telah diamati pada
                                                        tabel gejala dibawah ini.
                                                    </div>
                                                    {{-- <div class="mt-3">
                                                        <a href="https://tabler-icons.io" class="btn btn-primary"
                                                            target="_blank" rel="noopener">Download icons</a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <form action="/perhitungan-index" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header" style="background-color: #D2E1F3;">
                                    <h3 class="card-title">Daftar Gejala</h3>
                                </div>
                                <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                                    {{-- <div class="list-group-header sticky-top">A</div> --}}
                                    <div class="row">
                                        @foreach ($gejala as $item)
                                            <div class="col-lg-6 p-0">
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-auto fw-bold">{{ $loop->iteration . '.' }}
                                                        </div>
                                                        <div class="col text-truncate">
                                                            <div class="text-body d-block">{{ $item->nama }}
                                                            </div>
                                                            {{-- <select class="form-select mt-1"
                                                                name="Evidence[{{ $item->kode }}]" id="gejala_id">
                                                                <option value="0">
                                                                    Tidak
                                                                </option>
                                                                <option value="1">
                                                                    Ya
                                                                </option>
                                                            </select> --}}
                                                            <div class="mt-2">
                                                                <label class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Evidence[{{ $item->kode }}]" value="1">
                                                                    <span class="form-check-label">Ya</span>
                                                                </label>
                                                                {{-- <label class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="Evidence[{{ $item->kode }}]"
                                                                        value="0" checked>
                                                                    <span class="form-check-label">Tidak</span>
                                                                </label> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color: #D2E1F3;">
                                    <div class="row align-items-center">
                                        <div class="col markdown text-muted">Pastikan kembali gejala yang telah dipilih
                                            untuk hasil perhitungan akurat.
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">
                                                Selesai
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        var radioState

        $('input').attr('class', 'form-check-input').on('click', function() {
            if (radioState === this) {
                this.checked = false;
                radioState = null;
            } else {
                radioState = this;
            }
        })
    </script>
@endsection
