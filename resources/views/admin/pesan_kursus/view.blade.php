@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-2">
                <div class="px-3 pt-2 font-weight-bold">
                    <h5 class="font-weight-bolder">Data Pesan Kursus: {{$pesan_kursus->idkursus}}</h5>
                    <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="namapesan_kursus">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="namapesan_kursus" name="namapesan_kursus"
                                    value="{{$pesan_kursus->mapel->namamapel}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pendidikan">Nama Mentor</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                    value="{{$pesan_kursus->mentor->namamentor}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ptn">PTN</label>
                                <input type="text" class="form-control" id="ptn" name="ptn" value="{{$pesan_kursus->user->name}}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="idbidang">Bidang</label>
                            <input type="text" class="form-control" id="idbidang" name="idbidang"
                                value="{{$pesan_kursus->bidang->namabidang}}" readonly>
                        </div>
                        <div class="col-md-12">
                            <label for="idbidang">Harga</label>
                            <input type="text" class="form-control" id="idbidang" name="idbidang"
                                value="{{$pesan_kursus->mapel->harga}}" readonly>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="twitter">Jadwal</label>
                                <input type="url" class="form-control" id="twitter" name="twitter"
                                    value="{{$pesan_kursus->jadwal}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="instagram">Via</label>
                                <input type="url" class="form-control" id="instagram" name="instagram"
                                    value="{{$pesan_kursus->via}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pt-2">
                            <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                <a href="/pesan_kursus" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                        aria-hidden="true"></i></a>
                                <a href="/pesan_kursus" class="btn-inner--text text-white ms-2">Kembali</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')
<script src="https://cdn.tiny.cloud/1/a2m8qq7i48j1gc5izphurmemg39o165ft6pbpiz5a7waq805/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

<!-- Initialize TinyMCE on your textarea -->
<script>
    tinymce.init({
        selector: 'textarea#deskripsi',
        plugins: 'lists bold italic',
        toolbar: 'undo redo | formatselect | bold italic | bullist numlist',
        menubar: false
    });
</script>
@endsection