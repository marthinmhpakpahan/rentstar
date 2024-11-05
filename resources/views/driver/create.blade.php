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
                                <div class="btn btn-success">List Supir</div>
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
                            <form role="form" id="form-user" method="POST" action="{{ route('driver.create') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name"
                                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            placeholder="Bill..." aria-label="Name"
                                            aria-describedby="invalidCheckName">
                                        @if($errors->has('name'))
                                        <div id="invalidCheckName" class="invalid-feedback">
                                            {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">No Telepon</label>
                                        <input type="text" name="phone_no"
                                            class="form-control {{ $errors->has('phone_no') ? 'is-invalid' : '' }}"
                                            placeholder="0821..." aria-label="Email"
                                            aria-describedby="invalidCheckPhoneNo">
                                        @if($errors->has('phone_no'))
                                        <div id="invalidCheckPhoneNo" class="invalid-feedback">
                                            {{ $errors->first('phone_no') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Foto</label>
                                        <input type="file" name="photo"
                                            class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}"
                                            placeholder="Photo" aria-label="Password"
                                            aria-describedby="invalidCheckPhoto">
                                        @if($errors->has('photo'))
                                        <div id="invalidCheckPhoto" class="invalid-feedback">
                                            {{ $errors->first('photo') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Kartu Surat Ijin Mengemudi (SIM)</label>
                                        <input type="file" name="driver_license"
                                            class="form-control {{ $errors->has('driver_license') ? 'is-invalid' : '' }}"
                                            placeholder="Photo" aria-label="Password"
                                            aria-describedby="invalidCheckDriverLicense">
                                        @if($errors->has('driver_license'))
                                        <div id="invalidCheckDriverLicense" class="invalid-feedback">
                                            {{ $errors->first('driver_license') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Create</button>
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