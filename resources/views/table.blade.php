@extends('template')
@section('main')
    <h1>Ini halaman Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        alert('ini halaman Table')
    </script>
@endsection
