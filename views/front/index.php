<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda Toko Kelontong Madura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>


        .promo-cstm{
            background-color: #54B22C;
            border-radius: 1rem
        }

        .header-container {
            max-width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .cstm{
            background-color: #F3F9FB;
        }

        .logo-part1 {
        color: #54B22C;
        }

        .logo-part2 {
        color: #F8CB47;
        }

        .header-banner {
        height: 20px;
        background-color: #F8CB47;
        }


        .header-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: start;
            color: black;
        }

        .product-card img,
        .promo-card img {
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .stock-info {
            color: #28a745;
            font-weight: bold;
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

        .promo-label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .header-container {
                max-width: 100%;
                padding: 10px;
            }

            .header-image {
                height: 150px;
            }

            .product-card img,
            .promo-card img {
                height: 100px;
            }

            .section-title {
                font-size: 1.2rem;
                margin-bottom: 15px;
            }

            .scrollable-row {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 10px;
                -webkit-overflow-scrolling: touch;
            }

            .scrollable-row .col-6 {
                flex: 0 0 auto;
                width: 30%; 
                max-width: none;
            }

            .scrollable-row .col-6:not(:last-child) {
                margin-right: 15px;
            }
        }
    </style>
</head>

<body>

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

    <div class="header-container">
        <!-- Carousel -->
        <div id="headerCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner.png" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="img/banner2.png" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="img/banner3.png" class="d-block w-100" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <h2 class="section-title">Kategori</h2>
        <div class="row mb-4 scrollable-row">
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/sayurbuah.png" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <p class="product-title">Sayur</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/roti.png" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <p class="product-title">Roti</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/dagingtelur.png" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <p class="product-title">Daging</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/sabun.png" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <p class="product-title">Mandi</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/minuman.png" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <p class="product-title">Minuman</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/jajanan.png" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <p class="product-title">Cemilan</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <h2 class="section-title">Promo Spesial</h2>
        <div class="row mb-4 justify-content-center promo-cstm pt-4">
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card promo-card">
                        <div class="promo-label">40%</div>
                        <img src="img/Promo1.png" class="card-img-top" alt="Promo 1">
                        <div class="card-body cstm">
                            <p class="product-title">B Juice Mixed Fruit - Rp8.000</p>
                            <p class="stock-info">Stok: 30</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card promo-card">
                        <div class="promo-label">50%</div>
                        <img src="img/Promo2.png" class="card-img-top" alt="Promo 2">
                        <div class="card-body cstm">
                            <p class="product-title">Hen White Egg - Rp22.000</p>
                            <p class="stock-info">Stok: 25</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card promo-card">
                        <div class="promo-label">20%</div>
                        <img src="img/Promo3.png" class="card-img-top" alt="Promo 1">
                        <div class="card-body cstm">
                            <p class="product-title">Chocolate Syrup - Rp48.000</p>
                            <p class="stock-info">Stok: 30</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <h2 class="section-title">Produk Populer</h2>
        <div class="row mb-4">
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/Product1.png" class="card-img-top" alt="Produk 7">
                        <div class="card-body cstm">
                            <p class="product-title">Tomato 1kg- Rp18.000</p>
                            <p class="stock-info">Stok: 20</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/Product2.png" class="card-img-top" alt="Produk 7">
                        <div class="card-body cstm">
                            <p class="product-title">B Juice Mixed Fruit - Rp8.000</p>
                            <p class="stock-info">Stok: 20</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/Product3.png" class="card-img-top" alt="Produk 7">
                        <div class="card-body cstm">
                            <p class="product-title">Coconut Water - Rp15.000</p>
                            <p class="stock-info">Stok: 20</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <a href="detail" class="text-decoration-none text-dark">
                    <div class="card product-card">
                        <img src="img/Product4.png" class="card-img-top" alt="Produk 7">
                        <div class="card-body cstm">
                            <p class="product-title">Doritos Cheese - Rp12.000</p>
                            <p class="stock-info">Stok: 20</p>
                            <button class="btn btn-success w-100">Beli</button>
                        </div>
                    </div>
                </a>
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
