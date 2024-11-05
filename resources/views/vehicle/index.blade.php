@include('dashboard.header')
<main class="main-content position-relative border-radius-lg mt-8">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6">
                                <h4>List Armada</h4>
                            </div>
                            <div class="col-6 text-end"><a href="{{ route('vehicle.create') }}">
                                    <div class="btn btn-success">Tambahkan Armada</div>
                                </a></div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                            Kategori</th>
                                        <th
                                            class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                            Foto Armada</th>
                                        <th
                                            class="text-uppercase text-secondary text-center font-weight-bolder opacity-7 ps-2">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-center font-weight-bolder opacity-7 ps-2">
                                            No Polisi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            Ada Asuransi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            Harga / Hari</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            Foto</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td class="p-4">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $vehicle->category->name }}</h6>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="row">
                                                @foreach ($vehicle->images as $index => $image)
                                                <div class="col-md-4">
                                                    <img src="{{ $image->image_path }}" class="d-block w-100" alt="ok">
                                                </div>
                                                @endforeach

                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <h6 class="vehiclefont-weight-bold mb-0">{{ $vehicle->name }}</h6>
                                        </td>
                                        <td class="p-4">
                                            <h6 class="vehiclefont-weight-bold mb-0">{{ $vehicle->police_no }}</h6>
                                        </td>
                                        <td class="align-middle text-center text-sm p-4">
                                            @if($vehicle->insurance == 1)
                                            <span class="badge badge-sm bg-gradient-success"><i class="fas fa-check"></i></span>
                                            @endif
                                            @if($vehicle->insurance == 0)
                                            <span class="badge badge-sm bg-gradient-secondary"><i class="fas fa-times"></i></span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center p-4">
                                            <h6
                                                class="vehiclefont-weight-bold">{{ $vehicle->price }}</h6>
                                        </td>
                                        <td class="align-middle text-center p-4">
                                            <h6
                                                class="vehiclefont-weight-bold">{{ $vehicle->created_at }}</h6>
                                        </td>
                                        <td class="text-center p-4">
                                            <a href="javascript:;" class="text-secondary font-weight-bold"
                                                data-toggle="tooltip" data-original-title="Detail vehicle" data-placement="top" title="Detail Armada">
                                                <div class="btn btn-primary btn-sm"><i class="fas fa-search"></i></div>
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold" data-placement="top" title="Ubah Armada"
                                                data-toggle="tooltip" data-original-title="Edit vehicle">
                                                <div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold" data-placement="top" title="Hapus Armada"
                                                data-toggle="tooltip" data-original-title="Delete vehicle">
                                                <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('dashboard.footer')