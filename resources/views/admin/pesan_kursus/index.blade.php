@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="px-3">Data Pesanan Kursus
                        </h3>
                        <hr class="ms-3 mt-0" style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
                    </div>
                </div>
                @if (count($pesan_kursus) > 0)
                <div class="table-responsive">
                    @if (count($errors) > 0)
                    <div
                        class="alert alert-danger shadow border-radius-xl p-2 border-none text-white font-weight-bolder flex flex-col ">
                        <strong>Sorry ! There were some problems with your input.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success shadow border-radius-xl text-white font-weight-bolder">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-default text-xs font-weight-bolder">No.</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder">Nama Murid</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder">Mata Pelajaran</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Bidang Peminatan
                                <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Status</th>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan_kursus as $pk)
                            <tr>
                                <td class="text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">
                                            {{ ($pesan_kursus->currentPage() - 1) * $pesan_kursus->perPage() +
                                            $loop->iteration }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">

                                            {{ $pk->user->name }}

                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">
                                            {{ $pk->mapel->namamapel }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="ms-3 text-xs px-5 py-2 btn {{ $pk->bidang->namabidang == 'IPS' ? 'btn-danger' : 'btn-info' }}">
                                            {{ $pk->bidang->namabidang }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        @if($pk->status == '1')
                                        <span class="ms-3 text-xs px-5 py-2 btn btn-info">
                                            Sudah Bayar
                                        </span>
                                        @else
                                        <span class="ms-3 text-xs px-5 py-2 btn btn-danger">
                                            Belum Bayar
                                        </span>
                                        @endif
                                    </div>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <a href="{{ route('pesan_kursus.show', $pk->idkursus) }}"
                                        class="text-gray-400 hover:text-amber-400  mr-2">
                                        <i class="fa fa-eye text-sm"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pt-4">
                            @if ($pesan_kursus -> currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $pesan_kursus->previousPageUrl() }}" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:;" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            @endif

                            @for ($i = 1; $i <= $pesan_kursus->lastPage(); $i++)
                                <li class="page-item {{ $i == $pesan_kursus->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $pesan_kursus->url($i) }}"
                                        style="{{ $i == $pesan_kursus->currentPage() ? 'color:white;background-color:#1B3C5F;border:none' : '' }}">
                                        {{ $i }}
                                    </a>
                                </li>
                                @endfor

                                @if ($pesan_kursus->currentPage() < $pesan_kursus->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $pesan_kursus->nextPageUrl() }}">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    @else
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:;">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    @endif
                        </ul>
                    </nav>
                </div>
                @else
                <div class="alert alert-info shadow border-radius-xl text-white font-weight-bolder">
                    Tabel masih kosong.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')

@endsection