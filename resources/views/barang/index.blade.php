<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

</head>
<body class="bg-light py-5">

<div class="container">
    <h2 class="text-center mb-4 fw-bold text-primary">Daftar Barang</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('barang.create') }}" class="btn btn-success">+ Tambah Barang</a>
        </div>
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <table id="barangTable" class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">Kode Barang</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $b)
                    <tr>
                        <td class="text-center fw-semibold">{{ $b->kode_barang }}</td>
                        <td>{{ $b->kategori->nama_kategori }}</td>
                        <td>{{ $b->nama_barang }}</td>
                        <td>Rp {{ number_format($b->harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('barang.edit', $b->kode_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('barang.destroy', $b->kode_barang) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#barangTable').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/en-GB.json'
        },
        pageLength: 5,
        lengthMenu: [1, 5, 10, 25, 50],
    });
});
</script>
</body>
</html>
