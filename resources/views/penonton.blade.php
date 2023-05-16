<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ '/' }}">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container">
      <h1 class="mt-5 mb-5">Selamat Datang di Portal Pemesanan Tiket Konser</h1>
      <h4 class="mb-3">Silahkan menginputkan data anda di form di bawah</h4>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama anda">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan email anda">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan no telepon anda">
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>