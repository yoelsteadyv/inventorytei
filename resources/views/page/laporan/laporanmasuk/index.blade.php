<x-layout title="Laporan Barang Masuk">
    <div class="page-heading">
        <h3>Laporan Barang Masuk</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">

                <table class="table table-striped" id="table1">
                    <div class="d-lg-flex gap-1">
                        <div class="col-12 pb-2 col-lg-4 ">
                            <div class="input-group mandatory">
                                {{-- <label for="harga-barang" class="form-label">
                                    Filter</label> --}}
                                <input type="date" class="form-control flatpickr-range" placeholder="Select date..">
                                <button class="btn btn-outline-warning" type="button" id="button-addon2"><i
                                        class="bi bi-funnel"></i>
                                    Filter</button>
                            </div>
                        </div>
                        <div class="">
                            {{-- <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#defaultSize-tambah"><i class="bi bi-funnel"></i>
                                Filter
                            </button> --}}
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#defaultSize-tambah"><i class="bi bi-printer"></i>
                                Print
                            </button>
                            <a href="{{ url('/laporanmasuk/pdf') }}?export=pdf" type="button"
                                class="btn btn-outline-danger" target="_blank"><i class="bi bi-filetype-pdf"></i>
                                PDF
                            </a>
                        </div>
                    </div>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Barang Masuk</th>
                            <th>Kode Barang</th>
                            <th>Supplier</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang_masuk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tgl_masuk }}</td>
                                <td>{{ $item->kd_brg_masuk }}</td>
                                <td>{{ $item->kd_barang }}</td>
                                <td>{{ $item->pt_supplier }}</td>
                                <td>{{ $item->nama_brg }}</td>
                                <td>{{ $item->brg_masuk }}</td>
                            </tr>
                        @endforeach
                        {{-- {{ dd($barang_masuk) }} --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</x-layout>
