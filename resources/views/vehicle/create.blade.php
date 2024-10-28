@include('dashboard.header')
<main class="main-content position-relative border-radius-lg mt-8">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6">
                                <h4>{{ $page_title }}</h4>
                            </div>
                            <div class="col-6 text-end">
                                <div class="btn btn-success">List Armada</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card-body">
                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <strong>{!!session('success')!!}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <!-- pesan gagal -->
                            @if(session()->has('failed'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{!!session('failed')!!}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <!-- pesan error -->
                            @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                <strong>{!!session('error')!!}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <form role="form" id="form-user" method="POST" action="{{ route('vehicle.create') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Kategori Armada</label>
                                        <select class="form-select {{ $errors->has('vehicle_category') ? 'is-invalid' : '' }}" aria-label="Default select example" name="vehicle_category" aria-label="select example">
                                            <option value="" selected>Pilih salah satu</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old("vehicle_category") == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('vehicle_category'))
                                        <div id="invalidVehicleCategory" class="invalid-feedback">
                                            {{ $errors->first('vehicle_category') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">No Polisi</label>
                                        <input type="text" name="police_no"
                                            class="form-control {{ $errors->has('police_no') ? 'is-invalid' : '' }}"
                                            placeholder="12345..." aria-label="Email" value="{{ old('police_no') }}"
                                            aria-describedby="invalidCheckPoliceNo">
                                        @if($errors->has('police_no'))
                                        <div id="invalidCheckPoliceNo" class="invalid-feedback">
                                            {{ $errors->first('police_no') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nama Armada</label>
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            placeholder="12345..." aria-label="Email" value="{{ old('name') }}"
                                            aria-describedby="invalidCheckName">
                                        @if($errors->has('name'))
                                        <div id="invalidCheckName" class="invalid-feedback">
                                            {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Ada Asuransi?</label>
                                        <select class="form-select {{ $errors->has('insurance') ? 'is-invalid' : '' }}" aria-label="Default select example" name="insurance" aria-describedby="invalidInsurance">
                                            <option value="" selected>Pilih salah satu</option>
                                            <option value="Yes"  {{ old("insurance") == "Yes" ? 'selected' : '' }}>Ada</option>
                                            <option value="No"  {{ old("insurance") == "No" ? 'selected' : '' }}>Tidak Ada</option>
                                        </select>
                                        @if($errors->has('insurance'))
                                        <div id="invalidInsurance" class="invalid-feedback">
                                            {{ $errors->first('insurance') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Harga / Hari</label>
                                        <input type="text" name="price"
                                            class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                            placeholder="100000..." aria-label="Email" value="{{ old('price') }}"
                                            aria-describedby="invalidCheckPrice">
                                        @if($errors->has('price'))
                                        <div id="invalidCheckPrice" class="invalid-feedback">
                                            {{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Foto</label>
                                        <input type="file" name="images[]"
                                            class="form-control {{ $errors->has('images') ? 'is-invalid' : '' }}"
                                            placeholder="images" aria-label="Password"
                                            aria-describedby="invalidCheckImages" multiple>
                                        @if($errors->has('images'))
                                        <div id="invalidCheckImages" class="invalid-feedback">
                                            {{ $errors->first('images') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('dashboard.footer')