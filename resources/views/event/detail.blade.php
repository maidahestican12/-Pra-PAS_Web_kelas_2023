<!DOCTYPE html>
<html>
<head>
    <title>Form Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail Event</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $event->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $event->lokasi }}" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $event->tanggal }}" readonly>
            </div>

            <div class="form-group">
                <label for="jumlah_peserta">Jumlah Peserta:</label>
                <input type="text" class="form-control" id="jumlah_peserta" name="jumlah_peserta" value="{{ $event->jumlah_peserta }}" readonly>
            </div>

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>
