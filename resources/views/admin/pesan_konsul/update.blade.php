@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-2">
                <div class="px-3 pt-2 font-weight-bold">
                    <h5 class="font-weight-bolder">Data Mentor: {{$mentor->namamentor}}</h5>
                    <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                </div>
                <form method="POST" action="{{ route('mentor.update',$mentor->idmentor)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namamentor">Nama Mentor</label>
                                    <input type="text" class="form-control" id="namamentor" name="namamentor"
                                        value="{{$mentor->namamentor}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                        value="{{$mentor->pendidikan}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ptn">PTN</label>
                                    <input type="text" class="form-control" id="ptn" name="ptn"
                                        value="{{$mentor->ptn}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="idbidang">Bidang</label>
                                <select class="form-select" name="idbidang">
                                    @foreach ($bidang as $bid)
                                    <option value="{{ $bid->idbidang }}" @if ($bid->idbidang == old('idbidang',
                                        $mentor->idbidang))
                                        selected
                                        @endif>{{ $bid->namabidang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pt-2">
                                <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                    <a href="/mentor" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                            aria-hidden="true"></i></a>
                                    <a href="/mentor" class="btn-inner--text text-white ms-2">Kembali</a>
                                </button>
                                <button class="btn btn-icon btn-3 btn-success" type="submit">
                                    <a class="btn-inner--icon text-white"><i class="fa fa-pencil" aria-hidden="true"></i>
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
                Apakah anda yakin menghapus Mentor <span class="font-weight-bolder">{{$mentor->namamentor}}</span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <form action="{{ route('mentor.destroy', $mentor->idmentor) }}" method="POST" style="display: inline;">
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