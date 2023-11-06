<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Simadiksi</title>
  </head>
  <nav class="navbar navbar-secondary bg-secondary">
  <div class="container">
  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Profil</a></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </ul>
</div>
  </div>
</nav>
  <body>
  <h3>Data Kegiatan</h3>
    <button class="btn btn-success" type="submit"><a href="/kegiatan/tambah" class="btn btn-black">+ Tambah Kegiatan Baru</a></button>
    <br>
    <br>
    <table border="1" class="table table-bordered">
        <tr>
            <th>Nama Kegiatan</th>
            <th>Tanggal Kegiatan</th>
            <th>Lokasi Kegiatan</th>
            <th>Simbol</th>
        </tr>
        @foreach ($kegiatan as $p)
        <tr>
            <td>{{ $p->nama_kegiatan }}</td>
            <td>{{ $p->tanggal_kegiatan }}</td>
            <td>{{ $p->lokasi_kegiatan }}</td>
            <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
        </tr>
        @endforeach
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>