 @php
     use Illuminate\Support\Facades\Auth;
 @endphp
 <!-- Sidebar -->
 <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
     <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
             aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <h1 class="navbar-brand navbar-brand-autodark">
             <a href="/home" style="text-decoration: none;">
                 {{-- <img src="{{ asset('template') }}/static/logo-white.svg" width="110" height="32" alt="Tabler"
                     class="navbar-brand-image"> --}}
                 @if (Auth::user()->role == 1)
                     Admin ( {{ Auth::user()->nama }} )
                 @elseif(Auth::user()->role == 2)
                     Pakar ( {{ Auth::user()->nama }} )
                 @else
                     User ( {{ Auth::user()->nama }} )
                 @endif
             </a>
         </h1>

         <div class="collapse navbar-collapse" id="sidebar-menu">
             <ul class="navbar-nav pt-lg-3">
                 <li class="nav-item @if (Request::route()->getName() == 'home' || Request::route()->getName() == 'perhitungan-index') active bg-info @endif">
                     <a class="nav-link @if (Request::route()->getName() == 'home' || Request::route()->getName() == 'perhitungan-index') text-dark @endif" href="/home">
                         <span class="nav-link-icon d-md-none d-lg-inline-block">
                             <i class="fa-solid fa-house  @if (Request::route()->getName() == 'home' || Request::route()->getName() == 'perhitungan-index') text-dark @endif"></i>
                         </span>
                         <span class="nav-link-title">
                             Home
                         </span>
                     </a>
                 </li>
                 <li class="nav-item @if (Request::route()->getName() == 'akun' ||
                         Request::route()->getName() == 'akun-add' ||
                         Request::route()->getName() == 'akun-edit' ||
                         Request::route()->getName() == 'gejala' ||
                         Request::route()->getName() == 'gejala-add' ||
                         Request::route()->getName() == 'gejala-edit' ||
                         Request::route()->getName() == 'penyakit' ||
                         Request::route()->getName() == 'penyakit-add' ||
                         Request::route()->getName() == 'penyakit-edit' ||
                         Request::route()->getName() == 'relasi' ||
                         Request::route()->getName() == 'gejala_penyakit' ||
                         Request::route()->getName() == 'gejala_penyakit-add' ||
                         Request::route()->getName() == 'gejala_penyakit-edit' ||
                         Request::route()->getName() == 'penyakit_solusi' ||
                         Request::route()->getName() == 'penyakit_solusi-add' ||
                         Request::route()->getName() == 'penyakit_solusi-edit' ||
                         Request::route()->getName() == 'solusi' ||
                         Request::route()->getName() == 'solusi-add' ||
                         Request::route()->getName() == 'solusi-edit' ||
                         Request::route()->getName() == 'riwayat' ||
                         Request::route()->getName() == 'riwayat-add' ||
                         Request::route()->getName() == 'riwayat-edit' ||
                         Request::route()->getName() == 'riwayat-detail' ||
                         Request::route()->getName() == 'pakar' ||
                         Request::route()->getName() == 'pakar-add' ||
                         Request::route()->getName() == 'pakar-edit' ||
                         Request::route()->getName() == 'lokasi' ||
                         Request::route()->getName() == 'lokasi-add' ||
                         Request::route()->getName() == 'lokasi-edit' ||
                         Request::route()->getName() == 'k_d_b') active @endif dropdown">
                     <a class="nav-link dropdown-toggle  @if (Request::route()->getName() == 'akun' ||
                             Request::route()->getName() == 'akun-add' ||
                             Request::route()->getName() == 'akun-edit' ||
                             Request::route()->getName() == 'gejala' ||
                             Request::route()->getName() == 'gejala-add' ||
                             Request::route()->getName() == 'gejala-edit' ||
                             Request::route()->getName() == 'penyakit' ||
                             Request::route()->getName() == 'penyakit-add' ||
                             Request::route()->getName() == 'penyakit-edit' ||
                             Request::route()->getName() == 'relasi' ||
                             Request::route()->getName() == 'gejala_penyakit' ||
                             Request::route()->getName() == 'gejala_penyakit-add' ||
                             Request::route()->getName() == 'gejala_penyakit-edit' ||
                             Request::route()->getName() == 'penyakit_solusi' ||
                             Request::route()->getName() == 'penyakit_solusi-add' ||
                             Request::route()->getName() == 'penyakit_solusi-edit' ||
                             Request::route()->getName() == 'solusi' ||
                             Request::route()->getName() == 'solusi-add' ||
                             Request::route()->getName() == 'solusi-edit' ||
                             Request::route()->getName() == 'riwayat' ||
                             Request::route()->getName() == 'riwayat-add' ||
                             Request::route()->getName() == 'riwayat-edit' ||
                             Request::route()->getName() == 'riwayat-detail' ||
                             Request::route()->getName() == 'pakar' ||
                             Request::route()->getName() == 'pakar-add' ||
                             Request::route()->getName() == 'pakar-edit' ||
                             Request::route()->getName() == 'lokasi' ||
                             Request::route()->getName() == 'lokasi-add' ||
                             Request::route()->getName() == 'lokasi-edit' ||
                             Request::route()->getName() == 'k_d_b') show bg-info @endif"
                         href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                         aria-expanded="false">
                         <span class="nav-link-icon d-md-none d-lg-inline-block">
                             <i class="fa-solid fa-box-archive  @if (Request::route()->getName() == 'akun' ||
                                     Request::route()->getName() == 'akun-add' ||
                                     Request::route()->getName() == 'akun-edit' ||
                                     Request::route()->getName() == 'gejala' ||
                                     Request::route()->getName() == 'gejala-add' ||
                                     Request::route()->getName() == 'gejala-edit' ||
                                     Request::route()->getName() == 'penyakit' ||
                                     Request::route()->getName() == 'penyakit-add' ||
                                     Request::route()->getName() == 'penyakit-edit' ||
                                     Request::route()->getName() == 'relasi' ||
                                     Request::route()->getName() == 'gejala_penyakit' ||
                                     Request::route()->getName() == 'gejala_penyakit-add' ||
                                     Request::route()->getName() == 'gejala_penyakit-edit' ||
                                     Request::route()->getName() == 'penyakit_solusi' ||
                                     Request::route()->getName() == 'penyakit_solusi-add' ||
                                     Request::route()->getName() == 'penyakit_solusi-edit' ||
                                     Request::route()->getName() == 'solusi' ||
                                     Request::route()->getName() == 'solusi-add' ||
                                     Request::route()->getName() == 'solusi-edit' ||
                                     Request::route()->getName() == 'riwayat' ||
                                     Request::route()->getName() == 'riwayat-add' ||
                                     Request::route()->getName() == 'riwayat-edit' ||
                                     Request::route()->getName() == 'riwayat-detail' ||
                                     Request::route()->getName() == 'pakar' ||
                                     Request::route()->getName() == 'pakar-add' ||
                                     Request::route()->getName() == 'pakar-edit' ||
                                     Request::route()->getName() == 'lokasi' ||
                                     Request::route()->getName() == 'lokasi-add' ||
                                     Request::route()->getName() == 'lokasi-edit' ||
                                     Request::route()->getName() == 'k_d_b') text-dark @endif"></i>
                         </span>
                         <span class="nav-link-title @if (Request::route()->getName() == 'akun' ||
                                 Request::route()->getName() == 'akun-add' ||
                                 Request::route()->getName() == 'akun-edit' ||
                                 Request::route()->getName() == 'gejala' ||
                                 Request::route()->getName() == 'gejala-add' ||
                                 Request::route()->getName() == 'gejala-edit' ||
                                 Request::route()->getName() == 'penyakit' ||
                                 Request::route()->getName() == 'penyakit-add' ||
                                 Request::route()->getName() == 'penyakit-edit' ||
                                 Request::route()->getName() == 'relasi' ||
                                 Request::route()->getName() == 'gejala_penyakit' ||
                                 Request::route()->getName() == 'gejala_penyakit-add' ||
                                 Request::route()->getName() == 'gejala_penyakit-edit' ||
                                 Request::route()->getName() == 'penyakit_solusi' ||
                                 Request::route()->getName() == 'penyakit_solusi-add' ||
                                 Request::route()->getName() == 'penyakit_solusi-edit' ||
                                 Request::route()->getName() == 'solusi' ||
                                 Request::route()->getName() == 'solusi-add' ||
                                 Request::route()->getName() == 'solusi-edit' ||
                                 Request::route()->getName() == 'riwayat' ||
                                 Request::route()->getName() == 'riwayat-add' ||
                                 Request::route()->getName() == 'riwayat-edit' ||
                                 Request::route()->getName() == 'riwayat-detail' ||
                                 Request::route()->getName() == 'pakar' ||
                                 Request::route()->getName() == 'pakar-add' ||
                                 Request::route()->getName() == 'pakar-edit' ||
                                 Request::route()->getName() == 'lokasi' ||
                                 Request::route()->getName() == 'lokasi-add' ||
                                 Request::route()->getName() == 'lokasi-edit' ||
                                 Request::route()->getName() == 'k_d_b') text-dark @endif">
                             Data
                         </span>
                     </a>
                     <div class="dropdown-menu  @if (Request::route()->getName() == 'akun' ||
                             Request::route()->getName() == 'akun-add' ||
                             Request::route()->getName() == 'akun-edit' ||
                             Request::route()->getName() == 'gejala' ||
                             Request::route()->getName() == 'gejala-add' ||
                             Request::route()->getName() == 'gejala-edit' ||
                             Request::route()->getName() == 'penyakit' ||
                             Request::route()->getName() == 'penyakit-add' ||
                             Request::route()->getName() == 'penyakit-edit' ||
                             Request::route()->getName() == 'relasi' ||
                             Request::route()->getName() == 'gejala_penyakit' ||
                             Request::route()->getName() == 'gejala_penyakit-add' ||
                             Request::route()->getName() == 'gejala_penyakit-edit' ||
                             Request::route()->getName() == 'penyakit_solusi' ||
                             Request::route()->getName() == 'penyakit_solusi-add' ||
                             Request::route()->getName() == 'penyakit_solusi-edit' ||
                             Request::route()->getName() == 'solusi' ||
                             Request::route()->getName() == 'solusi-add' ||
                             Request::route()->getName() == 'solusi-edit' ||
                             Request::route()->getName() == 'riwayat' ||
                             Request::route()->getName() == 'riwayat-add' ||
                             Request::route()->getName() == 'riwayat-edit' ||
                             Request::route()->getName() == 'riwayat-detail' ||
                             Request::route()->getName() == 'pakar' ||
                             Request::route()->getName() == 'pakar-add' ||
                             Request::route()->getName() == 'pakar-edit' ||
                             Request::route()->getName() == 'lokasi' ||
                             Request::route()->getName() == 'lokasi-add' ||
                             Request::route()->getName() == 'lokasi-edit' ||
                             Request::route()->getName() == 'k_d_b') show @endif">
                         <div class="dropdown-menu-columns">
                             <div class="dropdown-menu-column">
                                 <a class="dropdown-item  @if (Request::route()->getName() == 'akun' ||
                                         Request::route()->getName() == 'akun-add' ||
                                         Request::route()->getName() == 'akun-edit') active @endif"
                                     href="/akun">
                                     Akun
                                 </a>
                                 @if (Auth::user()->role !== 1 && Auth::user()->role !== 2)
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'riwayat' ||
                                             Request::route()->getName() == 'riwayat-add' ||
                                             Request::route()->getName() == 'riwayat-edit' ||
                                             Request::route()->getName() == 'riwayat-detail') active @endif"
                                         href="/riwayat">
                                         Riwayat
                                     </a>
                                 @endif
                                 @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'gejala' ||
                                             Request::route()->getName() == 'gejala-add' ||
                                             Request::route()->getName() == 'gejala-edit') active @endif"
                                         href="/gejala">
                                         Gejala
                                     </a>
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'penyakit' ||
                                             Request::route()->getName() == 'penyakit-add' ||
                                             Request::route()->getName() == 'penyakit-edit') active @endif"
                                         href="/penyakit">
                                         Penyakit
                                     </a>
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'solusi' ||
                                             Request::route()->getName() == 'solusi-add' ||
                                             Request::route()->getName() == 'solusi-edit') active @endif"
                                         href="/solusi">
                                         Solusi
                                     </a>
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'relasi' ||
                                             Request::route()->getName() == 'relasi-add' ||
                                             Request::route()->getName() == 'relasi-edit' ||
                                             Request::route()->getName() == 'gejala_penyakit' ||
                                             Request::route()->getName() == 'gejala_penyakit-add' ||
                                             Request::route()->getName() == 'gejala_penyakit-edit' ||
                                             Request::route()->getName() == 'penyakit_solusi' ||
                                             Request::route()->getName() == 'penyakit_solusi-add' ||
                                             Request::route()->getName() == 'penyakit_solusi-edit') active @endif"
                                         href="/relasi">
                                         Relasi
                                     </a>
                                 @endif
                                 <a class="dropdown-item  @if (Request::route()->getName() == 'pakar' ||
                                         Request::route()->getName() == 'pakar-add' ||
                                         Request::route()->getName() == 'pakar-edit') active @endif"
                                     href="/pakar">
                                     Pakar
                                 </a>
                                 @if (Auth::user()->role !== 1 && Auth::user()->role !== 2)
                                     <a class="dropdown-item  @if (Request::route()->getName() == 'k_d_b') active @endif"
                                         href="/k_d_b">
                                         Kampung Daun Baumata
                                     </a>
                                 @endif
                             </div>
                         </div>
                     </div>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="#" onclick="logout()">
                         <span class="nav-link-icon d-md-none d-lg-inline-block">
                             <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                             <i class="fa-solid fa-arrow-right-from-bracket"></i>
                         </span>
                         <span class="nav-link-title">
                             Logout
                         </span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </aside>
