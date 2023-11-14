<!DOCTYPE html>
<html>
<head>
    <title>Form Workshops</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail Workshopst</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $workshops->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="waktu_mulai">Waktu_mulai:</label>
                <input type="text" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $workshops->waktu_mulai }}" readonly>
            </div>

            <div class="form-group">
                <label for="waktu_selesai">Waktu_selesai:</label>
                <input type="text" class="form-control" id="waktu_selesai" name="waktu_selesai" value="{{ $workshops->waktu_selesai }}" readonly>
            </div>

            <div class="form-group">
                <label for="topik_workshops">Topik Workshops:</label>
                <input type="text" class="form-control" id="topik_workshops" name="topik_workshops" value="{{ $workshops->topik_workshops }}" readonly>
            </div>
            
            <div class="form-group">
                <label for="fasilitator">Fasilitator:</label>
                <input type="text" class="form-control" id="fasilitator" name="fasilitator" value="{{ $workshops->fasilitator }}" readonly>
            </div>

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>
