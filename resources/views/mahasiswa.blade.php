<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/table">Table</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
    <center>
    <h1 style="text-center; font-size:70px; font-weight:400; line-height:90px; 
    font-family: DaulphinPlain;">Halaman Mahasiswa</h1>
    </center>
    <div class = row>
    <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
      <thead>
        <tr>
          <td>NPM</td>
          <td>Nama Mahasiswa</td>
          <td>Jenis Kelamin</td>
          <td colspan="2">TTL</td>
        </tr>
      </thead>
        <tbody>
           @for ($i = 0; $i < $jumlah; $i++)
          <tr>
            <td>{{ $npm[$i] }}</td>
            <td>{{ $nama[$i] }}</td>
            <td>Laki-laki</td>
            <td>Kota Medan</td>
          </tr>
          @endfor
        </tbody>    
    </table>
  </div>
    <div class ="col-sm-6">
      <h4>Form Mahasiswa </h4>
      <form action="" method="GET">
        <div class = "row">
          <div class = "col-sm-6">
            <label for="">NPM</label>
            <input type="number" name = "npm" class = "form-control" placeholder="Input NPM">
          </div>
          <div class = "col-sm-6">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name = "nama" class="form-control" placeholder="Input Nama Mahasiswa">
          </div>
        </div>
        <div class = "row">
          <div class = "col-sm-6">
            <label for="">Tanggal Lahir</label>
            <input type="date" name = "tgl_lahir" class ="form-control">
          </div>
          <div class = "col-sm-6">
            <label for="">Prodi</label>
            <select  name = "prodi" class="form-control">
              <option value="">Sistem Informasi</option>
              <option value="">Teknologi Informasi</option>
              <option value="">Sains Data</option>
            </select>
          </div>
        </div>
        <div class = "row mt-2">
          <div class = "col-sm-12">
            <button class = "btn btn-primary" style="width: 100%" type="submit">Simpan</button>
          </div>
        </div>

      </form>
    </div>
  </header>
   <main> 
 </main>
 <footer class="container bg-light">
  <div class="row">
      <div class="col-12 py-4">
        <p>&copy;   Nama : Anggi Muammar Hanafi<br/>
                    Kelas: A1 TI Pagi<br/>
                    NPM  : 2109020032</p>
      </div>
  </div>
</footer>
</body>
</html>