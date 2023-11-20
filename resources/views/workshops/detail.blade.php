<!DOCTYPE html>
<html>
<head>
    <title>Form Workshops</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail Workshops</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $workshops->nama }}" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="text" class="form-control" id="tanggal" name="tangga" value="{{ $workshops->tanggal }}" readonly>
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
