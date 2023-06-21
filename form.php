<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Bootstrap</title>
    <!-- Menggunakan Bootstrap CSS CDN dari jsDelivr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">PTI UMTAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div class="container mt-5">
        <h1>Form Input</h1>
        <form>
            <div class="form-group">
                <label for="fullName">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap" required>
                <div class="invalid-feedback">Nama lengkap tidak boleh kosong.</div>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email" required>
                <div class="invalid-feedback">Alamat email tidak boleh kosong dan harus valid.</div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" minlength="7" required>
                <div class="invalid-feedback">Password minimal 7 karakter.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center mt-5 py-3">
        <p>&copy; 2023 Halaman Web Bootstrap</p>
    </footer>

    <!-- Menggunakan Bootstrap JS CDN dari jsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
