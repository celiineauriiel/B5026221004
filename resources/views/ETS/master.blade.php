<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/pegawai">004</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="/">ETS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tugas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/pegawai">Pegawai</a>
            <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
            <a class="dropdown-item" href="/nilai">Nilai Kuliah</a>
            <a class="dropdown-item" href="/sepeda">Sepeda</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Materi
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/p1">Materi 1</a>
        <a class="dropdown-item" href="/p2a">Materi 2</a>
        <a class="dropdown-item" href="/p2b">Materi 3</a>
        <a class="dropdown-item" href="/p3">Materi 4</a>
        <a class="dropdown-item" href="/p4">Materi 5</a>
        <a class="dropdown-item" href="/p5">Materi 6</a>
        <a class="dropdown-item" href="/p6a">Materi 7</a>
        <a class="dropdown-item" href="/p6b">Materi 8</a>
        <a class="dropdown-item" href="/p7">Materi 9</a>
        <a class="dropdown-item" href="/p8">Materi 10</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>
<br>

<div class="container">
  @yield('konten')
</div>

@include('ETS/footer')
<br>
</body>
</html>
