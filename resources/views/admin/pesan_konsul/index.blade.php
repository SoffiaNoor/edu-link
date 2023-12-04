@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="px-3">Mentor
                        </h3>
                        <hr class="ms-3 mt-0" style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
                    </div>
                    <div class="col-sm-6"> <a class="btn btn-warning" href="{{route('mentor.create')}}"
                            style="float:right;">
                            <span>Tambah Data</span>
                            <i class="fa fa-plus ms-2"></i>
                        </a>
                    </div>
                </div>
                @if (count($mentor) > 0)
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
                                <th class="text-uppercase text-default text-xs font-weight-bolder">Nama</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder">Pendidikan</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">PTN</th>
                                <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Bidang Peminatan
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mentor as $mtr)
                            <tr>
                                <td class="text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">
                                            {{ ($mentor->currentPage() - 1) * $mentor->perPage() + $loop->iteration }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">

                                            {{ $mtr->namamentor }}

                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">
                                            {{ $mtr-> pendidikan }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs">
                                            {{ $mtr-> ptn }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-uppercase text-default text-xs font-weight-bolder">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-3 text-xs px-5 py-2 btn {{ $mtr->bidang->namabidang == 'IPS' ? 'btn-danger' : 'btn-info' }}">
                                            {{ $mtr->bidang->namabidang }}
                                        </span>
                                    </div>
                                </td>
                                <td
                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <a href="{{ route('mentor.show', $mtr->idmentor) }}"
                                        class="text-gray-400 hover:text-amber-400  mr-2">
                                        <i class="fa fa-eye text-sm"></i>
                                    </a>
                                    <a href="{{ route('mentor.edit', $mtr->idmentor) }}"
                                        class="text-gray-400 hover:text-amber-400 mx-2">
                                        <i class="fas fa-edit text-sm"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-amber-400" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{$mtr->idmentor}}">
                                        <i class="fa fa-trash text-sm"></i>
                                    </a>

                                    <div class="modal fade" id="deleteModal{{$mtr->idmentor}}" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-bolder" id="deleteModalLabel">
                                                        Delete Confirmation
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-sm">
                                                    Apakah anda yakin menghapus Mentor <span
                                                        class="font-weight-bolder">{{$mtr->namamentor}}</span>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tidak</button>
                                                    <form action="{{ route('mentor.destroy', $mtr->idmentor) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pt-4">
                            @if ($mentor -> currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $mentor->previousPageUrl() }}" tabindex="-1">
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

                            @for ($i = 1; $i <= $mentor->lastPage(); $i++)
                                <li class="page-item {{ $i == $mentor->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $mentor->url($i) }}"
                                        style="{{ $i == $mentor->currentPage() ? 'color:white;background-color:#1B3C5F;border:none' : '' }}">
                                        {{ $i }}
                                    </a>
                                </li>
                                @endfor

                                @if ($mentor->currentPage() < $mentor->lastPage())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $mentor->nextPageUrl() }}">
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