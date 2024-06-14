@foreach ($barang_keluar as $item)
    <!--Default size Modal -->
    <div class="modal fade text-left" id="defaultSize-edit-{{ $item->kd_brg_keluar }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Edit Barang Keluar</h4>
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
                                            <form action="{{ url('/barangkeluar/' . $item->kd_brg_keluar) }}"
                                                method="POST" class="form" data-parsley-validate>
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="kd_brg_keluar" class="form-label">
                                                                Kode Barang Keluar</label>
                                                            <div class="form-group ">
                                                                <input readonly type="text" name="kd_brg_keluar"
                                                                    class="form-control"
                                                                    value="{{ $item->kd_brg_keluar }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="tgl_keluar" class="form-label">
                                                                Tanggal Barang Keluar</label>
                                                            <div class="form-group ">
                                                                <input type="date"
                                                                    class="form-control flatpickr-no-config"
                                                                    name="tgl_keluar"
                                                                    placeholder="{{ $item->tgl_keluar }}"
                                                                    data-parsley-required="true"
                                                                    value="{{ $item->tgl_keluar }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="kd_customer" class="form-label">
                                                                Customer</label>
                                                            <div class="form-group">
                                                                <select class="choices form-select" name="kd_customer"
                                                                    id="kd_customer" data-parsley-required="true">
                                                                    <option hidden value="{{ $item->kd_customer }}">
                                                                        {{ $item->kd_customer }}</option>
                                                                    @foreach ($customer as $customerItem)
                                                                        <option value="{{ $customerItem->kd_customer }}"
                                                                            @if ($customerItem->kd_customer == $item->kd_customer) selected @endif>
                                                                            {{ $customerItem->pt_customer }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{-- {{ dd($customer) }} --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tujuan" class="form-label">Alamat
                                                                Tujuan</label>
                                                            <textarea readonly class="form-control" name="tujuan" id="tujuan" rows="3">{{ $item->alamat }}</textarea>
                                                        </div>
                                                        {{-- {{ dd($barang_keluar) }} --}}
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="kd_barang" class="form-label">
                                                                Kode Barang</label>
                                                            <div class="form-group ">
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
                                                            {{-- {{ dd($barang_keluar) }} --}}
                                                            {{-- <div class="">
                                                                <pre>{{ $item->kd_barang }}</pre>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="nama_brg" class="form-label">
                                                                Nama Barang</label>
                                                            <input readonly class="form-control" name="nama_brg"
                                                                id="nama_brg" value="{{ $item->nama_brg }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="jenis_brg" class="form-label">
                                                                Jenis</label>
                                                            <input readonly class="form-control" id="jenis_brg"
                                                                name="jenis_brg" value="{{ $item->jenis_brg }}" />
                                                        </div>
                                                    </div>
                                                    {{-- {{ dd($item->jenis_brg) }} --}}
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="satuan_brg" class="form-label">
                                                                Satuan</label>
                                                            <input readonly class="form-control" id="satuan_brg"
                                                                name="satuan_brg" value="{{ $item->satuan_brg }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="brg_keluar" class="form-label">
                                                                Jumlah Keluar</label>
                                                            <input type="number" id="brg_keluar"
                                                                class="form-control" value="{{ $item->brg_keluar }}"
                                                                name="brg_keluar" data-parsley-required="true" />
                                                        </div>
                                                        {{-- <pre>{{ dd($item->brg_keluar) }}</pre> --}}
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
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data barang dari server
            var barangData = @json($barang);
            console.log('Barang Data:', barangData); // Tambahkan ini untuk debugging
            var customerData = @json($customer); // Ambil data customer dari server

            var kodeBarangElement = document.getElementById('kd_barang');
            var namaBarangElement = document.getElementById('nama_brg');
            var jenisBarangElement = document.getElementById('jenis_brg');
            var satuanBarangElement = document.getElementById('satuan_brg');
            var ptCustomerElement = document.getElementById('kd_customer');
            var tujuanElement = document.getElementById('tujuan');

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
            ptCustomerElement.addEventListener('change', function() {
                var selectedCustomer = customerData.find(function(item) {
                    return item.kd_customer.toString() === ptCustomerElement.value.toString();
                });

                if (selectedCustomer) {
                    tujuanElement.value = selectedCustomer.alamat; // Isikan alamat ke dalam textarea tujuan
                } else {
                    tujuanElement.value = ''; // Kosongkan textarea jika tidak ada customer yang dipilih
                }
            });
        });
    </script> --}}
@endforeach
