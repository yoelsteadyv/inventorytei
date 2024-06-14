<x-layout title="Tambah Barang Masuk">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="page-heading">
        <h3>Tambah Barang Masuk</h3>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form id="user-tambah" action="{{ url('/barangmasuk') }}" method="POST" class="form"
                    data-parsley-validate>
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kd_brg_masuk" class="form-label">Kode Barang Masuk</label>
                                <div class="form-group">
                                    <input readonly type="text" name="kd_brg_masuk" class="form-control"
                                        value="KBM-{{ rand(1000000000, 9999999999) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="tgl_masuk" class="form-label">Tanggal Barang Masuk</label>
                                <div class="form-group">
                                    <input type="date" name="tgl_masuk" class="form-control flatpickr-no-config"
                                        placeholder="Select date.." data-parsley-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="kd_supplier" class="form-label">PT Supplier</label>
                                <div class="form-group">
                                    <select class="choices form-select" name="kd_supplier" data-parsley-required="true">
                                        <option hidden value="">Pilih PT Supplier</option>
                                        @foreach ($supplier as $item)
                                            <option value="{{ $item->kd_supplier }}">{{ $item->pt_supplier }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="kd_barang" class="form-label">Kode Barang</label>
                                <div class="form-group">
                                    <select class="choices form-select" id="kd_barang" name="kd_barang"
                                        data-parsley-required="true">
                                        <option hidden value="">Pilih Kode Barang</option>
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->kd_barang }}">{{ $item->kd_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_brg" class="form-label">Nama Barang</label>
                                <input readonly class="form-control" name="barang" id="nama_brg" value="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jenis_brg" class="form-label">Jenis</label>
                                <input readonly class="form-control" id="jenis_brg" name="jenis_brg" placeholder="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="satuan_brg" class="form-label">Satuan</label>
                                <input readonly class="form-control" id="satuan_brg" name="satuan_brg" placeholder="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="brg_masuk" class="form-label">Barang Masuk</label>
                                <input type="number" id="brg_masuk" class="form-control" placeholder=""
                                    name="brg_masuk" data-parsley-required="true" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div>
        <!-- Debugging: menampilkan seluruh variabel $item -->
        <pre>{{ dd($barang) }}</pre>
    </div> --}}
    {{-- <div>
        <!-- Debugging: menampilkan seluruh variabel $item -->
        <pre>{{ dd($barang_masuk) }}</pre>
    </div> --}}
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Data barang dari server
        var barangData = @json($barang);
        console.log('Barang Data:', barangData); // Tambahkan ini untuk debugging

        var kodeBarangElement = document.getElementById('kd_barang');
        var namaBarangElement = document.getElementById('nama_brg');
        var jenisBarangElement = document.getElementById('jenis_brg');
        var satuanBarangElement = document.getElementById('satuan_brg');

        kodeBarangElement.addEventListener('change', function() {
            var kodeBarang = kodeBarangElement.value;
            console.log('Selected Kode Barang:', kodeBarang); // Tambahkan ini untuk debugging

            // Mencari data barang berdasarkan kode barang
            var selectedBarang = barangData.find(function(item) {
                return item.kd_barang.toString() === kodeBarang.toString();
            });
            console.log('Selected Barang:', selectedBarang); // Tambahkan ini untuk debugging

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
