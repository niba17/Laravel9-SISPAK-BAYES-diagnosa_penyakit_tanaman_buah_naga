@extends('layouts.master')
@section('title', 'BAYES | Akun')
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
                            Akun
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->


        @if (Auth::user()->role == 1)
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="table-responsive px-3 py-4">
                                    <a href="/akun-add" class="btn btn-primary btn-sm mb-3">Tambah Akun</a>
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th class="w-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($akun as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama }}
                                                    </td>
                                                    <td>*****</td>
                                                    <td>
                                                        @if ($item->role == 1)
                                                            <span class="badge bg-red">admin</span>
                                                        @elseif($item->role == 2)
                                                            <span class="badge bg-success">pakar</span>
                                                        @else
                                                            <span class="badge bg-warning">member</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($current_id == $item->id)
                                                            <a href="/akun-edit/{{ $item->id }}"><i
                                                                    class="fa-regular fa-pen-to-square"></i>
                                                            </a>
                                                        @endif
                                                        <a href="#" onclick="hapus('{{ $item->id }}','akun')"><i
                                                                class="fa-regular fa-trash-can"></i>
                                                        </a>
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
        @else
            <div class="page-body">
                <div class="page page-center">
                    <div class="container container-tight py-4">
                        <div class="card">
                            <div class="card-body p-4 text-center">
                                <span class="avatar avatar-xl mb-3 avatar-rounded"><i class="fa-solid fa-user"></i></span>
                                <h3 class="m-0 mb-1"><a href="#">{{ Auth::user()->nama }}</a></h3>
                                {{-- <div class="text-muted">UI Designer</div> --}}
                                <div class="mt-3">
                                    <span class="badge bg-purple-lt">
                                        @if (Auth::user()->role == 2)
                                            pakar
                                        @else
                                            member
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a href="akun-edit/{{ Auth::user()->id }}" class="card-btn">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>

@endsection
