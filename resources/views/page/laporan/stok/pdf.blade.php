<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEI | STOK PDF</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .section {
            margin: 5px;
        }

        .card-body {
            padding: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="card">
            <h1 style="text-align: center; margin-top: -15px;">TEI</h1>
            <h1 style="text-align: center; margin-top: -15px;">LAPORAN STOK</h1>
            <h5 style="text-align: right; margin-top: -15px;">Tanggal Cetak : <?php echo date('d-m-Y'); ?></h5>
            <div class="card-body">
                <table class="table table-striped" style="margin-top: -25px;" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Jumlah Keluar</th>
                            <th>Total Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kd_barang }}</td>
                                <td>{{ $item->nama_brg }}</td>
                                <td>{{ $item->total_masuk }}</td>
                                <td>{{ $item->total_keluar }}</td>
                                <td>{{ $item->total_masuk - $item->total_keluar }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>
