@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-2">
                <div class="px-3 pt-2 font-weight-bold">
                    <h5 class="font-weight-bolder">Data Mata Pelajaran: {{$mapel->namamapel}}</h5>
                    <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                </div>
                <form method="POST" action="{{ route('mata_pelajaran.update',$mapel->idmp)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namamapel">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="namamapel" name="namamapel"
                                        value="{{$mapel->namamapel}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="idbidang">Bidang</label>
                                <select class="form-select" name="idbidang">
                                    @foreach ($bidang as $bid)
                                    <option value="{{ $bid->idbidang }}" @if ($bid->idbidang == old('idbidang',
                                        $mapel->idbidang))
                                        selected
                                        @endif>{{ $bid->namabidang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pt-2">
                                <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                    <a href="/mata_pelajaran" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                            aria-hidden="true"></i></a>
                                    <a href="/mata_pelajaran" class="btn-inner--text text-white ms-2">Kembali</a>
                                </button>
                                <button class="btn btn-icon btn-3 btn-success" type="submit">
                                    <a class="btn-inner--icon text-white"><i class="fa fa-pencil"
                                            aria-hidden="true"></i>
                                    </a>
                                    <a class="btn-inner--text text-white ms-2">Update</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bolder" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menghapus Mata Pelajaran <span class="font-weight-bolder">{{$mapel->namamapel}}</span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <form action="{{ route('mata_pelajaran.destroy', $mapel->idmp) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')

@endsection