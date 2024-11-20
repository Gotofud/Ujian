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
                <h1 class="card-title">SISTEM PENGGAJIHAN GURU/KARYAWAN</h1>
              </div>
              <div class="col-6 col-md-4 ms-auto">
                <div class="form-text mb-2">Sistem Penggajihan Guru/Karyawan Yayasan Assalaam Bandung.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <form action="process.php" method="post">
    <div class="card mx-auto" style="width:74rem; height:auto">
      <div class="card header py-1 bg-success text-white">
        <div class="row g-0 mt-3">
          <div class="col-sm-6 col-md-8">
            <h4 class="form-title mx-4">Data Penggajihan</h4>
          </div>
          <div class="col-6 col-md-4">
            <div class="form-text text-white"><span class="text-danger">*</span> Isi Form dibawah ini untuk mengetahui
              gaji anda</div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Data -->
        <div class="mb-3">
          <label for="exampleInputNo1" class="form-label">No</label>
          <input type="number" class="form-control" id="exampleInputNo1" aria-describedby="emailHelp" name="no" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputName1" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Unit Pendidikan</label>
          <select name="unit" class="form-select" required>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="MTS">MTS</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
            <option value="MA">MA</option>
          </select>
        </div>
        <!-- Tanggal Gaji -->
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Tanggal Gaji</label>
          <input type="date" class="form-control" id="exampleInputName1" name="tgl" required>
        </div>
        <!-- Gaji -->
        <div class="row py-4">
          <div class="col">
            <div class="form-header">
              <h2>Gaji</h2>
            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Jabatan</label>
              <select name="jabatan" class="form-select" required>
                <option value="kepala sekolah">Kepala Sekolah</option>
                <option value="wakasek">Wakasek</option>
                <option value="guru">Guru</option>
                <option value="karyawan">Karyawan</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="row">
                <div class="col">
                  <label for="exampleInputName1" class="form-label">Lama Kerja</label>
                  <input type="number" name="lama_kerja" id="" class="form-control" placeholder="Lama Kerja" required>
                </div>
                <div class="col">
                  <label for="exampleInputName1" class="form-label">Tahun/Bulan</label>
                  <select name="waktu" class="form-select" required>
                    <option value="kosong">Pilih Waktu</option>
                    <option value="Bulan">Bulan</option>
                    <option value="Tahun">Tahun</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Status</label>
              <select name="status" class="form-select" required>
                <option value="kosong">Pilih Status</option>
                <option value="Kontrak">Kontrak</option>
                <option value="Tetap">Tetap</option>
              </select>
            </div>
          </div>
          <!-- Potongan -->
          <div class="col">
            <div class="form-header">
              <h2>Potongan</h2>
            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">BPJS</label>
              <input type="Number" class="form-control" id="exampleInputName1" name="bpjs" placeholder="BPJS" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Pinjaman</label>
              <input type="Number" class="form-control" id="exampleInputName1" name="pinjaman" placeholder="Pinjaman" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Cicilan</label>
              <input type="Number" class="form-control" id="exampleInputName1" name="cicilan" placeholder="cicilan" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Infaq</label>
              <input type="Number" class="form-control" id="exampleInputName1" name="infaq" placeholder="Infaq" required>
              <div class="form-text mb-2"><span class="text-danger">*</span>Harap isi semua form, namun bila tidak ada mohon di kosong kan.</div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success" name="kirim">Submit</button>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>