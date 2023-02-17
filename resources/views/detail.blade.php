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
            <div class="">
                <h5 class="fw-bold mb-0 me-auto"></h5>
                <img class="navbar-profile-image"
                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Image">
            </div>


        </nav>
    </div>
    <!-- end: Navbar -->

    <!-- start: Content -->
    <div class="card bg-white rounded shadow-sm p-3 mt-3 mx-2">
        <div class="m-3">
            <a href="/">Beranda</a><span> > </span><a href="">Detail</a>
        </div>
        <div class="card">
            <div class="card-header">
                DETAIL DATA
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO KARTU</th>
                            <th>NIK</th>
                            <th>NPP</th>
                            <th>NAMA</th>
                            <th>HUB KELUARGA</th>
                            <th>FASKES TK.1</th>
                            <th>STATUS</th>
                            <th>ALAMAT</th>
                            <th>KELURAHAN</th>
                            <th>KECAMATAN</th>
                            <th>KOTA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td class="">{{ $rekapitulasi->no_kartu }}</td>
                            <td class="">{{ $rekapitulasi->nik }}</td>
                            <td class="">{{ $rekapitulasi->npp }}</td>
                            <td class="">{{ $rekapitulasi->nama }}</td>
                            <td class="">{{ $rekapitulasi->hub_keluarga }}</td>
                            <td class="">{{ $rekapitulasi->faskes }}</td>
                            <td class=""><p
                                class="status {{ $rekapitulasi->status_peserta == 'aktif' ? 'badge rounded-pill text-bg-success px-3 py-1' : 'badge rounded-pill text-bg-warning text-white p-1' }}">
                                {{ $rekapitulasi->status_peserta }}
                            </p>
                        </td>
                            <td class="">{{ $rekapitulasi->alamat }}</td>
                            <td class="">{{ $rekapitulasi->kelurahan }}</td>
                            <td class="">{{ $rekapitulasi->kecamatan }}</td>
                            <td class="">{{ $rekapitulasi->kota }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- end: Main -->



    <!-- start: JS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>


    {{-- edit function --}}
    {{-- edit function --}}

</body>

</html>
