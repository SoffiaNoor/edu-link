@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-2">
                <div class="px-3 pt-2 font-weight-bold">
                    <h5 class="font-weight-bolder">Tambah Mata Pelajaran:

                    </h5>
                    <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                </div>
                @if(session('error'))
                <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                    {{ session('error') }}
                </div>
                @endif
                <form class="p-3" method="POST" action="{{ route('mata_pelajaran.store')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="namamentor">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="namamapel" name="namamapel" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="idbidang">Bidang</label>
                            <select class="form-select" id="idbidang" name="idbidang">
                                <option value="1">IPA</option>
                                <option value="2">IPS</option>
                                <option value="3">IT</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="harga">Harga Kursus</label>
                                <input type="number" class="form-control" id="harga" name="harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pt-2">
                            <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                <a href="/mentor" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                        aria-hidden="true"></i>
                                </a>
                                <a href="/mentor" class="btn-inner--text text-white ms-2">Kembali</a>
                            </button>
                            <button class="btn btn-icon btn-3 btn-success" type="submit">
                                <a class="btn-inner--icon text-white"><i class="fa fa-save" aria-hidden="true"></i>
                                </a>
                                <a class="btn-inner--text text-white ms-2">Simpan</a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
</div>
@endsection

@section('jquery')

<script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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