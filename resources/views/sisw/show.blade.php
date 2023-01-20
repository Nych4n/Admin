@extends('template')

@section('content')

<section style="background-color: #eee;">
<div class="row mt-10 mb-10 ">
  <div class="container py-4 px-5">
  <h2> Profile Siswa</h2>
  <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-6">
          <div class="card-body text-center">
            <img src="{{asset('template/img/undraw_profile.svg')}}" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $sisw->NamaSiswa}}</h5>
            <hr>
          </div>
        </div>

      </div>
      <div class="col-lg-6  ">
        <div class="card mb-5">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-5">
            </div> 
            </div>
            <br>
  
            <h5> <strong>Data Siswa</strong> </h5> 
            <hr> 
            <strong>NIS : {{$sisw->NIS}}</strong> <br>
            <strong>Nama  : {{$sisw->NamaSiswa}}</strong><br>
            <strong>Alamat: {{$sisw->Alamat}}</strong>
          </div>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
        </div>  
      </div>
    </div>
  </div>
</section>

@endsection