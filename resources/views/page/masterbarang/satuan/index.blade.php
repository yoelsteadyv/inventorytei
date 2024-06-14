<x-layout title="Satuan">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Satuan</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3 me-2">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#defaultSize"><i class="bi bi-plus"></i>
                        Tambah Data
                    </button>
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($satuan_brg as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->satuan_brg }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <div class="d-flex gap-2 ">
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#defaultSize-edit-{{ $item->id_satuan }}"
                                            class="btn icon btn-sm btn-warning"><i
                                                class="bi bi-pencil-square"></i></button>

                                        <form action="{{ url('/satuanbarang/' . $item->id_satuan) }}" method="POST">
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


        @include('page.masterbarang.satuan.tambah')
        @include('page.masterbarang.satuan.edit')
    </section>
</x-layout>
