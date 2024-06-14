<x-layout title="Main Supplier">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Main Customer</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3 me-2">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#defaultSize-tambah"><i class="bi bi-plus"></i>
                        Tambah Data
                    </button>
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Customer</th>
                            <th>Nama Customer</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Person</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($main_customer as $item)
                            <tr>
                                <td>{{ $item->kd_customer }}</td>
                                <td>{{ $item->pt_customer }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->person }}</td>
                                <td>
                                    <div class="d-flex gap-2 ">
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#defaultSize-edit-{{ $item->id }}"
                                            class="btn icon btn-sm btn-warning"><i
                                                class="bi bi-pencil-square"></i></button>

                                        <form action="{{ url('/maincustomer/' . $item->id) }}" method="POST">
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

        @include('page.maincustomer.tambah')
        @include('page.maincustomer.edit')
    </section>
</x-layout>
