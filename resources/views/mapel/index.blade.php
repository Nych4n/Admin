@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Mata Pelajaan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('mapel.create') }}"> Input Siswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="100px" class="text-center">No</th>
            <th width="280px"class="text-center">kode</th>
            <th width="280px"class="text-center">Mapel</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        </thead>    
        @foreach ($Mapel as $mapel)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $mapel->kode }}</td>
            <td>{{ $mapel->mapel }}</td>
            <td class="text-center">
                <form action="{{ route('mapel.destroy',$mapel->id) }}" method="POST">
                   <a class="btn btn-info btn-sm" href="{{ route('mapel.show',$mapel->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('mapel.edit',$mapel->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $Mapel->links() !!}

@endsection