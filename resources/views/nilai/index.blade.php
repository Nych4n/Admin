@extends('template')

@section('content')
    <div class="row mt-5 mb-10">
        <div class="col-lg-11">
            <div class="float-left">
                <h2><strong> Nilai Siswa </strong></h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('nilai.create') }}">Input Nilai</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
<div class="container">
    <table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="200px" class="text-center">Nama Siswa</th>
            <th width="100px"class="text-center">PWPB</th>
            <th width="100px"class="text-center">Basis data</th>
            <th width="150px"class="text-center">Action</th>
        </tr>
    </thead>
        <br>
        @foreach ($nilai as $Nilai)
        <tbody>
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td class="text-center">{{ $Nilai->Siswa->NamaSiswa }}</td>
            <td class="text-center">{{ $Nilai->pwpb }}</td>
            <td class="text-center">{{ $Nilai->basda }}</td>
            <td class="text-center">
                <form action="{{ route('nilai.destroy',$Nilai->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    </div>

    {!! $nilai->links() !!}

@endsection
