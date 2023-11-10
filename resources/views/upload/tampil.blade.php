@extends('template')
@section('main')
    <h1>File Upload</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex">
        @csrf
        <div class="form-group">
            <label>Pilih Gambar</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="mt-4">
            <button class="btn btn-success">Simpan</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'. $item->image) }}" alt="" width="300px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
