<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Daftar Barang</h1>
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->kode }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->deskripsi }}</td>
                <td>{{ $barang->harga_satuan }}</td>
                <td>{{ $barang->jumlah }}</td>
                <td>
                    @if ($barang->foto)
                        <img src="{{ asset('storage/' . $barang->foto) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
