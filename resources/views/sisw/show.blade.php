@extends('template')

@section('content')

<section style="background-color: #eee;">
<div class="row mt-10 mb-10 ">
  <div class="container py-4 px-5">
  <h2> Profile Siswa</h2>
  <br>
    <div class="row">
      @foreach ($siswa as $sisw)
          
      
      <div class="col-lg-6">
        <div class="card mb-6">
          <div class="card-body text-center">
            <img src="{{asset('template/img/undraw_profile.svg')}}" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $sisw->siswa->NamaSiswa}}</h5>
            <span class="text-muted">{{ $sisw->siswa->NIS}} , </span>
            <span class="text-muted">{{ $sisw->siswa->Alamat}}</span>
            <hr>
          </div>
        </div>

      </div>
      <div class="col-lg-6  ">
        <div class="card mb-5">
          <div class="card-body">
            
            <br>
  
            <h5> <strong>Nilai Siswa</strong> </h5> 
            <hr> 
            <div class="container">
                
              
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <td>PWPB</td>
                    <td>Basis Data</td>
                  </tr>
                </thead>
                <tr>
                  <td>
                    {{$sisw->pwpb}}
                  </td>
                  <td>
                    {{$sisw->basda}}
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
        </div>  
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection