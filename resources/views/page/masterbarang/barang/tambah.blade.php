<!--Default size Modal -->
<div class="modal fade text-left" id="defaultSize-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel18">Tambah Barang</h4>
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
                                        <form id="user-tambah" action="{{ url('/barang') }}" method="POST"
                                            class="form" data-parsley-validate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="kd_barang" class="form-label">
                                                            Kode Barang</label>
                                                        <div class="form-group ">
                                                            <input readonly type="text" name="kd_barang"
                                                                class="form-control"
                                                                value="{{ rand(1000000000, 9999999999) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="nama_brg" class="form-label">
                                                            Nama Barang</label>
                                                        <input type="text" id="nama_brg" class="form-control"
                                                            placeholder="" name="nama_brg"
                                                            data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="id_jenis" class="form-label ">
                                                            Jenis Barang</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" name="id_jenis"
                                                                data-parsley-required="true">
                                                                <option hidden value="">Pilih Jenis Barang
                                                                </option>
                                                                @foreach ($jenis_brg as $item)
                                                                    <option value="{{ $item->id_jenis }}">
                                                                        {{ $item->jenis_brg }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="id_satuan" class="form-label">
                                                            Satuan</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" name="id_satuan"
                                                                data-parsley-required="true">
                                                                <option hidden value="">Pilih Satuan</option>
                                                                @foreach ($satuan_brg as $item)
                                                                    <option value="{{ $item->id_satuan }}">
                                                                        {{ $item->satuan_brg }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="harga" class="form-label">
                                                            Harga</label>
                                                        <input type="number" id="harga" class="form-control"
                                                            placeholder="" name="harga"
                                                            data-parsley-required="true" />
                                                    </div>
                                                </div> --}}

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
