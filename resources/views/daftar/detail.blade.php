<!DOCTYPE html>
<html>
<head>
    <title>Form Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail Daftar</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="no_peserta">No Peserta :</label>
                <input type="text" class="form-control" id="no_peserta" name="no_peserta" value="{{ $daftar->no_peserta }}" readonly>
            </div>

            <div class="form-group">
                <label for="nama_event">Nama Event :</label>
                <input type="text" class="form-control" id="nama_event" name="nama_event" value="{{ $daftar->nama_event }}" readonly>
            </div>

            <div class="form-group">
                <label for="nama_peserta">Nama Peserta :</label>
                <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="{{ $daftar->nama_peserta }}" readonly>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $daftar->email }}" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal_pendaftaran">Tanggal Pendaftaran</label>
                <input type="text" class="form-control" id="tanggal_pendaftaran" name="tanggal_pendaftaran" value="{{ $daftar->tanggal_pendaftaran }}" readonly>
            </div>

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>
