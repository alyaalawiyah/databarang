<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="card shadow-lg border-0 rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="text-center fw-bold text-primary mb-4">Edit Barang</h3>

            <form action="{{ route('barang.update', $barang->kode_barang) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_barang" class="form-label fw-semibold">Kode Barang</label>
                    <input type="text" id="kode_barang" name="kode_barang"
                           class="form-control" value="{{ $barang->kode_barang }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="nama_barang" class="form-label fw-semibold">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang"
                           class="form-control @error('nama_barang') is-invalid @enderror"
                           value="{{ old('nama_barang', $barang->nama_barang) }}" required>
                    @error('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label fw-semibold">Harga</label>
                    <input type="number" id="harga" name="harga"
                           class="form-control @error('harga') is-invalid @enderror"
                           value="{{ old('harga', $barang->harga) }}" required>
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    