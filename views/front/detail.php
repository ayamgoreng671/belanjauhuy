<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image {
            width: 100%;
            max-width: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        .logo-part1 {
            color: #54B22C;
        }

        .cstm{
            background-color: #F3F9FB;
        }

        .logo-part2 {
            color: #F8CB47;
        }

        .product-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .stock-info {
            color: #28a745;
            font-weight: bold;
        }

        .header-banner {
            height: 20px;
            background-color: #F8CB47;
        }

        .variant-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 10px;
        }

        .variant-list li {
            cursor: pointer;
        }

        .card {
            border: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
        }
        

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        }


        .variant-list img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            transition: transform 0.2s ease;
        }

        .variant-list img:hover {
            transform: scale(1.1);
        }

        .stock-indicator {
            font-weight: bold;
            color: #28a745;
        }

        .note-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }

        @media (max-width: 768px) {
            .note-section {
                margin-top: 20px;
            }

            .purchase-button {
                width: 100%;
                margin-top: 20px;
            }

            .product-card img,
            .promo-card img {
                height: 100px;
            }

        }

        .purchase-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header-banner"></div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><span class="logo-part1">BELA</span><span class="logo-part2">NJA</span></a>
            <div class="auth-buttons">
                <button class="btn btn-success btn-small">Masuk</button>
                <button class="btn btn-outline-success btn-small">Daftar</button>
            </div>
        </div>
    </nav>

    <section class="search-section">
        <form action="" class="d-flex mt-3 justify-content-center" role="search">
            <input type="text" class="form-control me-2 w-50" placeholder="Cari Disini">
            <button class="btn btn-outline-success" type="send">Cari</button>
        </form>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img id="mainProductImage" src="img/Product5.png" alt="Gambar Produk" class="product-image mb-3">
                <h5>Varian Gambar:</h5>
                <ul class="variant-list">
                    <li><img src="img/Product5.png" alt="Varian 1" onclick="changeImage(this)"></li>
                    <li><img src="img/Product6.png" alt="Varian 2" onclick="changeImage(this)"></li>
                    <li><img src="img/Product7.png" alt="Varian 3" onclick="changeImage(this)"></li>
                </ul>
            </div>

            <div class="col-lg-4 mb-4">
                <h3>Doritos - Rp12.000</h3>
                <p>(Doritos/Indiyom/Lays)
                    Berat Bersih : 7 oz (198,4 gram)
                </p>
                <p class="stock-indicator">Sisa Stok: 25</p>
                
                <div class="input-group mb-3">
                    <span class="input-group-text">Jumlah</span>
                    <input type="number" class="form-control" value="1" min="1" max="25" aria-label="Jumlah produk">
                </div>

                <button class="btn btn-primary purchase-button">Beli Sekarang</button>
            </div>

            <div class="col-lg-4">
                <div class="note-section">
                    <h5>Catatan Pengiriman:</h5>
                    <p>Jika Anda menggunakan fasilitas delivery order, pastikan alamat pengiriman Anda lengkap dan benar. Pengiriman akan dilakukan dalam waktu 2-3 hari kerja. Harap siapkan uang tunai yang cukup jika memilih pembayaran di tempat.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h4>Produk Rekomendasi</h4>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="img/Product1.png" class="card-img-top" alt="Produk 1">
                    <div class="card-body cstm">
                        <p class="product-title">Tomato 1kg - Rp18.000</p>
                        <p class="stock-info">Stok: 30</p>
                        <button class="btn btn-success w-100">Beli</button>
                    </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="img/Product2.png" class="card-img-top" alt="Produk 2">
                    <div class="card-body cstm">
                        <p class="product-title">B Juice Mixed Fruit - Rp8.000</p>
                        <p class="stock-info">Stok: 30</p>
                        <button class="btn btn-success w-100">Beli</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="img/Product3.png" class="card-img-top" alt="Produk 3">
                    <div class="card-body cstm">
                        <p class="product-title">Coconut Water - Rp15.000</p>
                        <p class="stock-info">Stok: 30</p>
                        <button class="btn btn-success w-100">Beli</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="img/Product4.png" class="card-img-top" alt="Produk 4">
                    <div class="card-body cstm">
                        <p class="product-title">Doritos - Rp12.000</p>
                        <p class="stock-info">Stok: 30</p>
                        <button class="btn btn-success w-100">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3"><span class="logo-part1">BELA</span><span class="logo-part2">NJA</span></h5>
                    <p>Belanja menyediakan berbagai macam kebutuhan harian Anda dengan harga terbaik dan kualitas terjamin.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Pelayanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Bahan Lengkap</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Layanan Cepat</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Barang Promo</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Produk Populer</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Higienis dan Bersih</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Kontak Kami</h5>
                    <p><i class="bi bi-telephone"></i> +62 812-3456-7890</p>
                    <p><i class="bi bi-envelope"></i> support@belanja.com</p>
                    <div class="d-flex mt-3">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter" style="font-size: 1.5rem;"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube" style="font-size: 1.5rem;"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="mb-0">&copy; 2024 BELANJA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function changeImage(element) {
            const mainImage = document.getElementById('mainProductImage');
            mainImage.src = element.src;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
