<x-layout title="Barang Keluar">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Barang Keluar</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3 me-2">
                    <a href="/barangkeluar/tambah" type="button" id="btn-tambah-data" class="btn btn-outline-success"><i
                            class="bi bi-plus"></i>
                        Tambah Data
                    </a>
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Keluar</th>
                            <th>Kode Barang Keluar</th>
                            <th>Kode Barang</th>
                            <th>Customer</th>
                            <th>Barang</th>
                            <th>Jumlah Keluar</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang_keluar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tgl_keluar }}</td>
                                <td>{{ $item->kd_brg_keluar }}</td>
                                <td>{{ $item->kd_barang }}</td>
                                <td>{{ $item->pt_customer }}</td>
                                <td>{{ $item->nama_brg }}</td>
                                <td>{{ $item->brg_keluar }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <div class="d-flex gap-2 ">
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#defaultSize-edit-{{ $item->kd_brg_keluar }}"
                                            class="btn icon btn-sm btn-warning"><i
                                                class="bi bi-pencil-square"></i></button>

                                        <form action="{{ url('/barangkeluar/' . $item->kd_brg_keluar) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn icon btn-sm btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                            {{-- <button><i class="btn bi bi-trash text-danger fs-5"></i></button> --}}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('page.barangkeluar.edit')
    </section>
</x-layout>
