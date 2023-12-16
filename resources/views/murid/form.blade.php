@extends('layouts/header_footer')
@section('content')
<div class="container p-20 m-20">
    <form method="post" action="{{ route('murid.store') }}">
        @csrf

        <div class="form-group p-20 m-20">
            <label for="alamat">Alamat:</label>
            <input type="text" name="namasekolah" class="form-control" value="{{$muridData->namasekolah}}" required>
        </div>

        <div class="form-group">
            <label for="no_telp">No. Telepon:</label>
            <input type="text" name="gender" class="form-control" value="{{$muridData->gender}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

@section('jquery')
<script>

</script>
@endsection