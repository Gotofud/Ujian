<?php
if (isset(($_POST['kirim']))) {
    // Data
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    //  Gaji
    $jabatan = $_POST['jabatan'];
    $lamaKerja = $_POST['lama_kerja'];
    $status = $_POST['status'];
    //  Potongan
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    if ($jabatan == "kepala sekolah") {
        $gaji = 10000000;
    } elseif ($jabatan == "wakasek") {
        $gaji = 7500000;
    } elseif ($jabatan == "guru") {
        $gaji = 5000000;
    } elseif ($jabatan == "karyawan") {
        $gaji = 2500000;
    }

    if ($lamaKerja >= 5 && $waktu == "Tahun") {
        $tunjangan = 1000000;
    } else {
        $tunjangan = 0;
    }

    if ($status == "tetap") {
        $bonus = 500000;
    } else {
        $bonus = 0;
    }
    class gaji
    {
        public $gaji_bersih;

        public function gajiBersih($gaji, $tunjangan, $bonus, $bpjs, $pinjaman, $cicilan, $infaq)
        {
            $this->gaji_bersih = ($gaji + $tunjangan + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);
        }

    }
}

$cetak = new gaji();
$cetak->gajiBersih($gaji, $tunjangan, $bonus, $bpjs, $pinjaman, $cicilan, $infaq);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGGAJIHAN - Yayasan Assalaam</title>
    <link rel="web icon" href="../img/yayasan.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 75.3rem;
        }

        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
        }

        body {
            background-color: whitesmoke;
        }

        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <header class="py-3">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <img src="../img/yayasan.png" class="img-thumbnail" alt="...">
                        <div class="row g-0">
                            <div class="col-sm-6 col-md-8">
                                <h1 class="card-title">STRUK GAJI GURU/KARYAWAN YAYASAN ASSALAAM</h1>
                            </div>
                            <div class="col-6 col-md-4 ms-auto">
                                <div class="form-text mb-2">Sistem Penggajihan Guru/Karyawan Yayasan Assalaam Bandung.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card mx-auto" style="width: 74rem; height:auto">
        <div class="card header bg-success text-white">
            <h4 class="form-title mt-3 mx-4">Struk Gaji</h4>
        </div>
        <table class="m-3">
            <tr>
                <th scope="row">No</th>
                <td>:</td>
                <td><?php echo $no; ?></td>
            </tr>
            <tr>
                <th scope="row">Nama</th>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th scope="row">Unit</th>
                <td>:</td>
                <td><?php echo $unit; ?></td>
            </tr>
            <tr>
                <th scope="row">Tanggal Gajian</th>
                <td>:</td>
                <td><?php echo $tgl; ?></td>
            </tr>
            <tr>
                <th scope="row">Jabatan</th>
                <td>:</td>
                <td><?php echo $jabatan; ?></td>
            </tr>
            <tr>
                <th scope="row">Gaji</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($gaji); ?></td>
            </tr>
            <tr>
                <th scope="row">Lama Kerja</th>
                <td>:</td>
                <td><?php echo $lamaKerja . " " . $waktu; ?></td>
            </tr>
            <tr>
                <th scope="row">Tunjangan</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($tunjangan); ?></td>
            </tr>
            <tr>
                <th scope="row">Bonus</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($bonus); ?></td>
            </tr>
            <tr>
                <th scope="row">BPJS</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($bpjs); ?></td>
            </tr>
            <tr>
                <th scope="row">Pinjaman</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($pinjaman); ?></td>
            </tr>
            <tr>
                <th scope="row">Cicilan</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($cicilan ?? 0); ?></td>
            </tr>
            <tr>
                <th scope="row">Infaq</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($infaq); ?></td>
            </tr>
            <tr>
                <th scope="row">Gaji Bersih</th>
                <td>:</td>
                <td><?php echo "Rp" . number_format($cetak->gaji_bersih ?? 0); ?></td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>