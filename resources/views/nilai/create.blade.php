@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-10 margin-tb">
        <div class="float-left">
            <h2><strong> INPUT DATA NILAI </strong></h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Kembali</a>
        </div>
    </div>
</div> 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('nilai.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Nama    :</strong> 
                <select name="siswa_id" id="nama" class="form-control">
                    @foreach ($nama as $item)
                    <option value="{{ $item->id}}">{{ $item->NamaSiswa}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>PWPB    :</strong>
                <input type="number" name="pwpb" class="form-control" placeholder="Masukkan Nilai PWPB">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Basis Data      :</strong>
                <input type="number" name="basda" class="form-control" placeholder="Masukkan Nilai basis data">
            </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection