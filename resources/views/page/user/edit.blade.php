<!--Default size Modal -->
@foreach ($data as $item)
    <div class="modal fade text-left" id="defaultSize-edit-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Edit User</h4>
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
                                            <form action="{{ url('/user/' . $item->id) }}" method="POST" class="form"
                                                data-parsley-validate>
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="name" class="form-label">Nama</label>
                                                            <input type="text" id="name" class="form-control"
                                                                placeholder="{{ $item->name }}"
                                                                value="{{ $item->name }}" name="name"
                                                                data-parsley-required="true" />
                                                            @error('name')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" id="email" class="form-control"
                                                                placeholder="{{ $item->email }}" name="email"
                                                                value="{{ $item->email }}"
                                                                data-parsley-required="true" />
                                                            @error('email')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="role" class="form-label">
                                                                Role</label>
                                                            <select class="choices form-select text-capitalize"
                                                                id="role" name="role"
                                                                data-parsley-required="true">
                                                                <option hidden value="">{{ $item->role }}
                                                                </option>
                                                                <option value="admin">Admin</option>
                                                                <option value="manager">Manager</option>
                                                                <option value="material">Material</option>
                                                                <option value="marketing">Marketing</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" id="password" class="form-control"
                                                                placeholder="********" name="password"
                                                                data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="confirm-password" class="form-label">Ulangi
                                                                Password</label>
                                                            <input type="password" id="confirm-password"
                                                                class="form-control" placeholder="********"
                                                                name="confirm-password" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                </div>

                                                {{-- <div class="row">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                                            Submit
                                                        </button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div> --}}
                                                {{-- </form> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button> --}}
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
@endforeach
