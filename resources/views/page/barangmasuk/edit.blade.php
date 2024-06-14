@foreach ($barang_masuk as $item)
    <div id="edit-section">
        <div class="modal fade text-left" id="defaultSize-edit-{{ $item->kd_brg_masuk }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel18" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel18">Edit Barang masuk</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <section id="multiple-column-form">
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{ url('/barangmasuk/' . $item->kd_brg_masuk) }}"
                                                    method="POST" class="form" data-parsley-validate>
                                                    @csrf
                                                    @method('put')
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="kd_brg_masuk" class="form-label">
                                                                    Kode Barang Masuk</label>
                                                                <div class="form-group ">
                                                                    <input readonly type="text" name="kd_brg_masuk"
                                                                        class="form-control"
                                                                        value="{{ $item->kd_brg_masuk }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="tgl_masuk" class="form-label">
                                                                    Tanggal Barang Masuk</label>
                                                                <div class="form-group ">
                                                                    <input type="date" name="tgl_masuk"
                                                                        class="form-control flatpickr-no-config"
                                                                        placeholder="{{ $item->tgl_masuk }}"
                                                                        data-parsley-required="true"
                                                                        value="{{ $item->tgl_masuk }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="kd_supplier" class="form-label">
                                                                    Supplier</label>
                                                                <div class="form-group">
                                                                    <select class="choices form-select"
                                                                        name="kd_supplier" data-parsley-required="true">
                                                                        <option hidden value="{{ $item->kd_supplier }}">
                                                                            {{ $item->pt_supplier }}</option>
                                                                        @foreach ($suppliers as $supplier)
                                                                            <option
                                                                                value="{{ $supplier->kd_supplier }}">
                                                                                {{ $supplier->pt_supplier }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="kd_barang" class="form-label">Kode
                                                                    Barang</label>
                                                                <div class="form-group">
                                                                    <select class="choices form-select" id="kd_barang"
                                                                        name="kd_barang" data-parsley-required="true">
                                                                        @foreach ($barang as $barangItem)
                                                                            <option value="{{ $barangItem->kd_barang }}"
                                                                                @if ($barangItem->kd_barang == $item->kd_barang) selected @endif>
                                                                                {{ $barangItem->kd_barang }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama_brg" class="form-label">Nama
                                                                    Barang</label>
                                                                <input class="form-control" name="barang"
                                                                    id="nama_brg" value="{{ $item->nama_brg }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="jenis_brg" class="form-label">Jenis</label>
                                                                <input class="form-control" id="jenis_brg"
                                                                    name="jenis_brg" value="{{ $item->jenis_brg }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="satuan_brg"
                                                                    class="form-label">Satuan</label>
                                                                <input class="form-control" id="satuan_brg"
                                                                    name="satuan_brg"
                                                                    value="{{ $item->satuan_brg }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="brg_masuk" class="form-label">
                                                                    Barang Masuk</label>
                                                                <input type="number" id="brg_masuk"
                                                                    class="form-control"
                                                                    value="{{ $item->brg_masuk }}" name="brg_masuk"
                                                                    data-parsley-required="true" />
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary me-1 mb-1">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                            Reset
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data barang dari server
            var barangData = @json($barang);
            console.log('Barang Data:', barangData); // Pastikan data sudah benar di sini

            var kodeBarangElement = document.getElementById('kd_barang');
            var namaBarangElement = document.getElementById('nama_brg');
            var jenisBarangElement = document.getElementById('jenis_brg');
            var satuanBarangElement = document.getElementById('satuan_brg');

            kodeBarangElement.addEventListener('change', function() {
                var kodeBarang = kodeBarangElement.value;
                console.log('Selected Kode Barang:', kodeBarang); // Debugging

                // Mencari data barang berdasarkan kode barang
                var selectedBarang = barangData.find(function(item) {
                    return item.kd_barang.toString() === kodeBarang.toString();
                });
                console.log('Selected Barang:', selectedBarang); // Debugging

                if (selectedBarang) {
                    namaBarangElement.value = selectedBarang.nama_brg;
                    jenisBarangElement.value = selectedBarang.jenis_brg;
                    satuanBarangElement.value = selectedBarang.satuan_brg;
                } else {
                    namaBarangElement.value = '';
                    jenisBarangElement.value = '';
                    satuanBarangElement.value = '';
                }
            });
        });
    </script>
@endforeach
