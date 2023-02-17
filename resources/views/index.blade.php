<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end: CSS -->
    <title>DINKES</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

</head>


<body>
    <div class="container-fluid">

        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white shadow-sm d-flex justify-content-between align-item-center">
            <div class="d-flex align-items-center">
                <img src="img/logo.png" alt="" width="45" height="55">
                <h5 style="margin-left: 10px; padding-top: 10px">Dinas Kesehatan <br> Kota Kendari</h5>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class=""
                    style="display: flex; flex-direction: column; align-items: center;  margin-top: 10px; margin-right: 10px">
                    <h6>admin</h6>
                    <p class="text-success" style="margin-top: -10px; font-size: 12px">master</p>
                </div>
                <div class="" style="margin-top: -10px">
                    <img class="navbar-profile-image"
                        src="img/user.png"
                        alt="Image">
                </div>
            </div>


        </nav>
    </div>
    <!-- end: Navbar -->

    <!-- start: Content -->
    <div class="card bg-white rounded shadow-sm p-3 mt-3 mx-2">
        <h5 class="text-center">JAMKESDA KOTA KENDARI</h5>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
        @endif
        <div class="my-3 d-flex">
            <div class="" style="margin-right: 5px">
                <a href="" class="btn btn-primary btn-sm py-2 px-3" data-bs-toggle="modal"
                    data-bs-target="#addModal">Tambah</a>
            </div>
            <div class="" style="margin-right: 5px">
                <a href="/rekapitulasi-export" class="btn btn-outline-info btn-sm py-2 px-3">Export Excel</a>
            </div>
            <div class="">
                <button class="btn btn-outline-info btn-sm py-2 px-3" data-bs-toggle="modal"
                    data-bs-target="#importModal">Import Excel</button>
            </div>
        </div>
        <table class="text-center table py-3" id="dataTable">
            <thead>
                <tr class="table-info ">
                    <th class="d-none">id</th>
                    <th class="text-center">#</th>
                    <th class="text-center">No Kartu</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">NPP</th>
                    <th class="text-center">Nama</th>
                    <th class="d-none">Hub Keluarga/th>
                    <th class="d-none">Faskes</th>
                    <th class="text-center">Status</th>
                    <th class="d-none">Alamat</th>
                    <th class="d-none">Kelurahan</th>
                    <th class="d-none">Kecamatan</th>
                    <th class="d-none">Kota</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapitulasi as $data)
                    <tr class="">

                        <td class="d-none">{{ $data->id }}</td>
                        <td class="">{{ $loop->iteration }}</td>
                        <td class="">{{ $data->no_kartu }}</td>
                        <td class="">{{ $data->nik }}</td>
                        <td class="">{{ $data->npp }}</td>
                        <td class="">{{ $data->nama }}</td>
                        <td class="d-none">{{ $data->hub_keluarga }}</td>
                        <td class="d-none">{{ $data->faskes }}</td>
                        <td>
                            <p
                                class="status {{ $data->status_peserta == 'aktif' ? 'badge rounded-pill text-bg-success px-3 py-1' : 'badge rounded-pill text-bg-warning text-white p-1' }}">
                                {{ $data->status_peserta }}
                            </p>
                        </td>

                        <td class="d-none">{{ $data->alamat }}</td>
                        <td class="d-none">{{ $data->kelurahan }}</td>
                        <td class="d-none">{{ $data->kecamatan }}</td>
                        <td class="d-none">{{ $data->kota }}</td>
                        <td class="text-center">
                            <div>
                                <a href="/detail-{{ $data->id }}" style="text-decoration: none"
                                    class="badge rounded-pill bg-primary p-2 "><i class="ri-draft-line"></i></a>
                                <a href="#" style="text-decoration: none"
                                    class="badge rounded-pill bg-primary p-2 edit" data-bs-toggle="modal"
                                    data-bs-target="#editModal"><i class="ri-pencil-line"></i></a>
                                <a href="#" style="text-decoration: none"
                                    class="badge rounded-pill bg-primary p-2 delete" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><i class="ri-delete-bin-7-line"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- end: Main -->

    {{-- start: add modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>

                </div>
                <div class="modal-body">
                    <form action="/" method="post">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 col-4">
                                <label for="no_kartu">No Kartu</label>
                                <input type="text" name="no_kartu" class="form-control" required ">
                            </div>
                            <div class="mb-3 col-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" required">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="npp">NPP</label>
                                <input type="text" name="npp" class="form-control" required">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="hub_keluarga">Hubungan Keluarga</label>
                            <input type="text" name="hub_keluarga" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="faskes">Fasilitas Kesehatan</label>
                            <input type="text" name="faskes" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="status_peserta">Status Peserta</label>
                            <select name="status_peserta" class="form-control">
                                <option value="">pilih</option>
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" required">
                        </div>
                        <div class="mb-3">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" required">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end: add modal --}}

    {{-- start: edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                </div>
                <div class="modal-body">
                    <form action="/edit" method="POST" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 col-4">
                                <label for="no_kartu">No Kartu</label>
                                <input type="text" name="no_kartu" class="form-control" required id="no_kartu">
                            </div>
                            <div class="mb-3 col-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" required id="nik">
                            </div>
                            <div class="mb-3 col-4">
                                <label for="npp">NPP</label>
                                <input type="text" name="npp" class="form-control" required id="npp">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" required id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="hub_keluarga">Hubungan Keluarga</label>
                            <input type="text" name="hub_keluarga" class="form-control" required
                                id="hub_keluarga">
                        </div>
                        <div class="mb-3">
                            <label for="faskes">Fasilitas Kesehatan</label>
                            <input type="text" name="faskes" class="form-control" required id="faskes">
                        </div>
                        <div class="mb-3">
                            <label for="status_peserta">Status Peserta</label>
                            {{-- <input type="text" name="status_peserta" class="form-control" required id="status_peserta"> --}}

                            <select name="status_peserta" class="form-control" id="status_peserta">
                                <option value="">pilih</option>
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required id="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" required id="kelurahan">
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" required id="kecamatan">
                        </div>
                        <div class="mb-3">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" required id="kota">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end: edit modal --}}

    {{-- start: delete modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                </div>
                <form action="/hapus" method="POST" id="deleteForm">
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="_method" value="DELETE">
                        <p>Yakin ingin menghapus data?</p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end: dlete modal --}}

    {{-- start: import modal --}}
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Import Excel</h1>
                </div>
                <form action="/rekapitulasi-import" method="POST" id="deleteForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <input type="file" name="import" id="import" class="form-control">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end: import modal --}}

    <!-- start: JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        let table = $('#dataTable').DataTable();
        $(document).ready(function() {
            // console.log(table);
            table.on('click', '.edit', function() {

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);


                $('#no_kartu').val(data[2]);
                $('#nik').val(data[3]);
                $('#npp').val(data[4]);
                $('#nama').val(data[5]);
                $('#hub_keluarga').val(data[6]);
                $('#faskes').val(data[7]);

                var html = data[8];
                var $p = $(html);
                var text = $p.text();

                $('#status_peserta').val(text.trim());
                $('#alamat').val(data[9]);
                $('#kelurahan').val(data[10]);
                $('#kecamatan').val(data[11]);
                $('#kota').val(data[12]);
                $('#editForm').attr('action', '/edit/' + data[0]);
                $('#editModal').modal('show');
            });

            table.on('click', '.delete', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                // $('#id').val(data[0]);

                $('#deleteForm').attr('action', '/hapus/' + data[0]);
                $('#deleteModal').modal('show');

            });
        });
    </script>


    {{-- edit function --}}
    {{-- edit function --}}

</body>

</html>
